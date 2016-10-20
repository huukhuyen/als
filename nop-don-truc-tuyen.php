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
                                <div class="title-thongbaohop">
                                    <h2><a href="">TUYỂN DỤNG  KẾ TOÁN TRƯỞNG LÀM VIỆC TẠI BẮC NINH</a></h2>
                                    <p><span class="ngaydang"><i class="fa fa-calendar"></i>Đăng ngày: 14-2-2016</span> <span class="luotxem"><i class="fa fa-user"></i>43 lượt xem</span></p>
                                </div>
                                <div class="content-nopdon">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <form action="" class="form-als">
                                                <div><input type="text" name="" placeholder="Họ và tên"></div>
                                                <div><input type="text" name="" placeholder="Số điện thoại"></div>
                                                <div><input type="text" name="" placeholder="Email"></div>
                                                <div class="file-upload">
                                                    <span><img src="images/upload-file.png"/></span>
                                                    <input type="file" name="" id="FileAttachment" class="upload" />
                                                </div>
                                                <button type="reset" class="btn-reset" name="">Hủy</button>
                                                <button type="submit" class="btn-send" name="">Gửi</button>
                                             <input type="text" id="fileuploadurl" readonly placeholder="Đính kèm tệp">
                                            </form>
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
    <script type="text/javascript">
        // Upload file
        document.getElementById("FileAttachment").onchange = function() {
            document.getElementById("fileuploadurl").value = this.value;
        };
    </script>
</body>

</html>
