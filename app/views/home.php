<section>
    <div class="bg_in">
        <div class="module_pro_all">
            <div class="box-title">
                <div class="title-bar">
                    <h1>Sản phẩm HOT</h1>
                    <!-- <a class="read_more" href="sanpham.php">
                        Xem thêm
                    </a> -->
                </div>
            </div>
            <div class="pro_all_gird">
                <div class="girds_all list_all_other_page ">
                    <?php foreach ($product as $value) :
                        if ($value['product_hot'] == 1) :
                    ?>
                            <div class="grids">
                                <div class="grids_in">
                                    <div class="content">
                                        <div class="img-right-pro">

                                            <a href="<?php echo BASE_URL ?>/product_home/details/<?php echo $value['id_product'] ?>">
                                                <img class="lazy img-pro content-image" src="<?php echo BASE_URL ?>/public/upload/product/<?php echo $value['image_product'] ?>" data-original="image/mac.jpg" alt="Máy in Canon MF229DW" />
                                            </a>

                                            <div class="content-overlay"></div>
                                            <div class="content-details fadeIn-top">
                                                <ul class="details-product-overlay">

                                                    <li><?php echo $value['desc_product'] ?></li>
                                                </ul>

                                            </div>
                                        </div>
                                        <div class="name-pro-right">
                                            <a href="<?php echo BASE_URL ?>/product_home/details/<?php echo $value['id_product'] ?>">
                                                <h3><?php echo $value['title_product'] ?></h3>
                                            </a>
                                        </div>
                                        <div class="add_card">
                                            <a href="<?php echo BASE_URL ?>/product_home/details/<?php echo $value['id_product'] ?>">
                                               Đặt hàng
                                            </a>
                                        </div>
                                        <div class="price_old_new">
                                            <div class="price">
                                                <span class="news_price"><?php echo number_format($value['price_product'], 0, '.', ',') ?> <sup>vnđ</sup> </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif ?>
                    <?php endforeach ?>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        <?php foreach ($category_product as $cat_value) : ?>
            <div class="module_pro_all">
                <div class="box-title">
                    <div class="title-bar">
                        <h1><?php echo $cat_value['title_category_product'] ?></h1>

                    </div>
                </div>
                <div class="pro_all_gird">
                    <div class="girds_all list_all_other_page ">
                        <?php foreach ($product as $value) :
                            if ($value['id_category_product'] == $cat_value['id_category_product']) :
                        ?>
                                <div class="grids">
                                    <div class="grids_in">
                                        <div class="content">
                                            <div class="img-right-pro">

                                                <a href="<?php echo BASE_URL ?>/product_home/details/<?php echo $value['id_product'] ?>">
                                                    <img class="lazy img-pro content-image" src="<?php echo BASE_URL ?>/public/upload/product/<?php echo $value['image_product'] ?>" data-original="image/mac.jpg" alt="Máy in Canon MF229DW" />
                                                </a>

                                                <div class="content-overlay"></div>
                                                <div class="content-details fadeIn-top">
                                                    <ul class="details-product-overlay">

                                                        <li><?php echo $value['desc_product'] ?></li>
                                                    </ul>

                                                </div>
                                            </div>
                                            <div class="name-pro-right">
                                                <a href="<?php echo BASE_URL ?>/product_home/details/<?php echo $value['id_product'] ?>">
                                                    <h3><?php echo $value['title_product'] ?></h3>
                                                </a>
                                            </div>
                                            <div class="add_card">
                                                <a href="<?php echo BASE_URL ?>/product_home/details/<?php echo $value['id_product'] ?>">
                                                    Đặt hàng
                                                </a>
                                            </div>
                                            <div class="price_old_new">
                                                <div class="price">
                                                    <span class="news_price"><?php echo number_format($value['price_product'], 0, '.', ',') ?> <sup>vnđ</sup> </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif ?>
                        <?php endforeach ?>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        <?php endforeach ?>

</section>
<!--end:body-->
<div class="clear"></div>