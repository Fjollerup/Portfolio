<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Design | Fotografering</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    
    <?php include 'nav.html' ?>

<!-- INTRO START -->
    <div id="cover" class="emne__cover cover__fotografering">
        <section class="intro">
            <header class="intro--left">
                <h1 class="intro__heading">
                    <span>Fotografering</span>
                </h1>
                <span class="seperator"></span>
                <p class="intro__text">
                    Denne side beskriver processen i at optage billeder, og de 3 forskellige indstillinger der påvirker billedets kvalitet.
                </p>
            </header>
            <nav class="intro--right">
                <ul class="intro__list">
                    <li class="list__item">
                        <a href="#indledning" class="list__link">Indledning</a>
                    </li>
                    <li class="list__item">
                        <a href="#lukker" class="list__link">Lukker</a>
                    </li>
                    <li class="list__item">
                        <a href="#aperture" class="list__link">Blænden</a>
                    </li>
                    <li class="list__item">
                        <a href="#iso" class="list__link">ISO</a>
                    </li>
                    <li class="list__item">
                        <a href="#indstillinger" class="list__link">Kamera Indstillinger</a>
                    </li>
                    <li class="list__item">
                        <a href="#erfaringer" class="list__link">Egne erfaringer</a>
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
                    <h3>Fotografering</h3>
                </header>
                <p class="section__text">
                    Fotografi kommer fra de græske ord fos (lys) og grafei (skrivninger),
                    altså lys-skrivninger. Eller den mere romantiske udgave, at male med lys.
                </p>
                <p class="section__text">
                    Der er 3 ting, man skal være særligt opmærksom omkring, når man ønsker
                    at tage et bestemt billede. Disse 3 basale teknikker, skal være i balance
                    for at skabe det perfekte billede.
                </p>
                <ul class="section__list">
                    <li class="list__item">Lukker / Shutter</li>
                    <li class="list__item">Blænde / Aperture</li>
                    <li class="list__item">ISO</li>
                </ul>
            </div>
        </section>

        <section class="section" id="lukker">
            <div class="section__item">
                <header class="section__header">
                    <h3>Lukker / Shutter</h3>
                </header>
                <p class="section__text">
                    Lukkeren, er den mekanisme som blotter kameraets sensor for lys.
                    Hertil har vi lukkertiden, som er det tidsinterval, der bestemmer hvor lang
                    tid sensoren skal være eksponeret for lys. Dette tidsinterval er
                    altid i sekunder eller brøkdele af sekunder.
                </p>
                <p class="section__text">
                    Med eksempel på lys og bevægelse kan man hurtigt bryde ned, hvornår man bruger kort og lang lukkertid.
                </p>
                <ul class="section__list">Lang lukkertid
                    <li class="list__item">Begrænset lys - f.eks. indenfor eller aften</li>
                    <li class="list__item">Ingen bevægelse, ellers kommer der bevægelsessløring</li>
                </ul>
                <ul class="section__list">Kort lukkertid
                    <li class="list__item">Hvis der er kraftigt lys - f.eks. sollys</li>
                    <li class="list__item">Hvis man vil optage et motiv i bevægelse</li>
                </ul>
                <img src="img/fotografering/lukkertid.png" alt="">
                <ul class="section__kilde">
                    <li><a class="kilde__link" href="">Niels Østergaard, "introduktion_til_fotografering.pdf"</a></li>
                </ul>
            </div>
        </section>

        <section class="section" id="aperture">
            <div class="section__item">
                <header class="section__header">
                    <h3>Blænde / Aperture</h3>
                </header>
                <p class="section__text">
                    Imens lukkeren styrer, hvor lang tid sensoren eksponeres for lys
                    – så er blænden den mekanisme, som styrer mængden af lys, som sensoren
                    eksponeres for. Denne kan vi faktisk sammenligne med menneskets øje.
                    blænden har samme funktion, som pupillen i vores øjne. Jo større pupil,
                    jo mere lys får vi ind, og jo større blænde, jo mere lys bliver sensoren eksponeret for.
                </p>
                <p class="section__text">
                    Størrelsen på blænden styres i enheden f-stops. Her kan det godt
                    virke lidt modsat, for jo større f-stops jo mindre er blænden.
                </p>
                <p class="section__text">
                    Udover at styrer mængden af lys, så har blænden direkte effekt på dybdeskarpheden.
                    Et højt f-stop vil bringe både forgrund og baggrund ind i fokus, hvor et lavere
                    f-stop isolerer enten forgrund eller baggrund.
                </p>
                <img src="img/fotografering/aperture.jpg" alt="">
                <ul class="section__kilde">
                    <li><a class="kilde__link" href="https://www.youtube.com/watch?v=YojL7UQTVhc">Apalapse, "Camera Basics - Aperture"</a></li>
                </ul>
            </div>
        </section>

        <section class="section" id="iso">
            <div class="section__item">
                <header class="section__header">
                    <h3>ISO</h3>
                </header>
                <p class="section__text">
                    Vi har været over lukker, og blænde, som styrer hhv. hvor lang tid sensoren blottes,
                    og hvilken mængde af lys den eksponeres for. ISO’en er sensorens lysfølsomhed,
                    som gør at man kan få mere lys ind på et billede på kortere tid. 
                </p>
                <p class="section__text">
                    Er man f.eks. indenfor og se en håndboldkamp, så får man brug for en kort lukkertid
                    for at fange spillerne i bevægelse, og så vil man øge ISO’en for at gøre sensoren
                    mere følsom overfor det begrænsede lys.
                </p>
                <p class="section__text">
                    Ulempen ved ISO er dog det, at jo højere den er, jo lavere er farve præcisionen på billedet.
                    Det kalder vi for støj – det får simpelthen til at se grynet ud. Man får derfor det bedste
                    billede på den laveste ISO, det kalder man ”base ISO”, men det kræver rigtig meget
                    belysning for at kunne bruge så lav en ISO.
                </p>

                <ul class="section__kilde">
                    <li><a class="kilde__link" href="https://www.youtube.com/watch?v=q8cj9Lj9w-g">Apalapse, "Camera Basics - ISO"</a></li>
                </ul>
            </div>
        </section>

        <section class="section" id="indstillinger">
            <div class="section__item">
                <header class="section__header">
                    <h3>Kamera indstillinger</h3>
                </header>
                <p class="section__text">
                    Der er en række forskellige indstillinger på de fleste kameraer i dag, som går igen.
                </p>
                <ul class="section__list">
                    <li class="list__item"><strong>Manuel (M)</strong> Manuel indstillinger er af både blænde og lukkertid</li>
                    <li class="list__item"><strong>Tidsforvalg (Tv)</strong> Manuel indstillinger lukkertid. Kameraet beregner blænde</li>
                    <li class="list__item"><strong>Blændeforvalg (Av)</strong> Manuel indstilling af blænde. Kameraet beregner lukkertid</li>
                    <li class="list__item"><strong>Program (P)</strong> Kameraet forsøger at balancere blænde og lukkertid - et kompromis uden din medvirken</li>
                    <li class="list__item"><strong>Den grønne</strong> bør undgås, da man risikerer automatisk flash</li>
                    <li class="list__item"><strong>Øvrige programmer</strong> Forskellige "shooting modes", hvor programmet er optimeret til en bestemt type billeder, men hvor man som fotograf ikke har kontrol. Disse frarådes</li>
                </ul>
                <ul class="section__kilde">
                    <li><a class="kilde__link" href="">Niels Østergaard, "introduktion_til_fotografering.pdf"</a></li>
                </ul>
            </div>
        </section>

        <section class="section" id="erfaringer">
            <div class="section__item">
                <header class="section__header">
                    <h3>Egne erfaringer</h3>
                </header>
                <p class="section__text">
                    Disse billeder er nogle jeg selv har taget, ved at bruge den teori vi har lært.
                    Til dette er der brugt et SONY ILCE-7M2. Disse er taget i Tivoli Friheden,
                    hvor jeg har været nede for at se deres juleudsmykning, og samtidig bruge
                    teorien til at tage billeder deraf.
                </p>
                <p class="section__text">
                    Ved dette første billede, var kl. 1603, og det var ikke særlig mørkt endnu,
                    dette var et forsøg på, at få det til at fremstå senere, og mørkere end det egentlig var.
                </p>
                <img src="img/fotografering/stjerne.jpg" alt="">
                <ul class="section__list">
                    <li class="list__item"><strong>Dimonsioner</strong> 6000x4000 pixels</li>
                    <li class="list__item"><strong>Lukkertid</strong> 1/500</li>
                    <li class="list__item"><strong>Blænde</strong> f/1.8</li>
                    <li class="list__item"><strong>ISO</strong> 200</li>
                </ul>
                <p class="section__text">
                    Tanken ved dette billede, var at skabe noget skarphed på den røde pakke, særligt siden der vender mod kameraet.
                    På samme tid, var der samme idé som det andet billede. Her var kl. 1424, og det var ganske lyst.
                </p>
                <img src="img/fotografering/gave.jpg" alt="">
                <ul class="section__list">
                    <li class="list__item"><strong>Dimonsioner</strong> 6000x4000 pixels</li>
                    <li class="list__item"><strong>Lukkertid</strong> 1/2500</li>
                    <li class="list__item"><strong>Blænde</strong> f/1.8</li>
                    <li class="list__item"><strong>ISO</strong> 250</li>
                </ul>
            </div>
        </section>
        
        
    </section>

    <?php include 'footer.html' ?>
    
    <script type="text/javascript" src="js/js.js"></script>
</body>

</html>