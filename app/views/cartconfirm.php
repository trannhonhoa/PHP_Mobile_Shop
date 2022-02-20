<style>
    .table.table-striped tr th {
        text-align: center;
    }
</style>
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
                                Xác nhận đơn hàng
                            </strong>
                        </span>
                        <meta itemprop="position" content="2" />
                    </li>
                </ol>
            </div>
            <div class="box-title">
            </div>
            <div style="margin-top: 30px;" class="container">
                <div class="col-md-6">
                    <h1 style="font-weight: bold; font-size: 25px;">Thông tin khách hàng</h1>
                    <table width="50%" class="table table-striped">

                        <tr>
                            <td>Name</td>

                            <td><?php echo Session::get("user_name") ?></td>
                        </tr>


                        <tr>
                            <td>Email</td>

                            <td><?php echo Session::get("user_email") ?></td>
                        </tr>
                        <tr>
                            <td>Phone</td>

                            <td><?php echo Session::get("user_phone") ?></td>
                        </tr>
                        <tr>
                            <td>Address</td>

                            <td><?php echo Session::get("user_address") ?></td>
                        </tr>

                    </table>
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

                            if (isset($_SESSION['cart'])) :
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
                                                            <!-- <a href="<?php echo BASE_URL ?>/cart/minus/<?php echo $value['id_product'] ?>"><i class="fa fa-minus"></i></a> -->
                                                            <input style="margin: 0 10px;" type="number" class="inputsoluong" min="0" name="qty[576]" value="<?php echo $value['quantity_product'] ?>" readonly>
                                                            <!-- <a href="<?php echo BASE_URL ?>/cart/plus/<?php echo $value['id_product'] ?>"><i class="fa fa-plus"></i></a> -->
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="clear"></div>
                                            </td>
                                            <td data-th="Thành tiền" class="text_center"><span class="color_red font_money"><?php echo number_format(($value['price_product'] * $value['quantity_product']), 0, '.', ',') ?> đ</span></td>
                                            <!-- <td class="actions aligncenter" data-th="">
                                                <a href="<?php echo BASE_URL ?>/cart/delete_cart/<?php echo $value['id_product'] ?>" class="btn_df btn_table_td_rf_del btn-sm"><i class="fa fa-trash-o"></i> <span class="display_mobile">Xóa sản phẩm</span></a>
                                            </td> -->
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
                    <form action="">
                        <div class="md-col-6">
                            <h2>Hình thức thanh toán</h2>
                            <div class="form-check">
                                <input width="5%" class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Tiền mặt
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Chuyển khoản
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                <img width="100px" src="https://pubcdn.ivymoda.com/images/5.png" alt="">
                                <label class="form-check-label" for="exampleRadios3">
                                    Momo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                <img width="100px" src="https://pubcdn.ivymoda.com/images/1.png" alt="">
                                <label class="form-check-label" for="exampleRadios3">
                                    VNPay
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                <label class="form-check-label" for="exampleRadios3">
                                    Paypal
                                </label>
                            </div>
                           
                        </div>
                    </form>
                     <div style="text-align: center;">
                                <a href="<?php echo BASE_URL ?>/cart/user_order"><button style="" class="btn btn-success">Xác nhận</button></a>
                    </div>

                </div>
            </div>

        </div>
    </div>

</section>