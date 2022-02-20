<section >
    <div class="bg_in">
        <div class="col-md-7 col-xs-12 col-sm-12" style="padding: 0;margin-top:10px;">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="https://images.fpt.shop/unsafe/fit-in/800x300/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/12/31/637765682872370711_F-H1_800x300.png" alt="Siêu khuyến mãi">
                    </div>

                    <div class="item">
                        <img src="https://cdn.tgdd.vn/2022/01/banner/khaixuan-samsung-830-300-830x300.png" alt="Siêu khuyến mãi">
                    </div>

                    <div class="item">
                        <img src="https://cdn.tgdd.vn/2022/02/banner/830-300-830x300.png" alt="Siêu khuyến mãi">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-md-4 col-xs-12 col-sm-12" style="padding: 0;margin-left:30px;margin-top:5px;">

            <div  class="row">
                <div style="height: 360px !important; overflow-y: hidden;" class="panel  panel-warning panel-styling">
                    <div class="panel-heading">Tin tức cập nhật</div>
                    <marquee onmouseover="this.stop()" onmouseout="this.start()" direction="down">
                        <div  class="panel-body">
                            <?php if (!empty($post)) :
                                foreach ($post as $key => $value) :
                            ?>
                                    <a href="<?php echo BASE_URL ?>/post_home/details/<?php echo $value['id_post'] ?>">
                                        <div class="row">
                                            <div class="col-md-4 col-xs-4 col-sm-4">
                                                <img src="<?php echo BASE_URL ?>/public/upload/post/<?php echo $value['image_post'] ?>">
                                            </div>
                                            <div class="col-md-8 col-xs-8 col-sm-8">
                                                <h4><?php echo $value['title_post'] ?></h4>
                                                <p><?php echo substr($value['desc_post'], 0, 80) ?>...</p>
                                            </div>
                                        </div>
                                    </a>
                                <?php endforeach ?>
                            <?php endif ?>
                        </div>
                    </marquee>
                </div>
            </div>

        </div>

    </div>
    <div class="clear"></div>
</section>