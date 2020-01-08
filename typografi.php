<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Design | Typografi</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    
    <?php include 'nav.html' ?>

<!-- INTRO START -->
    <div id="cover" class="emne__cover cover__typografi">
        <section class="intro">
            <header class="intro--left">
                <h1 class="intro__heading">
                    <span>Typografi</span>
                </h1>
                <span class="seperator"></span>
                <p class="intro__text">
                    Denne side redegøre for forskellen mellem typeface og font, samt opbygning heraf. 
                </p>
            </header>
            <nav class="intro--right">
                <ul class="intro__list">
                    <li class="list__item">
                        <a href="#indledning" class="list__link">Indledning</a>
                    </li>
                    <li class="list__item">
                        <a href="#typeface" class="list__link">Typeface vs. font</a>
                    </li>
                    <li class="list__item">
                        <a href="#anatomi" class="list__link">Anatomi</a>
                    </li>
                    <li class="list__item">
                        <a href="#font" class="list__link">Fontklassifikationer</a>
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
                    <h3>Typografi</h3>
                </header>
                <p class="section__text">
                    Når man siger typeface og font, så tænker den generelle bruger at det er synonymer for skrifttype.
                    Det er også der, hvor designer krummer sine tær lidt. I grove træk referer typeface til udseendet,
                    og fonten til mekanismen bag fonten – hvordan man bruger den.
                </p>
            </div>
        </section>
<!-- TYPEFACE START -->
        <section class="section" id="typeface">
            <div class="section__item">
                <header class="section__header">
                    <h3>Typeface vs. font</h3>
                </header>
                <p class="section__text">
                    Når det kommer til typografi, så har vi både typeface og font,
                    disse er forskellige begreber, som ofte blandes lidt sammen. Typeface henviser
                    til den overordnede font – f.eks. arial. Font henviser til den måde man bruger
                    den på gennem font weights – italic og bold. Man kan sammenligne det med et musikalbum
                    og sangene derpå - Det første er en sammensætning af det sidste.
                </p>
                <ul class="section__list">
                    <li class="list__item"><strong>Typeface</strong> ARIAL</li>
                    <li class="list__item"><strong>Font</strong> Arial regular, <i>Arial ITALIC</i>, <strong>Arial BOLD</strong></li>
                </ul>
                <ul class="section__kilde">
                    <li><a class="kilde__link" href="https://www.fastcompany.com/90443036/pantones-color-of-the-year-is-awful">John Brownlee, fastcompany.com</a></li>
                </ul>
            </div>
        </section>
<!-- ANATOMI START -->
        <section class="section" id="anatomi">
            <div class="section__item">
                <header class="section__header">
                    <h3>Anatomi</h3>
                </header>
                <p class="section__text">
                    Der er også det der hedder typografiens anatomi. Her er er en lang række begreber,
                    som en ”type-designer”, bruger når de designer en font – man skal dog ikke kende
                    dem alle for at benytte et typeface.
                </p>
                <p class="section__text">
                    Her er de vigtigste:
                </p>
                <ul class="section__list">
                    <li class="list__item"><strong>Minuskler</strong> er små bogstaver</li>
                    <li class="list__item"><strong>Majuskler</strong> er store bogstaver</li>
                    <li class="list__item"><strong>X-height</strong> er højden på minusklen "x". Målt fra bundlinie til toppen af bogstavet.</li>
                    <li class="list__item"><strong>Leading</strong> i daglig tale kaldt "linieafstand". Denne måles fra bundlinie til bundlinie</li>
                    <li class="list__item"><strong>Kerning</strong> er afstanden mellem bogstaverne. Disse kan justeres så der skabes balance</li>
                    <li class="list__item"><strong>Tracking</strong> er den overordnede afstand mellem bogstaverne i et ord, eller en markering</li>
                </ul>
                <div class="section__img">
                    <img src="img/typografi/typografi.png" alt="">
                </div>
                <p class="section__text">
                    I dette eksempel har jeg valgt en tekst som har en rigtig god tracking.
                    Tracking er den overordnede afstand mellem alle bogstaverne i ordet.
                    Den er ensartet og gør teksten nem at læse. Der er også brugt noget kerning
                    – afstanden mellem 2 bogstaver. Dette kan ses ved T og Y da disse to er rykket
                    tættere på hinanden, så der ikke er så meget luft omkring T’et – gør man ikke
                    det vil det se ud som om t’et står for sig selv, ligesom x’et.
                </p>
                <ul class="section__kilde">
                    <li><a class="kilde__link" href="">Carsten Bogner, "typografi.pdf"</a></li>
                </ul>
            </div>
        </section>
<!-- FONT START -->
        <section class="section" id="font">
            <div class="section__item">
                <header class="section__header">
                    <h3>Fontklassifikationer</h3>
                </header>
                <p class="section__text">
                    Der er også klassifikation når det kommer til fonts.
                    2 som man ofte vil støde på er SERIF og SANS SERIF.
                </p>
                <h4>Serif</h4>
                <p class="section__text section__text--serif">
                    Dette afsnit er skrevet med "Source Serif Pro", som er et Serif typeface.
                    Denne har sit navn fra de fødder som afslutter grundstregen på et bogstav eller symbol.
                    Denne type font bruges ofte til brødtekst – de hjælper med at gøre længere tekster
                    mere læselige pga. fødderne – de danner næsten deres egen linie for øjet at følge.
                    <br><br>
                    Denne opfattes dog som traditionel/gammeldags.
                </p>
                <h4>Open Sans</h4>
                <p class="section__text section__text--sansserif">
                    Her er teksten skrevet med "Open Sans", som er et Sans Serif typeface.
                    Det er fransk og betyder ”uden” – disse er derfor uden fødder.
                    Denne klassifikation benyttes ofte til overskrifter pga. den store
                    kontrast den har til den letlæselige serif.
                    <br><br>
                    Denne har dog længe været en favorit til brødtekst på moderne websites.
                </p>
                <ul class="section__kilde">
                    <li><a class="kilde__link" href="">Carsten Bogner, "typografi.pdf"</a></li>
                </ul>
            </div>
        </section>
        
        
    </section>

    <?php include 'footer.html' ?>
    
    <script type="text/javascript" src="js/js.js"></script>
</body>

</html>