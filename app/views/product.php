<section>

    <?php if (!empty($product)) : ?>
        <div class="bg_in">
            <div class="breadcrumbs">

                <ol itemscope itemtype="http://schema.org/BreadcrumbList">

                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">

                        <a itemprop="item" href=".">

                            <span itemprop="name">Trang chủ</span></a>

                        <meta itemprop="position" content="1" />

                    </li>

                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">

                        <a itemprop="item" href="sanpham.php">

                            <span itemprop="name"><?php echo $product[0]['title_category_product'] ?></span></a>

                        <meta itemprop="position" content="2" />

                    </li>


                </ol>

            </div>
            <div class="module_pro_all">
                <div class="box-title">
                    <div class="title-bar">
                        <h1>Danh mục : <?php echo $product[0]['title_category_product'] ?></h1>
                        <!-- <a class="read_more" href="sanpham.php">
                        Xem thêm
                    </a> -->
                    </div>
                </div>
                <div class="pro_all_gird">
                    <div class="girds_all list_all_other_page ">

                        <?php foreach ($product as $key => $value) : ?>
                            <div class="grids">
                                <div class="grids_in">
                                    <div class="content">
                                        <div class="img-right-pro">

                                            <a href="<?php echo BASE_URL ?>/product_home/details/<?php echo $value['id_product'] ?>">
                                                <img class="lazy img-pro content-image" src="<?php echo BASE_URL ?>/public/upload/product/<?php echo $value['image_product'] ?>" data-original="image/iphone.png" alt="Máy in Canon MF229DW" />
                                            </a>

                                            <div class="content-overlay"></div>
                                            <div class="content-details fadeIn-top">
                                                <ul class="details-product-overlay">
                                                    <?php echo $value['desc_product'] ?>
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
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt hàng
                                            </a>
                                        </div>
                                        <div class="price_old_new">
                                            <div class="price">
                                                <span class="news_price"><?php echo number_format($value['price_product'], 0, '.','.') ?><sup>vnd</sup></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>

                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        <?php endif ?>
</section>
<!--end:body-->
<div class="clear"></div>