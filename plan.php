<?php
session_start();
header('Access-Control-Allow-Origin: http://mangadex.org', false);
header("Access-Control-Allow-Origin: *");
header("Access-Control-Expose-Headers: Content-Length, X-JSON");
header("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: *");
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // collect value of input field
//     $title = $_POST['title'];
//     $desc = $_POST['description'];
//     $avatar = $_POST['avatar'];
//     $name = $_POST['fname'];
//     $mal_id = $_SESSION['plan'];
//     $theme = $_POST['theme'];
//     // echo $title . " " . $desc . " " . $theme;
//     print_r($_POST);
//     $i = 1;
//     for ($i;; $i++) {
//         if (isset($_POST['comment' . $i]) && !empty($_POST['comment' . $i])) {

//         } else {
//             break;
//         }
//     }
//     $title = $_POST['comment1'];
//     // $title = $_POST['title'];
// }
// include 'mal.php';
// include 'search.php';

?>

<!DOCTYPE html>
<html>

<head>
    <title> Customize | Keikaku </title>
    <link rel="stylesheet" href="css/plan.css">
    <link rel="stylesheet" href="css/waves.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <link rel="stylesheet" href="css/modal-fx.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="css/bulma.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/font-pkg.css" />
    <link rel="stylesheet" type="text/css" href="css/bulma-social.min.css" />
    <link rel="stylesheet" type="text/css" href="packages/loading/loading-bar.css" />

    <link rel="stylesheet" href="css/chartist-plugin-tooltip.css" />

    <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <script type="text/javascript" src="scripts/html2canvas.js"></script>
    <script type="text/javascript">
        var Submit = function() {
            PrintDiv(document.getElementById("main_image"));
            // var convertMeToImg = $('#main_image')[0];
            // html2canvas(convertMeToImg, {
            //     onrendered: function(canvas) {
            //         document.body.appendChild(canvas);
            //     }
            // });
            // var convertMeToImg = $('#save2img')[0];
            // html2canvas(convertMeToImg).then(function(canvas) {
            //     document.body.appendChild(canvas);
            // });

        };

        function PrintDiv(div) {
            html2canvas((div), {
                onrendered: function(canvas) {
                    var myImage = canvas.toDataURL();
                    downloadURI(myImage, "MaSimulation.png");
                }
            });
        }

        function downloadURI(uri, name) {
            var link = document.createElement("a");

            link.download = name;
            link.href = uri;
            document.body.appendChild(link);
            link.click();
            //after creating link you should delete dynamic link
            //clearDynamicLink(link); 
        }
    </script>
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
    <?php
    $valid = false;
    $fb_user = false;
    $fb_row = array();
    $row = array();

    if (($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['code'])) && !empty($_GET['code'])) {
        $code = $_GET['code'];
        include 'config.php';
        $sql = "SELECT * from plan where code='$code'";
        $mal_ids = array();
        if ($plan = mysqli_query($mysqli, $sql)) {
            if (mysqli_num_rows($plan) > 0) {
                $row = mysqli_fetch_array($plan);
                $valid = true;
                $sql = "SELECT * from users where code='$code'";
                if ($fb_users = mysqli_query($mysqli, $sql)) {
                    if (mysqli_num_rows($fb_users) > 0) {
                        $fb_row = mysqli_fetch_array($fb_users);
                        $fb_user = true;
                    }
                }
                $sql = "SELECT * from visitors where code='$code'";
                if ($visitpage = mysqli_query($mysqli, $sql)) {
                    if (mysqli_num_rows($visitpage) > 0) {
                        $sql = "UPDATE visitors SET visits = visits+1 where code='$code'";
                        mysqli_query($mysqli, $sql);
                    } else {
                        $sql = "INSERT INTO visitors (code,visits) VALUES ('$code', 1)";
                        mysqli_query($mysqli, $sql);
                    }
                }
            } else {
                echo "<article class='message is-warning'><div class='message-header'><p>No such code detected. Try again!</p></div></article>";
                echo "<style> .hideme { display: none }  </style>";
            }
        } else {
            echo "<article class='message is-warning'><div class='message-header'><p>No such code detected. Try again!</p></div></article>";
        }
        mysqli_close($mysqli);
    } else {
        echo "<style> .hideme { display: none }  </style>";
    }

    // if (((!isset($_POST['proceed'])) || empty($_POST['proceed'])) && (!isset($_SESSION['fb_access_token'])) || (!isset($_POST['proceed']))) {
    //     echo "<style> .hideme { display: none }  </style>";
    //     echo "<style> .hideme { display: none }  </style>";
    //     echo "<article class='message is-warning'><div class='message-header'><p>No user name detected! Either log-in via facebook or enter an anonymous user name; you cannot proceed.</p></div></article>";
    // }
    // if (isset($_SESSION['plan']) && empty($_SESSION['plan']) || (!isset($_SESSION['plan']))) {
    //     echo "<style> .hideme { display: none }  </style>";
    //     echo "<style> .hideme { display: none }  </style>";
    //     echo "<article class='message is-warning'><div class='message-header'><p>No titles selected! Return and select some titles; you cannot proceed.</p></div></article>";
    // } else {
    // }
    ?>
    <meta property="og:url" content="localhost/keikaku/plan.php" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Your Website Title" />
    <meta property="og:description" content="Your description" />
    <meta property="og:image" content="fb-banner.png" />

</head>

<body>
    <!-- <button class="button modal-button" data-target="modal-id">Open modal</button>
    <button class="button modal-button" data-target="modal-id1">Open modal</button>
    <button class="button modal-button" data-target="modal-id2">Open modal</button> -->
    <!-- <a class="share-btn" href="https://www.facebook.com/sharer/sharer.php?app_id=[your_app_id]&sdk=joey&u=[full_article_url]&display=popup&ref=plugin&src=share_button" onclick="return !window.open(this.href, 'Facebook', 'width=640,height=580')"> -->
    
    <div class="wrapper" id="main_image">
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
                        <?php
                        if ($valid === true) {
                            $title = <<<heredoc
                            <p class="title im has-text-centered has-text-white is-size-1" style="font-family: 'Betm';">
                            KEI<span class="has-text-primary has-text-weight-semibold">KAKU</span>
                        </p>
                        <p class="subtitle im has-text-centered has-text-grey-dark is-size-7" style="font-family: 'Betm';">
                            Translator's note: keikaku means plan
                        </p>
heredoc;
                            echo $title;
                        } else {
                            $title = <<<heredoc
                            <p class="title im has-text-centered has-text-white is-size-1" style="font-family: 'Betm';">
                            KEI<span class="has-text-primary has-text-weight-semibold">KAKU</span>
                        </p>
                        <p class="subtitle im has-text-centered has-text-grey-dark is-size-7" style="font-family: 'Betm';">
                            Translator's note: keikaku means plan
                        </p>
heredoc;
                            echo $title;
                        }
                        ?>


                        <img class="fade mascot mascots imgs" id="mascot" data-tippy-content="<?php 'timeCheck.php' ?>" data-placement="top" src="<?php if ($valid === true) {
                                                                                                                                                        echo "images/mascot-sm.png";
                                                                                                                                                    } else {
                                                                                                                                                        echo "images/mascot-sm.png";
                                                                                                                                                    } ?>" alt="sample">
                    </div>
                </div>
            </div>
    </div>
    <section class="hero is-medium is-white is-bold">
        <div class="hero-body">
            <div class="container">
                <div class="title">
                    <?php if (isset($_SESSION['mycode']) && !empty($_SESSION['mycode'])) {
                        $c = $_SESSION['mycode'];
                        echo "<article class='notification is-info'><p class='has-text-white'> &nbsp Your code is ready: [ <span class='has-text-warning'>" . $c . " ]</span> </p><button class='delete'></button></article>";
                        unset($_SESSION['mycode']);
                        // echo "&nbsp Your code is ready: [" . $c . "]";
                    }
                    if (!empty($_SESSION['commented'])) {
                        echo "<article class='notification is-info'><p class='has-text-white'> &nbsp Your comment was sent! </p><button class='delete'></button></article>";
                        unset($_SESSION['commented']);
                    }
                    ?>
                </div>
                <div class="columns is-multiline hideme">
                    <div class="column  is-narrow">
                        <img class="image is-128x128 hideme" style="margin-left:4px" src="<?php if ($valid === true) {
                                                                                                if ($fb_user) {
                                                                                                    echo $fb_row['avatar'];
                                                                                                } else {
                                                                                                    echo $row['avatar'];
                                                                                                }
                                                                                            } ?>">
                        <content class="" style="font-family: 'Betm';" id="">
                            <article class="notification has-text-centered hideme  nametag" id="nametag">
                                <div class="shorten">
                                    <?php if ($valid === true) {
                                        if ($fb_user === true) {
                                            echo "<a style='margin-right: 10px;' href='{$fb_row['link']}'>{$fb_row['name']}</a>";
                                        } else {
                                            echo $row['name'];
                                        }
                                    } ?>
                                </div>
                            </article>
                        </content>
                    </div>
                    <div class="column">
                        <?php
                        if ($valid === true) {
                            $top = strtoupper($row['title']);
                            $bot = strtoupper($row['description']);
                            $title = <<<heredoc
                            <article class="message ">
                            <div class="message-body">
                        <p class="title im has-text-left has-text-grey-dark is-size-1" style="font-family: 'Betm';">
                        {$top}                     
                    </p>
                    <p class="subtitle im has-text-justified has-text-grey is-size-5" style="font-family: 'Betm';">
                        {$bot}
                    </p>
                    </div>
                    </article>
heredoc;
                            echo $title;
                        }
                        ?>
                    </div>
                </div>
                <section class="hero is-info hideme">
                    <div class="hero-foot">
                        <nav class="tabs is-boxed is-fullwidth is-large">
                            <div class="container">
                                <ul>
                                    <li class="tab is-active" onclick="openTab(event,'WebDev')"><a>Overview</a></li>
                                    <li class="tab" onclick="openTab(event,'WebAud')"><a>Statistics</a></li>
                                    <li class="tab" onclick="openTab(event,'Support')" style="display:none;"><a>Media</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </section>
                <?php include "planTitles.php"; ?>
                <div class="container section hideme">
                    <div id="WebDev" class="content-tab" style="max-height:150px;">

                        <h2 class="message is-info subtitle">
                            <div class="message-header ">
                                <h2 class="title has-text-white">Details</h2>
                            </div>
                            <div class="message-body has-text-white">
                                <?php include 'config.php'; ?>
                                <div class="columns">
                                    <div class="column">
                                        <p class="is-size-5 has-text-grey-dark has-text-weight-semibold">
                                            <span class="icon has-text-info">
                                                <i class="fas fa-tv"></i>
                                            </span><span class="is-size-6" id="info-titles"><?php echo " " . count($meta) . " Shows Listed" ?></span> </p>
                                        <p class="is-size-5 has-text-grey-dark has-text-weight-semibold">
                                            <span class="icon has-text-info">
                                                <i class="fas fa-hourglass-start"></i>
                                            </span> <span class="is-size-6" id="info-duration"><?php $e = minutesToHours(array_sum($Overview->get_episodes()) * array_sum($Overview->get_duration()));
                                                                                                if (strpos($e, ':') !== false) {
                                                                                                    $e = explode(":", $e);
                                                                                                    echo $e[0] . " Hours and " . $e[1] . " Minutes";
                                                                                                } else {
                                                                                                    echo $e;
                                                                                                }
                                                                                                ?></span> </p>
                                        <!-- <p class="is-size-5 has-text-grey-dark has-text-weight-semibold">
                                            <span class="icon has-text-info">
                                                <i class="fas fa-thumbs-up"></i>
                                            </span>
                                            <span class="is-size-6" id="info-up"><? //php // echo count($meta) 
                                                                                    ?></span> </p> -->

                                    </div>
                                    <div class="column">
                                        <p class="is-size-5 has-text-grey-dark has-text-weight-semibold">
                                            <span class="icon has-text-info">
                                                <i class="fas fa-eye"></i>
                                            </span> <span class="is-size-6" id="info-views"><?php $sql = "SELECT visits from visitors where code='$code'";
                                                                                            if ($visits = mysqli_query($mysqli, $sql)) {
                                                                                                $value = mysqli_fetch_object($visits);
                                                                                                echo $value->visits;
                                                                                            } else {
                                                                                                echo "Not enough data for output.";
                                                                                            }

                                                                                            ?></span> </p>
                                        <p class="is-size-5 has-text-grey-dark has-text-weight-semibold">

                                            <span class="icon has-text-info">
                                                <i class="fas fa-comments"></i>
                                            </span> <span class="is-size-6" id="info-com" data-tippy-content="Total Comment Count" data-placement="top"><?php
                                                                                                                                                        $sql = "SELECT * from comments where code='$code'";
                                                                                                                                                        if ($comments = mysqli_query($mysqli, $sql)) {
                                                                                                                                                            if (($count = mysqli_num_rows($comments)) > 0) {
                                                                                                                                                                if ($count > 1) {
                                                                                                                                                                    echo $count . " Thoughts to Share ";
                                                                                                                                                                } else {
                                                                                                                                                                    echo $count . " Thought to Share ";
                                                                                                                                                                }
                                                                                                                                                            }
                                                                                                                                                        } else {
                                                                                                                                                            echo "Not enough data for output.";
                                                                                                                                                        } ?></span> </p>
                                        <!-- <p class="is-size-5 has-text-grey-dark has-text-weight-semibold">
                                            <span class="icon has-text-info">
                                                <i class="fas fa-thumbs-down"></i>
                                            </span>
                                            <span class="is-size-6" id="info-down"><? //php // echo 7 . "" 
                                                                                    ?></span> </p> -->
                                    </div>
                                </div>


                            </div>
                        </h2>
                    </div>
                    <div id="WebAud" class="content-tab" style="display:none; max-height:162px;">
                        <div class="columns">
                            <div class="column">
                                <h2 class="subtitle has-text-grey-dark is-marginless">Duration in Minutes</h2>
                                <div class="ct-chart ct-golden-section" id="chart2"></div>
                            </div>
                            <div class="column">
                                <h2 class="subtitle has-text-grey-dark is-marginless">Comparative Rankings</h2>
                                <div class="ct-chart ct-golden-section" id="chart1"></div>
                            </div>
                        </div>
                        <div id="Support" class="content-tab" style="display:none; max-height:150px;">
                            <!-- <p>
                            test3 <br>
                            Specification Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p> -->
                        </div>
                    </div>
                </div>



                <!-- <div id="chartContainer" class="hideme" style="height: 370px; width: 100%;"></div> -->
                <div class="is-small-space hideme"></div>
                <form name="charts" action="" method="post">
                    <div class="columns is-multiline " id="save2img">
                        <?php
                        for ($ctr = 0; $ctr < count($Overview->get_meta()); $ctr++) {
                            echo $Overview->get_meta()[$ctr]['info'];
                        } ?>
                    </div>
                </form>

                <div class="is-half-space hideme"></div>

                

                <figure class="image img-wrapper glide-image">
                    <img class="counting" src="images/four.png" alt="sample">
                </figure>
                <h1 class="title">
                    <?php if ($valid === true) {
                        echo "&nbsp Lookup another plan?";
                    } else {
                        echo "&nbsp Know a code? Type it here";
                    }
                    ?>
                </h1>



                <h2 class="subtitle">
                    <form name="getPlan" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">

                        <div class=" field has-addons">
                            <div class="control is-expanded is-centered">
                                <input class="input " type="text" name="code" id="sendInput" placeholder="Enter a code?">
                            </div>
                            <div class="control">
                                <input class="button is-info default" type="submit" id="sendcode">
                            </div>
                        </div>

                    </form>
                </h2>
                <!-- trigger button -->
                <?php
                class ModalUtil
                {
                    static function PrintModalContents($malid, $meta, $cd)
                    {
                        include "modal.php";
                    }
                }
                class FBUtil
                {
                    static function SubmitURL($url)
                    {
                        return $url;
                    }
                }
                $MU = new ModalUtil;
                $cd;
                if (isset($_GET['code'])) {
                    $cd = $_GET['code'];
                }
                for ($c = 0; $c < count($meta); $c++) {
                    $malid = $meta[$c]['anime']['id'];
                    echo "<div id=\"modal-id" . $c . "\" class=\"modal modal-fx-fadeInScale\" >";
                    echo "<div class=\"modal-background\"></div>";
                    echo "<div class=\"modal-content\">";
                    include "modal.php";
                    echo "</div>";
                    echo "</div>";
                }
                ?>

                <!-- <div id="modal-id" class="modal modal-fx-fadeInScale">
                    <div class="modal-background"></div>
                    <div class="modal-content">
                        <?php //include "modal.php"
                        ?>
                    </div>
                </div>
                <div id="modal-id1" class="modal modal-fx-fadeInScale">
                    <div class="modal-background"></div>
                    <div class="modal-content">
                        <?php //include "modal.php"
                        ?>
                    </div>
                </div> -->
                <!-- <div id="modal-id2" class="modal modal-fx-fadeInScale">
                    <div class="modal-background"></div>
                    <div class="modal-content">
                        <?php // include "modal.php" 
                        ?>
                    </div>
                </div>  -->

                <!-- <div id="modal-fadeInScale-fs" class="modal modal-full-screen modal-fx-fadeInScale">
                    <div class="modal-content modal-card">
                        <header class="modal-card-head">
                            <p class="modal-card-title">Modal title</p>
                            <button class="modal-button-close delete" aria-label="close"></button>
                        </header>
                        <section class="modal-card-body">

                        </section>
                        <footer class="modal-card-foot">
                            <button class="modal-button-close button is-success">Save changes</button>
                            <button class="modal-button-close button">Cancel</button>
                        </footer>
                    </div>
                </div> -->
            </div>
        </div>

    </section>
    <div class="is-centered columns hideme">
        <article class="media hideme" style="margin-top: 60px;">
            <figure class="media-left">
                <div class="container" style="position: relative;">

                    <p class="image is-96x96">
                        <img class="avatar" id="avatar" src="<?php if (isset($_SESSION['fb_access_token'])) {
                                                                    echo $_SESSION['DETAILS']['avatar'];
                                                                } else {
                                                                    echo "images\avatars\sloth.png";
                                                                } ?>" style="width: 100%; height: auto;">
                    </p>
                    <div class="" style="position: absolute; bottom: 0%; right:1%;">
                        <?php

                        include "facebookapi.php";

                        if ((isset($_SESSION['fb_access_token']))) {

                            $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                            $fbButton = <<<HEREDOC
                                                     <button class="button  logout is-small is-facebook " name="logout" value="{$url}" type=" button"><span class="icon is-small"><i class="fas fa-sign-out-alt"></i></span></button>
HEREDOC;
                            echo $fbButton;
                        } else {
                            $FBUtil = new FBUtil;
                            $helper = $fb->getRedirectLoginHelper();
                            $permissions = ['email', 'user_location, user_link'];
                            $loginUrl = $helper->getLoginUrl('http://localhost/keikaku/fb-user-callback.php', $permissions);
                            $fbButton = <<<HEREDOC
                                                        <button class="button is-facebook is-small"  onclick="location.href='{$FBUtil->SubmitURL($loginUrl)}'" type=" button"><span class="icon " style="pointer-events: none;"><i class="fab fa-facebook-f" style="pointer-events: none;"></i></span></button>
HEREDOC;
                            echo $fbButton;
                        }
                        ?>
                    </div>
                </div>

                <div class="columns is-gapless">
                    <div class="column is-narrow">
                        <div class="select is-small avs " style="margin-right:15px;"> <select id="avs" <?php if ((isset($_SESSION['fb_access_token']))) {
                                                                                                            echo "disabled";
                                                                                                        } ?>>
                                <option disabled selected value> Default </option>
                                <option value="cactus">Cactus</option>
                                <option value="prof">Prof</option>
                                <option value="bear">Bear</option>
                                <option value="boy">Boy</option>
                                <option value="girl">Girl</option>
                                <option value="woman">Woman</option>
                                <option value="shade">Shade</option>
                                <option value="sheep">Sheep</option>
                                <option value="spider">Spider</option>
                                <option value="sloth">Sloth</option>
                            </select>
                        </div>
                    </div>

                </div>
            </figure>
            <form action="planComment.php" method="POST">
                <input type="hidden" name="avatar" class="avatarPOST" id="avatarPOST" value="<?php if (isset($_SESSION['fb_access_token'])) {
                                                                                                    echo $_SESSION['DETAILS']['avatar'];
                                                                                                } else {
                                                                                                    echo "images\avatars\sloth.png";
                                                                                                } ?>" />
                <input type="hidden" name="code" id="codePOST" value="<?php if (isset($cd) && (!empty($cd))) {
                                                                            echo $cd;
                                                                        } else {
                                                                            echo "none";
                                                                        } ?>" />
                <input type="hidden" name="mal_id" id="malidPOST" value="<?php if (!empty($malid)) {
                                                                                echo $malid;
                                                                            } ?>" />
                <div class="media-content">
                    <div class="field">
                        <p class="control">
                            <div class="select is-small is-expanded">
                                <select id="" name="getmal" required>
                                    <option disabled selected value> Anime </option>
                                    <?php
                                    for ($i = 0; $i < count($meta); $i++) {
                                        echo "<option value=\"{$meta[$i]['anime']['id']}\">{$meta[$i]['anime']['title']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </p>
                    </div>
                    <div class="field">
                        <p class="control">

                            <input class="input is-expanded" type="text" maxlength="20" name="name" value="<?php if (isset($_SESSION['fb_access_token'])) {
                                                                                                                echo $_SESSION['DETAILS']['fname'];
                                                                                                            } ?>" placeholder="What shall we call you?" <?php if (isset($_SESSION['fb_access_token'])) {
                                                                                                                                                            echo "disabled";
                                                                                                                                                        } ?>></input>
                        </p>
                    </div>
                    <div class="field">
                        <p class="control">
                            <textarea class="textarea is-expanded" maxlength="400" name="comment" style="width:420px;" placeholder="Add a comment..."></textarea>
                        </p>
                    </div>
                    <div class="field">
                        <p class="control">
                            <button class="button" name="submitcomment" type="submit">Post comment</button>

                        </p>
                    </div>
                </div>
            </form>
        </article>
    </div>
    </div>

    <?php
    $path = "tohtml/wkhtmltopdf/bin/wkhtmltoimage.exe";
    $url = "http://google.com";
    $output_path = "test.png";
    shell_exec("$path $url $output_path");
    ?>
    <!-- related modal with fx class "modal-fx-fadeInScale" -->

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
    <script>
        window.onload = function() {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light2",
                title: {
                    text: "Score Distribution"
                },
                axisY: {
                    title: ""
                },
                data: [{
                    type: "column",
                    yValueFormatString: "#,##0 votes",
                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();

        }
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="scripts/isotope.pkgd.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <!-- <script src="scripts/cbr.js"></script> -->
    <script src="scripts/plan.js"></script>
    <!-- <script src="scripts/carousel.js"></script> -->
    <script src="script.js"></script>
    <script src="https://unpkg.com/popper.js@1"></script>
    <script src="https://unpkg.com/tippy.js@5"></script>
    <script src="scripts/tippy.js"></script>
    <script src="scripts/html2canvas.js"></script>
    <script src="scripts/canvas.js"></script>
    <script src="scripts/pace.min.js"></script>
    <!-- <script type="text/javascript" src="scripts/modal-fx.js"></script> -->

    <script src="https://canvasjs.com/assets/script/canvasjs.js"></script>
    <script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
    <script type="text/javascript" src="scripts/chartist-plugin-tooltip.js"></script>
    <script src="/node_modules/@creativebulma/bulma-collapsible/dist/js/bulma-collapsible.min.js"></script>

    <script>
        new Chartist.Bar('#chart2', {
            labels: <?php echo json_encode($Overview->get_labels(), JSON_NUMERIC_CHECK); ?>,
            series: [
                <?php echo json_encode($Overview->get_length(), JSON_NUMERIC_CHECK); ?>
            ]
        }, {
            seriesBarDistance: 1,
            width: 400,
            height: 250,
            reverseData: true,
            horizontalBars: true,
            axisY: {
                offset: 70,
                position: 'end'
            },
        }).on('draw', function(data) {
            if (data.type === 'bar') {
                data.element.attr({
                    style: 'stroke-width: 20px; stroke: hsl(171, 100%, 41%);'
                    // style: 'stroke-width: 30px; stroke: hsl(171, 100%, 41%);'
                });
            }
        });
    </script>
    <script>
        new Chartist.Bar('#chart1', {
            labels: <?php echo json_encode($Overview->get_labels(), JSON_NUMERIC_CHECK); ?>,
            series: [
                <?php echo json_encode($Overview->get_rank(), JSON_NUMERIC_CHECK); ?>
            ]
        }, {
            seriesBarDistance: 1,
            width: 400,
            height: 250,
            reverseData: true,
            horizontalBars: true,
            axisY: {
                offset: 70,
                position: 'end'
            },
        }).on('draw', function(data) {
            if (data.type === 'bar') {
                data.element.attr({
                    style: 'stroke-width: 10px; stroke-dasharray: 20px; stroke: hsl(171, 100%, 41%); '
                    // style: 'stroke-width: 30px; stroke: hsl(171, 100%, 41%);'
                });
            }
        });
    </script>
    <script>
        function openTab(evt, tabName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("content-tab");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tab");
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" is-active", "");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " is-active";
        }
    </script>

</body>

</html>