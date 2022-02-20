<div class="container" style="margin-top: 20px;">
  <div class="col-md-6">
  <?php
      if(!empty($_GET['msg'])){
        $msg = unserialize(urldecode($_GET['msg']));
        foreach($msg as $value){
          echo '<span style="color: red;">'.$value.'</span>';
        }
      }
    ?>
    <h1 style="margin: 15px 0;">Chỉnh sửa thông tin</h1>
    <form action="<?php echo BASE_URL ?>/user_login/edit_profile" method="POST">
      <div class="form-group">
        <label>Tên khách hàng</label>
        <input value="<?php echo $profile[0]['name_customer'] ?>" type="text" name="name" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Password:</label>
        <input required value="<?php echo $profile[0]['password_customer'] ?>" type="password" name="password" class="form-control">
      </div>
      <div class="form-group">
        <label>Số điện thoại:</label>
        <input required value="<?php echo $profile[0]['phone_customer'] ?>" type="text" name="phone" class="form-control">
      </div>
      <div class="form-group">
        <label>Địa chỉ Nhận hàng:</label> <br>
        <input required type="text" value="<?php echo $profile[0]['address_customer'] ?>" name="address" class="form-control">
      </div>
      
      <button type="submit" class="btn btn-default btn-sm">Edit</button>
    </form>
  </div>
</div>
<div class="clear" style="margin-bottom: 20px;"></div>