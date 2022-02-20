<div class="container">
    <div class="content_text">
        <div class="container_table">
            <table class="table table-hover table-condensed">
                <thead>
                    <tr class="tr tr_first">
                        <th>Hình ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th style="width:100px;">Số lượng</th>
                      
                        <th>Thành tiền</th>
                        <th style="width:100px;">Xử lý</th>
                        <th style="width:50px; text-align:center;"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    if (!empty($ordered)) :
                        $total = 0;
                        foreach ($ordered as $key => $value) :
                            $total += ($value['price_product'] * $value['cart_quantity']);
                    ?>
                            <form action='./gio-hang/' method="post">
                                <tr class="tr">
                                    <td data-th="Hình ảnh">
                                        <div class="col_table_image col_table_hidden-xs"><img src="<?php echo BASE_URL ?>/public/upload/product/<?php echo $value['image_product'] ?>" alt="Máy in laser Canon LBP251DW" class="img-responsive" /></div>
                                    </td>
                                    <td data-th="Sản phẩm">
                                        <div class="col_table_name">
                                            <h4 class="nomargin"><?php echo $value['title_product'] ?></h4>
                                        </div>
                                    </td>
                                    <td data-th="Giá"><span class="color_red font_money"><?php echo number_format($value['price_product'], 0, '.', ',') ?> đ</span></td>
                                    <td data-th="Số lượng">
                                        <div class="clear margintop5">
                                            <form action="">
                                                <div style="display: flex; align-items: center;">
                                                    <!-- <a href="<?php echo BASE_URL ?>/cart/minus/<?php echo $value['id_product'] ?>"><i class="fa fa-minus"></i></a> -->
                                                    <input style="margin: 0 10px;" type="number" class="inputsoluong" min="0" name="qty[576]" value="<?php echo $value['cart_quantity'] ?>" readonly>
                                                    <!-- <a href="<?php echo BASE_URL ?>/cart/plus/<?php echo $value['id_product'] ?>"><i class="fa fa-plus"></i></a> -->
                                                </div>
                                            </form>
                                        </div>
                                        <div class="clear"></div>
                                    </td>
                                    <td data-th="Thành tiền" class="text_center"><span class="color_red font_money"><?php echo number_format(($value['price_product'] * $value['cart_quantity']), 0, '.', ',') ?> đ</span></td>
                                    <!-- <td class="actions aligncenter" data-th="">
                                                <a href="<?php echo BASE_URL ?>/cart/delete_cart/<?php echo $value['id_product'] ?>" class="btn_df btn_table_td_rf_del btn-sm"><i class="fa fa-trash-o"></i> <span class="display_mobile">Xóa sản phẩm</span></a>
                                            </td> -->
                                    <td>
                                        <?php if($value['cart_status'] == 0) :?>
                                            <p>Pending...</p>
                                        <?php else : ?>
                                            <p>Đã giao hàng</p>
                                        <?php endif ?>
                                    </td>
                                </tr>
                            </form>
                        <?php endforeach ?>
                        <tr>
                            <td colspan="7" class="textright_text">
                                <div class="sum_price_all">
                                    <span class="text_price">Tổng tiền thành toán</span>:
                                    <span class="text_price color_red"><?php echo number_format($total, 0, '.', ',') ?> đ</span>
                                </div>
                            </td>

                        </tr>
                        
                        <tr>
                        <?php endif ?>
                </tbody>

            </table>
        </div>
    </div>
</div>