<?php
class index extends DController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->homepage();
    }
    public function homepage()
    {
        $table_category_product = "tbl_category_product";
        $table_category_post = "tbl_category_post";
        $model = $this->load->model("Public_Model");
        $data['category_product'] = $model->select($table_category_product);
        $data['category_post'] = $model->select($table_category_post);
        $table_product = "tbl_product";
        $table_post = "tbl_post";
        $table_cat_post = "$table_category_post, $table_post";
        $cond_post = "$table_category_post.id_category_post = $table_post.id_category_post";
        $table = "$table_category_product, $table_product";
        $cond = "$table_category_product.id_category_product = $table_product.id_category_product ";
        $data['product'] = $model->select($table, [], $cond);
        $data['post'] = $model->select($table_cat_post, [], $cond_post);
        $this->load->view("header", $data);
        $this->load->view("slider", $data);
        $this->load->view("home", $data);
        $this->load->view("footer");
    }
    public function error()
    {
        echo "ERROR 404";
    }
    public function contact(){
        $table_category_product = "tbl_category_product";
        $table_category_post = "tbl_category_post";
        $model = $this->load->model("Public_Model");
        $data['category_product'] = $model->select($table_category_product);
        $data['category_post'] = $model->select($table_category_post);
        $this->load->view("header", $data);
        $this->load->view("contact");
        $this->load->view("footer");
    }
}
