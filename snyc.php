<!doctype html>
<html>

<head>
    <title> Project </title>

    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/waves.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
    <script src="scripts/bigSlide.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/scripts/all.js"></script>
    <link rel="stylesheet" href="css/bulma.css" crossorigin="anonymous">
    <script src="scripts/require.js"></script>
    <script>
        const api = require("mangadex-full-api");
        /*
            Add to the beginning of your code and
            before any calls to the API.
            Replace "mangadex.cc" with any working domain.
        */
        api.agent.domainOverride = "mangadex.cc";
    </script>
    <style>
        .footer {
            /* clear: both;
            position: relative;
            
            
            

            /* Equal to height of footer */
            /* But also accounting for potential margin-bottom of last child */
            /* margin-bottom: -50px;  */
            clear: both;
            position: relative;
            Width: 100%;
            bottom: 0;
            /* margin-top: -200px; */
        }
    </style>
</head>

<body id="doc3">
    <div class="wrapper">
        <section class="section ">
            <nav class="navbar" role="navigation" aria-label="main navigation">
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
            <div class="hero ">
                <div class="hero-head"></div>
                <div class="hero-body is-large bg-img">
                    <div class="container has-text-centered">
                        <p class="title has-text-white ">
                            manga<span class="has-text-primary has-text-weight-semibold">Sea</span>
                        </p>
                        <p class="subtitle has-text-white ">
                            Gamified Activity Manager
                        </p>
                    </div>
                </div>
            </div>
            <div class="hero ">
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
            </div>

        </section>

        <!-- <section class="section">
        <div class="container is-fluid has-text-white">
            <h1 class="title">Log-in</h1>
            <h2 class="subtitle">
                Sync your <strong>MangaDex</strong> account to begin recording!
            </h2>
            <h1 style="display: inline;"> <span id="dark"> </span></h1>
            <hr style="border: 1px solid white;" />
        </div>
    </section> -->


        <!-- 
    <section class="section">
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
            <div class="columns">
                <div class="column">
                    <div class="box">
                        <article class="media">
                            <p class="title">
                                1
                            </p>
                            <p class="subtitle">
                                Jeff Atwood
                            </p>
                        </article>
                    </div>
                </div>
                <div class="column">
                    <div class="box">
                        <article class="media">
                            <p class="title">
                                2
                            </p>
                            <p class="subtitle">
                                Jeff Atwood
                            </p>
                        </article>
                    </div>
                </div>
                <div class="column">
                    <div class="box">
                        <article class="media">
                            <p class="media-left">
                                3
                            </p>
                            <p class="media-content">
                                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                <div style="height: 7em;"></div>
                            </p>

                            <nav class="level">

                                <div class="level-right">
                                    <div class="level-item">
                                        <label class="checkbox">
                                            <a class="button is-info">Submit</a>
                                        </label>
                                    </div>
                                </div>
                            </nav>
                        </article>
                    </div>
                </div>
                <div class="column">
                    <div class="box">
                        <article class="media">
                            <p class="title">
                                4
                            </p>
                            <p class="subtitle">
                                Jeff Atwood
                            </p>
                        </article>
                    </div>
                </div>
            </div>

        </div>
    </section> -->

        <section class="section hero ">
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
                            <p class="title">Three</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut. Morbi maximus, leo sit amet vehicula eleifend, nunc dui porta orci, quis semper odio felis ut quam.</p>
                            <p>Suspendisse varius ligula in molestie lacinia. Maecenas varius eget ligula a sagittis. Pellentesque interdum, nisl nec interdum maximus, augue diam porttitor lorem, et sollicitudin felis neque sit amet erat. Maecenas imperdiet felis nisi, fringilla luctus felis hendrerit sit amet. Aenean vitae gravida diam, finibus dignissim turpis. Sed eget varius ligula, at volutpat tortor.</p>
                            <p>Integer sollicitudin, tortor a mattis commodo, velit urna rhoncus erat, vitae congue lectus dolor consequat libero. Donec leo ligula, maximus et pellentesque sed, gravida a metus. Cras ullamcorper a nunc ac porta. Aliquam ut aliquet lacus, quis faucibus libero. Quisque non semper leo.</p>
                        </div>
                    </div>
                    <div class="tile is-4 is-vertical is-parent">
                        <div class="tile is-child box">
                            <p class="title">Step One:</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
                        </div>
                        <div class="tile is-child box">
                            <p class="title">Two</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="hero is-small is-primary is-bold">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">
                        Primary bold title
                    </h1>
                    <h2 class="subtitle">
                        Primary bold subtitle
                    </h2>
                </div>
            </div>
        </section>
        <br><br><br><br><br><br>
        <div style="height: 7em;"></div>
    </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.scripts/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="bigSlide.js"></script>
    <script src="scripts/burger.js"></script>
    <script>
        $(document).ready(function() {
            $('.menu-link').bigSlide();
        });
    </script>

</body>
<!-- <hr style="border: 1px solid white;" />

<span style="color: white"> FLORESE &#x2015;&#x2015;&#x2015; N31 &#x2015;&#x2015;&#x2015; Lab Activity 2.2</span> -->


</html>