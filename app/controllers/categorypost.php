<?php
    class categorypost extends DController{
        public function __construct()
        {
            Session::checksession();
            parent::__construct();
        }
        public function index(){
            $this->list_post();
        }
        public function list_post(){
            $this->load->view("admin/header");
            $this->load->view("admin/menu");
            $table = "tbl_category_post";

            $categoryproduct_model = $this->load->model("Public_Model");
            $data['category']= $categoryproduct_model->select($table);
            $this->load->view("admin/categorypost/list_category", $data );

            $this->load->view("admin/footer");
        }
        public function edit_category($id){
            $this->load->view("admin/header");
            $this->load->view("admin/menu");
            $table = "tbl_category_post";
            $cond = "tbl_category_post.id_category_post = $id";
            $categoryproduct_model = $this->load->model("Public_Model");
            $data['category']= $categoryproduct_model->select($table,[], $cond);
            $this->load->view("admin/categorypost/edit_category", $data );

            $this->load->view("admin/footer");
        }
        public function update_category($id){
            $name = $_POST['name'];
            $desc = $_POST['desc_normal'];
    
            $table = "tbl_category_post";
            $data  = array(
                "title_category_post" => $name,
                "desc_category_post" => $desc
            );
            $categorypost_model = $this->load->model("Public_Model");
            $cond = "id_category_post = $id";
            $result = $categorypost_model->update($table, $data, $cond);
            if ($result == 1) {
                $message['msg'] = "Thêm thành công";
                header("Location: " . BASE_URL . "/categorypost/list_post?msg=" . urlencode((serialize($message))));
            } else {
                $message['msg'] = " Không thêm được";
                header("Location: " . BASE_URL . "/categorypost/list_post?msg=" . urlencode((serialize($message))));
            }
        }
        public function add_post(){
            $this->load->view("admin/header");
            $this->load->view("admin/menu");
            $this->load->view("admin/categorypost/add_category");
            $this->load->view("admin/footer");
        }
        public function insert_category()
        {
    
            $name = $_POST['name'];
            $desc = $_POST['desc_normal'];
    
            $table = "tbl_category_post";
            $data  = array(
                "title_category_post" => $name,
                "desc_category_post" => $desc
            );
            $categorypost_model = $this->load->model("Public_Model");
            $result = $categorypost_model->insert($table, $data);
            if ($result == 1) {
                $message['msg'] = "Thêm thành công";
                header("Location: " . BASE_URL . "/categorypost/list_post?msg=" . urlencode((serialize($message))));
            } else {
                $message['msg'] = " Không thêm được";
                header("Location: " . BASE_URL . "/categorypost/list_post?msg=" . urlencode((serialize($message))));
            }
        }
        
        public function delete_category($id){
            $table = "tbl_category_post";
            $categoryproduct_model = $this->load->model("Public_Model");
            $cond = "tbl_category_post.id_category_post = $id";
            $result = $categoryproduct_model->delete($table, $cond);
            if ($result == 1) {
                $message['msg'] = "Xóa thành công";
                header("Location: " . BASE_URL . "/categorypost/list_post?msg=" . urlencode((serialize($message))));
            } else {
                $message['msg'] = " Xóa thêm được";
                header("Location: " . BASE_URL . "/categorypost/list_post?msg=" . urlencode((serialize($message))));
            }
        }

    }
?>