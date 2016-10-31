<!DOCTYPE html>
<html lang="fr">
    <!--HEADER-->
    <?php include("../includes/header.php"); ?>
    
    <body>
        <!--NAV-->
        <?php include("../includes/nav.php"); ?>


        <!--MAIN-->
        <main>
           <div class="wrapper-bleu">
           <h2 class="titre_principal"> Galerie multimédia </h2>
                <!-- Barre de recherche -->
                <div id="barre_recherche" class="recherche">
                <form method="post" action="">
                  <em id="clickme" class="fa fa-search"></em>
                  <input id="champs" class="champ" type="search" placeholder="Rechercher"/>
                </form>
              </div>
                <!-- Filtrer par année 2012 | 2013 | 2014 | 2015 | 2016 -->
                <!-- Filtrer par thème vie de l'association | sport | Nathan -->
                <div class="flex_multi">

                <div class="flex_vid">
                    <video width="400" height="229" poster="../images/vid1.jpg" src="../videos/vismavie.mp4">Fauve Hautot dans la peau d'un malvoyant !</video>
                    <button class="controlplay">Play</button>
                    <h3 class="titre_vid texte_fonce"> Fauve Hautot dans la peau d'un malvoyant </h3>
                    <p class="texte_fonce text"> Fauve Hautot se prête au jeu. Pendant une journée, elle devra voir, non pas avec ses yeux, mais avec ses sens. </p>
                </div>

                <div class="flex_vid right">
                    <video width="400" height="229" poster="../images/vid2.jpg" src="../videos/vismavie.mp4">Cécifoot : une autre vision du football </video>
                    <button class="controlplay">Play</button>
                    <h3 class="titre_vid texte_fonce"> Cécifoot : une autre vision du football </h3>
                    <p class="texte_fonce text"> Comment peut-on jouer au football en étant non-voyant ou mal-voyant ? La réponse en images avec les joueurs nantais du Don Bosco Football Club. </p>
                </div>

                <div class="flex_vid">
                    <video width="400" height="229" poster="../images/vid3.jpg" src="../videos/vismavie.mp4">Un bébé malvoyant découvre sa mère</video>
                    <button class="controlplay">Play</button>
                    <h3 class="titre_vid texte_fonce"> Un bébé malvoyant découvre sa mère </h3>
                    <p class="texte_fonce text"> Leopold est atteint d'albanisme oculaire. Retrouvez sa première réaction lorqu'il porte des lunettes pour la première fois ! </p>
                </div>

                <div class="flex_vid right">
                    <video width="400" height="229" poster="../images/vid4.jpg" src="../videos/vismavie.mp4">Découverte de tableaux par des enfants malvoyants</video>
                    <button class="controlplay">Play</button>
                    <h3 class="titre_vid texte_fonce"> Découverte de tableaux par des enfants malvoyants </h3>
                    <p class="texte_fonce text"> La Ligue Braille organise des stages pour faire découvrir aux enfants malvoyants les oeuvres d'art dont des tableaux dans les musées. </p>
                </div>
                
                </div>
           <!-- Pagination -->
           </div> 
        </main>


        <!--FOOTER-->
        <?php include("../includes/footer.php"); ?>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="../js/video.js"></script>
    </body>
</html>