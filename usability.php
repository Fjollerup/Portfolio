<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UI Design | Usability</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    
    <?php include 'nav.html' ?>

<!-- INTRO START -->
    <div id="cover" class="emne__cover cover__usability">
        <section class="intro">
            <header class="intro--left">
                <h1 class="intro__heading">
                    <span>Usability</span>
                </h1>
                <span class="seperator"></span>
                <p class="intro__text">
                    Dennes side handler om usability. Hvordan man forbedre oplevelsen på sit website ved at inddrage brugeren.
                </p>
            </header>
            <nav class="intro--right">
                <ul class="intro__list">
                    <li class="list__item">
                        <a href="#indledning" class="list__link">Indledning</a>
                    </li>
                    <li class="list__item">
                        <a href="#gangster" class="list__link">Gangstertest</a>
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
                    <h3>Usability</h3>
                </header>
                <p class="section__text">
                    Vi ser ikke alle verden på samme måde. Derfor må vi heller ikke antage, at andre ser det samme som vi selv gør.
                    Det er helt i orden at vi ser forskelligt på tingene, og derfor har vi brugertests – usability.
                </p>
                <div class="section__img">
                    <img src="img/usability/perspektiv.png" alt="Perspektiv">
                </div>
                <p class="section__text">
                    Usability handler om at tage et website, og gøre det mere brugbart, eller anvendeligt.
                    Et website skal opleves brugervenligt og så brugbart som muligt.
                    Gennem usability kan man derfor gøre et website mere brugbart for dem, som skal bruge det.
                </p>
                <p class="section__text">
                    Usability kan ses som en kvalitetsegenskab, som alle websites har, der bidrager til den overordnede oplevelse,
                    som brugeren får ved brugen af det website. Det er altså afgørende for websitets succes.
                </p>
                <p class="section__text">
                    Gennem usability-tests får man et dybere indblik i, hvordan websitet bliver brugt –
                    der er en række metoder, som hjælper med at sikre kvalitet i brugen deraf.
                    Usability kan ikke stå alene, som noget man arbejder med separat fra alt andet når producere et website.
                </p>
                <ul class="section__kilde">
                    <li><a class="kilde__link" href="">Usability, s. 14.</a></li>
                </ul>
            </div>
        </section>

        <section class="section" id="gangster">
            <div class="section__item">
                <header class="section__header">
                    <h3>Gangstertest</h3>
                </header>
                <p class="section__text">
                    Når man skal designe sit website, så kan man sige at kernen er navigationen.
                    Det er redskabet brugeren benytter til at komme rundt på websitet, hvis det ikke fungerer ordentligt,
                    så kan brugeren ikke finde den information, som den søger.
                    Gangstertesten tester direkte websitets <a class="text__link" href="ia.php">informationsarkitektur</a>.
                </p>
                <p class="section__text">
                    En gangstertest kan udføres simpelt. Man placerer test-brugeren på
                    en underside på websitet, og stiller en række spørgsmål:
                </p>
                <ul class="section__list">
                    <li class="list__item">Hvilket website er du på?</li>
                    <li class="list__item">Hvor er websitets globale menu?</li>
                    <li class="list__item">Underside: Hvilken underside er jeg på?</li>
                    <li class="list__item">Hvilkem uligheder har du på denne side?</li>
                    <li class="list__item">Hvordan er du kommet hertil?</li>
                    <li class="list__item">Hvor kan du søge?</li>
                </ul>
                <p class="section__text">
                    Hvert spørgsmål tildeles mellem 0-3 point, hvor testen alt i alt kan score 18 points
                    – Det vil betyde at navigationen understøttes rigtig godt.
                </p>
                <ul class="section__kilde">
                    <li><a class="kilde__link" href="">Usability, s. 42-43.</a></li>
                </ul>
            </div>
        </section>
        
    </section>

    <?php include 'footer.html' ?>
    
    <script type="text/javascript" src="js/js.js"></script>
</body>

</html>