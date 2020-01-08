<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UI Design | Responsive Design</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    
    <?php include 'nav.html' ?>

<!-- INTRO START -->
    <div id="cover" class="emne__cover cover__responsive">
        <section class="intro">
            <header class="intro--left">
                <h1 class="intro__heading">
                    <span>Responsivt Design</span>
                </h1>
                <span class="seperator"></span>
                <p class="intro__text">
                    Her findes en oversigt over responsivt design, og metoderne der bruges hertil.
                </p>
            </header>
            <nav class="intro--right">
                <ul class="intro__list">
                    <li class="list__item">
                        <a href="#indledning" class="list__link">Indledning</a>
                    </li>
                    <li class="list__item">
                        <a href="#static" class="list__link">Static layout</a>
                    </li>
                    <li class="list__item">
                        <a href="#fluid" class="list__link">Fluid layout</a>
                    </li>
                    <li class="list__item">
                        <a href="#responsive" class="list__link">Responsive layout</a>
                    </li>
                    <li class="list__item">
                        <a href="#adaptive" class="list__link">Adaptive layout</a>
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
                    <h3>Responsivt Design</h3>
                </header>
                <p class="section__text">
                    I begyndelsen byggede man sit website til specifikke skærmstørrelser.
                    Ofte ville det resultere i uønskede resultater på større og mindre skærme – f.eks. scrollbars og urimeligt lange linjer.
                    Designet så som regel bedst ud på designerens skærm. 
                </p>
                <p class="section__text">
                    Det ændrede sig da der kom mere diverse skærmstørrelser til, hvor behovet for et mere flexibelt web design opstod.
                    Herfra kom begrebet Responsive Web Design, som dækker en række metoder der lader os ændre vores layout og design så
                    det passer til forskellige skærmstørrelser og opløsninger.
                </p>
                <ul class="section__kilde">
                    <li><a class="kilde__link" href="https://developer.mozilla.org/en-US/docs/Learn/CSS/CSS_layout/Responsive_Design">Mozilla</a></li>
                </ul>
            </div>
        </section>
<!-- STATIC START -->
        <section class="section" id="static">
            <div class="section__item">
                <header class="section__header">
                    <h3>Static Layout</h3>
                </header>
                <p class="section__text">
                    I de tidlige år var den dominerende metode ”static layout”, og det er lige præcis hvad det lyder til.
                    Et statisk layout, som ikke ændre sig. Dette var som regel lavet på desktop, og det betød at mindre skærme ville
                    enten give en uønsket scrollbar, eller skalere siden på mobilen enheder.
                    Større skærme ville give nogle urimeligt lange linjer til tekst og en masse ”luft” på siden.
                    Det så som regel bedst ud med samme skærm og opløsning som designeren.
                </p>
                <div class="section__img">
                    <img src="img/responsive/static.png" alt="Statisk layout">
                </div>
            </div>
        </section>
<!-- FLUID START -->
        <section class="section" id="fluid">
            <div class="section__item">
                <header class="section__header">
                    <h3>Fluid Layout</h3>
                </header>
                <p class="section__text">
                    Denne metode foretrækkes, hvis man vægter indhold og funktionalitet højere end det grafiske design.
                    Designere som benyttede sig af fluid layout, var ikke på god fod med det æstetisk-orienterede designere,
                    da deres fokus blev nedprioriteret.
                </p>
                <p class="section__text">
                    Dertil skal det nævnes at det ofte giver en bedre brugeroplevelse, da man både udnytter pladsen bedre,
                    men også lader elementerne skalerer med siden.
                    Dette gøres ved at angive bredden på elementer relativt, ved hjælp af procenter.
                    Dette gør at elementerne kan blive meget smalle. Der er dog ofte grænser for, hvor smalt indhold kan blive.
                </p>
                <div class="section__img">
                    <img src="img/responsive/fluid.png" alt="Fluid layout">
                </div>
            </div>
        </section>
<!-- RESPONSIVE START -->
        <section class="section" id="responsive">
            <div class="section__item">
                <header class="section__header">
                    <h3>Responsive Layout</h3>
                </header>
                <p class="section__text">
                    Dette består typisk af et liquid layout.Forskellen er at denne metode ændre på layoutet afhængig af skærmens bredde –
                    Dette sker ved hjælp af det vi skalder @media-queries.
                    Disse @media-queries gør det muligt, at bruge den samme HTML og CSS, på tværs af alle enheder.
                </p>
                <p class="section__text">
                    Selvom der skal lidt planlægning til, så er det en metode som gør det nemmere udføre det man også kalder multi-device web.
                    Tilgangen her, er mobile first, der betyder at man designer sit website i rækkefølgen: mobil &gt; tablet &gt; desktop.
                </p>
                <div class="section__img">
                    <img src="img/responsive/responsive.png" alt="Fluid layout">
                </div>
            </div>
        </section>
<!-- ADAPTIVE START -->
        <section class="section" id="adaptive">
            <div class="section__item">
                <header class="section__header">
                    <h3>Adaptive Layout</h3>
                </header>
                <p class="section__text">
                    Denne metode er en mellemting mellem statisk og responsive layout.
                    Det ligner det responsive layout meget på den måde, at det benytter sig af @media-queries,
                    men på skærme der ikke rammer disse breakpoints vil der ofte være for meget, eller for lidt plads.
                </p>
                <p class="section__text">
                    Har man muligheden for at gøre det responsivt vil man typisk vælge det over det adaptive layout.
                    Man kan sige, at dette benyttes hvis man skal konvertere et statisk layout til et responsivt layout.
                    Det vil dog aldrig blive fuldt responsivt, hvis man ikke skriver det om.
                </p>
                <p class="section__text">
                    Modsat responsive layout, benytter denne metode sig af mobile last.
                </p>
                <ul class="section__kilde">
                    <li><a class="kilde__link" href="https://developer.mozilla.org/en-US/docs/Learn/CSS/CSS_layout/Responsive_Design">Mozilla</a></li>
                    <li><a class="kilde__link" href="">Niels Østergaard, "responsive i praksis.pdf"</a></li>
                </ul>
            </div>
        </section>
        
    </section>

    <?php include 'footer.html' ?>
    
    <script type="text/javascript" src="js/js.js"></script>
</body>

</html>