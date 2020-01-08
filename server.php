<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web | Serverbe & Client</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    
    <?php include 'nav.html' ?>

<!-- INTRO START -->
    <div id="cover" class="emne__cover cover__server">
        <section class="intro">
            <header class="intro--left">
                <h1 class="intro__heading">
                    <span>Server & Client</span>
                </h1>
                <span class="seperator"></span>
                <p class="intro__text">
                    Denne side beskriver hvad en server er, de forskellige typer og et lille kig på serverside scripting.
                </p>
            </header>
            <nav class="intro--right">
                <ul class="intro__list">
                    <li class="list__item">
                        <a href="#indledning" class="list__link">Indledning</a>
                    </li>
                    <li class="list__item">
                        <a href="#client" class="list__link">Client</a>
                    </li>
                    <li class="list__item">
                        <a href="#mmd" class="list__link">Skal jeg bruge dette som MMD?</a>
                    </li>
                    <li class="list__item">
                        <a href="#scripting" class="list__link">Serverside scripting</a>
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
                    For at forstå begrebet ”server”, er vi nødt til at få forklaret 2 begreber:
                </p>
                <p class="section__text">
                    Et stykke software eller hardware, som yder en service for en bruger(client).
                    En server er en fysisk computer delt over et netværk, f.eks. Local Area Network eller Wide Area Network(Internet).
                    Disse er oftest meget kraftfuld, som kan håndtere mange opgaver samtidig.
                    En server kan være placeret både i hjemmet, på en skole eller, hvis det er en større server,
                    vil den typisk være placeret i et data center.
                </p>
                <p class="section__text">
                    En server kan yde alle mulige services, og derfor så vil softwaren ofte tilkendegive hvilken type
                    server det er: mail-server, web-server, game-server etc.
                    Den fysiske server er dog ikke brægrænset til én type software ad gangen.
                    Det muligt er køre både web-server, mail-server og print-server fra samme computer.
                    <br><br>
                    Forskellige eksempler på servertyper:
                </p>
                <ul class="section__list">
                    <li class="list__item">Fil</li>
                    <li class="list__item">Print</li>
                    <li class="list__item">Web</li>
                    <li class="list__item">FTP (File Transfor Protocol)</li>
                    <li class="list__item">Mail</li>
                    <li class="list__item">Database</li>
                </ul>
                <ul class="section__kilde">
                    <li><a class="kilde__link" href="">wwwHistoryOnlineKommunikation.pdf</a></li>
                </ul>
                </div>
        </section>
<!-- CLIENT START -->
        <section class="section" id="client">
            <div class="section__item">
                <header class="section__header">
                    <h3>Client</h3>
                </header>
                <p class="section__text">
                    Når man har sin server, så skal man også kunne tilgå serveren.
                    Dette gøres ved hjælp en client – en client er et stykke software som er specielt
                    bygget til at tilgå og kommunikere med specifikke typer servere.
                    <br><br>
                    Forskellige eksempler på clients:
                </p>
                <ul class="section__list">
                    <li class="list__item">Web-server og web-client (browser)</li>
                    <li class="list__item">FTP-server og FTP-client (FileZilla)</li>
                    <li class="list__item">Print-server og print-client</li>
                    <li class="list__item list__item--indent">Denne client ses dog ikke, da det er en del af styresystemet, og derfor kan den tilgås gennem forskellige programmer som word, photoshop og illustrator.</li>
                </ul>
            </div>
        </section>
<!-- MMD START -->
        <section class="section" id="mmd">
            <div class="section__item">
                <header class="section__header">
                    <h3>Skal jeg bruge det som MMD?</h3>
                </header>
                <p class="section__text">
                    Det korte svar er ja. Dette skyldes, at vi arbejder med websites, og dertil skal man bruge en række servere,
                    som kan host de filer, og den data vi skal bruge, og disse skal kunne sende ud til en browser.
                    </p>
                    <p class="section__text">
                        <strong>Web-server</strong> bruger vi til at leverer vores website til en browser gennem http-protokollen (Hyper Text Transfer Protocol).
                    Uden denne kan vores browsere ikke tilgå vores filer.
                    </p>
                    <p class="section__text">
                        <strong>Database-server</strong> bruger vi til at sende og modtage data mellem web-server og clients.
                    </p>
                    <p class="section__text">
                        <strong>FTP-server</strong> bruger vi til, at udveksle filer med web-serveren.
                    </p>
                    <p class="section__text">
                        En web-server har en adresse, som kaldes en IP(Internet Protocol), som f.eks. kunne se således ud 194.255.108.99.
                    </p>
                    <p class="section__text">
                    Med alle de websites vi bruger i dag, er det selvfølgelig svært at huske en IP.
                    Derfor findes der det som vi kalder en DNS, Domain Name Service.
                    Denne oversætter et domænenavn til IP – når vi skriver eadania.dk i vores browser så laver køres domænet gennem en DNS, og så får man 194.255.108.99.
                </p>
            </div>
        </section>
<!-- SCRIPTING START -->
        <section class="section" id="scripting">
            <div class="section__item">
                <header class="section__header">
                    <h3>Serverside scripting</h3>
                </header>
                <p class="section__text">
                    Som multimediedesigner har vi også en fordel gennem vores kode. Dette kaldes serverside scripting, eller serversideprogrammering.
                    Dette er simpelthen kode, som afvikles på serveren, og ikke i browseren.
                </p>
                <p class="section__text">
                    I sin tid skrev Rasmus Lerdorf programmeringssproget PHP, som oprindeligt stod for Personal Home Page – i dag står det for ”PHP Hypertext Preprocessor”.
                    Det låner en smule fra Pearl og C +. Selvom PHP kan utroligt meget, kommer først rigtig til at udfolde sit potentiale, i samarbejde med databaser.
                </p>
                <p class="section__text">
                    På nuværende tidspunkt har vi kun lært at benytte os af include, en funktion der gør at vi kan inkluderer en stump kode på vores side.
                </p>
                <p class="section__text">
                    Hvis man f.eks. har 20+ sider med samme navigation, så kan man med fordel lave en navigation.html, som indeholder hele koden til navigation.
                    I stedet for at skrive koden på ind i samtlige HTML dokumenter, så kan vi include navigation.html i hvert HTML dokukument.
                    Dette sparer os for en masse tid, og hvis navigationen skal ændres, kan vi gøre det én gang i navigation.html, fremfor at ændre samme kode i alle HTML dokumenter.
                </p>
                            <!-- Code sample start -->
            <div class="section__code"> <pre class="linenumbers"><code><span class="linenumbers--rows"><span>&lt;<span class="html__tag">?php</span> <span class="attr__selector">include</span> '<span class="attr__value">navigation.html</span>' <span class="html__tag">?</span>&gt;</span>
</span></code></pre>
            </div>
            <!-- Code sample end -->
                <p class="section__text">
                    Denne linie med include, indsættes i et php-tag, som vist ovenfor i HTML <body>, det sted man ønsker at koden skal ligge.
                    Det gør det både nemt, men også meget effektivt at genbruge kode, på flere sider. Man skal dog lige huske at navngive sin fil index.php, og ikke index.html.
                    Gør man ikke det, så vil vil web-serveren ikke vide, at den skal håndtere dette som PHP.
                </p>
            </div>
        </section>
        
    </section>

    <?php include 'footer.html' ?>
    
    <script type="text/javascript" src="js/js.js"></script>
</body>

</html>