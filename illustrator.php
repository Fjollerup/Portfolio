<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Design | Illustrator</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    
    <?php include 'nav.html' ?>

<!-- INTRO START -->
    <div id="cover" class="emne__cover cover__illustrator">
        <section class="intro">
            <header class="intro--left">
                <h1 class="intro__heading">
                    <span>Illustrator</span>
                </h1>
                <span class="seperator"></span>
                <p class="intro__text">
                    Denne side handler om Adobe Illustrator, og forklarer hvad vektor grafik er.
                </p>
            </header>
            <nav class="intro--right">
                <ul class="intro__list">
                    <li class="list__item">
                        <a href="#indledning" class="list__link">Indledning</a>
                    </li>
                    <li class="list__item">
                        <a href="#undervisning" class="list__link">Øvelser i undervisningen</a>
                    </li>
                    <li class="list__item">
                        <a href="#shapebuilder" class="list__link">Shape Builder Tool</a>
                    </li>
                    <li class="list__item">
                        <a href="#pentool" class="list__link">Pen Tool</a>
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
                    Illustrator er en app, der bruges til at skabe vector grafik.
                    Vector grafik er lidt speciel, i forhold til den type grafik
                    vi normalt ser på vores skærme. Den er nemlig baseret på paths,
                    som består af et start- og slutpunkt, som har nogle positioner
                    i forhold til hinanden. På denne måde kan man lave lige den ”shape”
                    man ønsker og fordi vector grafik indeholder disse punkter,
                    kan det skaleres uendeligt, uden at miste sin skarphed.
                </p>
                <img src="img/illustrator/vector.jpg" alt="Illustration af vector grafik">
                <p class="section__text">
                    Det er også vigtigt at være bevidst om hvad formålet med illustrator er.
                    Det er ikke et værktøj skabt til at ændre, eller manipulerer med eksisterende grafik.
                    Illustrator er et skaber-værktøj, ment på den måde at man bruger det til at
                    skabe grafik fra bunden af. F.eks. en virksomheds logo laves i illustrator,
                    så det kan skaleres i alle størrelse – brevhoved, uniformer, plakater,
                    bil-vinyl, flag, det kan endda skaleres op på størrelse med en bygning
                    uden at miste sin kvalitet. Hver gang man skal bruge en større eller
                    mindre udgave,så beregnes punkterne i vores paths på ny.
                </p>
                <ul class="section__kilde">
                    <li><a class="kilde__link" href="">Carsten Bogner</a></li>
                    <li><a class="kilde__link" href="https://www.printcnx.com/resources-and-support/addiational-resources/raster-images-vs-vector-graphics/">Printcnx</a></li>
                </ul>
            </div>
        </section>
<!-- UNDERVISNING START -->
        <section class="section" id="undervisning">
            <div class="section__item">
                <header class="section__header">
                    <h3>Øvelser i undervisning</h3>
                </header>
                <p class="section__text">
                    For at lære redskaberne at kende har vi lavet forskellige øvelser i undervisningen.
                </p>
                <div class="section__img">
                    <img src="img/illustrator/shield.png" alt="Captain America Shield">
                    <img src="img/illustrator/emblem.png" alt="Emblem">
                    <img src="img/illustrator/euflag.png" alt="EU Flaget">
                </div>
            </div>
        </section>
<!-- SHAPEBUILDER START -->
        <section class="section" id="shapebuilder">
            <div class="section__item">
                <header class="section__header">
                    <h3>Shape Builder Tool</h3>
                </header>
                <p class="section__text">
                    Et redskab man ikke kan undgå, er Shape Builder tool. Det gør simpelthen,
                    at man kan tage simple geometriske shapes, og sætte dem sammen til helt nye shapes.
                </p>
                <p class="section__text">
                    Her er en række eksempler på forskellige ting vi har lavet med Shape Builder tool.
                </p>
                <div class="section__img">
                    <img src="img/illustrator/celtic_cross.png" alt="Celtic Cross">
                    <img src="img/illustrator/triquetra.png" alt="Celtic Triquetra">
                    <img src="img/illustrator/sol.png" alt="Sol og sky">
                    <img src="img/illustrator/letter_c.png" alt="C Logo">
                    <img src="img/illustrator/batman.png" alt="Batman Logo">
                </div>
            </div>
        </section>
<!-- PENTOOL START -->
        <section class="section" id="pentool">
            <div class="section__item">
                <header class="section__header">
                    <h3>Pet Tool</h3>
                </header>
                <p class="section__text">
                    Et andet vigtigt, om nok en af de vigtigste i min bog, er pen tool.
                    Dette gør at man kan fritlægge lige præcis de paths man ønsker.
                    Her arbejder man ikke man med pre-definerede shapes, som firkanter,
                    trekanter og cirkler. Her placerer man samtlige punkter i sin path.
                    Her er et nogle eksempler på en pen tool øvelse jeg har lavet til en workshop,
                    jeg selv stod for på skolen.
                </p>
                <img src="img/illustrator/egern.png" alt="Et egern tegnet med pen tool">
                <img src="img/illustrator/b.png" alt="Et B tegnet med pen tool">
            </div>
        </section>
        
        
    </section>

    <?php include 'footer.html' ?>
    
    <script type="text/javascript" src="js/js.js"></script>
</body>

</html>