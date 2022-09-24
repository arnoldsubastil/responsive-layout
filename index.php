<!DOCTYPE html>
<head>
    <?php
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "https://zenquotes.io/api/quotes");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output = json_decode(curl_exec($curl));
    curl_close($curl);

    $imagesDir = 'assets/images/tips/';
    $images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
    
    ?>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Home | HopeFreely</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/responsive.css'>
    
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/owlcarousel/owl.carousel.js"></script>
    <script src='assets/js/main.js'></script>
</head>
<body>
    <div class="hero">
        <?php include_once('header.php'); ?>
        <section class="upper-section">
            <div class="slide-section">
                <div class="owl-carousel owl-theme">
                    <?php
                        foreach ($output as $value) {
                            echo '<div class="item">
                            <h4>'.$value->q.'</h4>
                            <p>'.$value->a.'</p>
                            </div>';
                        }
                    ?>
                </div>
            </div>

        </section>
    </div>
    <section class="home-info">
        <div class="container">
        <div class="heading_container">
            <h2 class="top-page-layout-h2">
            WHO <span>ARE WE</span>
            </h2>
        </div>
        <p>
        Hope helps us to ignore the sufferings of the present. When we stay positive about our future, and feel that we have to fight to win the problems, our probability to succeed increases. It happens because we fight trying to stay mentally strong and give our best efforts. Hope is a belief.

        </p>
        <div class="carousel-wrap layout_padding2-top ">
            <div class="owl-carousel">
                
                <?php
                    foreach ($images as $myimage) {
                        echo '<div class="item">
                                    <div class="content">
                                    <div class="img-box">
                                    
                                        <img src="'.$myimage.'" alt="">
                                    </div>
                                    </div>
                                </div>';
                    }
                ?>
                
            
            </div>
        </div>
        </div>
    </section>
    <section class="home-about">
        <div class="container">
        <div class="row">
            <div class="column-1">
            <div class="detail-box">
                <div class="heading_container">
                <h2 class="inner-page-title">
                    <span>An Ideal</span>  of Hope
                </h2>
                </div>
                <p>
                The dictionary describes hope as a feeling of expectation and desire for a certain thing to happen.  An Ideal is described as satisfying one's conception of what is perfect; most suitable. In conclusion, it is safe to say that when you combine those two words together you “have an expectation and desire for what is most suitable for yourself.” Author Julie Neraas describes Hope in this way,
                </p>
                <p>
                    “Hope in contrast with religion, seems refreshingly spacious. It is roomier and more inclusive because it does not require assent to particular beliefs, nor is it wedded to ideology. Indeed, hope, while necessary to our well-being, can exist with equal strength within religious traditions and outside of them.
                </p>
            </div>
            </div>
            <div class="column-1">
            <div class="img-box">
                <img src="assets/images/layout/about-img.png" alt="">
            </div>
            </div>
        </div>
        </div>
    </section>
    <section class="home-location">
         <div class="page-title">
           <h2 class="top-page-layout-h2">Locate Us to Help!</h2>
         </div>
        <div class="map_section layout_padding-top">
        <div class="map-responsive">
                <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Filinvest%20City%20Events%20Grounds&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org"></a><br><style>.mapouter{position:relative;text-align:right}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important}</style></div></div>
        </div>
        </div>
    </section>
    <section class="footer_section">
        <?php include_once('footer.php'); ?>
    </section>
</body>
</html>