<?php
session_start();
header('Access-Control-Allow-Origin: http://mangadex.org', false);
header("Access-Control-Allow-Origin: *");
header("Access-Control-Expose-Headers: Content-Length, X-JSON");
header("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: *");
// include 'mal.php';
// include 'search.php';

?>

<!DOCTYPE html>
<html>

<head>
    <title> Build | Keikaku </title>
    <link rel="stylesheet" href="css/build.css">
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="css/bulma.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/font-pkg.css" />
    <link rel="stylesheet" type="text/css" href="css/bulma-social.min.css" />
    <link rel="stylesheet" type="text/css" href="packages/loading/loading-bar.css" />
    <script type="text/javascript">
        if (window.location.hash && window.location.hash == '#_=_') {
            if (window.history && history.pushState) {
                window.history.pushState("", document.title, window.location.pathname);
            } else {
                // Prevent scrolling by storing the page's current scroll offset
                var scroll = {
                    top: document.body.scrollTop,
                    left: document.body.scrollLeft
                };
                window.location.hash = '';
                // Restore the scroll offset, should be flicker free
                document.body.scrollTop = scroll.top;
                document.body.scrollLeft = scroll.left;
            }
        }
    </script>
    <style>
        .footer {
            clear: both;
            position: relative;
            Width: 100%;
            bottom: 0;
            top: 200px;
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
            <div class="hero mascot-wrapper">
                <div class="hero-head"></div>
                <div class="hero-body  hide is-large bg-img">

                    <div class="container headings ">

                        <p class="title im has-text-centered has-text-white is-size-1" style="font-family: 'Betm';">
                            KEI<span class="has-text-primary has-text-weight-semibold">KAKU</span>
                        </p>
                        <p class="subtitle im has-text-centered has-text-grey-dark is-size-7" style="font-family: 'Betm';">
                            Translator's note: keikaku means plan
                        </p>

                        <img class="fade mascot mascots imgs" id="mascot" data-tippy-content="<?php 'timeCheck.php' ?>" data-placement="top" src="images/mascot-sm.png" alt="sample">

                    </div>
                </div>
            </div>
    </div>
    <section class="hero is-info is-bold">
        <div class="hero-body">
            <div class="container">
                <figure class="image img-wrapper glide-image">
                    <img class="counting" src="images/one.png" alt="sample">
                </figure>
                <h1 class="title">
                    &nbsp Choose your identification method
                </h1>
                <br>
                <h2 class="subtitle">

                    <div class="field is-horizontal">

                        <div class="field-label is-normal has-text-white">
                            <label class="label has-text-white">Anonymous</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control is-normal">
                                    <input id="anon" class="input anon <?php if (isset($_SESSION['fb_access_token'])) {
                                                                            echo "is-danger";
                                                                        } ?> " <?php if (isset($_SESSION['fb_access_token'])) {
                                                                                    echo "disabled";
                                                                                } ?> type="text" placeholder="What should we call you?">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="or">OR</div>
                    <div class="field is-horizontal">
                        <div class="field-label is-normal ">

                            <label class="label has-text-white">Facebook</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control is-normal">
                                    <?php include 'LoginScript.php'; ?><?php
                                                                        include 'userDetails.php';
                                                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </h2>

            </div>
        </div>
    </section>
    <section class="hero is-medium is-white is-bold">

        <div class="hero-body">
            <div class="container">
                <figure class="image img-wrapper glide-image">
                    <img class="counting" src="images/two.png" alt="sample">
                </figure>

                <h1 class="title">
                    &nbsp Build your list
                    <br><br>
                </h1>
                <!-- GENERATE TITLES HERE -->

                <h2 class="subtitle">
                    <form name="form" action="" method="post">
                        <div class="columns is-multiline">

                            <!-- <figure class="column image img-wrapper glide-image">
                                        <div class="title-overlay"></div>
                                        <div class="img-overlay"> <button class="button is-info is-small btn-delete" value="11741" onclick="btnDelete(this)"><span class="icon is-small">
                                                    <i class="fas fa-times"></i>
                                                </span></button></div>
                                        <img class="s-img " src="images/samples/101302l.jpg" alt="sample">
                                    </figure> -->
                            <!-- OUTPUT SESSION -->
                            <?php include 'add-item.php'; ?>
                        </div>
                        <div class=" field has-addons">
                            <!-- TYPE -->
                            <div class="control is-centered">
                                <div class="select">
                                    <select name="type" id="comboBox" onchange="getval(this);">
                                        <option disabled selected value> Format: </option>
                                        <option value="anime">Anime</option>
                                        <option value="season">Season</option>
                                    </select>
                                </div>
                            </div>
                            <!-- SEARCH -->
                            <div class="control is-expanded is-centered">
                                <input class="input " type="text" name="searchValue" id="changeText" placeholder="Enter a title?">
                            </div>
                            <div class="control">
                                <input class="button is-info default" type="submit" name="search" id="submitSearch" value="Search">
                            </div>
                        </div>

                    </form>
                </h2>
                
                <form name="form" action="" method="post">
                    <div class="columns is-multiline">
                        <template>
                            <div class="column level item container ">
                                <div class="section is-marginless is-paddingless">
                                    <div class="card element-item is-horizontal columns wrapping">
                                        <div class="card-image column level is-three-quarters" style="max-width: 145px;">
                                            <figure class="image glide-image">
                                                <!-- IMAGE -->
                                                <img class="g-img " src="images/samples/101302l.jpg" alt="sample">
                                            </figure>
                                            <div class="level-left">
                                                <span class="tag is-light is-rounded is-marginless "></span>
                                            </div>
                                            <div class="level-right">
                                                <!-- <input class="button add-title is-pulled-left is-info" style="bottom:40px; left: 20px"> -->
                                                <button class="button add-title is-pulled-left is-info" name="add-item" value="temp" style="bottom:40px; left: 20px">
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
                                                        <span class="tag is-link is-marginless ">Genre:</span>
                                                        <span class="tag is-info is-marginless"></span>
                                                        <span class="tag is-info is-marginless"></span>
                                                        <span class="tag is-link is-marginless ">Score:</span>
                                                        <span class="tag is-success is-marginless sc" data-value=""></span>
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
                        </template>
                        <!-- GENERATE TITLES HERE -->
                        <?php
                        include 'search.php';
                        ?>
                    </div>
                </form>
            </div>
        </div>
        <form method="POST" action="customize.php">
            <div class=" field" id="replacer">
                <p class="control">
                    <button class="button proceed is-primary is-fullwidth is-expanded" id="proceed" name="proceed" type="submit" value="">
                        <span>Personalize</span>
                        <span class="icon is-medium">
                            <i class="fas fa-arrow-right"></i>
                        </span>
                    </button>
                </p>
            </div>
        </form>
    </section>
    </section>
    </div>
    
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
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="scripts/isotope.pkgd.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script src="scripts/cbr.js"></script>
    <script src="scripts/build.js"></script>
    <script src="scripts/carousel.js"></script>
    <script src="scripts/pace.min.js"></script>
    <script src="script.js"></script>
    <script src="https://unpkg.com/popper.js@1"></script>
    <script src="https://unpkg.com/tippy.js@5"></script>
    <script src="scripts/tippy.js"></script>
</body>

</html>