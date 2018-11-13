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
                                <h2 class="infoContactTitle">Publisher</span></h2>
                            </div>
                            <div class="column">
                                <h2 class="infoMentionsTitle2">
                                    This website is owned and published by <b>SCALENE PARTNERS</b><br/>
                                    a société par actions simplifiée with a share capital of 30,000 euros (the “Company”)<br/>
                                    registered with the court registry (Registre du commerce et des sociétés) of Paris under number 830 765 996 00012<br/>
                                    and whose registered office is located at 16, cours Albert 1er, 75008 Paris (France).<br/>
                                    VAT number:	FR 79830765996<br/>
                                    Email address: contact@scalenepartners.com<br/>
                                    Phone number: +33 1 83 75 66 34<br/>
                                    Publication manager: Simon Eischen<br/>
                                    The Company is a member of the Chambre Nationale des Conseils-Experts Financiers, a professional organization of financial experts.<br/></h2>
                            </div>
                            <div class="column">
                                <h2 class="infoContactTitle">Host</span></h2>
                            </div>
                            <div class="column">
                                <h2 class="infoMentionsTitle2">
                                    This website is hosted by :<br/>
                                    1&1 Internet SARL<br/>
                                    7, place de la Gare BP 70109 57201 Sarreguemines Cedex<br/>
                                    Phone number : 0970808911</h2>
                            </div>
                            <div class="column">
                                <h2 class="infoContactTitle">Intellectual property</span></h2>
                            </div>
                            <div class="column">
                                <h2 class="infoMentionsTitle2">
                                    The content of this website, including images and sound recordings, belong to the Company and is protected by the applicable intellectual property rights legislation.<br/>
                                    The users of this website acknowledge that, without the Company’s authorization, any partial or total reproduction, publication on a third party website, or use, of any of its content, even modified, may result in the Company or its beneficiaries initiating judicial proceedings against them.<br/>
                                    The protected content of this website covers its textual and visual content, as well as its structure, its name, and its graphic layout.<br/>
                                    Any total or partial reproduction of the Company’s logo realized using the content of this website, without the Company’s prior authorization, is forbidden, in accordance with Article L. 713-2 of the French Code de la propriété intellectuelle.<br/>
                                    Any hypertext link leading to this website must be previously approved by the Company.</h2>
                            </div>
                            <div class="column">
                                <h2 class="infoContactTitle">Information provided to the users of this website</span></h2>
                            </div>
                            <div class="column">
                                <h2 class="infoMentionsTitle2">
                                    This website provides general information about the Company. Information contained on 
                                    this website do not constitute, and are not meant to constitute, investment advices,
                                    offers or solicitations relating to the acquisition of securities or the provision of
                                    investment management services to any person and in any jurisdiction where such 
                                    solicitation would be prohibited, or to any person to which it would be illegal 
                                    to make such a solicitation.<br /><br />
                                    Links to external websites are only provided to make the use of the website by the users
                                    more convenient. External websites linked directly or indirectly to the website 
                                    <a class="contact-reveal" href="www.scalenepartners.com">www.scalenepartners.com</a>
                                    are not controlled by the Company. Consequently, 
                                    the Company will not be liable for the content published on these websites.</h2>
                            </div>
                            <div class="column">
                                <h2 class="infoContactTitle">Personal Data</span></h2>
                            </div>
                            <div class="column">
                                <h2 class="infoMentionsTitle2">

                                    The users are notably informed that, in accordance with Article 32 of Act No. 78-17 of
                                    6 January 1978 on information technology, data files and civil liberties, as amended, 
                                    the information provided through the forms contained in this website are used by 
                                    the Company to answer the users’ requests or questions. The Company is the sole recipient 
                                    of the information provided by the users. However, such information may be communicated 
                                    to third parties for the sole purpose of complying with legal obligations. Information 
                                    provided by the users will be kept for a duration of three years.<br/>
                                    In accordance with the abovementioned legal provisions, the users may access and rectify 
                                    their personal data, as well as instruct the Company on the treatment to be given to 
                                    their personal data in case of death. Users may exercise these rights by contacting the 
                                    data controller, i.e. Simon Eischen (email address: 
                                    <a class="contact-reveal" href="mailto:contact@scalenepartners.com">contact@scalenepartners.com</a>).</h2>
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