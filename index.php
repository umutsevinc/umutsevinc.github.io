<?php session_start(); ?>
<!DOCTYPE html>
<html class="indexPage">

<head>
    <meta charset="utf-8">
    <meta author="Scalene Partners" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Scalene Partners | Fundraising advisory" />
    <title>Scalene Partners | Fundraising advisory</title>
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
    <section class="hero is-fullheight">
        <nav class="navbar is-transparent paddNavbar">
            <div class="navbar-brand">
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
                        <a class="navbar-item hvr-overline-reveal" href="contact.php">
                            CONTACT
                        </a>
                    </div>
                </div>
            </div>
            </div>
        </nav>
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="logoContainer">
                    <img class="imgLogo anim" src="./Assets/Logo/SC_PRTNRS_White.png" alt="Scalene Partners">
                </div>
                <div class="paddText anim">
                    <div>
                        <h2 class="subtitle">
                            Independent advisory firm specialized <br />in strategic <span style="color: #CB9910">&</span>
                            financial transactions
                        </h2>
                    </div>
                    <div class="line"></div>
                    <div class="columns subTitleWord">
                        <div class="column">
                            <h3 class="subtitle2">M&A</h3>
                        </div>
                        <div class="column">
                            <h3 class="subtitle2">Strategic advisory</h3>
                        </div>
                        <div class="column">
                            <h3 class="subtitle2">ICO</h3>
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
<?php
    unset($_SESSION["errors"]);
    unset($_SESSION["input"]);
    unset($_SESSION["success"]);
?>