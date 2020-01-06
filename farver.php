<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Design | Farver</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    
    <?php include 'nav.html' ?>

<!-- INTRO START -->
    <div id="cover" class="emne__cover cover__farver">
        <section class="intro">
            <header class="intro--left">
                <h1 class="intro__heading">
                    <span>Farver</span>
                </h1>
                <span class="seperator"></span>
                <p class="intro__text">
                    Denne side forklarer farveteori og forskellige måder at kombinerer farver på.
                </p>
            </header>
            <nav class="intro--right">
                <ul class="intro__list">
                    <li class="list__item">
                        <a href="#indledning" class="list__link">Indledning</a>
                    </li>
                    <li class="list__item">
                        <a href="#farvesymbolik" class="list__link">Farvesymbolik</a>
                    </li>
                    <li class="list__item">
                        <a href="#farvesystemer" class="list__link">Farvesystemer</a>
                    </li>
                    <li class="list__item">
                        <a href="#farvekombination" class="list__link">Farvesammensætning</a>
                    </li>
                    <li class="list__item">
                        <a href="#webdesign" class="list__link">Webdesign</a>
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
                    <h3>Farver</h3>
                </header>
                <p class="section__text">
                    Farver er essentielt bare lys. I 1600-tallet udførte Isaac Newton et eksperiment,
                    hvor han påviste at farver kommer fra lys, der brydes i en prisme.
                    Gennem hans eksperimenter opdagede han at blå, gul og rød er de primære farver,
                    da disse ikke kan blandes af andre farver.
                </p>
                <p class="section__text">
                    Senere, i 1900-tallet udvidede Johannes Itten farveteorien med farvecirklen vi kender i dag.
                    Han delte farverne op i primær, sekundær og tertiære farver.
                </p>
                <ul class="section__list"></ul>
                <li class="list__item"><strong>Primære</strong> Rød, gul og blå. Disse kan ikke blandes af andre farver</li>
                <li class="list__item"><strong>Sekundære</strong> Blandes af 2 primære farver</li>
                <li class="list__item"><strong>Tertiære</strong> Blandes af en primær og sekundær farve</li>
                <h4>Destructive editing</h4>
                <p class="section__text">
                    Han skabte også begrebet komplementærfarver, 2 farver der står overfor hinanden i farvecirklen.
                </p>
                <ul class="section__kilde">
                    <li><a class="kilde__link" href="">Carsten Bogner, "farvelaere.pdf</a></li>
                </ul>
            </div>
        </section>

        <section class="section" id="farvesymbolik">
            <div class="section__item">
                <header class="section__header">
                    <h3>Farvesymbolik</h3>
                </header>
                <p class="section__text">
                    Farver har en betydning for alle mennesker, og det kan variere fra person
                    til person,baseret på deres opvækst, kultur, og oplevelser
                    – og så har vi også naturligt forskellige præferencer.
                </p>
                <p class="section__text">
                    Her er et eksempel på farvesymbolik i forbindelse med web design:
                </p>
                <img src="img/farver/symbolik.jpg" alt="">
                <p class="section__text">
                    Med det sagt, så er det vigtigt at pointere at ethvert farvesystem er baseret på teoretiske opfattelser,
                    og kan derfor variere mellem forskellige kulturs opfattelse af farver.
                </p>
                <p class="section__text">
                    Der er også forskel på mænd og kvinder. Generelt set,
                    så drages mænd og kvinder ofte mod hver deres farver.
                </p>
                <div class="section__img">
                    <img src="img/farver/farver_kvinder_mænd.png" alt="Illustration af forskellige farvepræferencer mellem mænd og kvinder">
                </div>
            </div>
        </section>

        <section class="section" id="farvesystemer">
            <div class="section__item">
                <header class="section__header">
                    <h3>Farvesystemer</h3>
                </header>
                <p class="section__text">
                    Som multimediedesigner er det vigtigt at kende til de forskellige farvsystemer. Det er vigtigt,
                    hvis man skal veksle mellem digital grafik og tryksager. Her er 3, som man bær kende til.
                </p>
                <ul class="section__list">
                    <li class="list__item">RGB</li>
                    <li class="list__item">CMYK</li>
                    <li class="list__item">HSB</li>
                </ul>
                <h4>RGB</h4>
                <p class="section__text">
                    RGB står for Red Green Blue. Dette er et additiv farvesystem, og det betyder at man tilføjer lys.
                    Denne bruger man til digital grafik – f.eks. computere og tv-skærme.
                </p>
                <h4>CMYK</h4>
                <p class="section__text">
                    CMYK står for Cyan Magenta Yellow Key(Black). Dette er et subtraktivt farvesystem, hvilket betyder
                    at man trækker lys ud. Denne bruges til tryksager – f.eks. t-shirts, plakater, banners.
                </p>
                <h4>HSB</h4>
                <p class="section__text">
                    HSB står for Hue Saturation Brightness (på dansk Kulør, mætning og lyshed).
                    Hue/Kulør er en variation af en farve, hvor saturation/mætning bestemmer hvor
                    meget gråtone der blandes i. Til sidst med brightness/lyshed, blander man
                    sort eller hvid i.På denne måde opnår man den ønskede farve.
                </p>
                <ul class="section__kilde">
                    <li><a class="kilde__link" href="">Carsten Bogner, "farvelaere.pdf</a></li>
                </ul>
            </div>
        </section>

        <section class="section" id="farvekombination">
            <div class="section__item">
                <header class="section__header">
                    <h3>Farvesammensætning</h3>
                </header>
                <p class="section__text">
                    Skal man designe et website, så er det vigtigt at man ved lidt om farvesammensætninger,
                    og gerne noget om brugerne. 2 Undersøgelser hvor den ene måler den æstetiske reaktion,
                    og den anden kigger kigger på forbrugernes præferencer, viser at de fleste foretrækker
                    farver, som er tæt på hinanden – de foretrækker dog også farve med høj kontrast.
                </p>
                <p class="section__text">
                    Til at sammensætte farver har vi 2 metoder dertil: analog og triader
                </p>
                <ul class="section__list">
                    <li class="list__item"><strong>Analog</strong> Denne bstår af én farve (hue/kulør), som har et bredt spektrum</li>
                    <li class="list__item"><strong>Triader</strong> 3 farver som er lige langt fra hinanden på farvecirklen – 120grader mellem hver farve</li>
                </ul>
                <div class="section__img">
                    <img src="img/farver/farver_analog.png" alt="Farvecirkel med analog sammensætning">
                    <img src="img/farver/farver_triader.png" alt="Farvecirkel med triade sammensætning">
                </div>
                <h4>Monokrom</h4>
                <p class="section__text">
                    Denne består af en enkelt farve. Denne justeres i forhold til brightness
                    og saturation. Den går mellem sort og hvid, og nuancerne derimellem. 
                </p>
                <div class="section__img">
                    <img src="img/farver/farver_monokrom.png" alt="Farvecirkel med monokrom sammensætning">
                </div>
                <h4>Komplementær</h4>
                <p class="section__text">
                    Her har vi farve som ligger direkte overfor hinanden.
                </p>
                <div class="section__img">
                    <img src="img/farver/farver_komplementær.png" alt="Farvecirkel med komplementær sammensætning">
                </div>
                <h4>Split komplementær</h4>
                <p class="section__text">
                    Farver overfor hinanden som har et bredere spektrum.
                </p>
                <div class="section__img">
                    <img src="img/farver/farver_split.png" alt="Farvecirkel med split-komplementær sammensætning">
                </div>
                <h4>Triader</h4>
                <p class="section__text">
                    Her har vi 3 farver, som har samme afstand (120 grader) fra hinanden i farvecirklen.
                </p>
                <div class="section__img">
                    <img src="img/farver/farver_triader.png" alt="Farvecirkel med triade sammensætning">
                </div>
                <h4>Tetriader</h4>
                <p class="section__text">
                    Denne kaldes også dobbeltkomplementær. Her har vi 4 farver, som er komplementære i par. 
                </p>
                <div class="section__img">
                    <img src="img/farver/farver_tetriader.png" alt="Farvecirkel med tetriade sammensætning">
                </div>
            </div>
            <ul class="section__kilde">
                <li><a class="kilde__link" href="">Carsten Bogner, "farvelaere.pdf</a></li>
            </ul>
        </section>

        <section class="section" id="webdesign">
            <div class="section__item">
                <header class="section__header">
                    <h3>Webdesign</h3>
                </header>
                <p class="section__text">
                    Når det kommer til webdesign, kan man ofte se at der er tænkt
                    meget over farvevalg, og hvordan disse farver bruges.
                </p>
                <p class="section__text">
                    Vi har 3 farver som altid er lagt fast i webdesign:
                </p>
                <ul class="section__list">
                    <li class="list__item">Baggrund</li>
                    <li class="list__item">Base/grundfarve</li>
                    <li class="list__item">Accentfarve</li>
                </ul>
                <p class="section__text">
                    Dette betyder ikke, at ma ikke må have flere farver, men disse 3 vil
                    som regel altid være gennemgående når man kigger på en side.
                </p>
                <p class="section__text">
                    Hvis man f.eks. skal designe noget til kvinder, som L’Oreal har gjort her.
                </p>
                <div class="section__img">
                    <img src="img/farver/loreal.PNG" alt="">
                </div>
                <p class="section__text">
                    Her promoverer de deres silver-shampoo, Elvital Color-Vive Purple.
                    Til det formål bruger de på denne side: sort, hvid, lilla, og gul.
                </p>
                <ul class="section__list">
                    <li class="list__item"><strong>Baggrund</strong> Hvid betegner modernitet og ro</li>
                    <li class="list__item"><strong>Base</strong> Sort betegner klasse og elegance, det giver indtrykket af at det ikke er en shampoo til en 10'er</li>
                    <li class="list__item"><strong>Accent</strong> Lilla er en favorit hos kvinder - den signalerer luksus, elegance og feminitet</li>
                    <li class="list__item"><strong>Ekstra</strong> Gul er komplementærfarve til lilla</li>
                </ul>
                <p class="section__text">
                    At en silver shampoo i sig selv er lilla, og farven lilla er brugt på siden er
                    selvfølgelig heller ikke tilfældigt,
                    men det viser bare yderligere at man har gennemtænkt farverne på siden. 
                </p>
                <p class="section__text">
                    Bonus: En silver shampoo er lilla fordi den har til formål at trække gule toner ud af håret.
                    Derfor er den rig med lilla pigment. Så her kan vi igen anvende vores farve teori.
                    Her kan man spekulere på metaforen i at hånden på billedet er gul, og vinker farvel til de gule toner.
                </p>
                <ul class="section__kilde">
                    <li><a class="kilde__link" href="">Carsten Bogner, "farvelaere.pdf</a></li>
                    <li><a class="kilde__link" href="https://designmodo.com/color-psychology-web-design/">Jerry Cao, designmodo.com</a></li>
                    <li><a class="kilde__link" href="https://www.helpscout.com/blog/psychology-of-color/">Gregory Ciotti, designmodo.com</a></li>
                </ul>
            </div>
        </section>        
        
    </section>

    <?php include 'footer.html' ?>
    
    <script type="text/javascript" src="js/js.js"></script>
</body>

</html>