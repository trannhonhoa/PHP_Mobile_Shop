<h2 class="heading-section">List Order</h2>
<table class="table table-triped data-table ">
    <thead>
        <tr>
            <th>ID</th>
            <th>Mã đơn hàng</th>
            <th>Mã khách hàng</th>
            <th>Status</th>
            <th>Ngày đặt</th>
            <th>Xem chi tiết</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($cart)) :
            $i = 0;
            foreach ($cart as $key => $value) :
        ?>
                <tr>
                    <td><?php echo ++$i ?></td>
                    <td><?php echo $value['code_cart'] ?></td>
                    <td><?php echo $value['code_customer'] ?></td>

                    <?php if ($value['cart_status'] == 0) : ?>
                        <td>
                            <p>Pending...</p>
                        </td>
                    <?php else : ?>
                        <td>
                            <p>Đã giao</p>
                        </td>
                    <?php endif ?>
                    <td><?php echo $value['cart_date'] ?></td>
                    <td><a href="<?php echo BASE_URL ?>/ordered/details/<?php echo $value['cart_id'] ?>">Chi tiết</a> </td>
                </tr>
            <?php endforeach ?>
        <?php endif ?>
    </tbody>
</table>