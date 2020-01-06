<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Design | Photoshop</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    
    <?php include 'nav.html' ?>

<!-- INTRO START -->
    <div id="cover" class="emne__cover cover__photoshop">
        <section class="intro">
            <header class="intro--left">
                <h1 class="intro__heading">
                    <span>Photoshop</span>
                </h1>
                <span class="seperator"></span>
                <p class="intro__text">
                    Denne side handler om Adobe Photoshop, og forklarer hvad bitmap/raster grafik er.
                </p>
            </header>
            <nav class="intro--right">
                <ul class="intro__list">
                    <li class="list__item">
                        <a href="#indledning" class="list__link">Indledning</a>
                    </li>
                    <li class="list__item">
                        <a href="#peertopeer" class="list__link">Peer to peer undervisning</a>
                    </li>
                    <li class="list__item">
                        <a href="#onepageprojekt" class="list__link">Onepage projekt</a>
                    </li>
                    <li class="list__item">
                        <a href="#selvstudie" class="list__link">Selvstudie</a>
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
                    <h3>Illustrator</h3>
                </header>
                <p class="section__text">
                    Photoshop er en app, som har til formål at redigere/manipulere med fotos,
                    eller grafik. I photoshop arbejder man med raster grafik, der består af bitmaps
                    – et stort gitter af individuelle pixels. Pixels er små firkanter, som indeholder
                    data for farve – og når man har mange tusinde af disse pixels, så kan man dage et
                    billede, eller skærmbillede.
                </p>
                <div class="section__img">
                    <img src="img/photoshop/raster.jpg" alt="Illustration af raster grafik">
                </div>
                <p class="section__text">
                    Det der er ulempen ved raster grafik er, at disse pixels indeholder en vis mængde data,
                    og hvis man forstørre et billede, kommer der ikke mere data. Det forårsager så det man
                    kalder pixelation/pixelering, det betyder at billedet bliver pixeleret – man kan se pixels.
                </p>
                <h4>Destructive editing</h4>
                <p class="section__text">
                    Når man er ny til photoshop, kan man hurtigt lære at markerer en del af et billede og så slette det
                    man ikke skal bruge – det er det man kalder destructive editing. Det betragter man som bad practice,
                    da man ikke senere kan gå tilbage og bruge det man har slettet - I stedet bør man arbejde non-destructive.
                </p>
                <h4>Non-destructive editing</h4>
                <p class="section__text">
                    Denne metode gør lige præcis, hvad den lyder til – man arbejder uden at ødelægge/slette noget.
                    Fordelen ved denne fremgang er, at man altid kan vende tilbage og bruge originalen af billedet,
                    hvis man får behov for det – netop fordi man ikke har slettet noget.
                </p>
                <p class="section__text">
                    Når man arbejder non-destructive, så benytter man sig af noget der hedder layer masks.
                    De gør det at de bestemmer hvilke områder at et billede der vises, og hvilke områder der skjules.
                    Når man først lære at bruge layer masks, så vil man aldrig være foruden dem igen.
                </p>
                <ul class="section__kilde">
                    <li><a class="kilde__link" href="">Carsten Bogner</a></li>
                    <li><a class="kilde__link" href="https://www.printcnx.com/resources-and-support/addiational-resources/raster-images-vs-vector-graphics/">Printcnx</a></li>
                </ul>
            </div>
        </section>

        <section class="section" id="peertopeer">
            <div class="section__item">
                <header class="section__header">
                    <h3>Peer to peer undervisning</h3>
                </header>
                <p class="section__text">
                    I vores undervisning fik vi hver især en opgave i forhold til peer to peer undervisning
                    – det betyder at vi skulle undervise hinanden.
                </p>
                <p class="section__text">
                    Jeg fik til opgave at undervise i layer masks, men med en twist.
                    Jeg skulle undervise i at bruge et billede, som en layer mask.
                    Her har jeg brugt 3 billeder. Pigen, trekanterne, og baggrunden.
                </p>
                <p class="section__text">
                    Først tilføjede jeg en layer mask til pigen, hvor jeg derefter lagde billedet med
                    alle trekanterne ind i selve masken. Når jeg så fjernede noget af masken, så ville pigen dukke op.  
                </p>
                <div class="section__img">
                    <img src="img/photoshop/layermask_girl.jpg" alt="Pige med layermasks">
                </div>
            </div>
        </section>

        <section class="section" id="onepageprojekt">
            <div class="section__item">
                <header class="section__header">
                    <h3>Onepage Projekt</h3>
                </header>
                <p class="section__text">
                    Til vores onepage projekt skulle vi bl.a. producere nogle billeder til vores onepage.
                    Vi lavede en informations website omkring energidrikke, og de mest genkendelige
                    ingredienser deri, samt virkning og bivirkning. Disse 2 fik vi ikke brugt da
                    der var lidt for meget ”reklame” over dem:
                </p>
                <div class="section__img">
                    <img src="img/photoshop/monster_effekt.png" alt="Monster energy med effekt">
                    <img src="img/photoshop/redbull.png" alt="Redbull med effekt">
                </div>
                <p class="section__text">
                    I stedet fik vi sporet os tilbage på at vores onepage skulle handle om information, og ikke salg.
                    valgte vi at bruge denne i stedet - en helt plain monster, med en lille spejling forneden.
                </p>
                <div class="section__img">
                    <img src="img/photoshop/monster.png" alt="Monster energy uden effekt">
                </div>
                <p class="section__text">
                    Det endelige produkt kan findes her: <a href="http://jesp883f.apache.eadania.dk/onepage" class="text__link">NRG - Onepage</a>
                </p>
            </div>
        </section>

        <section class="section" id="selvstudie">
            <div class="section__item">
                <header class="section__header">
                    <h3>Selvstudie</h3>
                </header>
                <p class="section__text">
                    Her er også lidt jeg har lavet i min egen tid. Et før og efter billede af Black Widow, og en "shatter effekt" med inspiration fra fra Avengers: Infiinty War.
                    Dette billede er lavet med 2 layer masks og brush tool.
                </p>
                <div class="section__img">
                    <img src="img/photoshop/black_widow.jpg" alt="Black Widow før snap">
                    <img src="img/photoshop/black_widow_snap.png" alt="Black Widow efter under snap">
                </div>
            </div>
        </section>
        
        
    </section>

    <?php include 'footer.html' ?>
    
    <script type="text/javascript" src="js/js.js"></script>
</body>

</html>