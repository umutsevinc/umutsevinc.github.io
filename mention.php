<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta author="Scalene Partners" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Scalene Partners | Fundraising advisory" />
    <title>Scalene Partners | Legal</title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
        function nav() {
            $(document).scroll(function () {
                var $nav = $(".navbar-brand");
                $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height() - 15);
            });
        }
        nav();
    </script>
</head>

<body class="mentionBody">
    <section class="hero is-fullheight mention">
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
                        <a class="navbar-item hvr-overline-reveal" href="contact.php">
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
                    <div class="columnImg is-half">
                        <h2 class="titleTeam anim">
                            LEGAL <span style="font-family: Raleway-light">INFORMATIONS</span></h2>
                    </div>
                    <div class="columns phoneTeam">
                        <div class="columnImg is-half overlay-image">
                            <div class="column">
                                <h2 class="infoContactTitle">Editeur</span></h2>
                            </div>
                            <div class="column">
                                <h2 class="infoMentionsTitle2">
                                    Le présent site est la propriété de édité par la société SCALENE PARTNERS<br />
                                    Société par actions simplifiée au capital de 30 000 euros.<br />
                                    RCS Paris 830 765 996 00012<br />
                                    N° TVA : FR 79830765996<br />
                                    Adresse du siège social : 16 cours Albert 1er, 75008 Paris<br />
                                    Email : <a class="contact-reveal" href="mailto:contact@scalenepartners.com">contact@scalenepartners.com</a><br />
                                    Numéro de téléphone : +33 1 83 75 66 34<br />
                                    Directeur de la publication : Simon Eischen<br />
                                    Membre de la Chambre Nationale des Conseils en Investissements Financiers,<br />
                                    ORIAS n°D017926, www.orias.fr, agréée par l’AMF.</h2>
                            </div>
                            <div class="column">
                                <h2 class="infoContactTitle">Hébergeur</span></h2>
                            </div>
                            <div class="column">
                                <h2 class="infoMentionsTitle2">
                                    Ce site est hébergé par :
                                    1&1 Internet SARL
                                    Adresse : 7, place de la Gare BP 70109 57201 Sarreguemines Cedex
                                    Tel : 0970808911</h2>
                            </div>
                            <div class="column">
                                <h2 class="infoContactTitle">Propriété intellectuelle</span></h2>
                            </div>
                            <div class="column">
                                <h2 class="infoMentionsTitle2">
                                    Tous les éléments constituant le présent site, qu’ils soient visuels ou sonores,
                                    appartiennent à l’éditeur et sont à ce titre protégés par la législation relative
                                    aux droits de Propriété Intellectuelle. Les utilisateurs du site reconnaissent donc
                                    que, en l’absence d’autorisation, toute copie totale ou partielle et toute
                                    diffusion ou exploitation d’un ou plusieurs de ces éléments, même modifiés, seront
                                    susceptibles de donner lieu à des poursuites judiciaires menées à leur encontre par
                                    l’éditeur ou ses ayants droits. Cette protection portera sur tous les contenus
                                    textuels et graphiques du site, mais également sur sa structure, sur son nom et sa
                                    charte graphique.<br /><br />
                                    Toute reproduction totale ou partielle de son logo, effectuée à partir des éléments
                                    du site sans l’autorisation expresse de l’éditeur est donc prohibée, au sens de
                                    l’article L.713-2 du Code la Propriété Intellectuelle.<br /><br />
                                    Tout lien hypertexte renvoyant au présent site ou placé sur la page d’accueil du
                                    site doit faire l’objet d’une autorisation préalable expresse de la part de
                                    l’éditeur.</h2>
                            </div>
                            <div class="column">
                                <h2 class="infoContactTitle">Informations mises à disposition</span></h2>
                            </div>
                            <div class="column">
                                <h2 class="infoMentionsTitle2">
                                    Ce site est destiné à fournir des informations générales sur l’éditeur. Les
                                    informations contenues sur ce site ne constituent pas et ne sont pas destinées à
                                    constituer un conseil d'investissement, une offre ou une sollicitation d'intérêt
                                    concernant l'acquisition de titres ou d'actions ou la fourniture de services de
                                    gestion d'investissement à toute personne et dans toute juridiction où une telle
                                    sollicitation n'est pas autorisée, ou à toute personne à qui il serait illégal de
                                    faire une telle sollicitation.<br /><br />
                                    Les sites reliés directement ou indirectement au site <a class="contact-reveal"
                                        href="www.scalenepartners.com">www.scalenepartners.com</a> ne
                                    sont pas sous son contrôle. En conséquence, l’exploitant du site web n’assume
                                    aucune responsabilité quant aux informations publiées sur ces sites. Les liens avec
                                    des sites extérieurs ne sont fournis qu’à titre de commodité et n’impliquent aucune
                                    responsabilité quant à leur contenu.</h2>
                            </div>
                            <div class="column">
                                <h2 class="infoContactTitle">Données personnelles</span></h2>
                            </div>
                            <div class="column">
                                <h2 class="infoMentionsTitle2">
                                    L’utilisateur est notamment informé que, conformément à l’article 32 de la loi
                                    Informatique et libertés du 6 janvier 1978 modifiée par la loi du 20 juin 2018, les
                                    informations qu’il communique par les formulaires présents sur le site «
                                    <a class="contact-reveal" href="www.scalenepartners.com">www.scalenepartners.com</a>
                                    » sont nécessaires
                                    pour répondre à sa demande par l’éditeur
                                    du site qui en est le seul destinataire. Elles ne sont communiquées à des tiers que
                                    pour satisfaire aux obligations légales et réglementaires. Lesdites informations
                                    seront conservées pendant une durée de trois ans.
                                    ​
                                    Conformément aux dispositions légales précitées, l’utilisateur bénéficie d’un droit
                                    d’accès aux et de rectification des informations qui le concernent ainsi que d’un
                                    droit de donner des directives relatives au sort de ces données après sa mort, que
                                    l’utilisateur peut exercer en s’adressant au responsable du traitement des données,
                                    à savoir Simon Eischen ou par email à <a class="contact-reveal" href="mailto:contact@scalenepartners.com">contact@scalenepartners.com</a>.</h2>
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