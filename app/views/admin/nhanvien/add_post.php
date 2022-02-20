<h2 class="heading-section">Add Post</h2>
<form action="<?php echo BASE_URL ?>/post/insert_post" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label>Name:</label>
    <input type="text" class="form-control" placeholder="Title" name="title" required>
  </div>
  <div class="form-group">
    <label>Desc:</label>
    <textarea name="desc" class="form-control" id="" cols="30" rows="10"></textarea>
  </div>
  <div class="form-group">
    <label>Image:</label>
    <input type="file" class="form-control" placeholder="Enter Quantity" name="file" required>
  </div>
  <div class="form-group">
    <label>Category:</label>
    <select class="form-control" name="category">
      <?php if (!empty($category)) :
        foreach ($category as $key => $value) :
      ?>
          <option value="<?php echo $value['id_category_post'] ?>"><?php echo $value['title_category_post'] ?></option>
        <?php endforeach ?>
      <?php endif ?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary btn-submit" name="insert">Submit</button>
</form>