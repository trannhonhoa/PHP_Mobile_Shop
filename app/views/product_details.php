<?php if (!empty($product)) : ?>
    <section>
        <div class="bg_in">
            <div class="wrapper_all_main">
                <div class="wrapper_all_main_right no-padding-left" style="width:100%;">
                    <div class="slider-galery ">
                        <div id="sync1" class="owl-carousel owl-theme">
                            <div class="item">
                                <img src="<?php echo BASE_URL ?>/public/upload/product/<?php echo $product[0]['image_product'] ?>" width="100%">
                            </div>
                        </div>


                    </div>
                    <div class="breadcrumbs">
                        <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                <a itemprop="item" href=".">
                                    <span itemprop="name">Trang chủ</span></a>
                                <meta itemprop="position" content="1" />
                            </li>
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                <a itemprop="item" href="sanpham.php">
                                    <span itemprop="name">Sản phẩm</span></a>
                                <meta itemprop="position" content="2" />
                            </li>
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                <span itemprop="item">
                                    <strong itemprop="name">
                                        <?php echo $product[0]['title_product'] ?>
                                    </strong>
                                </span>
                                <meta itemprop="position" content="3" />
                            </li>
                        </ol>
                    </div>
                    <div class="content_page">
                        <div class="content-right-items margin0">
                            <div class="title-pro-des-ct">
                                <h1> <?php echo $product[0]['title_product'] ?></h1>
                            </div>
                            <div class="content-des-pro">
                                <div class="content-des-pro_in">
                                    <div class="pro-des-sum">
                                        <div class="price">
                                            <p class="code_skin" style="margin-bottom:10px">
                                                <span>Mã hàng: <a href="chitietsp.php">CRW-W06</a> | Thương hiệu: <a href="">Comrack</a></span>
                                            </p>
                                            <div class="status_pro">
                                                <span><b>Trạng thái:</b> Còn hàng</span>
                                            </div>
                                            <div class="status_pro"><span><b>Xuất xứ:</b> Việt Nam</span></div>
                                        </div>
                                        <div class="color_price">
                                            <span class="title_price bg_green">Giá bán</span> <?php echo number_format($product[0]['price_product'], 0, '.', ',') ?> <span>vnđ</span>. (GIÁ CHƯA VAT)
                                            <div class="clear"></div>
                                        </div>
                                        <div class="color_price">
                                            <span class="title_price">Giá cũ</span>
                                            <del>18,360,000 <span>vnđ</span></del>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="content-pro-des">
                                    <div class="content_des">
                                        <p style="font-size: 16px;font-weight: bold;"><?php echo $product[0]['title_product'] ?></p><br />
                                        <p> -Bán hàng chính hãng (cam kết hoàn tiền 200% nếu hàng nhái, hàng dựng kém chất lượng)
                                        </p>
                                        <p>-Bảo hành toàn diện 12 tháng theo chế độ hãng</p>
                                        <p>-Cho dùng thử 07 ngày đầu đổi mới</p>
                                        <p>-Hỗ trợ bảo hành VIP - 1 đổi 1 trong 12 tháng</p>
                                        <p>-Hỗ trợ miễn phí kỹ thuật trọn đời</p>

                                    </div>
                                </div>
                                <form action="<?php echo BASE_URL ?>/cart/add_cart " method="POST">
                                    <input type="hidden" name="id" value="<?php echo $product[0]['id_product'] ?>">
                                    <?php
                                    if (!empty($_GET['msg'])) {
                                        $msg = unserialize(urldecode($_GET['msg']));
                                        foreach ($msg as $value) {
                                            echo '<span style="color: red;">' . $value . '</span>';
                                        }
                                    }
                                    ?>
                                    <div class="ct">
                                        <div class="number_price">
                                            <div class="custom pull-left">
                                                <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) && qty > 0 ) result.value--;return false;" class="reduced items-count" type="button">-</button>
                                                <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="quantity">
                                                <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button">+</button>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="wp_a">
                                            <a style="display: inline-flex;" class="view_duan">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                <input style="border: none; outline: none; background: transparent; font-size: 16px;" type="submit" class="text-mobile-buy" name="submit" value="Mua hàng">
                                            </a>
                                            <a href="tel:090 66 99 038" class="view_duan">
                                                <i class="fa fa-phone" aria-hidden="true"></i> <span class="text-mobile-buy">Gọi ngay</span>
                                            </a>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </form>
                                <div class="tags_products prodcut_detail">
                                    <div class="tab_link">
                                        <h3 class="title_tab_link">TAGS: </h3>
                                        <div class="content_tab_link"> <a href="tag/"></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-des-pro-suport">
                                <div class="box-setup">
                                    <div class="title-setup">
                                        <i class="fa fa-tasks" aria-hidden="true"></i> Dịch vụ &amp; Chú ý
                                    </div>
                                    <div class="info-setup">
                                        <div class="row-setup">
                                            <p style="text-align:justify">Quý khách vui lòng liên hệ với nhân viên bán hàng theo số điện thoại Hotline sau :</p>
                                            <p><span style="color:#d50100">0932 023 992</span>&nbsp;để biết thêm chi tiết về Phụ kiện sản phẩm.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-prod prod-price freeship">
                                    <span class="title">
                                        <p>
                                            <!-- <img alt="chuyển hàng miễn phí tại thietbivanphong123.com" src="/data/upload/ship-hang-mien-phi.png" style="height:33px; width:60px" /> --> Bạn sẽ được giao hàng miễn phí trong khu vực nội thành TPHCM khi mua sản phẩm này.
                                        </p>
                                    </span>
                                    <span class="row more"><a href="" title="">Xem thêm</a>
                                    </span>
                                </div>
                                <div class="bx-contact">
                                    <span class="title-cnt">Bạn cần hỗ trợ?</span>
                                    <p>Chat với chúng tôi :</p>
                                    <p><img alt="icon skype " src="<?php echo BASE_URL ?>/public/image/icon skype.png" style="height:24px; width:24px" />&nbsp;<a href="skype:quangtran.123corp?chat">thietbivanphong.com</a></p>
                                    <p><img alt="icon skype " src="<?php echo BASE_URL ?>/public/image/icon skype.png" style="height:24px; width:24px" />&nbsp;<a href="skype:quangtran.123corp?chat">thietbivanphong.com</a></p>
                                    <p><img alt="icon skype " src="<?php echo BASE_URL ?>/public/image/icon skype.png" style="height:24px; width:24px" />&nbsp;<a href="skype:quangtran.123corp?chat">thietbivanphong.com</a></p>
                                    <div class="sup-item item1">
                                        <div>

                                            <span class="title-support">Chat với chúng tôi:</span>

                                            <div class="icon-support">

                                                <span class="icon-chat">

                                                    <a href="." target="_blank" title="Chat We">

                                                        <img src="data:image/png;base64,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" height="30" style="float:left; margin-right:5px;" /> Mr.Hoa

                                                    </a></span>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="sup-item item2">

                                        Góp ý, khiếu nại: (8h00 - 17h30)

                                        <span class="sub-item hanoi row"><i class="fa fa-caret-right fa-lg"></i>TP HCM:

                                            <span class="phone-number"><a href="tel:0906699 038">090 66 99 038</a></span>

                                        </span>

                                        <span class="sub-item hcm row"><i class="fa fa-caret-right fa-lg"></i>TP HCM: <span class="phone-number"><a href="tel:0909802038">0909 80 20 38</a></span></span>

                                    </div>

                                    <div class="sup-item item3">Email:

                                        <a class="email-text" href="mailto:thietbivanphong.123corp@gmail.com" title="Email hỗ trợ">
                                            <font color="#0092db">trannhonhoa.123corp@gmail.com</font>
                                        </a>
                                    </div>


                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="wrapper_all_main_right">
                    <div class="tabs-animation">
                        <div class="bg_in">
                            <div id="nav-anchor"></div>
                            <nav class="nav-tabs">
                                <ul>
                                    <li><a href="#productDetail"><i class="fa fa-info-circle" aria-hidden="true"></i> <span class="text-mobile">Chi tiết sản phẩm</span></a></li>
                                    <li><a href="#inforProduct"><i class="fa fa-file-text-o" aria-hidden="true"></i><span class="text-mobile"> Thông số kỹ thuật</span></a></li>
                                    <li><a href="#Comment"><i class="fa fa-comment-o" aria-hidden="true"></i><span class="text-mobile"> Bình luận</span></a></li>
                                </ul>
                                <div class="name-product">
                                    Iphone X
                                    <span class="" style="font-size:16px; color:red; padding-left:5px;">1,960,000 VNĐ</span>
                                </div>
                                <div class="ct btn-wp">
                                    <div class="wp_a">
                                        <a onclick="return giohang(371);" class="view_duan">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="text-mobile-buy">Mua hàng</span>
                                        </a>
                                        <a href="tel:090 66 99 038" class="view_duan">
                                            <i class="fa fa-phone" aria-hidden="true"></i> <span class="text-mobile-buy">Gọi ngay</span>
                                        </a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="product_detail_info">
                        <div class="module_pro_all" id="productDetail">
                            <div class="box-title">
                                <div class="title-bar">
                                    <h3>Chi tiết sản phẩm</h3>
                                </div>
                            </div>
                            <div class="tab_content content_text_product content-module">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                            </div>
                        </div>
                        <div class="module_pro_all" id="inforProduct">
                            <div class="box-title">
                                <div class="title-bar">
                                    <h3>Thông số kỹ thuật</h3>
                                </div>
                            </div>
                            <div class="tab_content content_text_product content-module">
                                <?php echo $product[0]['desc_product'] ?>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>

                    <script type="text/javascript">
                        CloudZoom.quickStart();

                        jQuery(function($) {

                            var $userName = $('.name');

                            if ($userName.length) {

                                $userName.avatarMe({

                                    className: 'avatar-me',

                                    maxChar: 1

                                });

                            }

                        });
                    </script>
                    <div class="clear"></div>
                    <!-- <div class="content-brank">
                     <p><strong>Apple </strong>tự hảo<strong>&nbsp;</strong>là thương hiệu Việt Nam về sản phẩm tủ rack 19", tủ cửa lưới, tủ treo tường, bảo vệ thiết bị mạng an toàn, dễ dàng quản lý và vận hành.</p>
                  </div> -->
                    <div class="module_pro_all">
                        <div class="box-title">
                            <div class="title-bar">
                                <h3>Sản phẩm liên quan</h3>
                            </div>
                        </div>
                        <div class="pro_all_gird">
                            <div class="girds_all list_all_other_page ">
                                <div class="grids">
                                    <?php if (!empty($product_relative)) : ?>
                                        <?php foreach ($product_relative as $key => $value) :
                                            if ($value['id_product'] != $product[0]['id_product']) :
                                        ?>
                                                <div class="grids_in">
                                                    <div class="content">
                                                        <div class="img-right-pro">

                                                            <a href="<?php echo BASE_URL ?>/product_home/detasil/<?php echo $value['id_product'] ?>">
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
                                                            <a onclick="return giohang(579);">
                                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt hàng
                                                            </a>
                                                        </div>
                                                        <div class="price_old_new">
                                                            <div class="price">
                                                                <span class="news_price"><?php echo $value['price_product'] ?> </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                </div>
                            <?php endif ?>
                        <?php endforeach ?>
                    <?php endif ?>
                    <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>

                <!--end:left-->
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        <script>
            jQuery(document).ready(function() {



                var div_fixed = jQuery('.product_detail_info').offset().top;

                jQuery(window).scroll(function() {

                    if (jQuery(window).scrollTop() > div_fixed) {

                        jQuery('.tabs-animation').addClass('fix_top');

                    } else {

                        jQuery('.tabs-animation').removeClass('fix_top');

                    }

                });

                jQuery(window).load(function() {

                    if (jQuery(window).scrollTop() > div_fixed) {

                        jQuery('.tabs-animation').addClass('fix_top');

                    }

                });

            });
        </script>
    </section>
<?php endif ?>