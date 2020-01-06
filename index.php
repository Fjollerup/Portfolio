<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Læringsportfolio</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    
    <?php include 'nav.html' ?>
    
<!-- INTRO START -->
<div id="cover" class="forside">
        <section class="intro">
            <h1 class="intro__heading">
                <span>Jesper's</span>
                <span>Portfolio</span>
            </h1>
            <span class="seperator"></span>
            <p class="intro__text">
                Dette website viser alt, hvad jeg har lært på mit 1. semester af multimediedesigner uddannelsen.
                Her findes også en samling af de projekter jeg har deltaget i på semestret.
            </p>
        </section>
    </div>

<!-- CONTENT START -->
    <section class="content">
    
        <section id="web">
            <div class="emne__container">
                <h2>Webudvikling</h2>
                <p>Denne sektion indeholder grundlæggende teori, metoder og redskaber, der er nødvendige for at kunne producerer et website.</p>
                <ul class="emne__list">
                    <li class="list__item">
                        <a class="list__link" href="html.php">HTML & SEO</a>
                    </li>
                    <li class="list__item">
                        <a class="list__link" href="css.php">CSS</a>
                    </li>
                    <li class="list__item">
                        <a class="list__link" href="historie.php">Internettets historie & perioder</a>
                    </li>
                    <li class="list__item">
                        <a class="list__link" href="server.php">Serbegrebet & serverside scripting</a>
                    </li>
                    <li class="list__item">
                        <a class="list__link" href="versionsstyring.php">Versionsstyring</a>
                    </li>
                </ul>
            </div>
        </section>

        <section id="komm">
            <div class="emne__container">
                <h2>Kommunikation</h2>
                <p>Denne sektion indeholder grundlæggende teori, metoder og redskaber, der er nødvendige for at kunne producere et website.</p>
                <ul class="emne__list">
                    <li class="list__item">
                        <a class="list__link" href="grundlaeggende.php">Grundlæggende</a>
                    </li>
                    <li class="list__item">
                        <a class="list__link" href="presentation.php">Præsentationsteknik</a>
                    </li>
                    <li class="list__item">
                        <a class="list__link" href="impiri.php">Kvalitativ og Kvantitativ impiri</a>
                    </li>
                    <li class="list__item">
                        <a class="list__link" href="tekstproduktion.php">Tekstproduktion</a>
                    </li>
                    <li class="list__item">
                        <a class="list__link" href="bmc.php">Business Canvas Model (BMC)</a>
                    </li>
                </ul>
            </div>
        </section>

        <section id="design">
            <div class="emne__container">
                <h2>Design</h2>
                <p>
                    Denne sektion indeholder grundlæggende teori om fotograferering, hvordan man skaber illustrationer og redigere billeder, og hvilken rolle farver, typografi og gestaltlovene har.
                </p>
                <ul class="emne__list">
                    <li class="list__item">
                        <a class="list__link" href="fotografering.php">Fotografering</a>
                    </li>
                    <li class="list__item">
                        <a class="list__link" href="illustrator.php">Illustrator</a>
                    </li>
                    <li class="list__item">
                        <a class="list__link" href="photoshop.php">Photoshop</a>
                    </li>
                    <li class="list__item">
                        <a class="list__link" href="farver.php">Farver</a>
                    </li>
                    <li class="list__item">
                        <a class="list__link" href="typografi.php">Typografi</a>
                    </li>
                    <li class="list__item">
                        <a class="list__link" href="gestaltlovene.php">Gestaltlovene</a>
                    </li>
                </ul>
            </div>
        </section>

        <section id="ui">
            <div class="emne__container">
                <h2>UI Design</h2>
                <p>Denne sektion indeholder det grundlæggende teori til at forbedre bruger-oplevelsen. Der kigges også på, hvordan brugeren kan deltage i processen.</p>
                <ul class="emne__list">
                    <li class="list__item">
                        <a class="list__link" href="ia.php">Informationsarkitektur</a>
                    </li>
                    <li class="list__item">
                        <a class="list__link" href="responsive.php">Responsivt Design</a>
                    </li>
                    <li class="list__item">
                        <a class="list__link" href="usability.php">Usability</a>
                    </li>
                </ul>
            </div>
        </section>
        

        
        <section id="projekter">
            <div class="emne__container">
                <h2>Projekter</h2>
                <p>Denne sektion indeholder de projekter jeg har deltaget i på 1. semester</p>
                <ul class="emne__list">
                    <li class="list__item">
                        <a class="list__link" href="projekt_webbog.php">HTML/CSS Workshop</a>
                    </li>
                    <li class="list__item">
                        <a class="list__link" href="designthinking.php">Design Thinking Teori</a>
                    </li>
                    <li class="list__item">
                        <a class="list__link" href="projekt_dt.php">Design Thinking Projekt</a>
                    </li>
                    <li class="list__item">
                        <a class="list__link" href="projekt_onepage.php">Onepage Projekt</a>
                    </li>
                </ul>
            </div>
        </section>

    </section>

    <?php include 'footer.html' ?>
    
    <script type="text/javascript" src="js/js.js"></script>
</body>

</html>