<?php
class product extends DController
{
    public function __construct()
    {
        Session::checksession();
        parent::__construct();
    }
    public function index()
    {
        $this->list_product();
    }
    public function list_product()
    {
        $this->load->view("admin/header");
        $this->load->view("admin/menu");
        $table = "tbl_product, tbl_category_product ";
        $cond = "tbl_product.id_category_product = tbl_category_product.id_category_product";
        $categoryproduct_model = $this->load->model("Public_Model");
        $data['product'] = $categoryproduct_model->select($table, [], $cond);
        $this->load->view("admin/product/list_product", $data);
        $this->load->view("admin/footer");
    }
    public function add_product()
    {
        $table = "tbl_category_product";

        $categoryproduct_model = $this->load->model("Public_Model");
        $data['category'] = $categoryproduct_model->select($table);
        $this->load->view("admin/header");
        $this->load->view("admin/menu");
        $this->load->view("admin/product/add_product", $data);
        $this->load->view("admin/footer");
    }
    public function insert_product()
    {

        $name = $_POST['title'];
        $desc = $_POST['desc'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $image = $_FILES['file']['name'];
        $image_tmp = $_FILES['file']['tmp_name'];
        $image = time() . $image;
        $upload_path = "public/upload/product/$image";
        $category = $_POST['category'];
        $product_hot = $_POST['product_hot'];

        $table = "tbl_product";
        $data  = array(
            "title_product" => $name,
            "desc_product" => $desc,
            "price_product" => $price,
            "quantity_product" => $quantity,
            "image_product" => $image,
            "id_category_product" => $category,
            "product_hot" => $product_hot
        );
        $product_model = $this->load->model("Public_Model");
        $result = $product_model->insert($table, $data);
        if ($result == 1) {
            move_uploaded_file($image_tmp, $upload_path);
            $message['msg'] = "Thêm thành công";
            header("Location: " . BASE_URL . "/product/list_product?msg=" . urlencode((serialize($message))));
        } else {
            $message['msg'] = " Không thêm được";
            header("Location: " . BASE_URL . "/product/list_product?msg=" . urlencode((serialize($message))));
        }
    }
    public function delete_product($id)
    {
        $table = "tbl_product";
        $product_model = $this->load->model("Public_Model");
        $cond = "tbl_product.id_product = $id";
        $product_fetch = $product_model->select($table, [], $cond);
        if ($product_fetch[0]['image_product']) {
            unlink('public/upload/product/' . $product_fetch[0]['image_product']);
        }
        $result = $product_model->delete($table, $cond);
        if ($result == 1) {

            $message['msg'] = "Xóa thành công";
            header("Location: " . BASE_URL . "/product/list_product?msg=" . urlencode((serialize($message))));
        } else {
            $message['msg'] = " Xóa thêm được";
            header("Location: " . BASE_URL . "/product/list_product?msg=" . urlencode((serialize($message))));
        }
    }
    public function edit_product($id)
    {
        $this->load->view("admin/header");
        $this->load->view("admin/menu");
        $table = "tbl_product";
        $cond = "tbl_product.id_product = $id";
        $product_model = $this->load->model("Public_Model");
        $data['product'] = $product_model->select($table, [], $cond);

        $table = "tbl_category_product";
        $categoryproduct_model = $this->load->model("Public_Model");
        $data['category'] = $categoryproduct_model->select($table);

        $this->load->view("admin/product/edit_product", $data);

        $this->load->view("admin/footer");
    }
    public function update_product($id)
    {

        $name = $_POST['title'];
        $desc = $_POST['desc'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $image = $_FILES['file']['name'];
        $image_tmp = $_FILES['file']['tmp_name'];
        $image = time() . $image;
        $upload_path = "public/upload/product/$image";
        $category = $_POST['category'];
        $product_hot = $_POST['product_hot'];

        $table = "tbl_product";
        $cond = "tbl_product.id_product = $id";
        $product_model = $this->load->model("Public_Model");
        if ($_FILES['file']['name']) {
            $product_fetch = $product_model->select($table, [], $cond);
            if ($product_fetch[0]['image_product']) {
                unlink('public/upload/product/' . $product_fetch[0]['image_product']);
            }
            $data  = array(
                "title_product" => $name,
                "desc_product" => $desc,
                "price_product" => $price,
                "quantity_product" => $quantity,
                "image_product" => $image,
                "id_category_product" => $category,
                "product_hot" => $product_hot
            );
            move_uploaded_file($image_tmp, $upload_path);
        }
        else{
            $data  = array(
                "title_product" => $name,
                "desc_product" => $desc,
                "price_product" => $price,
                "quantity_product" => $quantity,
                "id_category_product" => $category,
                "product_hot" => $product_hot
            );
        }

     
        $result = $product_model->update($table, $data, $cond);
        if ($result == 1) {
            $message['msg'] = "Thêm thành công";
            header("Location: " . BASE_URL . "/product/list_product?msg=" . urlencode((serialize($message))));
        } else {
            $message['msg'] = " Không thêm được";
            header("Location: " . BASE_URL . "/product/list_product?msg=" . urlencode((serialize($message))));
        }
    }
}
