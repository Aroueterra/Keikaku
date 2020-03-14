<?php
header('Access-Control-Allow-Origin: http://mangadex.org', false);
header("Access-Control-Allow-Origin: *");
header("Access-Control-Expose-Headers: Content-Length, X-JSON");
header("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: *");
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
    <link rel="stylesheet" type="text/css" href="css/tester.css" />
    <link rel="stylesheet" type="text/css" href="packages/glide/dist/css/glide.core.min.css" />
    <link rel="stylesheet" type="text/css" href="packages/glide/dist/css/glide.theme.min.css" />
    <link rel="stylesheet" type="text/css" href="packages/loading/loading-bar.css" />
    <link rel="stylesheet" type="text/css" href="styles.css" />
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
    <div class="button-group sort-by-button-group">
        <button class="button is-checked" data-sort-value="original-order">original order</button>
        <button class="button" data-sort-value="name">name</button>
        <button class="button" data-sort-value="symbol">symbol</button>
        <button class="button" data-sort-value="number">number</button>
        <button class="button" data-sort-value="weight">weight</button>
        <button class="button" data-sort-value="category">category</button>
    </div>
    <div class="grid">
        <div class="element-item transition metal " data-category="transition">
            <h3 class="name">Mercury</h3>
            <p class="symbol">Hg</p>
            <p class="number">80</p>
            <p class="weight">200.59</p>
        </div>
        <div class="element-item metalloid " data-category="metalloid">
            <h3 class="name">Tellurium</h3>
            <p class="symbol">Te</p>
            <p class="number">52</p>
            <p class="weight">127.6</p>
        </div>
        <div class="element-item post-transition metal " data-category="post-transition">
            <h3 class="name">Bismuth</h3>
            <p class="symbol">Bi</p>
            <p class="number">83</p>
            <p class="weight">208.980</p>
        </div>
        <div class="element-item post-transition metal " data-category="post-transition">
            <h3 class="name">Lead</h3>
            <p class="symbol">Pb</p>
            <p class="number">82</p>
            <p class="weight">207.2</p>
        </div>
        <div class="element-item transition metal " data-category="transition">
            <h3 class="name">Gold</h3>
            <p class="symbol">Au</p>
            <p class="number">79</p>
            <p class="weight">196.967</p>
        </div>
        <div class="element-item alkali metal " data-category="alkali">
            <h3 class="name">Potassium</h3>
            <p class="symbol">K</p>
            <p class="number">19</p>
            <p class="weight">39.0983</p>
        </div>
        <div class="element-item alkali metal " data-category="alkali">
            <h3 class="name">Sodium</h3>
            <p class="symbol">Na</p>
            <p class="number">11</p>
            <p class="weight">22.99</p>
        </div>
        <div class="element-item transition metal " data-category="transition">
            <h3 class="name">Cadmium</h3>
            <p class="symbol">Cd</p>
            <p class="number">48</p>
            <p class="weight">112.411</p>
        </div>
        <div class="element-item alkaline-earth metal " data-category="alkaline-earth">
            <h3 class="name">Calcium</h3>
            <p class="symbol">Ca</p>
            <p class="number">20</p>
            <p class="weight">40.078</p>
        </div>
        <div class="element-item transition metal " data-category="transition">
            <h3 class="name">Rhenium</h3>
            <p class="symbol">Re</p>
            <p class="number">75</p>
            <p class="weight">186.207</p>
        </div>
        <div class="element-item post-transition metal " data-category="post-transition">
            <h3 class="name">Thallium</h3>
            <p class="symbol">Tl</p>
            <p class="number">81</p>
            <p class="weight">204.383</p>
        </div>
        <div class="element-item metalloid " data-category="metalloid">
            <h3 class="name">Antimony</h3>
            <p class="symbol">Sb</p>
            <p class="number">51</p>
            <p class="weight">121.76</p>
        </div>
        <div class="element-item transition metal " data-category="transition">
            <h3 class="name">Cobalt</h3>
            <p class="symbol">Co</p>
            <p class="number">27</p>
            <p class="weight">58.933</p>
        </div>
        <div class="element-item lanthanoid metal inner-transition " data-category="lanthanoid">
            <h3 class="name">Ytterbium</h3>
            <p class="symbol">Yb</p>
            <p class="number">70</p>
            <p class="weight">173.054</p>
        </div>
        <div class="element-item noble-gas nonmetal " data-category="noble-gas">
            <h3 class="name">Argon</h3>
            <p class="symbol">Ar</p>
            <p class="number">18</p>
            <p class="weight">39.948</p>
        </div>
        <div class="element-item diatomic nonmetal " data-category="diatomic">
            <h3 class="name">Nitrogen</h3>
            <p class="symbol">N</p>
            <p class="number">7</p>
            <p class="weight">14.007</p>
        </div>
        <div class="element-item actinoid metal inner-transition " data-category="actinoid">
            <h3 class="name">Uranium</h3>
            <p class="symbol">U</p>
            <p class="number">92</p>
            <p class="weight">238.029</p>
        </div>
        <div class="element-item actinoid metal inner-transition " data-category="actinoid">
            <h3 class="name">Plutonium</h3>
            <p class="symbol">Pu</p>
            <p class="number">94</p>
            <p class="weight">(244)</p>
        </div>
    </div>
    <!-- <h1>Isotope - sorting, vanilla JS</h1>
    <div class="field has-addons">
        <div class="button-group sort-by-button-group">
            
            <p class="control">
                <button class="button is-checked" data-sort-value="original-order">
                    original order
                </button>
            </p class="control">
            <p class="control">
                <button class="button" data-sort-value="title_iso">name</button>
            </p class="control">
            <button class="button" data-sort-value="tag_iso">symbol</button>
            <button class="button" data-sort-value="count">count</button>
            <button class="button" data-sort-value="score_iso">weight</button>
            <button class="button" data-sort-value="category">category</button>
        </div>
    </div>

    <div class="grid">
        <div class="element-item" data-category="transition">
            <span><h3 class="title_iso">Mercury</h3></span>
            <p class="tag_iso">Hg</p>
            <p class="count">80</p>
            <p class="weight">0</p>
        </div>
        <div class="element-item " data-category="metalloid">
            <span><h3 class="title_iso">Tellurium</h3></span>
            <p class="tag_iso">Te</p>
            <p class="count">52</p>
            <p class="weight">0</p>
        </div>
        <div class="element-item" data-category="post-transition">
            <span><h3 class="title_iso">Bismuth</h3></span>
            <p class="tag_iso">Bi</p>
            <p class="count">83</p>
            <p class="weight">0</p>
        </div>
        <div class="element-item" data-category="post-transition">
            <h3 class="title_iso">Lead</h3>
            <p class="tag_iso">Pb</p>
            <p class="count">82</p>
            <p class="weight">0</p>
        </div>
        <div class="element-item transition metal " data-category="transition">
            <h3 class="title_iso">Gold</h3>
            <p class="tag_iso">Au</p>
            <p class="count">79</p>
            <p class="weight">196.967</p>
        </div>
        <div class="element-item alkali metal " data-category="alkali">
            <h3 class="title_iso">Potassium</h3>
            <p class="tag_iso">K</p>
            <p class="count">19</p>
            <p class="weight">39.0983</p>
        </div>
        <div class="element-item alkali metal " data-category="alkali">
            <h3 class="title_iso">Sodium</h3>
            <p class="tag_iso">Na</p>
            <p class="count">11</p>
            <p class="weight">22.99</p>
        </div>
        <div class="element-item transition metal " data-category="transition">
            <h3 class="title_iso">Cadmium</h3>
            <p class="tag_iso">Cd</p>
            <p class="count">48</p>
            <p class="weight">112.411</p>
        </div>
        <div class="element-item alkaline-earth metal " data-category="alkaline-earth">
            <h3 class="title_iso">Calcium</h3>
            <p class="tag_iso">Ca</p>
            <p class="count">20</p>
            <p class="weight">40.078</p>
        </div>
        <div class="element-item transition metal " data-category="transition">
            <h3 class="title_iso">Rhenium</h3>
            <p class="tag_iso">Re</p>
            <p class="count">75</p>
            <p class="score_iso" data-value="2">186.207</p>
        </div>
        <div class="element-item post-transition metal " data-category="post-transition">
            <h3 class="title_iso">Thallium</h3>
            <p class="tag_iso">Tl</p>
            <p class="count">81</p>
            <p class="weight">204.383</p>
        </div>
        <div class="element-item metalloid " data-category="metalloid">
            <h3 class="title_iso">Antimony</h3>
            <p class="symbola">Sb</p>
            <p class="count">51</p>
            <p class="weight">121.76</p>
        </div>
        <div class="element-item transition metal " data-category="transition">
            <h3 class="title_iso">Cobalt</h3>
            <p class="symbola">Co</p>
            <p class="count">27</p>
            <p class="weight">58.933</p>
        </div>
        <div class="element-item lanthanoid metal inner-transition " data-category="lanthanoid">
            <h3 class="title_iso">Ytterbium</h3>
            <p class="symbola">Yb</p>
            <p class="count">70</p>
            <p class="weight">173.054</p>
        </div>
        <div class="element-item noble-gas nonmetal " data-category="noble-gas">
            <h3 class="title_iso">Argon</h3>
            <p class="symbola">Ar</p>
            <p class="count">18</p>
            <p class="weight">39.948</p>
        </div>
        <div class="element-item diatomic nonmetal " data-category="diatomic">
            <h3 class="title_iso">Nitrogen</h3>
            <p class="symbola">N</p>
            <p class="count">7</p>
            <p class="weight">14.007</p>
        </div>
        <div class="element-item actinoid metal inner-transition " data-category="actinoid">
            <h3 class="title_iso">Uranium</h3>
            <p class="symbola">U</p>
            <p class="count">92</p>
            <p class="weight">238.029</p>
        </div>
        <div class="element-item actinoid metal inner-transition " data-category="actinoid">
            <h3 class="title_iso">Plutonium</h3>
            <p class="symbola">Pu</p>
            <p class="count">94</p>
            <p class="weight">(244)</p>
        </div>
    </div> -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="css/slick/slick.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="packages/loading/loading-bar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <!-- <script src="packages/glide/dist/glide.min.js"></script>
    <script src="bigSlide.js"></script>
    <script src="scripts/test.js"></script> -->
    <!-- <script src="scripts/timing.js"></script> -->
    <script src="scripts/carousel.js"></script>
    <script src="scripts/burger.js"></script>
    <script src="scripts/isotope.pkgd.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script src="scripts/isotop.js"></script>
    <script src="scripts/isotope.pkgd.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <!-- <script src="script.js"></script> -->
    <script>
        // external js: isotope.pkgd.js

        // init Isotope
        var iso = new Isotope('.grid', {
            itemSelector: '.element-item',
            layoutMode: 'fitRows',
            getSortData: {
                name: '.name',
                symbol: '.symbol',
                number: '.number parseInt',
                category: '[data-category]',
                weight: function(itemElem) {
                    var weight = itemElem.querySelector('.weight').textContent;
                    return parseFloat(weight.replace(/[\(\)]/g, ''));
                }
            }
        });

        // bind sort button click
        var sortByGroup = document.querySelector('.sort-by-button-group');
        sortByGroup.addEventListener('click', function(event) {
            // only button clicks
            if (!matchesSelector(event.target, '.button')) {
                return;
            }
            var sortValue = event.target.getAttribute('data-sort-value');
            iso.arrange({
                sortBy: sortValue
            });
        });

        // change is-checked class on buttons
        var buttonGroups = document.querySelectorAll('.button-group');
        for (var i = 0; i < buttonGroups.length; i++) {
            buttonGroups[i].addEventListener('click', onButtonGroupClick);
        }

        function onButtonGroupClick(event) {
            // only button clicks
            if (!matchesSelector(event.target, '.button')) {
                return;
            }
            var button = event.target;
            button.parentNode.querySelector('.is-checked').classList.remove('is-checked');
            button.classList.add('is-checked');
        }
    </script>
</body>

</html>