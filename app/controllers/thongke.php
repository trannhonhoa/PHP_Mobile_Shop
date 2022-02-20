<?php
require 'Carbon/autoload.php';

use Carbon\Carbon;

class thongke extends DController
{
    public function index()
    {
        if(isset($_POST['time'])){
            $time = $_POST['time'];
        }
        else{
            $time = 365;
        }
       
        $subdays = Carbon::now("Asia/Ho_Chi_Minh")->subdays($time)->toDateString();
        $now = Carbon::now("Asia/Ho_Chi_Minh")->toDateString();
        $table = "tbl_thongke";
        $cond = " ngaydat between '$subdays' and '$now' ";
        $model = $this->load->model("Public_Model");
        $result = $model->select($table);
        $chart_data = array();
        if (count($result) > 0) {
            foreach ($result as $key => $value) {
                $chart_data[] = array(
                    "date" => $value['ngaydat'],
                    "order" => $value['donhang'],
                    "sales" => $value['doanhthu'],
                    'quantity' => $value['soluong']
                );
            }
        }
        // echo '<pre>';
        // print_r($chart_data);
        // echo '<pre>';
        $data = json_encode($chart_data);
        echo $data;
    }
}
