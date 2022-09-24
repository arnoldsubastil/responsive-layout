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
    <title>About | HopeFreely</title>
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
    <section class="home-about about-page">
        <div class="container">
            <div class="column-1">
            <div class="detail-box">
                <div class="heading_container">
                <h2 class="inner-page-title">
                    <span>An Ideal</span>  of Hope
                </h2>
                </div>
                <p>
                I prefer to live in hope rather than despair.
                </p>
                <p>
                Not that I ignore life’s painful experiences. Heaven knows that the “moment that changes one’s life” can show up in a flash. Note, that includes positive episodes.
                </p>
                <p>
                But instead of falling into a downward spiral, I can choose to view my circumstances as either
                </p>
                <p>
                A death rattle or the birth pangs of new possibilities.
                </p>
                <p>
                I choose hope over despair based on a deep-seated conviction that
                </p>
                <p>
                The future, however, is finer than any past. — Pierre Teilhard de Chardin, The Making of a Mind
                </p>
                <p>
                Despite all my misgivings, I know in my bones that there is a unifying and loving Presence, impossible to describe and difficult to deny in the universe. It connects us with love for all creation and each other.

                </p>
                <p>
                With that foundation of hope my wife and I sat down on the eve of my 80th birthday and rehearsed our hopes. We did not resurrect the usual suspects that make their way into most resolutions. We did not discuss exercising more, losing weight, and reading more books.
                </p>
                <p>
                Instead, we discussed hope-based intentions. We are already starting to see intentions begin to bear fruit. As the saying goes “When the student is ready the teacher appears”
                </p>
                <p>
                Our Intentions
                </p>
                <p>
                Go inward on a daily basis to the place of silence.
                </p>
                <p>
                Here I will listen to my heart rather than my head for the voice of the inner unifying and loving Presence.
                </p>
                <p>It’s a way of connecting with our eternal consciousness</p>
                <p>
                First, we attend to whispers from that world. Then we take action.

                Old connections and new people come into my life on a weekly basis. This convinces me of the truth of synchronicity. For instance the other night I had a dream about some of my former students. Then the next day one of them reached out to me. Today a publisher contacted me about the possibility of producing my memoir
                </p>
                <p>
                Develop my intuitive and gut-level ways of knowing.

                The next day I listened to a taped session that Kris had with a spiritual director 25 years ago. He intuited that g-d would bring someone into her life to deepen her own spiritual journey and affirm her to the depths of her being. That session occurred two months before we met 25 years ago.

                Listening with the heart is my new aspiration. But first I have to
                </p>
                <p>
                Discard useless emotions like resentment and bitterness.

                Find a path through forgiveness. Some days later I had a conversation with a person whom I had carried deep hurt for thirty years. I was able to tell her that I carried no malice in my heart towards her and affirmed her for her contribution to my life.

                This includes surrounding ourselves with people who are energy boosters rather than energy drainers
                </p>
                <p>
                What intentions do you frame for yourself?
                </p>
            </div>
            </div>
            <div class="column-1">
            <div class="img-box">
                <img src="assets/images/layout/ceo.png" alt="">
            </div>
            </div>
        </div>
    </section>
    
    <section class="footer_section">
        <?php include_once('footer.php'); ?>
    </section>
</body>
</html>