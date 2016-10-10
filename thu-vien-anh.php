<?php require_once('block/head.php'); ?>
<body>
    <div class="wrap">
        <!-- Header -->
        <?php require_once('block/header.php'); ?>
        <!-- Content -->
        <div class="content">
            <section class="section-banner">
                <img src="images/img-content.jpg" alt="" />
                <div class="container pd-15-rp">
                    <div class="breadcrumb-banner">
                        <h2 class="banner-title">Bảng giá ALS</h2>
                        <p>
                            <a href="">Trang chủ</a>
                            <i class="fa fa-angle-right"></i>
                            <a href="">Bảng giá ALS</a>
                        </p>
                    </div>
                </div>
            </section>
            <!-- Content -->
            <section class="section-body-news">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 hidden-sm hidden-xs">
                            <article class="body-left">
                                <div class="item-list">
                                    <ul>
                                        <li><a href="">Thư ngỏ</a> <i class="fa fa-angle-right right"></i></li>
                                        <li><a href="">Giới thiệu về ALS</a> <i class="fa fa-angle-right right"></i></li>
                                        <li><a href="">Cơ cấu tổ chức</a> <i class="fa fa-angle-right right"></i></li>
                                        <li><a href="">Thư viện ảnh</a> <i class="fa fa-angle-right right"></i></li>
                                    </ul>
                                </div>
                                <div class="section-follow">
                                    <div class="fb-page" data-href="https://www.facebook.com/vivicorp/" data-width="440" data-hide-cover="false" data-show-facepile="true">
                                    </div>
                                    <!-- Video -->
                                    <video id="my-video" class="video-js" controls preload="auto" poster="images/bg-video.jpg" data-setup="{}">
                                        <source src="https://cdn.selz.com/plyr/1.5/View_From_A_Blue_Moon_Trailer-HD.mp4" type='video/mp4'>
                                        <source src="https://cdn.selz.com/plyr/1.5/View_From_A_Blue_Moon_Trailer-HD.webm" type='video/webm'>
                                        <p class="vjs-no-js">
                                            To view this video please enable JavaScript, and consider upgrading to a web browser that
                                            <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                                        </p>
                                    </video>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-8 col-xs-12">
                            <article class="body-right">
                                <div class="title-library">
                                    <h2>Ảnh nổi bật</h2>
                                </div>
                                <div class="content-library">
                                    <div id="slider-library" class="carousel slide" data-ride="carousel">
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">
                                            <div class="item active">
                                                <img src="images/slide-library.jpg" alt="...">
                                                <div class="carousel-caption">
                                                    AlS đón chuyến hàng của Turkish airlines
                                                </div>
                                            </div>
                                            <div class="item">
                                                <img src="images/slide-library.jpg" alt="...">
                                                <div class="carousel-caption">
                                                    AlS đón chuyến hàng của Turkish airlines
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Item thumbnail -->
                                    <div class="row">
                                      <div class="col-md-3 col-xs-6 col-sm-3">
                                          <div class="thumbnail-library">
                                                <a href="" data-toggle="modal" data-target="#thumbnail-1">
                                                    <img class="img-responsive" src="images/thumbnail-library.jpg" alt="" />
                                                </a>
                                                <div id="thumbnail-1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <img src="images/thumbnail-library.jpg" class="img-responsive">
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>
                                          </div>
                                      </div>
                                      <div class="col-md-3 col-xs-6 col-sm-3">
                                          <div class="thumbnail-library">
                                                <a href="" data-toggle="modal" data-target="#thumbnail-2">
                                                    <img class="img-responsive" src="images/thumbnail-library-2.jpg" alt="" />
                                                </a>
                                                <div id="thumbnail-2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <img src="images/thumbnail-library-2.jpg" class="img-responsive">
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>
                                          </div>
                                      </div>
                                      <div class="col-md-3 col-xs-6 col-sm-3">
                                          <div class="thumbnail-library">
                                                <a href="" data-toggle="modal" data-target="#thumbnail-3">
                                                    <img class="img-responsive" src="images/thumbnail-library-3.jpg" alt="" />
                                                </a>
                                                <div id="thumbnail-3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <img src="images/thumbnail-library-3.jpg" class="img-responsive">
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>
                                          </div>
                                      </div>
                                      <div class="col-md-3 col-xs-6 col-sm-3">
                                          <div class="thumbnail-library">
                                                <a href="" data-toggle="modal" data-target="#thumbnail-4">
                                                    <img class="img-responsive" src="images/thumbnail-library-4.jpg" alt="" />
                                                </a>
                                                <div id="thumbnail-4" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <img src="images/thumbnail-library-4.jpg" class="img-responsive">
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="content-more">
                                        <div class="name-library">
                                            <h2><a href="">AlS đón chuyến hàng của Turkish airlines</a></h2>
                                            <p><span class="ngaydang"><i class="fa fa-calendar"></i>Đăng ngày: 14-2-2016</span> <span class="luotxem"><i class="fa fa-user"></i>43 lượt xem</span></p>
                                            <p class="description">Sau hơn 4 tháng đi vào hoạt động, Ga hàng hóa ALS (ALSC) chính thức cung cấp dịch vụ khai thác hàng hóa cho hãng hàng không Hong Kong - Cathay Pacific, được đánh dấu bởi việc phục vụ chuyến bay freighter đầu tiên của Cathay</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                            </article>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Partner -->
            <section class="section-partner">
                <div class="container">
                    <div class="item-partner">
                        <a href=""><img src="images/partner.png" alt="" /></a>
                        <a href=""><img src="images/partner.png" alt="" /></a>
                        <a href=""><img src="images/partner.png" alt="" /></a>
                        <a href=""><img src="images/partner.png" alt="" /></a>
                        <a href=""><img src="images/partner.png" alt="" /></a>
                        <a href=""><img src="images/partner.png" alt="" /></a>
                        <a href=""><img src="images/partner.png" alt="" /></a>
                    </div>
                </div>
            </section>
        </div>
        <!-- Footer -->
        <?php require_once('block/footer.php'); ?>
    </div>
    <?php require_once('block/script.php'); ?>
</body>

</html>
