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
    <link rel="stylesheet" href="./app.css">
    <link rel="stylesheet" href="./hover/hover.css">
    <link rel="stylesheet" href="./hover/hover.css.map">
    <link rel="stylesheet" href="./hover/hover-min.css">

    <link href="Assets/ico/ico144.png" rel="apple-touch-icon-precomposed" sizes="144x144">
    <link href="Assets/ico/ico114.png" rel="apple-touch-icon-precomposed" sizes="114x114">
    <link href="Assets/ico/ico72.png" rel="apple-touch-icon-precomposed" sizes="72x72">
    <link href="Assets/ico/ico57.png" rel="apple-touch-icon-precomposed" sizes="57x57">
    <link href="Assets/ico/ico.ico" rel="shortcut icon">

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
    <section class="hero is-fullheight join">
        <nav class="navbar is-transparent paddNavbar">
            <div class="navbar-brand">
                <a class="navbar-item" href="index.html">
                    <img src="./Assets/SC_PRTNRS_White.png" alt="Bulma: a modern CSS framework based on Flexbox" width="auto"
                        height="40">
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
                        <a class="navbar-item hvr-overline-reveal" href="team.html">
                            OUR TEAM
                        </a>
                        <a class="navbar-item hvr-overline-reveal is-active" href="join.html">
                            JOIN US
                        </a>
                        <a class="navbar-item hvr-overline-reveal" href="https://bulma.io/">
                            CONTACT
                        </a>
                    </div>
                </div>
            </div>
            </div>
        </nav>
        <div class="hero-body">
            <div class="columns has-text-centered">
                <div class="logoContainer column">
                    <h2 class="titleTeam anim">
                        JOIN <span style="font-family: Raleway-light">US</span></h2>
                </div>
                <div class="paddText column is-7">
                    <div class="column">
                        <div class="text">
                            <h2 class="subtitleJoin">We are always looking for smart, dedicated individuals
                                who can help our clients and thus, Scalene Partners, succeed.<br /><br />
                                To apply, we invite you to follow the link below. Should we have an open
                                position and your resume meets our requirements, we will contact you.</h2>
                        </div>
                    </div>
                    <div class="column">
                        <a href="#openModalJoin">
                            <div class="hover">
                                <div class="buttonApply">
                                    <h2 class="subtitleJoinButton">Apply now</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div id="openModalJoin" class="modalJoin">
                        <div class="centerModal">
                            <div class="column">
                                <div class="column">
                                    <a href="#close" title="Close" class="closeJoin"><img class="crossImg" src="./Assets/cross2.png"
                                            alt="close" /></a>
                                </div>
                                <div class="columns">
                                    <div class="column">
                                        <h2 class="infoTeamTitle"><span style="font-family: Raleway-light">APPLICATION</span></h2>
                                    </div>
                                </div>
                            </div>

                            <div class="field is-horizontal">
                                <div class="field-body">
                                    <div class="field">
                                        <label class="label">First Name</label>
                                        <p class="control is-expanded has-icons-left">
                                            <div class="control">
                                                <input class="input" type="text" name="firstname">
                                            </div>
                                        </p>
                                    </div>
                                    <div class="field">
                                        <label class="label">Last Name</label>
                                        <p class="control is-expanded has-icons-left has-icons-right">
                                            <div class="control">
                                                <input class="input" type="text" name="firstname">
                                            </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="field is-horizontal">
                                <div class="field-body">
                                    <div class="field">
                                        <label class="label">E-mail address</label>
                                        <p class="control is-expanded has-icons-left">
                                            <div class="control">
                                                <input class="input" type="text" name="email">
                                            </div>
                                        </p>
                                    </div>
                                    <div class="field">
                                        <label class="label">Cellular number</label>
                                        <p class="control is-expanded has-icons-left has-icons-right">
                                            <div class="control">
                                                <input class="input" type="text" name="phone">
                                            </div>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Message</label>
                                <div class="control">
                                    <textarea class="textarea" name="message"></textarea>
                                </div>
                            </div>

                            <div class="field is-horizontal">
                                <div class="field-body">
                                    <div class="field">
                                        <label class="label">Resume</label>
                                        <p class="control is-expanded has-icons-left">
                                            <div class="control">
                                                <input class="input" type="file" name="resume">
                                            </div>
                                        </p>
                                    </div>
                                    <div class="field">
                                        <label class="label">Cover letter</label>
                                        <p class="control is-expanded has-icons-left has-icons-right">
                                            <div class="control">
                                                <input class="input" type="file" name="cover_letter">
                                            </div>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="field is-grouped">
                                <div class="control">
                                    <button class="button is-link">Submit</button>
                                </div>
                            </div>
                        </div>
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
<?php
    unset($_SESSION["errors"]);
    unset($_SESSION["input"]);
    unset($_SESSION["success"]);
?>