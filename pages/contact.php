<!DOCTYPE html>
<html lang="fr">
    <!--HEADER-->
    <?php include("../includes/header.php"); ?>
    
    <body>
        <!--NAV-->
        <?php include("../includes/nav.php"); ?>


        <!--MAIN-->
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
                    <button type="submit" class="btn btn-default">Envoyer</button>
                    </form>
                </div>

                <div class="flex_itm flex_don">
                    <h3 class="titre_secondaire titre_don">Faire un don</h3>
                    <p class="texte_clair"> Votre solidarité nous est indispensable ! </p>
                    <p class="don texte_clair"> 30€ </p>
                    <p class="don texte_clair"> 50€ </p>
                    <p class="don texte_clair"> 75€ </p>
                    <p class="don texte_clair"> 100€ </p>
                    <p class="don texte_clair"> autre montant </p>
                    <button class="texte_clair">DONNER</button>
                </div>
            </div>

            <h2 class="titre_principal"> Nos partenaires </h2>
           </div> 
        </main>


        <!--FOOTER-->
        <?php include("../includes/footer.php"); ?>
    </body>
</html>