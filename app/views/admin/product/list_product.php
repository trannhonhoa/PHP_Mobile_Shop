<h2 class="heading-section">List Category Product</h2>
<table class="table table-striped data-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên SP</th>
            <th>Desc</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Image</th>
            <th>Category</th>
            <!-- <th>Hot</th> -->
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($product)) :
        $i = 0;
            foreach($product as $key => $value) :    
        ?>
            <tr>
                <td><?php echo ++$i ?></td>
                <td><?php echo $value['title_product'] ?></td>
                <td><?php echo $value['desc_product'] ?></td>
                <td><?php echo $value['price_product'] ?></td>
                <td><?php echo $value['quantity_product'] ?></td>
                <td><img width="100px" src="<?php echo BASE_URL?>/public/upload/product/<?php echo $value['image_product'] ?>" alt=""></td>
                <td><?php echo $value['title_category_product'] ?></td>
                <!-- <td><?php echo $value['product_hot'] ?></td> -->

                <td><a class="btn btn-primary" href="<?php echo BASE_URL ?>/product/edit_product/<?php echo $value['id_product'] ?>">Edit</a> ||
                <a  onclick=" return confirm('Bạn có muốn xóa sản phẩm này!')"  class="btn btn-danger" href="<?php echo BASE_URL ?>/product/delete_product/<?php echo $value['id_product'] ?>">Delete</a></td>
            </tr>
            <?php endforeach ?>
        <?php endif ?>
    </tbody>
</table>