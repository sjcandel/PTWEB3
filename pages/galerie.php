<!DOCTYPE html>
<html lang="fr">
<!--HEADER-->
<?php include("../includes/header.php"); ?>

    <body>
        <!--NAV-->
        <?php include("../includes/nav.php"); ?>

            <!--MAIN-->
            <main>
                <div class="wrapper-bleu texte_fonce">
                    <h2 class="titre_principal"> Galerie multimédia </h2>

                    <!----------------------------------------------------->
                    <div id="barre_recherche"> <em id="clickme" class="fa fa-search texte_fonce"> Rechercher</em> </div>
                    <div id="archivesFilters">
                        <ul id="filters"> <em>Filtrer par année :</em>
                            <li><span class="filter" data-filter=".2015">2015</span></li>
                            <li><span class="filter" data-filter=".2016">2016</span></li>
                        </ul>
                        <ul id="filters"> <em>Filtrer par thème :</em>
                            <li><span class="filter" data-filter=".vie">Vie de l'association</span></li>
                            <li><span class="filter" data-filter=".sport">Sport</span></li>
                            <li><span class="filter" data-filter=".nathan">Nathan</span></li>
                        </ul>
                    </div>
                    <!----------------------------------------------------->
                    <div class="flex_contain">
                        <div class="flex_item">
                            <video width="400" height="229" poster="../images/vid1.jpg" src="../videos/vismavie.mp4">Fauve Hautot dans la peau d'un malvoyant !</video>
                            <div class="controlplay">Play</div>
                            <h3 class="titre-secondaire"> Fauve Hautot dans la peau d'un malvoyant </h3>
                            <p> Fauve Hautot se prête au jeu. Pendant une journée, elle devra voir, non pas avec ses yeux, mais avec ses sens. </p>
                        </div>
                        <div class="flex_item">
                            <video width="400" height="229" poster="../images/vid2.jpg" src="../videos/vismavie.mp4">Cécifoot : une autre vision du football </video>
                            <div class="controlplay">Play</div>
                            <h3 class="titre-secondaire "> Cécifoot : une autre vision du football </h3>
                            <p> Comment peut-on jouer au football en étant non-voyant ou mal-voyant ? La réponse en images avec les joueurs nantais du Don Bosco Football Club. </p>
                        </div>
                        <div class="flex_item">
                            <video width="400" height="229" poster="../images/vid3.jpg" src="../videos/vismavie.mp4">Un bébé malvoyant découvre sa mère</video>
                            <div class="controlplay">Play</div>
                            <h3 class="titre-secondaire"> Un bébé malvoyant découvre sa mère </h3>
                            <p> Leopold est atteint d'albanisme oculaire. Retrouvez sa première réaction lorqu'il porte des lunettes pour la première fois ! </p>
                        </div>
                        <div class="flex_item">
                            <video width="400" height="229" poster="../images/vid4.jpg" src="../videos/vismavie.mp4">Découverte de tableaux par des enfants malvoyants</video>
                            <div class="controlplay">Play</div>
                            <h3 class="titre-secondaire"> Découverte de tableaux par des enfants malvoyants </h3>
                            <p> La Ligue Braille organise des stages pour faire découvrir aux enfants malvoyants les oeuvres d'art dont des tableaux dans les musées. </p>
                        </div>
                    </div>

                </div>
            </main>

            <!--FOOTER-->
            <?php include("../includes/footer.php"); ?>
    </body>

</html>
