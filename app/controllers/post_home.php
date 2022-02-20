<?php
class post_home extends DController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->all_post();
    }
    public function list_post_ByID($id)
    {
        

        $table = "tbl_post, tbl_category_post ";
        $cond = "tbl_post.id_category_post = tbl_category_post.id_category_post
        and tbl_category_post.id_category_post = $id ";
        $model = $this->load->model("Public_Model");
        $data['post'] = $model->select($table, [], $cond);
        // category
        $table_category_product = "tbl_category_product";
        $table_category_post = "tbl_category_post";
        $data['category_product'] = $model->select($table_category_product);
        $data['category_post'] = $model->select( $table_category_post);
        //
        $this->load->view("header", $data);
        $this->load->view("post", $data);
        $this->load->view("footer");
    }
    public function all_post()
    {
        $table = "tbl_post, tbl_category_post ";
        $cond = "tbl_post.id_category_post = tbl_category_post.id_category_post";
        $model = $this->load->model("Public_Model");
        $data['post'] = $model->select($table, [], $cond);
        // category
        $table_category_product = "tbl_category_product";
        $table_category_post = "tbl_category_post";
        $data['category_product'] = $model->select($table_category_product);
        $data['category_post'] = $model->select( $table_category_post);
        //
        $this->load->view("header", $data);
        $this->load->view("list_post", $data);
        $this->load->view("footer");
    }
    public function details($id)
    {
        

        $table = "tbl_post, tbl_category_post ";
        $cond = "tbl_post.id_category_post = tbl_category_post.id_category_post
        and tbl_post.id_post = $id ";
        $model = $this->load->model("Public_Model");
        $data['post'] = $model->select($table, [], $cond);
        // category
        $table_category_product = "tbl_category_product";
        $table_category_post = "tbl_category_post";
        $data['category_product'] = $model->select($table_category_product);
        $data['category_post'] = $model->select( $table_category_post);
        //
        $this->load->view("header", $data);
        $this->load->view("post_details", $data);
        $this->load->view("footer");
    }
}
