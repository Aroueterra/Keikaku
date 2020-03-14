<?php
header('Access-Control-Allow-Origin: http://mangadex.org', false);
header("Access-Control-Allow-Origin: *");
header("Access-Control-Expose-Headers: Content-Length, X-JSON");
header("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: *");
include 'mal.php';
?>
<html>

<head>
    <title> Keikaku </title>

    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/waves.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="scripts/bigSlide.js"></script>
    <link rel="stylesheet" type="text/css" href="css/font-pkg.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <!-- <script defer src="https://use.fontawesome.com/releases/v5.3.1/scripts/all.js"></script> -->
    <link rel="stylesheet" href="css/bulma.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="packages/glide/dist/css/glide.core.min.css" />
    <link rel="stylesheet" type="text/css" href="packages/glide/dist/css/glide.theme.min.css" />
    <style>
        .footer {
            clear: both;
            position: relative;
            Width: 100%;
            bottom: 0;
        }
    </style>
</head>

<body>



    <div class="wrapper">
        <!-- Navbar super -->
        <section class="section ">
            <nav class="navbar" role="navigation" aria-label="main navigation">
                <!-- Branding -->
                <div class="navbar-brand">
                    <a class="navbar-item" href="index.php">
                        <img src="images/keikaku-b.png" width="112" height="28">
                    </a>

                    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navMenu">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>
                <!-- Navigation bar -->
                <div id="navbarBasicExample" class="navbar-menu">
                    <div class="navbar-start">
                        <a class="navbar-item" href="index.php">
                            Home
                        </a>
                        <a class="navbar-item" href="build.php">
                            Build
                        </a>

                    </div>

                    <div class="navbar-end ">
                        <form action="plan.php" method="get">
                            <a class="navbar-item is-hoverable is-paddingless is-marginless " style="padding-right: 10px;">
                                <div class="field has-addons is-marginless is-paddingless">
                                    <div class="control is-marginless is-paddingless">
                                        <input class="input is-small " name="code" placeholder="code" type="text" style="margin-top:12px;  margin-bottom:0px;">
                                    </div>
                                    <div class="control">
                                        <input class="button is-small is-rounded " type="submit" style="margin-top:12px; margin-right:12px; margin-bottom:0px;">
                                    </div>
                                </div>
                            </a>
                        </form>
                    </div>
                </div>
            </nav>

            <!-- Title banner -->
            <div class="hero ">
                <div class="hero-head"></div>
                <div class="hero-body is-large bg-img">
                    <div class="container ">
                        <p class="title has-text-centered has-text-white is-size-1" style="font-family: 'Betm';">
                            KEI<span class="has-text-primary has-text-weight-semibold">KAKU</span>
                        </p>
                        <p class="subtitle has-text-centered has-text-grey-dark is-size-7" style="font-family: 'Betm';">
                            Translator's note: keikaku means plan
                        </p>
                    </div>
                </div>
            </div>
            <!-- 1st Herobanner: Search -->
            <section class="hero is-medium is-link is-bold bgg-img">
                <div class="hero-body ">

                    <div class="container level">
                        <div class="">
                            <h1 class="title has-text-centered has-text-light">
                                Instant recommendations
                            </h1>
                            <br>
                            <h2 class="subtitle has-text-centered has-text-light">
                                Save yourself the trouble of collecting the titles yourselves
                            </h2>
                            <h2 class="subtitle has-text-centered has-text-light">
                                Share your top ten list in seconds
                            </h2>
                            <h2 class="subtitle has-text-centered has-text-light">
                                Account creation is optional
                            </h2>
                        </div>
                        <div class="level-right">
                            <img class="" style="max-height:180px; position: relative; left:230px;z-index:20; top:70px;" src="images/list2.png" />
                            <img class="level-item" style="max-height:300px; position: relative; z-index:1; right: 100px;" src="images/popcorn.png" />


                        </div>

                    </div>
                </div>
            </section>
            
            <!-- 2nd Herobanner: Describe -->
            <section class="hero is-medium is-light is-bold">
                <div class="hero-body">
                    <div class="container">
                        <nav class="level">
                            <div class="level-item has-text-centered">
                                <div>
                                    <img class="level-item" style="max-height:60px;" src="images/blocks.png" />
                                    <p class="title">Build</p>
                                    <br>
                                    <p class="subtitle">Construct your list title-by-title</p>
                                </div>
                            </div>
                            <div class="level-item has-text-centered">
                                <div>
                                    <img class="level-item" style="max-height:60px;" src="images/shas.png" />

                                    <p class="title">Share</p>
                                    <br>
                                    <p class="subtitle">Find stuff that interest everyone</p>
                                </div>
                            </div>
                            <div class="level-item has-text-centered">
                                <div>
                                    <img class="level-item" style="max-height:60px;" src="images/glow.png" />

                                    <p class="title">Access</p>
                                    <br>
                                    <p class="subtitle">Save or retrieve using a public key</p>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </section>
            <section class="hero is-info is-bold">
                <div class="hero-body">
                    <div class="container">
                        <h1 class="title has-text-right">
                            Get Started
                        </h1>

                        <button class="button is-primary is-large is-pulled-right ">
                            <span class="icon is-medium">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </button>

                    </div>
                </div>
            </section>
            

        </section>
        <!-- Breadcrumbs + News Content -->
        <section class="section hero ">
            <div class="container is-fluid" style="background:transparent;">
                <nav class="breadcrumb" aria-label="breadcrumbs">
                    <ul>
                        <li>
                            <a href="#">
                                <span class="icon is-small has-text-white">
                                    <i class="fas fa-home" aria-hidden="true"></i>
                                </span>
                                <span class="has-text-white">Keikaku</span>
                            </a>
                        </li>
                    </ul>
                </nav>

                <div class="tile is-ancestor">
                    <div class="tile is-parent">
                        <div class="tile is-child box">
                            <p class="title">News:</p>
                            <p>Version 1.0 release of Keikaku, your anime sharing solution!</p>
                            <p>With this version, we've implemented a temporary measure of using the facebook API, however, due to the lack of a proper SSL certificate, we cannot offer the full features available to us.</p>
                            <p>For now, it is used to query your name and avatar without you having to assign anything further. In the future, we will enable global statistics to track anime popularity by region through this.</p>
                        </div>
                    </div>
                    <div class="tile is-4 is-vertical is-parent">
                        <div class="tile is-child box">
                            <p class="title">Featured Item:</p>
                            <p>We've enabled the comparative ranking statistic chart and the cumulative durations chart to help viewers find out whether to stick to the list or choose stuff that interest them.</p>
                        </div>
                        <div class="tile is-child box">
                            <p class="title">Trending:</p>
                            <p>Nothing to view here yet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br><br><br><br><br><br>
        <div style="height: 7em;"></div>
    </div>
    <!-- <div class="glide">
        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
                <li class="glide__slide">
                    <div class="gala-desc card">
                        <div class="card-image">
                            <figure class="gala image is-225x319">
                                <img src="https://bulma.io/images/placeholders/480x600.png" alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <?php

                                    ?>
                                    <p class="title is-4">John Smith</p>
                                    <p class="subtitle is-6">@johnsmith</p>
                                </div>
                            </div>

                            <div class="content">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                                <a href="#">#css</a> <a href="#">#responsive</a>
                                <br>
                                <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="glide__slide">
                    <div class="gala-desc card">
                        <div class="card-image">
                            <figure class="gala image is-225x319">
                                <img src="https://bulma.io/images/placeholders/480x600.png" alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <?php

                                    ?>
                                    <p class="title is-4">John Smith</p>
                                    <p class="subtitle is-6">@johnsmith</p>
                                </div>
                            </div>

                            <div class="content">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                                <a href="#">#css</a> <a href="#">#responsive</a>
                                <br>
                                <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left" data-glide-dir="<">prev</button>
            <button class="glide__arrow glide__arrow--right" data-glide-dir=">">next</button>
        </div>
    </div> -->
    <!-- Footer Waves -->
    <footer class="footer is-paddingless" style="background:transparent;">
        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.8" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.9)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.6)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                </g>
            </svg>
        </div>

        </div>
        <div class="content flex">
            <p> Copyright | 2019</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="css/slick/slick.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script src="packages/glide/dist/glide.min.js"></script>
    <script>
        const config = {
            type: "carousel",
            perView: 2
        };
        new Glide('.glide', config).mount()
    </script>
    <script src="bigSlide.js"></script>
    <script src="scripts/timing.js"></script>
    <script src="scripts/carousel.js"></script>
    <script src="scripts/burger.js"></script>
    <script>
        $(document).ready(function() {
            $('.menu-link').bigSlide();
        });
    </script>
</body>

</html>