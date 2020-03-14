<!doctype html>
<html>

<head>
    <title> Project </title>
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/waves.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
    <script src="scripts/bigSlide.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/scripts/all.js"></script>
    <link rel="stylesheet" href="css/bulma.css" crossorigin="anonymous">
</head>

<body id="doc3">

    <nav id="menu" class="panel scrollmenu bg-secondary" role="navigation">
        <span style="display:block; height: 4em;"></span>
        <a href="#">Home</a></li>
        <hr style="border-top: 1px solid whitesmoke;">
        <a href="#">Featured Works</a></li>
        <hr class="style13">
        <a href="#">Top Viewed</a></li>
        <hr class="hr-primary" />
        <hr class="style13" style="border-top: 1px dashed whitesmoke;">
        <a href="#">Popular Works</a></li>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-dark">
        <a class="navbar-brand menu-link" href="#menu">&#9776;</a>
        < <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#main-content">Skip to main content</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
    </nav>


    <br>
    <h1 style="display: inline;"> <span id="dark"> </span></h1>
    <hr style="border: 1px solid white;" />

    <main role="main" id="main-content" class="main">
        <div class="row">
            <div class="col-md-8">
                <div class="card border-secondary rounded-right">
                    <div class="card-body">
                        <h5 class="card-title">Create Account</h5>
                        <form action="logon.php" method="post">
                            <div class="form-group">
                                <div class="form-row">
                                    <label for="names" class="col-sm-4">&nbspUser Details:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="first" required placeholder="Your given name">
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="last" required placeholder="Your last name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <label for="birth" class="col-sm-4">&nbsp</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="birth" id="birth" required placeholder="Your birth-date">
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="gender" id="gender" required placeholder="Your gender">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <label for="phone" class="col-sm-4">&nbsp</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="contact" id="contact" placeholder="Your contact no.">
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="email" aria-describedby="emailHelp" required placeholder="Your email address">
                                        <small id="emailHelp" class="form-text text-muted">
                                            Your email address must contain a valid domain name.
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <label for="user" class="col-sm-4">&nbspAccount Details:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="user" aria-describedby="user" required placeholder="Your username">
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="password" class="form-control" name="password" id="password" aria-describedby="passwordHelp" required placeholder="Your password">
                                        <small id="passwordHelp" class="form-text text-muted">
                                            Your password must be at least 8 characters long, contains at least 1 number, and 1 capital letter.
                                        </small>
                                    </div>

                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg col-sm-2 float-right" name="login" value="login">Submit</button>
                            <?php
                            if (isset($_POST['login'])) {
                                session_start();
                                $_SESSION['user'] = $_POST['user'];
                                $_SESSION['first'] = $_POST['first'];
                                $_SESSION['last'] = $_POST['last'];
                                $_SESSION['birth'] = $_POST['birth'];
                                $_SESSION['gender'] = $_POST['gender'];
                                $_SESSION['contact'] = $_POST['contact'];
                                $_SESSION['email'] = $_POST['email'];
                                $_SESSION['password'] = $_POST['password'];
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card bg-dark text-white rounded-left">
                    <div class="card-body">
                        <h5 class="card-title">Useful Website</h5>
                        <p class="card-text">Log-in to access the database.</p>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <footer>
        <div>
            

            <!--Waves Container-->
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
            <!--Waves end-->
        </div>
        <div class="content flex">
            <p> Copyright | 2019</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.scripts/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/scripts/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="bigSlide.js"></script>
    <script>
        $(document).ready(function() {
            $('.menu-link').bigSlide();
        });
    </script>

</body>
<!-- <hr style="border: 1px solid white;" />

<span style="color: white"> FLORESE &#x2015;&#x2015;&#x2015; N31 &#x2015;&#x2015;&#x2015; Lab Activity 2.2</span> -->


</html>