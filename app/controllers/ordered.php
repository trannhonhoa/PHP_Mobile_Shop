<?php
require 'Carbon/autoload.php';

use Carbon\Carbon;

class ordered extends DController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->ordered();
    }
    public function ordered()
    {
        $table_cart = "tbl_cart";
        $model = $this->load->model("Public_Model");
        $data['cart'] = $model->select($table_cart);
        $this->load->view("admin/header");
        $this->load->view("admin/menu");
        $this->load->view("admin/ordered", $data);
        $this->load->view("admin/footer");
    }
    public function details($id)
    {
        $table_cart = "tbl_cart_detail, tbl_cart ,tbl_user, tbl_product";
        $cond = "tbl_user.code_customer = tbl_cart.code_customer and tbl_cart.code_cart = tbl_cart_detail.code_cart
        and tbl_cart_detail.product_id = tbl_product.id_product and tbl_cart.cart_id = $id";
        $model = $this->load->model("Public_Model");
        $data['cart_detail'] = $model->select($table_cart, [], $cond);
        $this->load->view("admin/header");
        $this->load->view("admin/menu");
        $this->load->view("admin/detail_ordered", $data);
        $this->load->view("admin/footer");
    }
    public function confirm_ordered($id)
    {
        $table_cart = "tbl_cart";
        $table_cart_detail = "tbl_cart_detail";
        $table_product = "tbl_product";
        $cond = "$table_cart.cart_id = $id";
        $data  = array(
            "cart_status" => 1
        );
        $model = $this->load->model("Public_Model");
        $model->update($table_cart, $data, $cond);

        // liet ke don hang

        $cond_lietke_donhang = "$table_cart_detail.product_id = $table_product.id_product and
        $table_cart_detail.code_cart = $table_cart.code_cart and
        $table_cart.cart_id = $id";
        $result_lietke = $model->select($table_cart_detail . "," . $table_product . "," . $table_cart, [], $cond_lietke_donhang);
        print_r($result_lietke);

        // truy van thong ke
        $now = Carbon::now("Asia/Ho_Chi_Minh")->toDateString();
        $table_thongke = "tbl_thongke";
        $cond_thongke = "ngaydat = '$now'";
        $result_thongke = $model->select($table_thongke, [], $cond_thongke);
        print_r($result_thongke);

        $total = 0;
        $thanhtien = 0;
        foreach ($result_lietke as $key => $value) {
            $total += $value['cart_quantity'];
            $thanhtien += $value['cart_quantity'] * $value['price_product'];
        }
        if (count($result_thongke) <= 0) {
            $data = array(
                "ngaydat" => $now,
                "donhang" => 1,
                "doanhthu" => $thanhtien,
                "soluong" => $total,
            );
            $model->insert($table_thongke, $data);
        } else {
            foreach ($result_thongke as $key => $value) {
                $slb = $value['soluong'] + $total;
                $tongtien = $value['doanhthu'] + $thanhtien;
                $donhang = $value['donhang'] + 1;
                $date_update = array(
                    "donhang" => $donhang,
                    "doanhthu" => $tongtien,
                    "soluong" => $slb,
                );
                $cond_update = "ngaydat = '$now'";
                $model->update($table_thongke, $date_update, $cond_update);
            }
        }
        header("Location: " . BASE_URL . "/ordered");
    }
    public function printer_ordered($id)
    {
        require('tfpdf/tfpdf.php');
        $pdf = new tFPDF('P', 'mm', 'A4');
        $pdf->AddPage("0");
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->AddFont('DejaVu', '', 'DejaVuSansCondensed.ttf', true);
        $pdf->SetFont('DejaVu', '', 14);
        $pdf->Write(10, 'Đơn hàng của bạn gồm có:');
        $pdf->Ln(10);

        $width_cell = array(5, 80, 20, 30, 40);

        $pdf->Cell($width_cell[0], 10, 'ID', 1, 0, 'C', true);
        $pdf->Cell($width_cell[1], 10, 'Tên sản phẩm', 1, 0, 'C', true);
        $pdf->Cell($width_cell[2], 10, 'Số lượng', 1, 0, 'C', true);
        $pdf->Cell($width_cell[3], 10, 'Giá', 1, 0, 'C', true);
        $pdf->Cell($width_cell[4], 10, 'Tổng tiền', 1, 1, 'C', true);
        $pdf->SetFillColor(235, 236, 236);
        $fill = false;
        $i = 0;
        $model = $this->load->model("Public_Model");
        $table = "tbl_cart, tbl_product, tbl_cart_detail ";
        $cond = "tbl_cart_detail.product_id = tbl_product.id_product and tbl_cart_detail.code_cart = tbl_cart.code_cart 
        and tbl_cart.cart_id = $id";
        $row = $model->select($table, [], $cond);
        foreach ($row as $key => $value) {
            $i++;
            $pdf->Cell($width_cell[0], 10, $i, 1, 0, 'C', $fill);
            $pdf->Cell($width_cell[1], 10, $value['title_product'], 1, 0, 'C', $fill);
            $pdf->Cell($width_cell[2], 10, $value['cart_quantity'], 1, 0, 'C', $fill);
            $pdf->Cell($width_cell[3], 10, number_format($value['price_product']), 1, 0, 'C', $fill);
            $pdf->Cell($width_cell[4], 10, number_format($value['cart_quantity'] * $value['price_product']), 1, 1, 'C', $fill);
            $fill = !$fill;
        }
        $pdf->Write(10, 'Cảm ơn bạn đã đặt hàng tại website của chúng tôi.');
        $pdf->Ln(10);
        $pdf->Output();
    }
}
