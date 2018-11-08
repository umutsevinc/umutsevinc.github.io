<?php session_start(); ?>
<!DOCTYPE html>
<html class="teamPage">

<head>
    <meta charset="utf-8">
    <meta author="Scalene Partners" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Scalene Partners | Fundraising advisory" />
    <title>Scalene Partners | Our Team</title>
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
    <section class="hero is-fullheight team">
        <nav class="navbar is-transparent paddNavbar navbar-fixed-top">
            <div class="navbar-brand">
                <a class="navbar-item" href="index.php">
                    <img src="./Assets/Logo/SC_PRTNRS_White.png" alt="Scalene Partners" width="auto" height="40"> </a>
                <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div id="navbarExampleTransparentExample" class="navbar-menu">
                <div class="navbar-end">
                    <div class="navbar-item">
                        <a class="navbar-item hvr-overline-reveal is-active" href="team.php">
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
        <div>
            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="logoContainer">
                        <h2 class="titleTeam anim">
                            FOUNDING <span style="font-family: Raleway-light">PARTNERS</span></h2>
                    </div>
                    <div>
                        <div class="columns phoneTeam">
                            <div class="columnImg is-half overlay-image">
                                <a href="#openModalSamuel">
                                    <img class="image" src="./Assets/Img/Samuel.jpg" alt="Samuel Assaraf" />
                                    <div class="hover hidePhone">
                                        <div class="text">
                                            <h2 class="subtitleTeam">Samuel Assaraf</h2>
                                            <h3 class="subtitle3">Managing Partner</h3>
                                        </div>
                                    </div>
                                </a>
                                <div id="openModalSamuel" class="modalDialogSamuel">
                                    <div class="rightModal">
                                        <div class="backColorTeam">
                                            <a href="#close" title="Close" class="close2"><img class="crossImg" src="./Assets/Icons/cross.png"
                                                    alt="close" /></a>
                                            <div class="teamHeader">
                                                <img class="imageSamuel" src="./Assets/Img/SamuelColor.jpg" alt="Samuel Assaraf" />
                                            </div>
                                        </div>
                                        <div class="column teamTitle">
                                            <h2 class="infoTeamTitle">SAMUEL <span style="font-family: Raleway-light">ASSARAF</span></h2>
                                            <h2 class="infoTeamTitle2">Managing Partner</h2>
                                        </div>
                                        <div id="colHide" class="columns paddModal modalDialogScroll">
                                            <div class="column is-7">
                                                <p class="descriptionText">Samuel Assaraf is Managing Partner and
                                                    co-founder of Scalene Partner.</p><br />
                                                <p class="descriptionText">He is a former investment banker from the
                                                    Global
                                                    Financial Advisory team
                                                    of
                                                    Rothschild & Co. During his career, Samuel mostly worked on deals
                                                    involving
                                                    financials sponsors, such as LBOs or stake disposals, in various
                                                    sectors
                                                    including technology and infrastructure.</p><br />
                                                <p class="descriptionText">Before joining Rothschild & Co, he used to
                                                    work
                                                    in private equity at
                                                    Qualium
                                                    Investment and in Mid Cap M&A at DC Advisory.</p>
                                                <p class="descriptionText">Samuel graduated from ESSEC Business School
                                                    and
                                                    Concordia University.</p>
                                            </div>
                                            <div class="column is-1">
                                                <div class="vl"></div>
                                            </div>
                                            <div class="column colMargin">
                                                <a href="./Assets/VCF/Samuel%20Assaraf.vcf" class="linkInfo">
                                                    <div class="columns colArround">
                                                        <img class="icon" src="./Assets/Icons/man.png" alt="close" />
                                                        <p class="contactText">Download V-Card</p>
                                                    </div>
                                                </a>
                                                <a href="mailto:samuel.assaraf@scalenepartners.com" class="linkInfo">
                                                    <div class="columns colArround">
                                                        <img class="icon" src="./Assets/Icons/mail.png" alt="close" />
                                                        <p class="contactText">E-mail</p>
                                                    </div>
                                                </a>
                                                <a href="https://www.linkedin.com/in/samuel-assaraf-b8560536/" target="_blank"
                                                    class="linkInfo">
                                                    <div class="columns colArround">
                                                        <img class="icon" src="./Assets/Icons/linkedin.png" alt="close" />
                                                        <p class="contactText">LinkedIn</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="columnImg is-half overlay-image">
                                <a href="#openModalSimon">
                                    <img class="image" src="./Assets/Img/Simon.jpg" alt="Simon Eischen" />
                                    <div class="hover hidePhone">
                                        <div class="text">
                                            <h2 class="subtitleTeam">Simon Eischen</h2>
                                            <h3 class="subtitle3">Managing Partner</h3>
                                        </div>
                                    </div>
                                </a>
                                <div id="openModalSimon" class="modalDialogSimon">
                                    <div class="rightModal">
                                        <div class="backColorTeam">
                                            <a href="#close" title="Close" class="close"><img class="crossImg" src="./Assets/Icons/cross.png"
                                                    alt="close" /></a>
                                            <div class="teamHeader">
                                                <img class="imageSamuel" src="./Assets/Img/SimonColor.jpg" alt="Simon Eischen" />
                                            </div>
                                        </div>
                                        <div class="column teamTitle">
                                            <h2 class="infoTeamTitle">SIMON <span style="font-family: Raleway-light">EISCHEN</span></h2>
                                            <h2 class="infoTeamTitle2">Managing Partner</h2>
                                        </div>
                                        <div id="colHide" class="columns paddModal">
                                            <div class="column is-7">
                                                <p class="descriptionText">Simon Eischen is Managing Partner and
                                                    co-founder
                                                    of Scalene Partners.</p><br />
                                                <p class="descriptionText">He is a former investment banker from the
                                                    Global
                                                    Financial Advisory team of Rothschild & Co. During his career,
                                                    Simon
                                                    mostly worked on cross border deals in various sectors, including
                                                    Utilities, Oil & Gas and Technology.
                                                    ​</p><br />
                                                <p class="descriptionText">Before joining Rothschild & Co, he used to
                                                    work
                                                    in consulting at Roland Berger and in Mid Cap M&A at DC Advisory..</p><br />
                                                <p class="descriptionText">Simon graduated from Audencia Business
                                                    School.</p>
                                            </div>
                                            <div class="column is-1">
                                                <div class="vl"></div>
                                            </div>
                                            <div class="column colMargin">
                                                <a href="./Assets/VCF/Eischen%20Simon.vcf" class="linkInfo">
                                                    <div class="columns colArround">
                                                        <img class="icon" src="./Assets/Icons/man.png" alt="close" />
                                                        <p class="contactText">Download V-Card</p>
                                                    </div>
                                                </a>
                                                <a href="mailto:simon.eischen@scalenepartners.com" class="linkInfo">
                                                    <div class="columns colArround">
                                                        <img class="icon" src="./Assets/Icons/mail.png" alt="close" />
                                                        <p class="contactText">E-mail</p>
                                                    </div>
                                                </a>
                                                <a href="https://www.linkedin.com/in/simon-eischen-779a8260/" target="_blank"
                                                    class="linkInfo">
                                                    <div class="columns colArround">
                                                        <img class="icon" src="./Assets/Icons/linkedin.png" alt="close" />
                                                        <p class="contactText">LinkedIn</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
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
<?php
    unset($_SESSION["errors"]);
    unset($_SESSION["input"]);
    unset($_SESSION["success"]);
?>