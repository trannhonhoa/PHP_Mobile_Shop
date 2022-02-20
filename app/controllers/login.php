<?php
    class login extends DController{
        public function __construct()
        {
            parent::__construct();
        }
        public function index(){
           $this->login();
        }
        public function login(){
            $this->load->view("admin/login");
        }
        public function dashboard(){
            Session::checksession();
            $tbl_thongke = "tbl_thongke";
            $tbl_user = "tbl_user";
            $thongke = $this->load->model("Public_Model");
            $data['thongke'] = $thongke->select($tbl_thongke);

            $data['user'] = $thongke->select($tbl_user);

            $this->load->view("admin/header");
            $this->load->view("admin/menu");
            $this->load->view("admin/dashboard", $data);
            $this->load->view("admin/footer");
        }
        public function auth(){
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $table = "tbl_admin";
            $cond = "username = '$username' and password = '$password'";
            $login_model = $this->load->model("Public_Model");
            $result = $login_model->select($table, [], $cond);
            if(!empty($result)){
                Session::init();
                Session::set("login", true);
                Session::set("admin_name", $result[0]['username']);
                header("Location: ".BASE_URL."/login/dashboard");
            }
            else{
                header("Location: ".BASE_URL."/login");
            }
        }
    }
