<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UI Design | Informationsarkitektur</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    
    <?php include 'nav.html' ?>

<!-- INTRO START -->
    <div id="cover" class="emne__cover cover__ia">
        <section class="intro">
            <header class="intro--left">
                <h1 class="intro__heading">
                    <span>Informations-</span>
                    <span>arkitektur</span>
                </h1>
                <span class="seperator"></span>
                <p class="intro__text">
                    Denne sektion indeholder de forskellige perioder internettet har været igennen, og historien bag internettet.
                </p>
            </header>
            <nav class="intro--right">
                <ul class="intro__list">
                    <li class="list__item">
                        <a href="#ia" class="list__link">Informationsarkitektur</a>
                    </li>
                    <li class="list__item">
                        <a href="#search" class="list__link">Men... Søgefunktion?</a>
                    </li>
                    <li class="list__item">
                        <a href="#organisering" class="list__link">Organisering</a>
                    </li>
                </ul>
            </nav>
        </section>
    </div>

<!-- CONTENT START -->
    <section class="emne__content" id="ia">

        <section class="section">
            <div class="section__item">
                <header class="section__header">
                    <h3>Informationsarkitektur</h3>
                </header>
                <p class="section__text">
                    Et website består af en masse information, som er delt ud, og grupperet, efter indhold og forbindes gennem hyperlinks.
                    Det er ikke nogen overraskelse, at jo mere indhold og flere sider der er, jo nemmere er det at farer vild i alle de sider.
                    Det er her hvor informationsarkitekturen virkelig kommer til sin ret – det hjælper med at organiserer indholdet på et website.
                </p>
                <blockquote class="section__quote" cite="Jeffrey Zeldman">
                    <p>"Good information architecture enables people to find and do what they came for.
                        Great information architecture takes find out of the equation: The site behaves as the visitor expects.” "</p>
                    <footer> - Jeffrey Zeldman</footer>
                </blockquote>
                <p class="section__text">
                    Det Jeffrey Zeldman mener i dette citat, er at god informationsarkitektur lader de besøgende på et website
                    opnå hvad de skal og finde det skal bruge – men hvis man fjerne ”find” fra situationen, så har man et website,
                    hvor brugeren ikke skal lede efter det de skal bruge, men de stryger direkte til det.
                    Det gør websitet mere intuitivt at bruge for den besøgende, og det resulterer i en god oplevelse for brugeren.
                </p>
                <p class="section__text">
                    Målet med informationsarkitektur er at skabe et website, hvor navigationen føles naturlig, og ikke forvirre eller vildleder brugeren.
                    Er menuer og navigation baseret på logisk og konsekvent navngivning kan brugeren forudsige, hvor de skal hen af for at finde hvad
                    de skal bruge. Det digitale produkt skal gerne blive så brugbart som overhovedet muligt gennem informationsarkitekturen.
                    Med henblik på brugervenlighed får man gennem informationsarkitektur organiseret, systematiseret og navngivet indholdet på den
                    rigtige måde. Det danner grundlaget for interfacedesign, navigeringsdesign og informationsdesign –
                    man skal helst holde sig fra det grafiske design indtil det hele er på plads
                </p>
                <ul class="section__kilde">
                    <li><a class="kilde__link" href="">Kommunikation og multimediedesign, s. 165-166</a></li>
                </ul>
            </div>
        </section>

        <section class="section" id="search">
            <div class="section__item">
                <header class="section__header">
                    <h3>Men... søgefunktionen?</h3>
                </header>
                <p class="section__text">
                    I dag vil mange mene, at jeg man bare kan søge efter tingene, med de mange indbyggede søgefunktioner på websites,
                    eller endda bare gennem google. Man kan dog ikke se forbi en søgning, forstået på den måde, at den viser kun det,
                    som den kan finde i forhold til de søgeord, som man har givet den – den viser ikke hvad der er tilgængeligt udover det.
                    Derudover skal brugeren vide, hvad dét de skal bruge hedder, for at kunne søge på det.
                    Og selvom man ved hvad noget hedder skal websites have gode informationsstrukturer og metadata,
                    for at søgningen kan vise de optimale resultater.
                </p>
                <p class="section__text">
                    God informationsarkitektur hjælper derfor både brugeren som bruger søgefunktioner, men det hjælper også med at gøre
                    den øvrige information synlig og tilgængelig for brugeren – Der er jo ingen grund til at have bestemt information på
                    sit website, hvis der ikke er nogen som kan finde det.
                </p>
                <p class="section__text">
                    En anden grund til, at informationsarkitektur er rigtig vigtig i dag, er at mængden af information som brugerne
                    præsenteres for, kun bliver større og større.
                </p>
                <ul class="section__kilde">
                    <li><a class="kilde__link" href="https://www.youtube.com/watch?v=ylvITZEAHX0">Kathryn Whitenton, NNGroup</a></li>
                </ul>
            </div>
        </section>

        <section class="section" id="organisering">
            <div class="section__item">
                <header class="section__header">
                    <h3>Organisering</h3>
                </header>
                <p class="section__text">
                    Når man skal organisere sit indhold, er der 5 grundlæggende måder at organiserer informationer på – disse kaldes ”de 5 hattehylder”.
                </p>
                <ul class="section__list">
                    <li class="list__item">Location - Lokation</li>
                    <li class="list__item">Alphabetic - Alfabetisk</li>
                    <li class="list__item">Time - Tid</li>
                    <li class="list__item">Category - Kategori</li>
                    <li class="list__item">Continuum - Kontinuum</li>
                </ul>
                <h4>Lokation</h4>
                <p class="section__text">
                    Her organiseres efter fysisk placering – geografisk placering eller en genstands
                    relative position i forhold til andre genstande - F.eks. legoklodser i en manuel.
                </p>
                <h4>Alfabetisk</h4>
                <p class="section__text">
                    Organiseret efter begyndelsesbogstavet i et navn eller et emne. Et eksempel kunne være telefonbøger,
                    hvor man kan slå folk op efter navn i alfabetisk rækkefølge.
                    Det alfabetiske system er velkendt fra hverdagen, og nemt at forstå.
                </p>
                <h4>Tid</h4>
                <p class="section__text">
                    Organisering efter tid. Dette kan være historie med årstal, eller et skole- eller arbejdsskema, som inddeles i mødetider.
                    Denne møder vi hele tiden i hverdagen gennem tv-oversigter, skemaer, kalendere, træning mm.
                </p>
                <h4>Kategori</h4>
                <p class="section__text">
                    Her vil emner eller produkter med relation tid hinanden grupperes sammen, og danne kategorisk organisering.
                    Dette kunne være en webshop, der sælger tøj og deler den op i 2 kategorier: kvinder og mænd –
                    yderligere kan de dele det op i typer af tøj: bukser, trøjer, sokker, hatte mm.
                </p>
                <h4>Kontinuum</h4>
                <p class="section__text">
                    Denne er lidt kringlet, men her inddeles der i sammenhængende, ubrudte rækker.
                    Det kan f.eks. være priser, point, størrelse og vægt.
                </p>
                <p class="section__text">
                    Det skal nævnes at der er nogle der angiver bruger ”hierarki” i stedet for kontinuum, og på denne måde vender
                    vi tilbage til overskriften, nemlig forkortelsen
                    LATCH: <strong>L</strong>ocation, <strong>A</strong>lphabetic, <strong>T</strong>ime, <strong>C</strong>ategory, <strong>H</strong>ierarchy.
                </p>
                <ul class="section__kilde">
                    <li><a class="kilde__link" href="">Kommunikation og multimediedesign, s. 166-167</a></li>
                    <li><a class="kilde__link" href="">Niels Østergaard, "informationsarkitektur.pdf"</a></li>
                    <li><a class="kilde__link" href="https://webstyleguide.com/wsg3/3-information-architecture/2-organizing-information.html">webstyleguide</a></li>
                </ul>
            </div>
        </section>
        
    </section>

    <?php include 'footer.html' ?>
    
    <script type="text/javascript" src="js/js.js"></script>
</body>

</html>