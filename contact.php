<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta author="Scalene Partners" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Scalene Partners | Fundraising advisory" />
    <title>Scalene Partners</title>
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

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-108837571-1"></script>
    <script language="JavaScript" src="scripts/gen_validatorv31.js" type="text/javascript"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-108837571-1');

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
    </script>
</head>

<body>
    <section class="hero is-fullheight join">
        <nav class="navbar is-transparent paddNavbar">
            <div class="navbar-brand">
                <a class="navbar-item" href="index.html">
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
                        <a class="navbar-item hvr-overline-reveal is-active" href="contact.php">
                            CONTACT
                        </a>
                    </div>
                </div>
            </div>
            </div>
        </nav>
        <div class="hero-body">
            <div class="columns has-text-centered">
                <div class="column">
                    <h2 class="titleTeam anim">
                        CONTACT <span style="font-family: Raleway-light">US</span></h2>
                </div>
                <div class="paddText column is-7">
                    <div class="column">
                        <div class="text">
                            <h2 class="subtitleJoin">If you have any questions, you can contact us by e-mail at the
                                following address: contact@scalenepartners.com</h2>
                        </div>
                        <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=YOUR_API_KEY
    &q=Space+Needle,Seattle+WA"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
                <!-- <footer class="footer transFooter padd">
                <div class="content has-text-right">
                    <h2 class="subtitle subFooter">© 2018 Scalene Partners -
                        <a class="subFooter" href="mention.php"> Terms of Use</a>
                    </h2>
                </div>
            </footer> -->
            </div>
    </section>
</body>

</html>