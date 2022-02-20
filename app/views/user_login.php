<?php 
  $email = "";
  $password = "";
  $check = false;
  if(isset($_COOKIE['email']) && isset($_COOKIE['password'])){
    $email = $_COOKIE['email'];
    $password = $_COOKIE['password'];
    $check = true;
  }
  
?>
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
    <h1 style="margin: 15px 0;">Đăng nhập</h1>
    <form action="<?php echo BASE_URL ?>/user_login/auth_login" method="POST">
      <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" value="<?php echo $email ?>" class="form-control" name="email" id="email" required>
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" value="<?php echo $password ?>" class="form-control" name="password" id="pwd" required>
      </div>
      <div class="checkbox">
        <label><input 
        <?php if($check) 
            echo "checked";
        ?>
        type="checkbox" name="remember"> Remember me</label>
      </div>
      <button type="submit" class="btn btn-default btn-sm">Login</button>
      <label style="float: right;" for=""><a href="<?php echo BASE_URL ?>/user_login/signup">Chưa có tài khoản?</a></label>
    </form>
  </div>
</div>
<div class="clear" style="margin-bottom: 20px;"></div>