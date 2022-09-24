<!DOCTYPE html>
<head>
    <?php
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "https://zenquotes.io/api/quotes");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output = json_decode(curl_exec($curl));
    curl_close($curl);
    
    $curl2 = curl_init();
    curl_setopt($curl2, CURLOPT_URL, "https://newsapi.org/v2/everything?q=hope&from=2022-08-24&sortBy=publishedAt&apiKey=1937ca6d2a5d45109adbb03b68fcb0ef");
    $agent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)';
    curl_setopt($curl2, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl2, CURLOPT_USERAGENT, $agent);
    $result = json_decode(curl_exec($curl2));
    $output_article = $result->articles;
    ?>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Articles | HopeFreely</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/article.css'>
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
        <div class="container article-container">
            <div class="heading_container">
                <h2 class="top-page-layout-h2">
                NEWS <span>AND</span> ARTICLES
                </h2>
            </div>
            <p>
            Hope helps us to ignore the sufferings of the present. When we stay positive about our future, and feel that we have to fight to win the problems, our probability to succeed increases. It happens because we fight trying to stay mentally strong and give our best efforts. Hope is a belief.

            </p>
            
            <?php
                foreach($output_article as $article){
                    echo '<div class="article-tab">
                            <div class="article-image">
                                <img src="'.$article->urlToImage.'" alt="" />
                            </div>
                            <div class="article-content">
                                <h3>'.$article->title.'</h3>
                                <h4>By: '.$article->author.'</h4>
                            </div>
                            <div class="article-description">
                                <p>'.$article->description.' <a href="'.$article->url.'">Read More...</a></p>
                                
                            </div>
                        </div>';
                }
            ?>
        
        </div>
    </section>
    
    
    <section class="footer_section">
        <?php include_once('footer.php'); ?>
    </section>
</body>
</html>