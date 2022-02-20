<?php
class categoryproduct extends DController
{
    public function __construct()
    {
        Session::checksession();
        parent::__construct();
    }
    public function index()
    {
        $this->list_category();
    }
    public function list_category()
    {
        $this->load->view("admin/header");
        $this->load->view("admin/menu");
        $table = "tbl_category_product";

        $categoryproduct_model = $this->load->model("Public_Model");
        $data['category'] = $categoryproduct_model->select($table);
        $this->load->view("admin/categoryproduct/list_category", $data);

        $this->load->view("admin/footer");
    }
    public function add_category()
    {
        $this->load->view("admin/header");
        $this->load->view("admin/menu");
        $this->load->view("admin/categoryproduct/add_category");
        $this->load->view("admin/footer");
    }
    public function insert_category()
    {

        $name = $_POST['name'];
        $desc = $_POST['desc_normal'];

        $table = "tbl_category_product";
        $data  = array(
            "title_category_product" => $name,
            "desc_category_product" => $desc
        );
        $categoryproduct_model = $this->load->model("Public_Model");
        $result = $categoryproduct_model->insert($table, $data);
        if ($result == 1) {
            $message['msg'] = "Thêm thành công";
            header("Location: " . BASE_URL . "/categoryproduct/list_category?msg=" . urlencode((serialize($message))));
        } else {
            $message['msg'] = " Không thêm được";
            header("Location: " . BASE_URL . "/categoryproduct/list_category?msg=" . urlencode((serialize($message))));
        }
    }
    public function delete_category($id){
        $table = "tbl_category_product";
        $categoryproduct_model = $this->load->model("Public_Model");
        $cond = "tbl_category_product.id_category_product = $id";
        $result = $categoryproduct_model->delete($table, $cond);
        if ($result == 1) {
            $message['msg'] = "Xóa thành công";
            header("Location: " . BASE_URL . "/categoryproduct/list_category?msg=" . urlencode((serialize($message))));
        } else {
            $message['msg'] = " Xóa thêm được";
            header("Location: " . BASE_URL . "/categoryproduct/list_category?msg=" . urlencode((serialize($message))));
        }
    }
    public function edit_category($id){
        $this->load->view("admin/header");
        $this->load->view("admin/menu");
        $table = "tbl_category_product";
        $cond = "tbl_category_product.id_category_product = $id";
        $categoryproduct_model = $this->load->model("Public_Model");
        $data['category']= $categoryproduct_model->select($table,[], $cond);
        $this->load->view("admin/categoryproduct/edit_category", $data );

        $this->load->view("admin/footer");
    }
    public function update_category($id){
        $name = $_POST['name'];
        $desc = $_POST['desc_normal'];

        $table = "tbl_category_product";
        $data  = array(
            "title_category_product" => $name,
            "desc_category_product" => $desc
        );
        $categorypost_model = $this->load->model("Public_Model");
        $cond = "id_category_product = $id";
        $result = $categorypost_model->update($table, $data, $cond);
        if ($result == 1) {
            $message['msg'] = "Thêm thành công";
            header("Location: " . BASE_URL . "/categoryproduct/list_category?msg=" . urlencode((serialize($message))));
        } else {
            $message['msg'] = " Không thêm được";
            header("Location: " . BASE_URL . "/categoryproduct/list_category    ?msg=" . urlencode((serialize($message))));
        }
    }
}
