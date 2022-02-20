<section>
    <div class="bg_in">
        <div class="wrapper_all_main">
            <div class="wrapper_all_main_right">
                <div class="tags_products">
                    <a href="sanpham.php">
                        Tủ mạng
                    </a>
                    <a href="sanpham.php">
                        Cáp mạng
                    </a>
                    <a href="sanpham.php">
                        Thiết bị mạng
                    </a>
                    <a href="sanpham.php">
                        Nas Synology
                    </a>
                    <a href="sanpham.php">
                        Phụ kiện và thiết bị thi công mạng
                    </a>
                </div>
                <!--breadcrumbs-->
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
                                   Tất Cả Tin
                                </strong>
                            </span>
                            <meta itemprop="position" content="2" />
                        </li>
                    </ol>
                </div>
                <!--breadcrumbs-->
                <div class="content_page">
                    <div class="box-title">
                        <div class="title-bar">
                            <h1>Tin tức</h1>
                        </div>
                    </div>
                    <div class="content_text">
                        <ul class="list_ul">
                            <?php if(!empty($post)):
                                foreach($post as $key => $value):    
                            ?>

                            <li class="lists">
                                <div class="img-list">
                                    <a href="<?php echo BASE_URL ?>/post_home/details/<?php echo $value['id_post'] ?>">
                                        <img src="<?php echo BASE_URL ?>/public/upload/post/<?php echo $value['image_post'] ?>" alt="So sánh công nghệ hiển thị 3LCD và DLP" class="img-list-in">
                                    </a>
                                </div>
                                <div class="content-list">
                                    <div class="content-list_inm">
                                        <div class="title-list">
                                            <h3>
                                                <a href="<?php echo BASE_URL ?>/post_home/details/<?php echo $value['id_post'] ?>"><?php echo $value['title_post'] ?></a>
                                            </h3>
                                            <p class="list-news-status-p">
                                                <a title="category"><?php echo $value['title_category_post'] ?></a> | <a title="26-12-2017"><?php echo $value['date_post'] ?></a>
                                            </p>
                                        </div>
                                        <div class="content-list-in">
                                            <p><span style="font-size:16px"><?php echo substr($value['desc_post'] , 0, 100)?>...</span></p>
                                        </div>
                                        <div class="xt"><a href="<?php echo BASE_URL ?>/post_home/details/<?php echo $value['id_post'] ?>">Xem thêm</a></div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </li>
                            <?php endforeach ?>
                            <?php endif ?>
                        </ul>
                        <div class="clear"></div>
                        <div class="wp_page">
                            <div class="page">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--start:left-->
            <div class="clear"></div>
        </div>
    </div>
</section>
<!---End bg_in----->
<!--end:body-->
<div class="clear"></div>