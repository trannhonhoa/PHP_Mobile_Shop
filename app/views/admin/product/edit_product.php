<h2>Edit Product</h2>
<?php if(!empty($product)) : 
    foreach($product as $value_product):    
?>
    <form action="<?php echo BASE_URL ?>/product/update_product/<?php echo $value_product['id_product'] ?>" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label>Name:</label>
    <input type="text" value="<?php echo $value_product['title_product'] ?>" class="form-control" placeholder="Title" name="title" required>
  </div>
  <div class="form-group">
    <label>Desc:</label>
    <textarea name="desc" class="form-control"  id="" cols="30" rows="10"><?php echo $value_product['desc_product'] ?></textarea>
  </div>
  <div class="form-group">
    <label>Price:</label>
    <input type="text" value="<?php echo $value_product['price_product'] ?>" class="form-control" placeholder="Enter Price" name="price" required>
  </div>
  <div class="form-group">
    <label>Quantity:</label>
    <input type="text" value="<?php echo $value_product['quantity_product'] ?>" class="form-control" placeholder="Enter Quantity" name="quantity" required>
  </div>
  <div class="form-group">
    <label>Image:</label>
    <input type="file" class="form-control" placeholder="Enter Quantity" name="file">
    <img src="<?php echo BASE_URL?>/public/upload/product/<?php echo $value_product['image_product'] ?>" alt="picture">
  </div>
  <div class="form-group">
    <label>Category:</label>
    <select class="form-control" name="category">
      <?php if (!empty($category)) :
        foreach ($category as $key => $value) :
      ?>
          <option
            <?php if($value['id_category_product'] == $value_product['id_category_product']) {
                echo "selected";
            }?>
           value="<?php echo $value['id_category_product'] ?>"><?php echo $value['title_category_product'] ?></option>
        <?php endforeach ?>
      <?php endif ?>
    </select>
  </div>
  <div class="form-group">
    <label>Hot:</label>
    <select name="product_hot" class="form-control">
      <option value="1">Hot</option>
      <option value="0">No</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary btn-submit" name="insert">Submit</button>
</form>
<?php endforeach ?>
<?php endif ?>