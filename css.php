<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web | CSS</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    
    <?php include 'nav.html' ?>

<!-- INTRO START -->
    <div id="cover" class="emne__cover cover__css">
        <section class="intro">
            <header class="intro--left">
                <h1 class="intro__heading">
                    <span>Cascading</span>
                    <span>Style Sheets</span>
                </h1>
                <span class="seperator"></span>
                <p class="intro__text">
                    Denne side indeholder det nødvendige teori, der skal til for at få et website til at se pænt ud.
                </p>
            </header>
            <nav class="intro--right">
                <ul class="intro__list">
                    <li class="list__item">
                        <a href="#indledning" class="list__link">Indledning</a>
                    </li>
                    <li class="list__item">
                        <a href="#implement" class="list__link">Implementering</a>
                    </li>
                    <li class="list__item">
                        <a href="#syntaks__css" class="list__link">Syntaks</a>
                    </li>
                    <li class="list__item">
                        <a href="#regler" class="list__link">Regler</a>
                    </li>
                    <li class="list__item">
                        <a href="#boxmodel" class="list__link">Box model</a>
                    </li>
                    <li class="list__item">
                        <a href="#grid" class="list__link">Grid</a>
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
                    <!-- <h3>Indledning</h3> -->
                </header>
                <p class="section__text">
                    CSS – Cascading Style Sheets – er et af kernesprogene man bruger til at kode på det åbne web.
                    CSS standardiseres på tværs af de forskellige web browsers, i forhold til W3C Specification. 
                    CSS beskriver hvordan HTML elementer skal vises på siden.
                    Man kan i grove træk tænkte på HTML som struktur, og CSS som udseende. Det er ved hjælp af CSS, at vi kan adskille struktur og udseende.
                    Der er 3 måder at bruge CSS på.
                </p>
                <ul class="section__kilde">
                    <li><a class="kilde__link" href="https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web/HTML_basics">mozilla.org</a></li>
                </ul>
            </div>
        </section>
<!-- IMPLEMENT -->
        <section class="section" id="implement">
            <div class="section__item">
                <header class="section__header">
                    <h3>Implementering</h3>
                </header>
                <p class="section__text">
                    De 3 metoder, som kan bruges til at anvende CSS på sit HTML dokument, kaldes:
                </p>
                <ul class="section__list">
                    <li class="list__item">Eksternt stylesheet</li>
                    <li class="list__item">Internt (embedded) stylesheet</li>
                    <li class="list__item">Inline styles</li>
                </ul>
                <h4>Eksternt stylesheet</h4>
                <p class="section__text">
                    Dette er den mest almindelig og brugbare metode at bruge CSS på.
                    Ved brug af denne metode kan man linke det samme CSS til flere HTML dokumenter.
                    På denne måde skal man kun ændre sin CSS ét sted, for alle sine HTML dokumenter.
                </p>
                <!-- Code sample start -->
                <div class="section__code">

                    <pre class="linenumbers"><code><span class="linenumbers--rows"><span>&lt;html lang="en"&gt;</span>
<span>&lt;head&gt;</span>
<span>    &lt;meta charset="UTF-8"&gt;</span>
<span>    &lt;title&gt;Document&lt;/title&gt;</span>
<span>    </span>
<span>    &lt;link <span class="attr__selector">rel=</span>"<span class="attr__value">stylesheet</span>" <span class="attr__selector">href=</span>"<span class="attr__value">style.css</span>"&gt;</span>
<span>    </span>
<span>&lt;/head&gt;</span>
<span>&lt;body&gt;</span>
<span></span>
<span>&lt;/body&gt;</span>
<span>&lt;/html&gt;</span>
</span></code></pre>
                </div>
                <!-- Code sample end -->
                <p class="section__text">
                    Med denne metode har man al sin CSS i en ekstern fil,
                    som man referere til fra sit HTML dokument ved hjælp
                    af &lt;link&gt; tagget i &lt;head&gt; sektionen.
                </p>
                <p class="section__text">
                    Eksempel på en .css fil:
                </p>
                <!-- Code sample start -->
                <div class="section__code">
                    <pre class="linenumbers"><code><span class="linenumbers--rows"><span><span class="attr__selector">h1</span> {</span>
<span>    <span class="property">color</span>: blue</span>
<span>    <span class="property">background-color</span>: red;</span>
<span>    <span class="property">border</span>: 1px solid black;</span>
<span>}</span>
<span></span>
<span><span class="attr__selector">p</span> {</span>
<span>    <span class="property">color</span>: red;</span>
<span>}</span>
</span></code></pre>
                </div>
                <!-- Code sample end -->
                <p class="section__text">
                    Href=”” attributten af <link> elementet, er nødt til at referer til en fil på ens filsystem,
                    eller en ekstern fil på nettet.
                    Her er 3 eksempler:
                </p>
                <!-- Code sample start-->
                <div class="section__code">
                    <pre class="linenumbers"><code><span class="linenumbers--rows"><span class="code__comment"><span>&lt;!-- I en mappe kaldt css --&gt;</span></span>
<span>&lt;link <span class="attr__selector">rel</span>="<span class="attr__value">stylesheet</span>" <span class="attr__selector">href</span>="<span class="attr__value">css/style.css</span>"&gt;</span>
<span></span>
<span><span class="code__comment">&lt;!-- i en mappe kaldet mørk, som ligger i mappen kaldt css --&gt;</span></span>
<span>&lt;link <span class="attr__selector">rel</span>="<span class="attr__value">stylesheet</span>" <span class="attr__selector">href</span>="<span class="attr__value">css/mørk/style.css</span>"&gt;</span>
<span></span>
<span><span class="code__comment">&lt;!-- Gå 1 niveau op i mappe-hierarkiet, og ind i en mappe kaldt css. --&gt;</span></span>
<span>&lt;link <span class="attr__selector">rel</span>="<span class="attr__value">stylesheet</span>" <span class="attr__selector">href</span>="<span class="attr__value">../css/style.css</span>"&gt;</span>
</span></code></pre>
                </div>
                <!-- Code sample end -->
                <h4>Internt (embedded) stylesheet</h4>
                <p class="section__text">
                    Når man benytter sig af interne stylesheets, også kaldet embedded css, så har man ikke en ekstern fil.
                    Her skriver man det direkte i HTML dokumentet.
                </p>
                <p class="section__text">
                    Dette gøres ved at bruge &lt;style&gt; elementet, som placeres i HTML &lt;head&gt; sektionen.
                </p>
                <!-- Code sample start -->
                <div class="section__code">
                    <pre class="linenumbers"><code><span class="linenumbers--rows"><span>&lt;!DOCTYPE html&gt;</span>
<span>&lt;html&gt;</span>
<span>    &lt;head&gt;</span>
<span>        &lt;meta charset="UTF-8"&gt;</span>
<span>        &lt;title&gt;Document&lt;/title&gt;</span>
<span></span>
<span>        &lt;style&gt;</span>
<span>        <span class="attr__selector">h1</span> {</span>
<span>            <span class="property">color</span>: blue;</span>
<span>            <span class="property">background-color</span>: yellow;</span>
<span>            <span class="property">border</span>: 1px solid black;</span>
<span>        }</span>
<span>        </span>
<span>        <span class="attr__selector">p</span> {</span>
<span>            <span class="property">color</span>: red;</span>
<span>        }</span>
<span>        &lt;/style&gt;</span>
<span></span>
<span>    &lt;/head&gt;</span>
<span>    &lt;body&gt;</span>
<span></span>
<span>        &lt;h1&gt;Hello World!&lt;/h1&gt;</span>
<span>        &lt;p&gt;Dette er min portfolio!&lt;/p&gt;</span>
<span></span>
<span>    &lt;/body&gt;</span>
<span>&lt;/html&gt;</span>
</span></code></pre>
                </div>
                <!-- Code sample end -->
                <p class="section__text">
                    Dette kan være brugbart nogle gange, hvis man f.eks. ikke har adgang til css-filerne direkte,
                    såfremt man har linket til eksterne filer på nettet.
                    Det er dog ikke nær så effektivt, som eksternt CSS,
                    hvis man skal gentage den samme CSS på flere sider.
                    Det giver ekstra arbejde i at CSS’en skal opdateres flere gange.
                </p>
                <h4>Inline styles</h4>
                <p class="section__text">
                    Med Inline Styles er man begrænset langt mere end, hvis man benytter sig af embedded CSS.
                    Disse CSS-deklarationer påvirker kun ét element fordi de skrives i style=”” attributten. 
                </p>
                <!-- Code sample start -->
                <div class="section__code">
                    <pre class="linenumbers"><code><span class="linenumbers--rows"><span>&lt;!DOCTYPE html&gt;</span>
<span>&lt;html&gt;</span>
<span>    &lt;head&gt;</span>
<span>        &lt;meta charset="UTF-8"&gt;</span>
<span>        &lt;title&gt;Document&lt;/title&gt;</span>
<span>    &lt;/head&gt;</span>
<span>    &lt;body&gt;</span>
<span></span>
<span>    &lt;body&gt;</span>
<span></span>
<span>        &lt;h1 <span class="attr__selector">style</span>="<span class="property">color</span>: <span class="attr__value">blue</span>; <span class="property">background-color</span>: <span class="attr__value">yellow</span>; <span class="property">border</span>: <span class="attr__value">1px solid black</span>"&gt;Hello World!&lt;/h1&gt;</span>
<span>        &lt;p <span class="attr__selector">style</span>="<span class="property">color</span>: <span class="attr__value">red</span>;"&gt;Dette er min portfolio!&lt;/p&gt;</span>
<span></span>
<span>    &lt;/body&gt;</span>
<span>&lt;/html&gt;</span>
</span></code></pre>
                </div>
                <!-- Code sample end -->
                <p class="section__text">
                    Dette frarådes medmindre man ikke har andre valg. Det har man typisk.
                    Grunden til det er at med inline styles blander man sin CSS-styling med sin strukturelle HTML information.
                    Dette gør koden sværere at læse og forstå. Det er generelt anbefalet at man holder forskellige typer
                    kode adskilt, så det er meget nemmere at arbejde med – ikke kun for én selv, men for alle som skal
                    arbejde med koden.
                </p>
                <ul class="section__kilde">
                    <li><a class="kilde__link" href="https://developer.mozilla.org/en-US/docs/Learn/CSS/First_steps/How_CSS_is_structured">Mozilla</a></li>
                    <li><a class="kilde__link" href="">Niels Østergaard, &quot;intro til css.pdf&quot;</a></li>
                </ul>
            </div>
        </section>
<!-- SYNTAKS START -->
        <section class="section" id="syntaks__css">
            <div class="section__item">
                <header class="section__header">
                    <h3>Syntaks</h3>
                </header>
                <p class="section__text">
                    Synes man at HTML syntaks er nem at arbejde med, så vil man ikke gå galt i byen med CSS. Det er ligeledes meget simpelt at arbejde med.

                    Hvis vi kigger på CSS i dets mest grundlæggende form, så består CSS er 2 byggesten: properties og values.
                </p>
                <ul class="section__list">
                    <li class="list__item"><strong>Properties</strong>
                    <p class="section__text"> Let læselige egenskaber, som fortæller noget om den stilistiske funktion man vil ændre. Disse kunne være font-size, color, background-color.</p>
                </li>
                    <li class="list__item">
                        <strong>Values</strong>
                        <p class="section__text"> Hver property tildeles en værdi, der angiver, hvordan man vil ændre den stilistiske funktion. F.eks. hvor størrelsen på font-size, eller farven til background-color.</p>
                    </li>
                </ul>
                <p class="section__text">
                    Et property/value sæt kaldes en declaration.
                    Disse puttes ind i det man kalder en declaration block, som omsluttes af tuborgklammer/krøllede parenteser. 
                </p>
                <p class="section__text">
                    Disse declaration blocks, parres så med en selector, og danner det vi kalder et CSS ruleset.
                </p>
                </p>
                <ul class="section__kilde">
                    <li><a class="kilde__link" href="https://developer.mozilla.org/en-US/docs/Learn/CSS/First_steps/How_CSS_is_structured">Mozilla</a></li>
                    <li><a class="kilde__link" href="">Niels Østergaard, &quot;intro til css.pdf&quot;</a></li>
                </ul>
                <h4>Selectors</h4>
                <p class="section__text">
                    Denne bestemmer, hvilket element i HTML dokumentet man vil ramme.
                    Der findes en række forskellige typer af selectors.
                    Der er særligt 3 typer, som man ikke kan undgå at støde på.
                </p>
                <ul class="section__list">
                    <li class="list__item"><strong>Element selector</strong>
                        <p class="section__text"> Denne rammer et specifikt element(tag) i HTML dokumentet.</p>
                    </li>
                    <li class="list__item">
                        <strong>ID selector</strong>
                        <p class="section__text"> En ID er en attribut, som erklæres i et HTML element, så man ikke rammer alle elementer af samme type. Et ID er unik, og bør kun anvendes på ét element.</p>
                    </li>
                    <li class="list__item">
                        <strong>Class selector</strong>
                        <p class="section__text"> En class er ligeledes en attribut, som erklæres i et HTML element. Forskellen på class og ID, er at classes bruges, hvis man har behov for at bruge den på flere elementer.</p>
                    </li>
                </ul>
                <p class="section__text">
                    Herefter kommer så deklarationen, som indeholder nogle rules(regler) bestående af nogle properties(egenskaber), der tillægges nogle values(værdier).
                    Selve deklarationen er omsluttet af tuborgklammer, eller krøllede parenteser {}.
                    Hvert sæt af property/value udgør en regel, som tillægges det elementet man vil ramme med sin selector.
                    Der kan være flere regler pr. selector, og derfor kalder man det et ruleset/regelsæt.
                </p>
                <img src="img/css/css_syntaks.png" alt="CSS Syntaks">
                <ul class="section__kilde">
                    <li><a class="kilde__link" href="https://developer.mozilla.org/en-US/docs/Learn/CSS/First_steps/How_CSS_is_structured">Mozilla</a></li>
                    <li><a class="kilde__link" href="">Niels Østergaard, &quot;intro til css.pdf&quot;</a></li>
                </ul>
            </div>
        </section>
<!-- REGLER START -->
        <section class="section" id="regler">
            <div class="section__item">
                <header class="section__header">
                    <h3>Regler</h3>
                </header>
                <p class="section__text">
                    Man vil ofte støde på, at man har 2 selectors, som rammer de samme elementer.
                    I disse tilfælde er der sat nogle regler i spil, for at hjælpe med at kontrollerer hvilke regelsæt der vinder.
                    Disse regler kaldes cascade(kaskade) rules og specificity(specificitet) .
                </p>
                <p class="section__text">
                    Som udgangspunkt følger vi cascade reglen(kaskadereglen), som udfører koden i læseretningen – Altså fra top til bund.
                    Det betyder, at hvis du har 2 modstridende regler, så vil den der står til sidst vinde. I flg.
                    Eksempel har vi 2 regelsæt, som vil ændre farven på p.
                    p ender med at blive farvet rød, da denne står til sidst i dokumentet og tilsidesætter det første regelsæt.
                </p>
                <!-- Code sample start -->
                <div class="section__code">
                    <pre class="linenumbers"><code><span class="linenumbers--rows"><span><span class="attr__selector">p</span> {</span>
<span>    <span class="property">color</span>: blue</span>
<span>}</span>
<span></span>
<span><span class="attr__selector">p</span> {</span>
<span>    <span class="property">color</span>: red;</span>
<span>}</span>
</span></code></pre>
                </div>
                <!-- Code sample end -->
                <p class="section__text">
                    Har man derimod en class selector efterfulgt af en element selector, så vil class selectoren vinde. 
                </p>
                <p class="section__text">
                    HTML:
                </p>
                <!-- Code sample start -->
                <div class="section__code">
                    <pre class="linenumbers"><code><span class="linenumbers--rows"><span><span>&lt;p&gt; <span class="attr__selector">class</span>="<span class="attr__value">special</span>"&gt;Hvilken farve har jeg?&lt;/p&gt;</span>
</span></code></pre>
                </div>
                <!-- Code sample end -->
                <p class="section__text">
                    CSS:
                </p>
                <!-- Code sample start -->
                <div class="section__code">
                    <pre class="linenumbers"><code><span class="linenumbers--rows"><span><span class="attr__selector">.special</span> {</span>
<span>    <span class="property">color</span>: blue</span>
<span>}</span>
<span></span>
<span><span class="attr__selector">p</span> {</span>
<span>    <span class="property">color</span>: red;</span>
<span>}</span>
</span></code></pre>
                </div>
                <!-- Code sample end -->
                <p class="section__text">
                    På trods af at class selectoren fremtræder tidligere i dokumentet, så er den mere specifik,
                    som derfor får reglen for specificity til at træde ind og tilsidesætte cascade reglen.
                </p>
                <ul class="section__kilde">
                    <li><a class="kilde__link" href="https://developer.mozilla.org/en-US/docs/Learn/CSS/First_steps/How_CSS_is_structured">Mozilla</a></li>
                    <li><a class="kilde__link" href="">Niels Østergaard, &quot;intro til css.pdf&quot;</a></li>
                </ul>
            </div>
        </section>

<!-- BOX MODEL START -->
        <section class="section" id="boxmodel">
            <div class="section__item">
                <header class="section__header">
                    <h3>Box Model</h3>
                </header>
                <p class="section__text">
                    Når man benytter sig af CSS, er det vigtig at kende box modellen, som anvendes til alle block elementer i HTML.

                    For at kunne layout sit site ordentligt så er det nødvendigt at kende box modellen. Denne er bestående af 4 dele:
                </p>
                <ul class="section__list">
                    <li class="list__item"><strong>Content box</strong>
                        <p class="section__text"> 
                        Området hvor indholdet vises. Denne ændres med width og heigth properties.
                        </p>
                    </li>
                    <li class="list__item"><strong>Padding box</strong>
                        <p class="section__text">
                        Dette er området omkring indholdet, det vises som whitespace.
                        Med andre ord, afstanden fra content box til kanten.
                        Denne ændres med padding property.
                        </p>
                    </li>
                    <li class="list__item"><strong>Border box</strong>
                        <p class="section__text">
                            Denne er kanten, som omslutter content og padding.
                            Denne ændres ved hjælp af border property.
                        </p>
                    </li>
                    <li class="list__item"><strong>Margin</strong>
                        <p class="section__text">
                            Dette er det yderste lag, som omslutter alle de andre 3,
                            og skaber whitespace mellem denne box og andre elementer.
                            Denne ændres ved hjælp af margin property.
                        </p>
                    </li>
                </ul>
                <div class="boxmodel boxmodel__margin">
                    <h3>Margin</h3>
                    <div class="boxmodel boxmodel__border">
                        <h3>Border</h3>
                        <div class="boxmodel boxmodel__padding">
                            <h3>Padding</h3>
                            <div class="boxmodel boxmodel__content">
                                <h3>Content</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="section__kilde">
                    <li><a class="kilde__link" href="">Niels Østergaard, &quot;intro til css.pdf&quot;</a></li>
                </ul>
            </div>
        </section>

<!-- GRID START -->
<section class="section" id="grid">
    <div class="section__item">
        <header class="section__header">
            <h3>Grid</h3>
        </header>
        <p class="section__text">
            Der har aldrig været nogen dissideret god måde at lave layouts i CSS, eller placere elementer.
            Med grid har vi en let og intuitiv måde, at placere alle vores elementer på.
        </p>
        <p class="section__text">
            De forskellige metoder (i.e. flexbox) forinden grid, tillod kun 1-dimonsionel (horizontal eller vertical) fordeling af elementer,
            men grid tillader 2-dimensionel fordeling samtidig.
            Dette gør det meget nemmere at placere elementerne som vi ønsker, på en simpel og intuitiv måde.
        </p>
        <h4>Display: grid</h4>
        <p class="section__text">
            Det der sker når man aktiverer et grid med display: grid; er at det påvirkede element skaber et grid med det antal kolonner og rækker man definerer det skal have.
            Derefter vil browsere forstå at alle child-elementer skal placeres i dette grid.
            Det vil den gøre i læseretningen (venstre til højre), og den placere dem i den rækkefølge de står i HTML dokumentet.
        </p>
        <p class="section__text">
            Det er selvfølgelig muligt, at få yderligere kontrol over placeringen af elementer. Navngiver man grid områderne,
            og dertil også tildeler samme navn til det ønskede element, så vil browseren placere elementet i det område.
            Det er ikke nødvendigt at tildele alle elementer et område, men det gør det om noget nemmere at kontrollere hvor alting ender henne.
        </p>
        <p class="section__text">
            Det er dog vigtigt, at nævne, hvis man har tildelt et område et navn, så skal der være et tilsvarende element.
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