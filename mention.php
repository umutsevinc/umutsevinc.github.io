<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta author="Scalene Partners" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Scalene Partners | Fundraising advisory"/>
    <title>Scalene Partners - Legal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css">
    <link rel="stylesheet" href="./app.css">

    <link href="Assets/ico/ico144.png" rel="apple-touch-icon-precomposed" sizes="144x144">
    <link href="Assets/ico/ico114.png" rel="apple-touch-icon-precomposed" sizes="114x114">
    <link href="Assets/ico/ico72.png" rel="apple-touch-icon-precomposed" sizes="72x72">
    <link href="Assets/ico/ico57.png" rel="apple-touch-icon-precomposed" sizes="57x57">
    <link href="Assets/ico/ico.ico" rel="shortcut icon">
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-108837571-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-108837571-1');
    </script>
</head>

    <body>
        <section class="hero">
            <div class="hero-head">
                <header class="navbar">
                        <div class="navbar-brand">
                            <a class="navbar-item" href="http://www.scalenepartners.com">
                                <img src="./Assets/SC_PRTNRS_LOGO.png" alt="Logo">
                            </a>
                        </div>
                </header>
            </div>
        </section>

        <section class="section" id="contact">
        <h1 class="title is-1 has-text-centered has-margin-bottom">Legal information</h1>
            <div class="columns">
                <div class="column">
                    <div class="has-text-centered">
                        <div class="content">
                            <p>Social reason : Scalene Partners</p>
                            <p>Legal form : Joint stock company</p>
                            <p>Address : 20, rue Quentin Bauchart</p>
                            <p>Amount of the share capital : 30.000€</p>
                            <p>Email address : contact@scalenepartners.com</p>
                            <p>Phone number : 01.83.96.85.55</p>
                            <p>NAF Code : 7022Z</p>
                            <p>Registration number at the Paris RCS : 830 765 996</p>
                            <p>VAT N ° : FR79830765996</p>
                            </br></br>
                            <p>Scalene Partners relève des statuts réglementés de 
                            Conseiller</p><p>en investissements financiers, référencé sous le 
                            numéro D017926</p>par la Chambre Nationale des Conseillers en 
                            Investissements Financiers</p><p>(www.cncif.org), association agréée 
                            par l’Autorité des Marchés Financiers – n° ORIAS : 17006173</p>
                        </div>
                        </br></br>
                        <div class="content">
                                <a href="index.php"> <h1 class="title is-5 is-brand">Back to home</h1></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer">
            <div class="container">
                <div class="content has-text-centered">
                    <a href="http://www.scalenepartners.com"><img src="./Assets/SC_PRTNRS_LOGO.png" alt="Logo" width="231" height="27">
                      </a>
                </div>
            </div>
        </footer>

    </body>

</html>
<?php
    unset($_SESSION["errors"]);
    unset($_SESSION["input"]);
    unset($_SESSION["success"]);
?>