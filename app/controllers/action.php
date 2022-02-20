<?php


class action extends DController
{
    public function index()
    {
        $model = $this->load->model("Public_Model");

        if(isset($_POST['id_tinh'])){
           $id_tinh = $_POST['id_tinh'];
           $cond = "matp = $id_tinh";
            $row = $model->select("devvn_quanhuyen", [], $cond);
            $quanhuyen = '<option value="">--Huyện--</option>';
            foreach($row as $value){
                $quanhuyen .= '
            <option value='.$value['maqh'].'>'.$value['name'].'
               
            </option>
            
        ';
            }
            echo $quanhuyen;
       }
       if(isset($_POST['id_huyen'])){
        $id_huyen = $_POST['id_huyen'];
        $cond = "maqh = $id_huyen";
         $row = $model->select("devvn_xaphuongthitran", [], $cond);
         $xa = ' <option value="">--Xã--</option>';
         foreach($row as $value){
             $xa .= '
         <option value='.$value['xaid'].'>'.$value['name'].'
            
         </option>
     ';
         }
         echo $xa;
    }
    }
}
