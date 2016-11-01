<?php

    $to         = 'contact@vueducoeur.org';  

    $objet    = strip_tags($_POST['objet']);
    $email       = strip_tags($_POST['email']);
    $nom       = strip_tags($_POST['nom']);
    $message    = nl2br( htmlspecialchars($_POST['message'], ENT_QUOTES) );
    $result     = array();


    if(empty($nom)){

        $result = array( 'response' => 'error', 'empty'=>'nom', 'message'=>'<strong>Error!</strong>&nbsp; Le nom est vide.' );
        echo json_encode($result );
        die;
    } 

    if(empty($email)){

        $result = array( 'response' => 'error', 'empty'=>'email', 'message'=>'<strong>Error!</strong>&nbsp; L\'email est vide.' );
        echo json_encode($result );
        die;
    } 

    if(empty($message)){

         $result = array( 'response' => 'error', 'empty'=>'message', 'message'=>'<strong>Error!</strong>&nbsp; Le contenu du message est vide.' );
         echo json_encode($result );
         die;
    }
    


    if ( mail( $to, $objet, $contents, $headers ) ) {
        $result = array( 'response' => 'success', 'message'=>'<strong>Merci!</strong>&nbsp; Le message a été envoyé.' );
    } else {
        $result = array( 'response' => 'error', 'message'=>'<strong>Une erreur est survenue</strong>&nbsp; Impossible d\'envoyer le message.'  );
    }


    die;