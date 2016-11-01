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
                <!-- insérez votre contenu ici -->
            <h2 class="titre_principal"> Contacter l'association </h2>
            
            <div class="flex_contain">
                <div class="flex_item">
                    <form action="reception.php" method="post">
                    <!--<div class="flex_itm">-->
                        <input type="text" class="form-control" name="nom" placeholder="Nom...">
                        <input type="text" class="form-control" name="email" placeholder="E-mail...">
                        <input type="text" class="form-control" name="objet" placeholder="Objet...">
                        <textarea type="text" class="form-control" name="message" placeholder="Message..."></textarea>
                        
                    <!--</div>-->
                    <div type="submit" class="bouton-jaune-upp">Envoyer</div>
                    </form>
                </div>

                <div class="flex_item flex_don texte_clair">
                    <h3 class="titre_secondaire texte_jaune">Faire un don</h3>
                    <p> Votre solidarité nous est indispensable ! </p>
                       <div class="flex_texte">
                            <p> 30 € </p>
                            <p> 50 € </p>
                            <p> 75 € </p>
                            <p> 100 € </p>
                            <p> autre montant </p>
                            </div>
                    <div class="bouton-jaune-upp">donner</div>
                </div>
            </div>

            <h2 class="titre_principal"> Nos partenaires </h2>

            <div class="flex_contain">
                <div class="flex_part">
                   <div class="div_part"> 
                        <img src="../images/part1.jpg">
                    </div>
                    <div class="div_part">
                        <div class="part_texte">
                        <p class="titre-secondaire">Osons La Différence</p>
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
                        <p class="titre-secondaire">Vue d'ensemble</p>
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
                        <p class="titre-secondaire">Yvoir</p>
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
                        <p class="titre-secondaire">Quatz Trotters</p>
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