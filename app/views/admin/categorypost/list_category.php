<h2>List Category Post</h2>
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
                <td><?php echo $value['title_category_post'] ?></td>
                <td><?php echo $value['desc_category_post'] ?></td>
                <td><a class="btn btn-primary" href="<?php echo BASE_URL ?>/categorypost/edit_category/<?php echo $value['id_category_post'] ?>">Edit</a> ||
                <a onclick="return confirm('Bạn có muốn xóa danh mục này!')" class="btn btn-danger" href="<?php echo BASE_URL ?>/categorypost/delete_category/<?php echo $value['id_category_post'] ?>">Delete</a></td>
            </tr>
            <?php endforeach ?>
        <?php endif ?>
    </tbody>
</table>