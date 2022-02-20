<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en-CA">

<head>
    <title>3tmobile</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="cleartype" content="on" />
    <link rel="icon" href="template/Default/img/favicon.ico" type="image/x-icon" />
    <meta name="Description" content="" />
    <meta name="Keywords" content="" />
    <!--rieng-->
    <meta property='og:title' name="title" content='' />
    <meta property='og:url' content='' />
    <meta property='og:image' content='' />
    <meta property='og:description' itemprop='description' name="description" content='' />
    <!--rieng-->
    <!--tkw-->
    <meta property="og:type" content="article" />
    <meta property="article:section" content="" />
    <meta property="og:site_name" content='' />
    <meta property="article:publisher" content="" />
    <meta property="article:author" content="" />
    <meta property="fb:app_id" content="1639622432921466" />
    <meta vary="User-Agent" />
    <meta name="geo.region" content="VN-SG" />
    <meta name="geo.placename" content="Ho Chi Minh City" />
    <meta name="geo.position" content="10.823099;106.629664" />
    <meta name="ICBM" content="10.823099, 106.629664" />
    <link rel="icon" type="image/png" href="template/Default/img/favicon.png">
    <!--tkw-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/public/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/public/css/product.css">
</head>
<style>

</style>

<body>

    <img class="event-trai" src="https://cdn.tgdd.vn/2022/01/banner/Trai-79x271-14.png" alt="">
    <img class="event-phai" src="https://cdn.tgdd.vn/2022/01/banner/Trai-79x271-14.png" alt="">
    <div>
        <header>
            <div style="text-align: center; width: 100%; background: #ffbf00;">
                <!-- <div class="bg_in">
                <p class="p_infor">
                    <span><i class="fa fa-envelope-o" aria-hidden="true"></i>Email: trannhonhoa2001@gmail.com</span>
                    <span><i class="fa fa-phone" aria-hidden="true"></i> Hotline: 0912605156</span>
                </p>
            </div> -->
                <img src="https://cdn.tgdd.vn/2022/01/banner/lixi-1200-44-1200x44.png" alt="">
            </div>
            <div class="header_top_menu">
                <div class="header_top_menu_all">
                    <div class="header_top">
                        <div class="bg_in">
                            <div class="logo">
                                <a href="<?php echo BASE_URL ?>"><img width="150px" src="https://cdn.dribbble.com/users/1736305/screenshots/6365450/eagle.png" width="250" height="100" alt="logohere.jpeg" /></a>
                            </div>
                            <nav class="menu_top">
                                <form class="search_form" method="get" action="<?php echo BASE_URL ?>/product_home/search">
                                    <input class="searchTerm" name="search" placeholder="Nhập từ cần tìm..." />
                                    <button class="searchButton" type="submit">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </nav>
                            <div class="cart_wrapper">
                                <div class="cols_50">
                                    <div class="hot_line_top">
                                        <span><b>Trụ sở chính</b></span>
                                        <br />
                                        <span class="red">Long Xuyên An Giang</span>
                                    </div>
                                </div>
                                <div class="cols_50">
                                    <div class="hot_line_top">
                                        <span><b>Văn phòng chi nhánh</b></span>
                                        <br />
                                        <span class="red">Châu Thành An Giang</span>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="btn_menu_search">
                    <div class="bg_in">
                        <div class="table_row_search">
                            <div class="menu_top_cate">
                                <div class="">
                                    <div class="menu" id="menu_cate">
                                        <div class="menu_left">
                                            <i class="fa fa-bars" aria-hidden="true"></i> Danh mục sản phẩm
                                        </div>
                                        <div class="cate_pro">
                                            <div id='cssmenu_flyout' class="display_destop_menu">
                                                <ul>
                                                    <?php

                                                    if (!empty($category_product)) :
                                                        foreach ($category_product as $key => $value) :
                                                    ?>
                                                            <li class='active has-sub'>
                                                                <a href='<?php echo BASE_URL ?>/product_home/list_product_ByID/<?php echo $value['id_category_product'] ?>'><span><?php echo $value['title_category_product'] ?></span></a>
                                                            </li>
                                                        <?php endforeach ?>
                                                    <?php endif ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="search_top">
                                <div id='cssmenu'>
                                    <ul>
                                        <li class='active'><a href='<?php echo BASE_URL ?>'>Trang chủ</a></li>
                                        <li class=''>
                                            <a href='<?php echo BASE_URL ?>/product_home/all_product'>Sản phẩm</a>
                                        </li>

                                        <li class=''>
                                            <a href='<?php echo BASE_URL ?>/post_home/'>Tin tức</a>
                                            <ul>
                                                <?php if ($category_post) :
                                                    foreach ($category_post as $key => $value) :
                                                ?>
                                                        <li><a href="<?php echo BASE_URL ?>/post_home/list_post_ByID/<?php echo $value['id_category_post'] ?>"><?php echo $value['title_category_post'] ?></a></li>
                                                    <?php endforeach ?>
                                                <?php endif  ?>
                                            </ul>
                                        </li>
                                        <li class=''><a href='<?php echo BASE_URL ?>/cart/'>Giỏ hàng</a></li>

                                        <li class=''><a href='<?php echo BASE_URL ?>/index/contact/'>Liên hệ</a></li>
                                        <?php


                                        if (isset($_SESSION['login_user']) && $_SESSION['login_user'] == true) :
                                        ?>
                                            <!-- <li class=''></li> -->
                                            <li class=''>
                                                <a href='#'>Tài khoản</a>
                                                <ul>
                                                    <li>
                                                        <a href='<?php echo BASE_URL ?>/cart/ordered'>Ordered</a>


                                                    </li>
                                                    <li>
                                                        <a href='<?php echo BASE_URL ?>/user_login/profile'>Chỉnh sửa thông tin</a>
                                                    </li>
                                                    <li>
                                                        <a href='<?php echo BASE_URL ?>/user_login/logout'>Đăng xuất</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- <li class=''><a href='<?php echo BASE_URL ?>'>Xin Chào: <?php echo Session::get("user_name") ?> </a></li> -->
                                        <?php else : ?>
                                            <li class=''><a href='<?php echo BASE_URL ?>/user_login/'>Đăng nhập</a></li>
                                        <?php endif ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </header>
        <div class="clear"></div>