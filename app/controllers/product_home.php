<?php
class product_home extends DController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->All_product();
    }
    public function list_product_ByID($id)
    {
        

        $table = "tbl_product, tbl_category_product ";
        $cond = "tbl_product.id_category_product = tbl_category_product.id_category_product
        and tbl_category_product.id_category_product = $id ";
        $model = $this->load->model("Public_Model");
        $data['product'] = $model->select($table, [], $cond);
        // category
        $table_category_product = "tbl_category_product";
        $table_category_post = "tbl_category_post";
        $data['category_product'] = $model->select($table_category_product);
        $data['category_post'] = $model->select( $table_category_post);
        //
        $this->load->view("header", $data);
        $this->load->view("product", $data);
        $this->load->view("footer");
    }
    public function all_product($page = 1)
    {
        if($page == 1){
            $begin = 0;
        }
        else{
            $begin = ($page * 3) - 3;
        }
        $table = "tbl_product, tbl_category_product ";
        $cond = "tbl_product.id_category_product = tbl_category_product.id_category_product limit $begin, 3";
        $model = $this->load->model("Public_Model");
        $data['product'] = $model->select($table, [], $cond);
        // category
        $table_category_product = "tbl_category_product";
        $table_category_post = "tbl_category_post";
        $data['category_product'] = $model->select($table_category_product);
        $data['category_post'] = $model->select( $table_category_post);
        //
        $data['page_index'] = $page;
        $data['product_quantity'] = $model->select("tbl_product");
        $this->load->view("header", $data);
        $this->load->view("list_product", $data);
        $this->load->view("footer");
    }
    public function details($id)
    {
        $table = "tbl_product, tbl_category_product ";
        $cond = "tbl_product.id_category_product = tbl_category_product.id_category_product
        and tbl_product.id_product = $id ";
        $model = $this->load->model("Public_Model");
        $data['product'] = $model->select($table, [], $cond);
        // category
        $table_category_product = "tbl_category_product";
        $table_category_post = "tbl_category_post";
        $data['category_product'] = $model->select($table_category_product);
        $data['category_post'] = $model->select( $table_category_post);
        //
        $id_category_relative = $data['product'][0]['id_category_product'];
        $cond_relative = "tbl_product.id_category_product = tbl_category_product.id_category_product
        and tbl_category_product.id_category_product = $id_category_relative ";
        $data['product_relative'] = $model->select($table, [], $cond_relative);
        $this->load->view("header", $data);
        $this->load->view("product_details", $data);
        $this->load->view("footer");
    }
    public function search(){
        $search = $_GET['search'];
        $model = $this->load->model("Public_Model");
        $table_category_product = "tbl_category_product";
        $table_category_post = "tbl_category_post";
        $data['category_product'] = $model->select($table_category_product);
        $data['category_post'] = $model->select( $table_category_post);

        $table_product = "tbl_product";
        $cond = "$table_product.title_product like '%$search%'";
        $data['product'] = $model->select($table_product, [], $cond);


        $this->load->view("header", $data);
        $this->load->view("search", $data);
        $this->load->view("footer");
    }
}
