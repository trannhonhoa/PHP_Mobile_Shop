<h2 class="heading-section">Add Category Post</h2>
  <form action="<?php echo BASE_URL ?>/categorypost/insert_category" method="POST">
    <div class="form-group">
      <label for="uname">Name:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="name" required>
    
    </div>
    <div class="form-group">
      <label for="pwd">Desc:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="desc_normal" required>
      
    </div>
    <button type="submit" class="btn btn-primary btn-submit" name="insert">Submit</button>
  </form>