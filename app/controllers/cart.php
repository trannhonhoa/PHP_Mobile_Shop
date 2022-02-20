<?php
class cart extends DController
{
    public function __construct()
    {

        parent::__construct();
    }
    public function index()
    {
        $this->cart();
    }
    public function cart()
    {

        $model = $this->load->model("Public_Model");
        // category
        $table_category_product = "tbl_category_product";
        $table_category_post = "tbl_category_post";
        $data['category_product'] = $model->select($table_category_product);
        $data['category_post'] = $model->select($table_category_post);
        //
        $this->load->view("header", $data);
        $this->load->view("step_giohang");
        $this->load->view("cart");
        $this->load->view("footer");
    }
    public function add_cart()
    {
        $id = $_POST['id'];
        $quantity = $_POST['quantity'];
        $table_product = "tbl_product";
        $model = $this->load->model("Public_Model");
        $cond_pr = "$table_product.id_product = $id";
        $product_ret = $model->select($table_product, [], $cond_pr);

        if($quantity > $product_ret[0]['quantity_product']){
            $message['msg'] = "Số lượng không đủ";
            header("Location: ".BASE_URL."/product_home/details/$id?msg=".urlencode((serialize($message))));
        }
        else{
            if (!empty($product_ret)) {
                $title = $product_ret[0]['title_product'];
                $price = $product_ret[0]['price_product'];
                $image = $product_ret[0]['image_product'];
    
                $new_cart = array(
                    "id_product" => $id,
                    "title_product" => $title,
                    "price_product" => $price,
                    "image_product" => $image,
                    "quantity_product" => $quantity
                );
                Session::init();
                if (Session::get("cart") == true) {
                    $flag = 0;
                    foreach (Session::get("cart") as $key => $value) {
                        if ($_SESSION['cart'][$key]["id_product"] == $id) {
                            ++$_SESSION['cart'][$key]["quantity_product"];
                            $flag++;
                        }
                    }
                    if ($flag == 0) {
                        $_SESSION['cart'][] = $new_cart;
                    }
                } else {
                    $_SESSION['cart'][] = $new_cart;
                }
                header("Location: " . BASE_URL . "/cart");
            }
        }

        
    }
    public function delete_cart($id)
    {
        Session::init();
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($_SESSION['cart'][$key]['id_product'] == $id) {
                unset($_SESSION['cart'][$key]);
            }
        }
        header("Location: " . BASE_URL . "/cart");
    }
    public function minus($id)
    {
        Session::init();
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($_SESSION['cart'][$key]['id_product'] == $id) {
                --$_SESSION['cart'][$key]['quantity_product'];
                if ($_SESSION['cart'][$key]['quantity_product'] < 1) {
                    $this->delete_cart($id);
                }
            }
        }
        header("Location: " . BASE_URL . "/cart");
    }
    public function plus($id)
    {
        Session::init();
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($_SESSION['cart'][$key]['id_product'] == $id) {
                ++$_SESSION['cart'][$key]['quantity_product'];
                if ($_SESSION['cart'][$key]['quantity_product'] < 1) {
                    $this->delete_cart($id);
                }
            }
        }
        header("Location: " . BASE_URL . "/cart");
    }
    public function cartconfirm()
    {
        $this->load->view("header");
        $this->load->view("step_thanhtoan");
        $this->load->view("cartconfirm");
        $this->load->view("footer");
    }
    public function user_order()
    {
        Session::init();
        require("email/sendmail.php");

        $table_cart = "tbl_cart";
        $table_cart_detail = "tbl_cart_detail";
        $model = $this->load->model("Public_Model");
        $code_cart = md5(time());
        $data_cart = array(
            "code_cart" => $code_cart,
            "code_customer" => Session::get("user_code"),
            "cart_status" => 0
        );
        $result_cart = $model->insert($table_cart, $data_cart);
        if($result_cart == 1){
            foreach($_SESSION['cart'] as $key => $value){
                $data_cart_detail = array(
                    "code_cart" => $code_cart,
                    "product_id" => $_SESSION['cart'][$key]['id_product'],
                    "cart_quantity" => $_SESSION['cart'][$key]['quantity_product']
                );
                $model->insert($table_cart_detail, $data_cart_detail);
            }
            $mail = new Mailer();
            $title = "Đặt hàng website thành công";
            $content = "<p>Cảm ơn quý khách đã đặt hàng</p>
                        <p>Mã đơn hàng: $code_cart</p>
            ";
            $user_mail = "user@gmail.com";
            $mail->ordermail($title, $content, $user_mail);
            unset($_SESSION['cart']);
            header("Location: ".BASE_URL.'/cart/success');
          
        }
    }
    public function success(){
        $this->load->view("header");
        $this->load->view("success");
        $this->load->view("footer");
    }
    public function ordered(){
        Session::init();
        $model = $this->load->model("Public_Model");
        $table_category_product = "tbl_category_product";
        $table_category_post = "tbl_category_post";
        $data['category_product'] = $model->select($table_category_product);
        $data['category_post'] = $model->select( $table_category_post);
        

        $table_ordered = "tbl_cart, tbl_cart_detail, tbl_product";
        $cond = "tbl_cart.code_cart = tbl_cart_detail.code_cart 
        and tbl_cart_detail.product_id = tbl_product.id_product
        and tbl_cart.code_customer = '$_SESSION[user_code]'";
        $data['ordered'] = $model->select($table_ordered, [], $cond);
        $this->load->view("header", $data);
        $this->load->view("ordered", $data);  
        $this->load->view("footer");
    }
}
