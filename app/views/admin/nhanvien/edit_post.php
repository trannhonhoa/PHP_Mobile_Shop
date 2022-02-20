<h2 class="heading-section">Edit Product</h2>
<?php if(!empty($post)) : 
    foreach($post as $value_post):    
?>
    <form action="<?php echo BASE_URL ?>/post/update_post/<?php echo $value_post['id_post'] ?>" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label>Name:</label>
    <input type="text" value="<?php echo $value_post['title_post'] ?>" class="form-control" placeholder="Title" name="title" required>
  </div>
  <div class="form-group">
    <label>Desc:</label>
    <textarea name="desc" class="form-control"  id="" cols="30" rows="10"><?php echo $value_post['desc_post'] ?></textarea>
  </div>
  <div class="form-group">
    <label>Image:</label>
    <input type="file" class="form-control" placeholder="Enter Quantity" name="file">
    <img width="100px" src="<?php echo BASE_URL?>/public/upload/post/<?php echo $value_post['image_post'] ?>" alt="picture">
  </div>
  <div class="form-group">
    <label>Category:</label>
    <select class="form-control" name="category">
      <?php if (!empty($category)) :
        foreach ($category as $key => $value) :
      ?>
          <option
            <?php if($value['id_category_post'] == $value_post['id_category_post']) {
                echo "selected";
            }?>
           value="<?php echo $value['id_category_post'] ?>"><?php echo $value['title_category_post'] ?></option>
        <?php endforeach ?>
      <?php endif ?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary btn-submit" name="insert">Submit</button>
</form>
<?php endforeach ?>
<?php endif ?>