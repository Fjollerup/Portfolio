<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web | HTML & SEO</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    
    <?php include 'nav.html' ?>

<!-- INTRO START -->
    <div id="cover" class="emne__cover cover__html">
        <section class="intro">
            <header class="intro--left">
                <h1 class="intro__heading">
                    <span>HTML & SEO</span>
                </h1>
                <span class="seperator"></span>
                <p class="intro__text">
                    Denne side indeholder grundlæggende teori, metoder og redskaber, der er nødvendige for at kunne producere et website.
                </p>
            </header>
            <nav class="intro--right">
                <ul class="intro__list">
                    <li class="list__item">
                        <a href="#indledning" class="list__link">Indledning</a>
                    </li>
                    <li class="list__item">
                        <a href="#syntaks" class="list__link">Syntaks</a>
                    </li>
                    <li class="list__item">
                        <a href="#seo" class="list__link">SEO</a>
                    </li>
                    <li class="list__item">
                        <a href="#kodeskik" class="list__link">Kodeskik</a>
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
                    <h3>Indledning</h3>
                </header>
                <p class="section__text">
                    HTML betyder Hypertext Markup Language, og det er denne kode man bruger til at strukturere sin webside og indholdet derpå.
                    For eksempel kan indholdet struktureres som paragrafer, bullet-point lister, eller billeder og tabeller.
                    HTML er ikke et programmeringssprog, det er et ”markup language”, som betyder at det definerer dit indhold.
                    HTML består af en række elementer, som vi bruger til at omslutte, eller pakke indhold ind så det opfører sig, eller præsenteres på en bestemt måde.
                    De omsluttende tags kan få et ord eller billede til at fungerer som et hyperlink til andre steder, det kan sætte skrift i italic eller bold.
                    Det kan også gøre tekst større eller mindre.
                </p>
                <ul class="section__kilde">
                    <li><a class="kilde__link" href="https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web/HTML_basics">mozilla.org</a></li>
                </ul>
            </div>
        </section>

        <section class="section" id="syntaks">
            <div class="section__item">
                <header class="section__header">
                    <h3>Syntaks</h3>
                </header>
                <p class="section__text">
                    Syntaks er måden hvorpå du skriver HTML. Det findes i alle kode- og programmeringssprog.
                    Det kan på grov vis kaldes kodesprogets grammatik.
                    Det er den bestemte måde det skal skrives på, hvis det skal fungere korrekt, og give de bedste resultater.
                </p>
                <ul class="section__list">
                    <li class="list__item">!DOCTYPE</li>
                    <li class="list__item">&lt;head&gt;</li>
                    <li class="list__item">&lt;html&gt;</li>
                </ul>
                <div class="section__code">
                    <pre class="linenumbers"><code><span class="linenumbers--rows"><span>&lt;!DOCTYPE html&gt;</span>
<span>&lt;html lang="en"&gt;</span>
<span>&lt;head&gt;</span>
<span>    &lt;meta charset="UTF-8"&gt;</span>
<span>    &lt;title&gt;Document&lt;/title&gt;</span>
<span>&lt;/head&gt;</span>
<span>&lt;body&gt;</span>
<span></span>
<span>&lt;/body&gt;</span>
<span>&lt;/html&gt;</span>
</span></code></pre>
                </div>
                <h4>!DOCTYPE</h4>
                <p class="section__text">
                    Det første man gør i enhver html fil er at definerer filen som et HTML-dokument.
                    Dette gøres ved at skrive &lt;!DOCTYPE html&gt; på den første linje i alle html-dokumenter.
                    Det er denne linje som fortæller browseren hvilken version af HTML dokumentet er skrevet i.
                </p>
                <h4>&lt;head&gt;</h4>
                <p class="section__text">
                    Denne sektion indeholder dokumentets meta-data (data om data). Denne sektion indeholder en masse forskellige tags, som beskriver dokumentet:
                    &lt;title&gt;, &lt;style&gt;, &lt;meta&gt;, &lt;link&gt;, &lt;script&gt;, &lt;base&gt;.
                </p>
                <ul class="section__kilde">
                    <li><a class="kilde__link" href="https://www.w3schools.com/html/html_head.asp">w3schools</a></li>
                </ul>
                <h4>&lt;body&gt;</h4>
                <p class="section__text">
                    Denne sektion indeholder alt indholdet, som man ser på websiden. Text, hyperlinks, billeder, lister etc.
                </p>
                <ul class="section__kilde">
                    <li><a class="kilde__link" href="https://www.w3schools.com/html/html_body.asp">w3schools</a></li>
                    <li><a class="kilde__link" href="">Niels Østergaard, &quot;intro til html.pdf&quot;</a></li>
                </ul>
            </div>
        </section>

        <section class="section" id="seo">
            <div class="section__item">
                <header class="section__header">
                    <h3>SEO</h3>
                </header>
                <p class="section__text">
                    SEO står for Search Engine Optimization, og dette afsnit er uhyre vigtigt for det moderne website - det fokuserer på, at HTML er semantisk. 
                    At ens HTML er semantisk betyder i grove træk at man bruger elementer(tags), som har en betydning.
                    Dette gør at koden man skriver, er nemmere at forstå for os alle sammen, ikke kun web-udviklere.
                    Dette betyder også, at søgemaskiner bedre kan forstå indholdet på sitet. 
                </p>
                <ul class="section__kilde">
                    <li><a class="kilde__link" href="">Niels Østergaard, &quot;intro til html.pdf&quot;</a></li>
                </ul>
            </div>
        </section>

        <section class="section" id="kodeskik">
            <div class="section__item">
                <header class="section__header">
                    <h3>Kodeskik</h3>
                </header>
                <p class="section__text">
                    God kodeskik er vigtig. Det gør koden lettere at læse og forstå, især for dig selv, men også for andre som eventuelt skal læse koden.
                    Det bliver simpelthen nemmere og hurtigere at finde det man skal bruge i koden, 
                    hvor det samtidig også bliver hurtigere for andre at sætte sig ind i din kode.
                </p>
                <h4>Indryk</h4>
                <p class="section__text">
                    Ved hjælp af tabulatortasten på tastaturet kan man lave jævnt indryk foran hver linie i html.
                    Dette skaber overblik over koden, og gør den læselig.
                </p>
                <h4>Kommentarer i koden</h4>
                <p class="section__text">
                    Dette hjælper én med hurtigt at se, hvor forskellige dele af koden starter og slutter.
                    F.eks. hvis man har en navigations-sektion, så kan man bruge nogle kommentarer til at indikerer hvor denne starter og slutter.
                </p>
                <h4>Betydningsfulde tags</h4>
                <p class="section__text">
                    Her er vi over i semantiske tags, disse har en betydning i forhold til sidens indhold. Særligt for søgemaskine og skærmoplæsere.
                    Disse semantiske tags fortæller f.eks. søgemaskinen, hvad dette bestemte indhold er: overskrift, artikel, navigation etc.
                </p>
                <ul class="section__kilde">
                    <li><a class="kilde__link" href="">Niels Østergaard, &quot;intro til html.pdf&quot;</a></li>
                </ul>
            </div>
        </section>
        
    </section>

    <?php include 'footer.html' ?>
    
    <script type="text/javascript" src="js/js.js"></script>
</body>

</html>