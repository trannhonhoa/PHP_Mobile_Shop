<?php
class user_login extends DController
{
    public function __construct()
    {

        parent::__construct();
    }
    public function index()
    {
        $this->login();
    }
    public function login()
    {
        $this->load->view("header");
        $this->load->view("user_login");
        $this->load->view("footer");
    }
    public function signup()
    {
        $this->load->view("header");
        $signup_model = $this->load->model("Public_Model");
        $data['tinh'] = $signup_model->select("devvn_tinhthanhpho");
        $this->load->view("user_signup", $data);
        $this->load->view("footer");
    }
    public function dashboard()
    {
        $this->load->view("header");
        $this->load->view("footer");
    }
    public function auth_signup()
    {
        $login_model = $this->load->model("Public_Model");
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address_tinh = $login_model->select("devvn_tinhthanhpho", [], "matp = $_POST[tinh]");
        $address_huyen = $login_model->select("devvn_quanhuyen", [], "maqh = $_POST[quanhuyen]");
        $address_xa = $login_model->select("devvn_xaphuongthitran", [], "xaid = $_POST[xa]");
        $address = $address_tinh[0]['name'] . ", " . $address_huyen[0]['name'] . ", " . $address_xa[0]['name'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $code = md5(time() . $email);

        $email_check = $login_model->select("tbl_user", [], "email_customer = '$email'");
        print_r($email_check);
        if (!empty($email_check)) {
            $message['msg'] = "Email đã tồn tại";
            header("Location: " . BASE_URL . "/user_login/signup?msg=" . urlencode((serialize($message))));
        } else {
            $data = array(
                "name_customer" => $name,
                "phone_customer" => $phone,
                "address_customer" => $address,
                "email_customer" => $email,
                "password_customer" => $password,
                "code_customer" => $code
            );
            $table = "tbl_user";
            $result = $login_model->insert($table, $data);
            if (!empty($result)) {
                // $cond = "tbl_user.email_customer = $email and tbl_user.password_customer = $password)";
                // $user = $login_model->select($table, [], $cond);
                Session::init();
                Session::set("login_user", true);
                Session::set("user_name", $name);
                Session::set("user_code", $code);
                header("Location: " . BASE_URL . "/index");
            }
        }
    }
    public function auth_login()
    {
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $table = "tbl_user";
        $cond = "email_customer = '$email' and password_customer = '$password'";
        $login_model = $this->load->model("Public_Model");
        $result = $login_model->select($table, [], $cond);
        if (!empty($result)) {
            // $cond = "tbl_user.email_customer = $email and tbl_user.password_customer = $password)";
            // $user = $login_model->select($table, [], $cond);

            if (isset($_POST['remember'])) {
                setcookie("email", $email, time() + (86400 * 30), "/");
                setcookie("password", $_POST['password'], time() + (86400 * 30), "/");
            }


            Session::init();
            Session::set("login_user", true);
            Session::set("user_name", $result[0]['name_customer']);
            Session::set("user_code", $result[0]['code_customer']);
            Session::set("user_phone", $result[0]['phone_customer']);
            Session::set("user_email", $result[0]['email_customer']);
            Session::set("user_address", $result[0]['address_customer']);
            header("Location: " . BASE_URL . "/index");
        } else {
            $message['msg'] = "Thông tin không chính xác!";
            header("Location: " . BASE_URL . "/user_login?msg=" . urlencode((serialize($message))));
        }
    }
    public function logout()
    {
        Session::init();
        Session::unset("login_user");
        Session::unset("cart");
        header("Location: " . BASE_URL . "/index");
    }
    public function profile(){
        Session::init();
        $profile_model = $this->load->model('Public_Model');
        $table_user = "tbl_user";
        $data['profile'] = $profile_model->select($table_user, [], " code_customer = '".Session::get("user_code")."' ");


        $this->load->view("header");
        
        $this->load->view("user_update_profile", $data);
        $this->load->view("footer");
    }
    public function edit_profile()
    {
        Session::init();
        $login_model = $this->load->model("Public_Model");
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $password = md5($_POST['password']);


        $data = array(
            "name_customer" => $name,
            "phone_customer" => $phone,
            "address_customer" => $address,      
            "password_customer" => $password,
            
        );
        print_r($data);
        $table = "tbl_user";
        $result = $login_model->update($table, $data, " code_customer = '".Session::get("user_code")."' ");
        if ($result == 1) {
            // $cond = "tbl_user.email_customer = $email and tbl_user.password_customer = $password)";
            // $user = $login_model->select($table, [], $cond);
           
            Session::set("user_name", $name);
            Session::set("user_phone", $phone);
            Session::set("user_address", $address);
            $message['msg'] = "Chỉnh sửa thông tin thành công!";
           
            header("Location: " . BASE_URL . "/user_login/profile?msg=" . urlencode((serialize($message))));
        }
    }
}
