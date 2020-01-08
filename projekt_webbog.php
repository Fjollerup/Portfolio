<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projekter | HTML/CSS Workshop</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    
    <?php include 'nav.html' ?>

<!-- INTRO START -->
    <div id="cover" class="emne__cover cover__projekt--webbog">
        <section class="intro">
            <header class="intro--left">
                <h1 class="intro__heading">
                    <span>HTML/CSS Workshop</span>
                </h1>
                <span class="seperator"></span>
                <p class="intro__text">
                    Denne side handler om vores HTML/CSS Workshop aka. webbog, samt den index-side jeg frivilligt lavede udover projektet til at samle alle sider.
                </p>
            </header>
            <nav class="intro--right">
                <ul class="intro__list">
                    <li class="list__item">
                        <a href="#indledning" class="list__link">Indledning</a>
                    </li>
                    <li class="list__item">
                        <a href="#webbog" class="list__link">Webbog</a>
                    </li>
                    <li class="list__item">
                        <a href="#webbogindex" class="list__link">Webbog index</a>
                    </li>
                </ul>
            </nav>
        </section>
    </div>

<!-- CONTENT START -->
    <section class="emne__content" id="indledning">

        <section class="section">
            <div class="section__item">
                <header class="section__header">
                    <h3>HTML/CSS Workshop</h3>
                </header>
                <p class="section__text">
                    Dette var vores første rigtige projekt, hvor vi skulle producere et produkt.
                    Dette skulle være i form af en lille hjemmeside, som fokuserede på et enkelt
                    emne i <a href="html.php" class="text__link">HTML</a> eller <a class="text__link" href="css.php">CSS</a>.
                </p>
                <p class="section__text">
                    Slut-produktet var en webbog, der skulle fungerer som et opslagsværk,
                    som vi kunne brugen når vi skulle kode HTML og CSS efterfølgende.
                </p>
            </div>
        </section>
<!-- WEBBOG -->
        <section class="section" id="webbog">
            <div class="section__item">
                <header class="section__header">
                    <h3>Webbog - Formularer, typer og formatering</h3>
                </header>
                <p class="section__text">
                    Jeg kom i gruppe med Mette N. og det fungerede rigtig godt.
                    Vores emne var ”Formularer, typer og formatering”, nærmere
                    betegnet hvad man bruger &lt;input&gt; tagget til, de forskellige
                    typer og hvordan disse bruges i praksis. Vi valgte at give et 
                    eksempel på samtlige typer vi kunne finde på w3schools, og
                    så lave 2 samples til sidst, hvor vi bruger forskellige til
                    at danne en formular: vi valgte kontakt formular og login formular.
                </p>
                <p class="section__text">
                    Eksempler og link til projektet:
                    <a href="http://jesp883f.apache.eadania.dk/webbog/formularer" class="text__link">Webbog - Formularer, typer og formatering</a>
                </p>
                <div class="section__img">
                    <img src="img/projekter/webbog/types.jpg" alt="Preview til vores projekt">
                    <img src="img/projekter/webbog/samples.jpg" alt="Preview af vores samples på vores projekt">
                </div>
            </div>
        </section>
<!-- WEBBOG INDEX -->
        <section class="section" id="webbogindex">
            <div class="section__item">
                <header class="section__header">
                    <h3>Webbog - Index</h3>
                </header>
                <p class="section__text">
                    Efter forespørgsel fra vores underviser, meldte jeg mig frivilligt til at lave en index side, til at samle alle siderne under én oversigt. På denne måde er det meget nemmere for folk at finde det de skal bruge.
                </p>
                <p class="section__text">
                    Den blev særligt lavet til mobilen, så det var muligt at kigge
                    på den imens man arbejdede med noget andet på computeren,
                    men jeg lavede også et breakpoint til desktop, så man kan se den der på.
                    Forskellen er 1 kolonne layout vs. 2 kolonne layout. Samtidig tilføjede
                    jeg en lille navigation med hjælp af et par linier JavaScript for at gøre
                    den nemmere at navigere på i mobil-view, da den bliver lidt lang at scroll på ellers.
                </p>
                <p class="section__text">
                    Eksempel og link til projektet:
                    <a href="http://jesp883f.apache.eadania.dk/webbog" class="text__link">Webbog Index</a>
                </p>
                <img src="img/projekter/webbog/index.PNG" alt="Preview a webbog index">
            </div>
        </section>
    </section>

    <?php include 'footer.html' ?>
    
    <script type="text/javascript" src="js/js.js"></script>
</body>

</html>