<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v5.1.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.1.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/grab-final-master-logo-2019-rgb-green-121x48.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Register</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
  
</head>
<body>
  
  <section class="menu cid-s48OLK6784" once="menu" id="menu1-s">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container-fluid">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.html">
                        <img src="assets/images/grab-final-master-logo-2019-rgb-green-121x48.png" alt="Grab" style="height: 3.8rem;">
                    </a>
                </span>
                
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item dropdown"><a class="nav-link link text-black dropdown-toggle display-4" href="#" data-toggle="dropdown-submenu" aria-expanded="false">สมัครเป็นพาร์ทเนอร์</a><div class="dropdown-menu"><a class="text-black dropdown-item text-primary display-4" href="page1.html">ตัวอย่างเอกสาร</a><a class="text-black dropdown-item text-primary display-4" href="page2.html" aria-expanded="false">รถยนต์และจักรยานยนต์</a><a class="text-black dropdown-item text-primary display-4" href="page3.html" aria-expanded="false">ร้านอาหาร</a></div></li>
                    <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="https://help.grab.com/passenger/th-th/" target="_blank">
                            ศูนย์ช่วยเหลือ</a></li></ul>
                
                
            </div>
        </div>
    </nav>

</section>

<section class="form4 cid-sboLr6XEOH mbr-fullscreen" id="form4-v">

    

    

    <div class="container-fluid">
        <div class="row content-wrapper justify-content-center">
            <div class="col-lg-3 offset-lg-1 mbr-form">
                <form action="./regis_drive_data.php" method="POST" class="mbr-form form-with-styler">
                    <div class="dragArea row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p class="mbr-text mbr-fonts-style mb-4 display-7">สมัครขับแกร็บวันนี้</p>
                        </div>
                        <div class="col-lg-6 col-md col-6 form-group">
                            <input type="text" name="driver_username" placeholder="username" class="form-control" value="" id="name-form4-y" Required >
                        </div>
                        <div class="col-lg-6 col-md col-6 form-group">
                            <input type="password" name="driver_password" placeholder="password" class="form-control" value="" id="email-form4-y" Required >
                        </div>
                        <div class="col-lg-12 col-md col-12 form-group" >
                            <input type="text" name="driver_name" placeholder="ชื่อจริง และ นามสกุล" class="form-control" value="" id="name-form4-v" pattern="(([\u0E01-\u0E4C]+)(\s+)([\u0E01-\u0E4C]+))||(([A-Za-z]+)(\s+)([A-Za-z]+))" Required>
                        </div>
                        <div class="col-lg-12 col-md col-12 form-group" >
                            <input type="text" name="driver_tel" placeholder="เบอร์โทรศัพท์"  class="form-control" value="" id="email-form4-v" pattern="[0-9]{10}">
                        </div>
                        <div class="col-lg-12 col-md col-12 form-group" >
                            <input type="text" name="driver_earn_acc_no" placeholder="หมายเลขบัญชี"  class="form-control" value="" id="email-form4-v" Required>
                        </div>
                        <div class="col-lg-12 col-md col-12 form-group">
                        <?php
                                // type_cus_status Query from Table
                                require('../connect.php');
                                $sql = '
                                    SELECT ID_driver_status,driver_status_name
                                    FROM driver_status;
                                ';
                                $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
                            ?>
                            <select name="ID_driver_status" Required class="form-control">
                                <?php
                                    while ($objResult = mysqli_fetch_array($objQuery)) {
                                ?>
                                <option value=<?php echo $objResult["ID_driver_status"]; ?>>
                                <?php echo $objResult["driver_status_name"]; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-12 col-md-auto mbr-section-btn"><button type="submit" class="btn btn-primary display-4">ส่งข้อมูล</button></div>
                    </div>
                </form>
            </div>
            <div class="col-lg-7 offset-lg-1 col-12">
                <div class="image-wrapper">
                    <img class="w-100" src="assets/images/covid-image-delivery-services2x-1052x1168.jpg" alt="Grab">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="video1 cid-sboKCjayEr" id="video1-u">
    
    
    <div class="align-center container-fluid">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style mb-0 display-2"><strong>วิธีสมัครเป็นคนขับแกร็บฟู๊ด</strong></h4>
            
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-12 col-lg-10">
                <div class="box">
                    <div class="mbr-media show-modal align-center" data-modal=".modalWindow">
                        <img src="assets/images/mbr-1920x1280.jpg" alt="Grab">
                        <div class="icon-wrap">
                            <span class="mbr-iconfont socicon-youtube socicon"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="modalWindow" style="display: none;">
            <div class="modalWindow-container">
                <div class="modalWindow-video-container">
                    <div class="modalWindow-video">
                        <iframe width="100%" height="100%" frameborder="0" allowfullscreen="1" data-src="https://www.youtube.com/watch?v=BYG_K8zLIUE"></iframe>
                    </div>
                    <a class="close" role="button" data-dismiss="modal">
                        <span aria-hidden="true" class="mbr-iconfont mobi-mbri-close mobi-mbri closeModal"></span>
                        <span class="sr-only">Close</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="footer3 cid-s48P1Icc8J" once="footers" id="footer3-t">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu">
                    
                    
                    
                    
                    
                <li class="foot-menu-item mbr-fonts-style display-7"><a href="https://help.grab.com/passenger/th-th/" class="text-success text-primary" target="_blank">Help Center</a></li><li class="foot-menu-item mbr-fonts-style display-7"><a href="page2.html" class="text-success">Join Us</a></li><li class="foot-menu-item mbr-fonts-style display-7"><a href="index.html#top" class="text-success text-primary">Grab.com</a></li></ul>
            </div>
            <div class="row social-row">
                <div class="social-list align-right pb-2">
                    
                    
                    
                    
                    
                    
                <div class="soc-item">
                        <a href="#top" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social mobi-mbri-arrow-up mobi-mbri"></span>
                        </a>
                    </div></div>
            </div>
            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">GRAB FOOD PROJECT x KMUTNB STUDENT</p>
            </div>
        </div>
    </div>
</section><section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;"><a href="https://mobirise.site/v" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a><p style="flex: 0 0 auto; margin:0; padding-right:1rem;">How to make your own site - <a href="https://mobirise.site/x" style="color:#aaa;">Check it out</a></p></section><script src="assets/web/assets/jquery/jquery.min.js"></script>  <script src="assets/popper/popper.min.js"></script>  <script src="assets/tether/tether.min.js"></script>  <script src="assets/bootstrap/js/bootstrap.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/dropdown/js/nav-dropdown.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>  <script src="assets/playervimeo/vimeo_player.js"></script>  <script src="assets/theme/js/script.js"></script>  <script src="assets/formoid/formoid.min.js"></script>  
  
  
</body>
</html>