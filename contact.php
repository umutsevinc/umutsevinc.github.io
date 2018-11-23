<?php session_start(); ?>
<!DOCTYPE html>
<html class="contactPage">

<head>
    <meta charset="utf-8">
    <meta author="Scalene Partners" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Scalene Partners | Fundraising advisory" />
    <title>Scalene Partners | Contact</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css">
    <link rel="stylesheet" href="./CSS/app.css">
    <link rel="stylesheet" href="./CSS/hover/hover.css">
    <link rel="stylesheet" href="./CSS/hover/hover.css.map">
    <link rel="stylesheet" href="./CSS/hover/hover-min.css">

    <link href="Assets/Ico/ico144.png" rel="apple-touch-icon-precomposed" sizes="144x144">
    <link href="Assets/Ico/ico114.png" rel="apple-touch-icon-precomposed" sizes="114x114">
    <link href="Assets/Ico/ico72.png" rel="apple-touch-icon-precomposed" sizes="72x72">
    <link href="Assets/Ico/ico57.png" rel="apple-touch-icon-precomposed" sizes="57x57">
    <link href="Assets/Ico/ico.ico" rel="shortcut icon">

   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-128943335-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-128943335-1');

        document.addEventListener('DOMContentLoaded', () => {
            const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

            if ($navbarBurgers.length > 0) {
                $navbarBurgers.forEach(el => {
                    el.addEventListener('click', () => {
                        const target = el.dataset.target;
                        const $target = document.getElementById(target);
                        el.classList.toggle('is-active');
                        $target.classList.toggle('is-active');
                    });
                });
            }
        });
        function nav() {
            $(document).scroll(function () {
                var $nav = $(".navbar-brand");
                $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height() - 15);
            });
        }
        nav();
    </script>
</head>

<body>
    <section class="hero is-fullheight contact">
        <nav class="navbar is-transparent paddNavbar">
            <div class="navbar-brand">
                <a class="navbar-item" href="index.php">
                    <img src="./Assets/Logo/SC_PRTNRS_White.png" alt="Scalene Partners" width="auto" height="40">
                </a>
                <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div id="navbarExampleTransparentExample" class="navbar-menu">
                <div class="navbar-end">
                    <div class="navbar-item">
                        <a class="navbar-item hvr-overline-reveal" href="team.php">
                            OUR TEAM
                        </a>
                        <a class="navbar-item hvr-overline-reveal" href="join_us.php">
                            JOIN US
                        </a>
                        <a class="navbar-item hvr-overline-reveal is-active" href="contact.html">
                            CONTACT
                        </a>
                    </div>
                </div>
            </div>
            </div>
        </nav>

        <div class="hero-body paddTop">
            <div class="container has-text-centered">
                <div>
                    <div class="columns phoneTeam">
                        <div class="columnImg is-half overlay-image">
                            <h2 class="titleTeam anim">
                                CONTACT <span style="font-family: Raleway-light">US</span></h2>
                        </div>
                        <div class="columnImg is-half overlay-image">
                            <div class="column">
                                <h2 class="infoContactTitle">SCALENE PARTNERS</span></h2>
                            </div>
                            <div class="column">
                                <h2 class="infoContactTitle2">16 cours Albert 1er<br />
                                    75008 Paris<br />
                                    France</h2>
                            </div>
                            <div class="column">
                                <h2 class="infoContactTitle2">If you have any questions, you may contact us by
                                    e-mail at the following address: <a class="contact-reveal" href="mailto:contact@scalenepartners.com">contact@scalenepartners.com</a></h2>
                            </div>
                            <div class="column">
                                <div class="mapouter">
                                    <div class="gmap_canvas"><iframe class="mapouter" id="gmap_canvas" src="https://maps.google.com/maps?q=16%20cours%20Albert%201er%2075008%20Paris%20France&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer transFooter padd">
            <div class="content has-text-right">
                <h2 class="subtitle subFooter">© 2018 Scalene Partners -
                    <a class="subFooter" href="mention.php"> Terms of Use</a>
                </h2>
            </div>
        </footer>
    </section>
</body>

</html>