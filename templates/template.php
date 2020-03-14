<?php
header('Access-Control-Allow-Origin: http://mangadex.org', false);
header("Access-Control-Allow-Origin: *");
header("Access-Control-Expose-Headers: Content-Length, X-JSON");
header("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: *");
include 'mal.php';
// include 'search.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title> Project </title>

    <link rel="stylesheet" href="css/build.css">
    <link rel="stylesheet" href="css/waves.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="scripts/bigSlide.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <!-- <script defer src="https://use.fontawesome.com/releases/v5.3.1/scripts/all.js"></script> -->
    <link rel="stylesheet" href="css/bulma.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/font-pkg.css" />
    <link rel="stylesheet" type="text/css" href="packages/glide/dist/css/glide.core.min.css" />
    <link rel="stylesheet" type="text/css" href="packages/glide/dist/css/glide.theme.min.css" />
    <link rel="stylesheet" type="text/css" href="packages/loading/loading-bar.css" />

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
                    <a class="navbar-item" href="https://bulma.io">
                        <img src="images/mangasea-logo.PNG" width="112" height="28">
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
                        <a class="navbar-item">
                            Home
                        </a>
                        <a class="navbar-item">
                            Library
                        </a>
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link">
                                My Profile
                            </a>
                            <div class="navbar-dropdown">
                                <a class="navbar-item">
                                    Account Details
                                </a>
                                <a class="navbar-item">
                                    Progress
                                </a>
                                <a class="navbar-item">

                                </a>
                                <hr class="navbar-divider">
                                <a class="navbar-item">
                                    Report an issue
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="navbar-end ">
                        <div class="navbar-item ">
                            <div class="buttons">
                                <a class="button  is-primary is-full is-full-width">
                                    <figure class="image is-pulled-left is-16x16" style="top:2px; left: 5px;">
                                        <img src="images/favicon.ico">
                                    </figure>
                                    <div class="column is-one-fifth">

                                    </div>
                                    <strong class="is-pulled-right">Sync now</strong>
                                </a>
                            </div>
                        </div>
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
            <!-- <section class="hero is-medium is-link is-bold bgg-img">
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
            </section> -->
            <section class="hero is-medium is-white is-bold">
                <div class="hero-body">
                    <div class="container">
                        <h1 class="title has-text-centered">
                            Start Recommending
                            <br><br>
                        </h1>
                        <h2 class="subtitle">
                            <form name="form" action="" method="post">
                                <div class=" field has-addons">

                                    <div class="control is-centered">
                                        <div class="select">
                                            <select name="type" id="comboBox" onchange="getval(this);">
                                                <option disabled selected value> Type? </option>
                                                <option value="anime">Anime</option>
                                                <option value="manga">Manga</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control is-expanded is-centered">
                                        <input class="input " type="text" name="searchValue" id="changeText" placeholder="Enter a title?">
                                    </div>

                                    <div class="control">
                                        <input class="button is-info" type="submit" name="search" value="Search">
                                    </div>

                                </div>
                            </form>
                        </h2>

                        <div class="columns container is-multiline">
                            <!-- columns -->
                            <div class="column level item container ">
                                <div class="section is-marginless is-paddingless">
                                    <div class="card is-horizontal columns wrapping">
                                        <div class="card-image column is-three-quarters" style="max-width: 145px;">
                                            <figure class="image glide-image">
                                                <!-- IMAGE -->
                                                <img src="images/samples/101302l.jpg" alt="sample">
                                            </figure>
                                            <!-- data-preset="bubble"  -->
                                            <!-- SCORE -->
                                            <div class="ldBar label-center" data-value="35" data-type="fill" data-path="M10 10L90 10L90 90L10 90Z" data-fill="data:ldbar/res,bubble(#248,#fff,50,1)" style="bottom:159px; left: 490px; position:absolute; width:60px; height:60px"></div>
                                            <div class="level-right">
                                                <button class="button add-title is-pulled-left is-info" style="bottom:20px; left: 20px">
                                                    <span class="icon is-small">
                                                        <i class="fas fa-plus"></i>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-content column is-two-fifths outer">
                                            <div class="media">
                                                <div class="media-content">
                                                    <!-- TITLE -->
                                                    <p class="title col-title is-4"></p>
                                                    <!-- TAGS -->
                                                    <p class="subtitle tags has-addons is-6">
                                                        <span class="tag is-link is-marginless"></span>
                                                        <span class="tag is-info is-marginless"></span>
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- SYNOPSIS -->
                                            <div class="content has-text-justified wrap-length inner" id="clamp" style="height: 100px; bottom: 10px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="column level anime container ">
                                <div class="section is-marginless is-paddingless">
                                    <div class="card is-horizontal columns wrapping">
                                        <div class="card-image column is-three-quarters" style="max-width: 145px;">
                                            <figure class="image glide-image">
                                                <img src="images/samples/101302l.jpg" alt="sample">
                                            </figure>
                                            <div class="level-right">
                                                <button class="button add-title is-pulled-left is-info is-rounded" style="bottom:20px; left: 20px">
                                                    <span class="icon is-small">
                                                        <i class="fas fa-plus"></i>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-content column is-two-fifths">
                                            <div class="media">
                                                <div class="media-content">
                                                    <p class="title col-title is-4">Kyokou Suiri</p>
                                                    <p class="subtitle is-6"><span class="tag is-link">Mystery</span></p>
                                                </div>

                                            </div>
                                            <div class="content has-text-justified wrap-length fade" id="clamp" style="height: 100px;">
                                                At the young age of 11, Kotoko Iwanaga was abducted by youkai for two weeks and asked to become their "God of Wisdom," a mediator between the spirit and human worlds, to which the girl quickly agreed but at the cost of her right eye and left leg. Now, six years later, whenever youkai wish for their problems to be solved, they make their way to Kotoko for consultation.

                                                Meanwhile, Kurou Sakuragawa, a 22-year-old university student, has just broken up with his girlfriend after he fled alone when the two encountered a kappa. Seeing this as her chance to become closer with him, Kotoko immediately makes her move, hoping to get married to Kurou one day. However, she quickly realizes there is something more to Kurou. With this knowledge, she asks for his help in solving the various issues presented by the supernatural, all the while wishing her newfound partner will eventually reciprocate her feelings.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- GENERATE TITLES HERE -->
                            <?php
                            include 'search.php';
                            ?>
                        </div>
                    </div>
                </div>
    </div>
    </section>

    <!-- 2nd Herobanner: Describe -->
    <!-- <section class="hero is-medium is-light is-bold">
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
                                    <p class="subtitle">Export your list as a share-able image</p>
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
            </section> -->
    <!-- <section class="hero is-info is-bold">
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
            </section> -->
    <!-- Force login -->
    <!-- <div class="hero ">
                <div class="hero-head"></div>
                <div class="hero-body is-large cont-img">
                    <div class="container columns has-text-centered">

                        <div style="height: 2em;"></div>
                        <div class="column has-background-dark">
                            <div class="field">
                                <p class="control has-icons-left has-icons-right">
                                    <input class="input" type="email" placeholder="Email">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                    <span class="icon is-small is-right">
                                        <i class="fas fa-check"></i>
                                    </span>
                                </p>
                            </div>
                            <div class="field">
                                <p class="control has-icons-left">
                                    <input class="input" type="password" placeholder="Password">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="column"></div>
                        <div class="column"></div>

                    </div>
                </div>
            </div> -->
    </section>
    <!-- Breadcrumbs + News Content -->
    <!-- <section class="section hero ">
            <div class="container is-fluid" style="background:transparent;">
                <nav class="breadcrumb" aria-label="breadcrumbs">
                    <ul>
                        <li>
                            <a href="#">
                                <span class="icon is-small has-text-white">
                                    <i class="fas fa-home" aria-hidden="true"></i>
                                </span>
                                <span class="has-text-white">mangaSea</span>
                            </a>
                        </li>
                    </ul>
                </nav>

                <div class="tile is-ancestor">
                    <div class="tile is-parent">
                        <div class="tile is-child box">
                            <p class="title">News:</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut. Morbi maximus, leo sit amet vehicula eleifend, nunc dui porta orci, quis semper odio felis ut quam.</p>
                            <p>Suspendisse varius ligula in molestie lacinia. Maecenas varius eget ligula a sagittis. Pellentesque interdum, nisl nec interdum maximus, augue diam porttitor lorem, et sollicitudin felis neque sit amet erat. Maecenas imperdiet felis nisi, fringilla luctus felis hendrerit sit amet. Aenean vitae gravida diam, finibus dignissim turpis. Sed eget varius ligula, at volutpat tortor.</p>
                            <p>Integer sollicitudin, tortor a mattis commodo, velit urna rhoncus erat, vitae congue lectus dolor consequat libero. Donec leo ligula, maximus et pellentesque sed, gravida a metus. Cras ullamcorper a nunc ac porta. Aliquam ut aliquet lacus, quis faucibus libero. Quisque non semper leo.</p>
                        </div>
                    </div>
                    <div class="tile is-4 is-vertical is-parent">
                        <div class="tile is-child box">
                            <p class="title">Featured Item:</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
                        </div>
                        <div class="tile is-child box">
                            <p class="title">Trending:</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br><br><br><br><br><br>
        <div style="height: 7em;"></div>
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
    <script type="text/javascript" src="packages/loading/loading-bar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script src="packages/glide/dist/glide.min.js"></script>
    <script>
        const config = {
            type: "carousel",
            dragDistance: false,
            touchDistance: false,
            touchRatio: 0,
            allowTouchMove: false,
            perView: 2
        };
        unbindSwipeMove();
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