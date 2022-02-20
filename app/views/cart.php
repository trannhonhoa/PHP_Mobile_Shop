<section>
    <div class="bg_in">
        <div class="content_page cart_page">
            <div class="breadcrumbs">
                <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a itemprop="item" href=".">
                            <span itemprop="name">Trang chủ</span></a>
                        <meta itemprop="position" content="1" />
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <span itemprop="item">
                            <strong itemprop="name">
                                Giỏ hàng
                            </strong>
                        </span>
                        <meta itemprop="position" content="2" />
                    </li>
                </ol>
            </div>
            <div class="box-title">
                <div class="title-bar">
                    <h1>Giỏ hàng của bạn</h1>
                </div>
            </div>
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
                                <th style="width:50px; text-align:center;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) :
                                $total = 0;
                                foreach ($_SESSION['cart'] as $key => $value) :
                                    $total += ($value['price_product'] * $value['quantity_product']);
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
                                                            <a href="<?php echo BASE_URL ?>/cart/minus/<?php echo $value['id_product'] ?>"><i class="fa fa-minus"></i></a>
                                                            <input style="margin: 0 10px;" type="number" class="inputsoluong" min="0" name="qty[576]" value="<?php echo $value['quantity_product'] ?>" readonly>
                                                            <a href="<?php echo BASE_URL ?>/cart/plus/<?php echo $value['id_product'] ?>"><i class="fa fa-plus"></i></a>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="clear"></div>
                                            </td>
                                            <td data-th="Thành tiền" class="text_center"><span class="color_red font_money"><?php echo number_format(($value['price_product'] * $value['quantity_product']), 0, '.', ',') ?> đ</span></td>
                                            <td onclick="confirm('Bạn có muốn xóa sản phẩm này!')" class="actions aligncenter" data-th="">
                                                <a href="<?php echo BASE_URL ?>/cart/delete_cart/<?php echo $value['id_product'] ?>" class="btn_df btn_table_td_rf_del btn-sm"><i class="fa fa-trash-o"></i> <span class="display_mobile">Xóa sản phẩm</span></a>
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

                                    <?php if (isset($_SESSION['login_user']) && $_SESSION['login_user'] == true) :
                                    ?>
                                        <td colspan="7">
                                            <div>
                                                <a href="<?php echo BASE_URL ?>/cart/cartconfirm" class="btn_df "></i>Thanh Toán Giỏ Hàng</a>
                                            </div>

                                        </td>
                                    <?php else : ?>
                                        <td colspan="7">
                                            <div>
                                                <a href="<?php echo BASE_URL ?>/user_login" class="btn_df "></i>Đăng nhập để thanh toán</a>
                                            </div>

                                        </td>
                                    <?php endif ?>

                                </tr>

                            <?php endif ?>
                        </tbody>
                        <tfoot>
                            <tr class="tr_last">
                                <td colspan="7">
                                    <a href="<?php echo BASE_URL ?>/product_home" class="btn_df btn_table floatleft"><i class="fa fa-long-arrow-left"></i> Tiếp tục mua hàng</a>
                                    <div class="clear"></div>
                                </td>


                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>