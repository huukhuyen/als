<?php require_once('block/head.php'); ?>

<body>
    <div class="wrap">
        <!-- Header -->
        <?php require_once('block/header.php') ?>
        <!-- Content -->
        <div class="content">
            <!-- <section class="section-banner">
                <img src="images/banner.jpg" alt="" />
            </section> -->
            <section class="section-slider-img">
                <div id="sliderbanner" class="carousel slide carousel-fade" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="slider-left">
                                <img src='images/slider-1.jpg'/>
                                <div class="caption-slider">
                                    <h2>Kết nối dòng hàng - gia tăng tiện ích</h2>
                                </div>
                            </div>
                            <div class="slider-right hidden-sm hidden-xs">
                                <img src='images/slider-2.jpg'/>
                                <img src='images/slider-3.jpg'/>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-left">
                                <img src='images/slider-1.jpg'/>
                                <div class="caption-slider">
                                    <h2>Kết nối dòng hàng - gia tăng tiện ích</h2>
                                </div>
                            </div>
                            <div class="slider-right hidden-sm hidden-xs">
                                <img src='images/slider-2.jpg'/>
                                <img src='images/slider-3.jpg'/>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-left">
                                <img src='images/slider-1.jpg'/>
                                <div class="caption-slider">
                                    <h2>Kết nối dòng hàng - gia tăng tiện ích</h2>
                                </div>
                            </div>
                            <div class="slider-right hidden-sm hidden-xs">
                                <img src='images/slider-2.jpg'/>
                                <img src='images/slider-3.jpg'/>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Info -->
            <section class="section-info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="info-left">
                                <h1>Tổng quan</h1>
                                <p> Tổng quan: Công ty Cổ phần Logistics Hàng không (ALS – tên gọi cũ: Công ty Cổ phần Giao nhận Kho vận Hàng không) là nhà cung cấp chuyên nghiệp các dịch vụ phục vụ hàng hóa hàng không, dịch vụ kho vận và các dịch vụ logistics
                                    khác tại Việt Nam.</p>
                                <div class="row">
                                    <button type="button" class="btn-als right">Xem thêm</button>
                                </div>
                                <div class="row">
                                    <div class="info-img">
                                        <img src="images/info-1.png" alt="" />
                                        <img src="images/info-2.png" alt="" />
                                        <img src="images/info-3.png" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class=" info-right">
                                <h1>Tra cứu vận đơn</h1>
                                <p>Track air go...</p>
                                <form action="" class="form-als">
                                    <input type="text" name="" value="">
                                    <select class="" name="">
                                        <option value="">Import</option>
                                        <option value="">Export</option>
                                    </select>
                                    <button type="submit" class="btn-als btn-search">Search</button>
                                </form>
                                <button type="button" class="btn-als">Tìm kiếm nâng cao</button>
                            </div>
                            <div class="info-price">
                                <div class="info-price-item">
                                    <div class="row">
                                        <div class="col-md-6 col-xs-7">
                                            <h1>Bảng giá</h1>
                                        </div>
                                        <div class="col-md-6 col-xs-5">
                                            <button type="button" class="btn-als right" name="button">Xem thêm</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Service -->
            <section class="section-service">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="service-left">
                                <div class="title-section">
                                    <h1>Dịch vụ</h1>
                                </div>
                                <div class="service-img">
                                    <h2><a href="">phục vụ<br>hàng hóa <br>Hàng không</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- Service right -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="service-right">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="kho-van">
                                            <div class="service-img">
                                                <h2><a href="">Kho vận<br>& Phân phối</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="dich-vu-khac">
                                            <div class="service-img">
                                                <a href="">
                                                    <h2><a href="">Dịch vụ khác</a></h2>
                                                </a>
                                                <div class="service-button">
                                                    <button type="button" class="btn-als">Đào tạo</button>
                                                    <button type="button" class="btn-als">Đại lý hải quan</button>
                                                    <button type="button" class="btn-als">Xem thêm</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- News -->
            <section class="section-news">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="news-left">
                                <div class="title-section">
                                    <h1>Văn hóa ALS</h1>
                                </div>
                                <div id="carousel-news" class="carousel slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <img src="images/service2.jpg" alt="...">
                                        </div>
                                        <div class="item">
                                            <img src="images/service2.jpg" alt="...">
                                        </div>
                                        <div class="item">
                                            <img src="images/service2.jpg" alt="...">
                                        </div>
                                    </div>
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-news" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-news" data-slide-to="1"></li>
                                        <li data-target="#carousel-news" data-slide-to="2"></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="news-right">
                                <div class="title-section">
                                    <h1>Tin tức</h1>
                                </div>
                                <div class="news-item">
                                    <ul>
                                        <li><i class="fa fa-angle-right"></i><a href="#"> Ngày hội thao ALS 2016</a></li>
                                        <li><i class="fa fa-angle-right"></i><a href="#"> ALS FamTour 2016 - Hành trình Kết nối và Tỏa sáng</a></li>
                                        <li><i class="fa fa-angle-right"></i><a href="#"> Thông báo mời họp Đại hội đồng cổ đông 2016</a></li>
                                        <li><i class="fa fa-angle-right"></i><a href="#"> Ga hàng hóa ALS chào đón chuyến bay hàng hóa đầu tiên của EMIRATES4</a></li>
                                        <li><i class="fa fa-angle-right"></i><a href="#"> ALS đạt danh hiệu Top 20 doanh nghiệp Logistics 2014</a></li>
                                        <li><i class="fa fa-angle-right"></i><a href="#"> Lễ khai trương Kho hàng không ALS Gia Lâm</a></li>
                                        <li><i class="fa fa-angle-right"></i><a href="#"> Ga hàng hóa ALS phục vụ chuyến bay freighter đầu tiên của</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Follow -->
            <section class="section-follow hidden-lg hidden-md">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <video id="my-video" class="video-js" controls preload="auto" poster="images/bg-video.jpg" data-setup="{}">
                                <source src="https://cdn.selz.com/plyr/1.5/View_From_A_Blue_Moon_Trailer-HD.mp4" type='video/mp4'>
                                    <source src="https://cdn.selz.com/plyr/1.5/View_From_A_Blue_Moon_Trailer-HD.webm" type='video/webm'>
                                        <p class="vjs-no-js">
                                            To view this video please enable JavaScript, and consider upgrading to a web browser that
                                            <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                                        </p>
                                    </video>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="fb-page" data-href="https://www.facebook.com/vivicorp/" data-width="340" data-hide-cover="false" data-show-facepile="true">
                            </div>
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
        <?php require_once('block/footer.php') ?>
    </div>
    <?php require_once('block/script.php') ?>
</body>

</html>
