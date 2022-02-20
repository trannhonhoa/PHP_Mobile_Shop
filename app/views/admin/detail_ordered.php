<h2 class="heading-section">Thông tin khách hàng</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Tên</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Địa chỉ</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $cart_detail[0]['name_customer'] ?></td>
            <td><?php echo $cart_detail[0]['phone_customer'] ?></td>
            <td><?php echo $cart_detail[0]['email_customer'] ?></td>
            <td><?php echo $cart_detail[0]['address_customer'] ?></td>
        </tr>
    </tbody>
</table>
<h2>Thông tin chi tiết đơn hàng</h2>
<table class="table table-striped data-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($cart_detail)) :
            $i = 0;
            $total = 0;
            foreach ($cart_detail as $key => $value) :
                $total += $value['cart_quantity'] * $value['price_product'];
        ?>
                <tr>
                    <td><?php echo ++$i ?></td>
                    <td><?php echo $value['title_product'] ?></td>
                    <td><img style="width: 100px;" src="<?php echo BASE_URL?>/public/upload/product/<?php echo $value['image_product'] ?>" alt=""></td>
                    <td><?php echo $value['price_product'] ?></td>
                    <td><?php echo $value['cart_quantity'] ?></td>
                    <td><?php echo number_format($value['cart_quantity'] * $value['price_product'], 0, '.', ',') ?> vnd</td>

                </tr>
            <?php endforeach ?>
            <tr>

                <td style="text-align: right ; color: red;" colspan="6">
                    Thành Tiền: <?php echo number_format($total, 0, '.', ',') ?> vnd
                </td>
            </tr>
            <td style="text-align: right ; color: red;" colspan="6">
                <a href="<?php echo BASE_URL ?>/ordered/confirm_ordered/<?php echo $value['cart_id'] ?>"><button <?php if ($value['cart_status'] == 1)
                                                                                                                        echo "disabled";
                                                                                                                    ?> di class="btn btn-success">Xác nhận</button></a>
            </td>
            <tr>
                <td style="text-align: right ; color: red;" colspan="6">
                    <a href="<?php echo BASE_URL ?>/ordered/printer_ordered/<?php echo $value['cart_id'] ?>"><button class="btn btn-success">In đơn hàng</button></a>
                </td>
            </tr>
        <?php endif ?>
    </tbody>
</table>