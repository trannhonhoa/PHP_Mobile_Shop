<h2 class="heading-section">List Category Product</h2>
<table class="table table-striped data-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên danh mục</th>
            <th>Desc</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($category)) :
        $i = 0;
            foreach($category as $key => $value) :    
        ?>
            <tr>
                <td><?php echo ++$i ?></td>
                <td><?php echo $value['title_category_product'] ?></td>
                <td><?php echo $value['desc_category_product'] ?></td>
                <td><a class="btn btn-primary" href="<?php echo BASE_URL ?>/categoryproduct/edit_category/<?php echo $value['id_category_product'] ?>">Edit</a> ||
                <a onclick=" return confirm('Bạn có muốn xóa danh mục này!')"  class="btn btn-danger" href="<?php echo BASE_URL ?>/categoryproduct/delete_category/<?php echo $value['id_category_product'] ?>">Delete</a></td>
            </tr>
            <?php endforeach ?>
        <?php endif ?>
    </tbody>
</table>