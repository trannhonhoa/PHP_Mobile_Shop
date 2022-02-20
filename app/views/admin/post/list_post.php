<h2 class="heading-section">List Post </h2>
<table class="table table-striped data-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên BV</th>
            <!-- <th>Desc</th> -->
            <th>Image</th>
            <th>Category</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($post)) :
        $i = 0;
            foreach($post as $key => $value) :    
        ?>
            <tr>
                <td><?php echo ++$i ?></td>
                <td><?php echo $value['title_post'] ?></td>
                <!-- <td><?php echo $value['desc_post'] ?></td> -->
                <td><img width="100px" src="<?php echo BASE_URL?>/public/upload/post/<?php echo $value['image_post'] ?>" alt=""></td>
                <td><?php echo $value['title_category_post'] ?></td>
                <td><a class="btn btn-primary" href="<?php echo BASE_URL ?>/post/edit_post/<?php echo $value['id_post'] ?>">Edit</a> ||
                <a  onclick=" return confirm('Bạn có muốn xóa bài viết này!')"  class="btn btn-danger" href="<?php echo BASE_URL ?>/post/delete_post/<?php echo $value['id_post'] ?>">Delete</a></td>
            </tr>
            <?php endforeach ?>
        <?php endif ?>
    </tbody>
</table>