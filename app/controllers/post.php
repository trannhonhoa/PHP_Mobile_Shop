<?php
class post extends DController
{
    public function __construct()
    {
        Session::checksession();
        parent::__construct();
    }
    public function index()
    {
        $this->list_post();
    }
    public function list_post()
    {
        $this->load->view("admin/header");
        $this->load->view("admin/menu");
        $table = "tbl_post, tbl_category_post ";
        $cond = "tbl_post.id_category_post = tbl_category_post.id_category_post";
        $categorypost_model = $this->load->model("Public_Model");
        $data['post'] = $categorypost_model->select($table, [], $cond);
        $this->load->view("admin/post/list_post", $data);
        $this->load->view("admin/footer");
    }
    public function add_post()
    {
        $table = "tbl_category_post";

        $categoryproduct_model = $this->load->model("Public_Model");
        $data['category'] = $categoryproduct_model->select($table);
        $this->load->view("admin/header");
        $this->load->view("admin/menu");
        $this->load->view("admin/post/add_post", $data);
        $this->load->view("admin/footer");
    }
    public function insert_post()
    {

        $name = $_POST['title'];
        $desc = $_POST['desc'];
        $image = $_FILES['file']['name'];
        $image_tmp = $_FILES['file']['tmp_name'];
        $image = time() . $image;
        $upload_path = "public/upload/post/$image";
        $category = $_POST['category'];

        $table = "tbl_post";
        $data  = array(
            "title_post" => $name,
            "desc_post" => $desc,
            "image_post" => $image,
            "id_category_post" => $category,
        );
        $post_model = $this->load->model("Public_Model");
        $result = $post_model->insert($table, $data);
        if ($result == 1) {
            move_uploaded_file($image_tmp, $upload_path);
            $message['msg'] = "Thêm thành công";
            header("Location: " . BASE_URL . "/post/list_post?msg=" . urlencode((serialize($message))));
        } else {
            $message['msg'] = " Không thêm được";
            header("Location: " . BASE_URL . "/post/list_post?msg=" . urlencode((serialize($message))));
        }
    }
    public function delete_post($id)
    {
        $table = "tbl_post";
        $post_model = $this->load->model("Public_Model");
        $cond = "tbl_post.id_post = $id";
        $post_fetch = $post_model->select($table, [], $cond);
        if ($post_fetch[0]['image_post']) {
            unlink('public/upload/post/' . $post_fetch[0]['image_post']);
        }
        $result = $post_model->delete($table, $cond);
        if ($result == 1) {

            $message['msg'] = "Xóa thành công";
            header("Location: " . BASE_URL . "/post/list_post?msg=" . urlencode((serialize($message))));
        } else {
            $message['msg'] = " Xóa thêm được";
            header("Location: " . BASE_URL . "/post/list_post?msg=" . urlencode((serialize($message))));
        }
    }
    public function edit_post($id)
    {
        $this->load->view("admin/header");
        $this->load->view("admin/menu");
        $table = "tbl_post";
        $cond = "tbl_post.id_post = $id";
        $post_model = $this->load->model("Public_Model");
        $data['post'] = $post_model->select($table, [], $cond);

        $table = "tbl_category_post";
        $categorypost_model = $this->load->model("Public_Model");
        $data['category'] = $categorypost_model->select($table);

        $this->load->view("admin/post/edit_post", $data);

        $this->load->view("admin/footer");
    }
    public function update_post($id)
    {

        $name = $_POST['title'];
        $desc = $_POST['desc'];
        $image = $_FILES['file']['name'];
        $image_tmp = $_FILES['file']['tmp_name'];
        $image = time() . $image;
        $upload_path = "public/upload/post/$image";
        $category = $_POST['category'];

        $table = "tbl_post";
        $cond = "tbl_post.id_post = $id";
        $post_model = $this->load->model("Public_Model");
        if ($_FILES['file']['name']) {
            $post_fetch = $post_model->select($table, [], $cond);
            if ($post_fetch[0]['image_post']) {
                unlink('public/upload/post/' . $post_fetch[0]['image_post']);
            }
            $data  = array(
                "title_post" => $name,
                "desc_post" => $desc,
                "image_post" => $image,
                "id_category_post" => $category,
            );
            move_uploaded_file($image_tmp, $upload_path);
        }
        else{
            $data  = array(
                "title_post" => $name,
                "desc_post" => $desc,
                "id_category_post" => $category,
            );
        }

     
        $result = $post_model->update($table, $data, $cond);
        if ($result == 1) {
            $message['msg'] = "Thêm thành công";
            header("Location: " . BASE_URL . "/post/list_post?msg=" . urlencode((serialize($message))));
        } else {
            $message['msg'] = " Không thêm được";
            header("Location: " . BASE_URL . "/post/list_post?msg=" . urlencode((serialize($message))));
        }
    }
}
