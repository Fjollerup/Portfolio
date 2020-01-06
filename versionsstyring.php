<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web | Versionsstyring</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    
    <?php include 'nav.html' ?>

<!-- INTRO START -->
    <div id="cover" class="emne__cover cover__version">
        <section class="intro">
            <header class="intro--left">
                <h1 class="intro__heading">
                    <span>Versionsstyring</span>
                </h1>
                <span class="seperator"></span>
                <p class="intro__text">
                    Denne side beskriver hvad git protokollen er, og hvordan den anvendes.
                </p>
            </header>
            <nav class="intro--right">
                <ul class="intro__list">
                    <li class="list__item">
                        <a href="#indledning" class="list__link">Indledning</a>
                    </li>
                    <li class="list__item">
                        <a href="#git" class="list__link">Git</a>
                    </li>
                    <li class="list__item">
                        <a href="#git" class="list__link">GitHub</a>
                    </li>
                    <li class="list__item">
                        <a href="#repos" class="list__link">Repositories</a>
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
                    Versionsstyring bruges flere steder til udvikling af alle mulige IT-projekter: administrative systemer,
                    apps, embeddede systemer, frameworks, libraries, komponenter, websites mm.
                    Det bruges af stort set alle størrelse og typer af projekt hold: professionel IT-udvikling,
                    store organisationer, iværksættere, hobby-kodere, små og store Open Source-projekter.
                    Det bruges til både kilde-kode, rapporter, aftaler mm.
                </p>
                </div>
        </section>

        <section class="section" id="git">
            <div class="section__item">
                <header class="section__header">
                    <h3>Git</h3>
                </header>
                <p class="section__text">
                    Denne er en protokol og et versionsstyringssystem, der oprindeligt er udviklet af Linus Thorvalds.
                    Han skrev dette system for at hjælpe med at holde styr på udviklingen, efterhånden som der kom flere til. Git har dog vokset sig langt udover Linux i dag.
                    Alle kan opsætte en git-server, men de fleste vælger at bruge en af de eksisterende services – f.eks. GitLab, BitBucket eller GitHub.
                </p>
            </div>
        </section>

        <section class="section" id="github">
            <div class="section__item">
                <header class="section__header">
                    <h3>GitHub</h3>
                </header>
                <p class="section__text">
                    GitHub er en udviklingsplatform, som lader udviklere hoste og evaluere kode,
                    håndtere projekter og bygge software sammen med 40 millioner andre udviklere.
                </p>
                <p class="section__text">
                    GitHub er så stort i dag, at det forventes at man ved hvad GitHub er, og om noget ved hvad Git er.
                    Fordelen ved GitHub er at de fokuserer meget på at samle udviklere omkring samarbejde og projektstyring.
                    Det fungerer som udviklernes sociale media, hvor rigtig mange bruger GitHub som en portfolio for kode.
                </p>
                <blockquote class="section__quote" cite="http://www.github.com">
                    <p>"...whether you’re making your first commit or sending a Rover to Mars, there’s room for you here, too"</p>
                    <footer> - github.com</footer>
                </blockquote>
                <p class="section__text">
                    Et andet fokusområde, som er meget vigtig for GitHub, er at gøre det klart, at der er plads til alle størrelser af projekter på platformen.
                    Om det er det nye styresystem, som erstatter iOS og Android, eller en læringsportfolio for 1. semesterne på EA Dania i skive – Så er der plads på GitHub.
                </p>
                <p class="section__text">
                    World wide, er der på platformen pt.:
                </p>
                <ul class="section__list">
                    <li class="list__item">100M Repositories</li>
                    <li class="list__item">40M udviklere</li>
                    <li class="list__item">2.1M virksomheder og organisationer.</li>
                </ul>
            </div>
        </section>

        <section class="section" id="repos">
            <div class="section__item">
                <header class="section__header">
                    <h3>Repositories? - Hvad er det?</h3>
                </header>
                <p class="section__text">
                    Et Repository, eller repo som det kaldes, er et af flere kernebegreber bag Git.
                </p>
                <ul class="perioder__list">
                    <li><strong>Respository</strong> En samling af filer, som en projektmappe</li>
                    <li><strong>Branch</strong> En forgrening, en parallel version af dit repo, men påvirker ikke master</li>
                    <li><strong>Master Branch</strong> hovedforløbet/Hovedbranch, den som gælder.</li>
                    <li><strong>Commit</strong> En revision, som eat gemme, men med mulighed for at finde tilbage. Det kan kaldes en milepæl</li>
                    <li><strong>Pull Request</strong> Et forslag til en ny udgave (rettelser)</li>
                    <li><strong>Diff</strong> Difference, en forskel mellem 2 commits</li>
                    <li><strong>Merge</strong> Når ændringer i en branch samles med en anden. F.eks. gennem en pull request.</li>
                    <li><strong>Pull</strong> Når du henter ændringer og merger dem.</li>
                </ul>
                <ul class="section__kilde">
                    <li><a class="kilde__link" href="">Niels Østergaard, "versionsstyring.pdf"</a></li>
                    <li><a class="kilde__link" href="http://www.github.com">GitHUb</a></li>
                </ul>
            </div>
        </section>
        
    </section>

    <?php include 'footer.html' ?>
    
    <script type="text/javascript" src="js/js.js"></script>
</body>

</html>