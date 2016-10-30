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
                <!-- insérez votre contenu ici -->
            <h2 class="titre_principal"> Contacter l'association </h2>
            <div class="flex_contact">
                <div class="flex_itm">
                    <form action="reception.php" method="post">
                    <!--<div class="flex_itm">-->
                        <div class="">
                            <input type="text" class="form-control" name="nom" maxlength="120" placeholder="Nom...">
                        </div>

                        <div class="">
                            <input type="text" class="form-control" name="email" maxlength="256" placeholder="E-mail...">
                        </div>
                        <div class="">
                            <input type="text" class="form-control" name="objet" maxlength="256" placeholder="Objet...">
                        </div> 
                        <div class="">
                            <textarea type="text" class="form-control" name="message" placeholder="Message..."></textarea>
                        </div>
                    <!--</div>-->
                    <button type="submit" class="butt_form">Envoyer</button>
                    </form>
                </div>

                <div class="flex_itm flex_don">
                    <h3 class="titre_secondaire titre_don">Faire un don</h3>
                    <p class="texte_clair texte"> Votre solidarité nous est indispensable ! </p>
                        <p class="texte_clair flex_texte"> 30 € </p>
                        <p class="texte_clair flex_texte"> 50 € </p>
                        <p class="texte_clair flex_texte"> 75 € </p>
                        <p class="texte_clair flex_texte"> 100 € </p>
                        <p class="texte_clair flex_texte"> autre montant </p>
                    <button class="texte_clair butt_texte">donner</button>
                </div>
            </div>

            <h2 class="titre_principal"> Nos partenaires </h2>

            <div class="part">
                <div class="flex_part">
                   <div class="div_part"> 
                        <img src="../images/part1.jpg">
                    </div>
                    <div class="div_part">
                        <div class="part_texte">
                        <p class="nom_part">Osons La Différence</p>
                        <p class="lien"> <a href="http://www.osonsladifference.org/" target="_blank">http://www.osonsladifference.org/</a> </p>
                        </div>
                   </div> 
                </div>
               
                <div class="flex_part">
                   <div class="div_part"> 
                        <img src="../images/part2.jpg">
                    </div>
                    <div class="div_part">
                        <div class="part_texte">
                        <p class="nom_part">Vue d'ensemble</p>
                        <p class="lien"> <a href="http://www.vue-densemble.com/" target="_blank">http://www.vue-densemble.com/</a> </p>
                        </div>
                   </div> 
                </div>

                <div class="flex_part">
                   <div class="div_part"> 
                        <img src="../images/part3.jpg">
                    </div>
                   <div class="div_part">
                        <div class="part_texte">
                        <p class="nom_part">Yvoir</p>
                        <p class="lien"> <a href="http://parispekin.yvoir.free.fr/index.htm" target="_blank">http://parispekin.yvoir.free.fr/index.htm/</a> </p>
                        </div>
                   </div>
                </div>

                <div class="flex_part">
                   <div class="div_part"> 
                        <img src="../images/part4.jpg">
                    </div>
                    <div class="div_part">
                        <div class="part_texte">
                        <p class="nom_part">Quatz Trotters</p>
                        <p class="lien"> <a href="https://www.facebook.com/Quatz-Trotters-167437973276193/" target="_blank">https://www.facebook.com/Quatz-Trotters-167437973276193/</a> </p>
                        </div>
                   </div>
                </div>

            </div>

           </div> 
        </main>


        <!--FOOTER-->
        <?php include("../includes/footer.php"); ?>
    </body>
</html>