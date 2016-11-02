<?php

    session_cache_limiter( 'nocache' );
    header( 'Expires: ' . gmdate( 'r', 0 ) );
    header( 'Content-type: application/json' );


    $to         = 'contact@vueducoeur.org';  

    $email_template = 'simple.html';

    $objet   = strip_tags($_POST['objet']);
    $email       = strip_tags($_POST['email']);
    $nom       = strip_tags($_POST['nom']);
    $message    = nl2br( htmlspecialchars($_POST['message'], ENT_QUOTES) );
    $result     = array();


    if(empty($nom)){

        $result = array( 'response' => 'error', 'empty'=>'nom', 'message'=>'<strong>Une erreur est survenue</strong>&nbsp; Le nom est vide.' );
        echo json_encode($result );
        die;
    } 

    if(empty($email)){

        $result = array( 'response' => 'error', 'empty'=>'email', 'message'=>'<strong>Une erreur est survenue</strong>&nbsp; L\'adresse e-mail est vide.' );
        echo json_encode($result );
        die;
    } 

    if(empty($message)){

         $result = array( 'response' => 'error', 'empty'=>'message', 'message'=>'<strong>Une erreur est survenue</strong>&nbsp; Le corps du message est vide.' );
         echo json_encode($result );
         die;
    }
    


    $headers  = "From: " . $nom . ' <' . $email . '>' . "\r\n";
    $headers .= "Reply-To: ". $email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";


    $templateTags =  array(
        '{{objet}}' => $objet,
        '{{email}}'=>$email,
        '{{message}}'=>$message,
        '{{nom}}'=>$nom,
        '{{phone}}'=>$phone
        );


    $templateContents = file_get_contents( dirnom(__FILE__) . '/pages/'.$email_template);

    $contents =  strtr($templateContents, $templateTags);

    if ( mail( $to, $objet, $contents, $headers ) ) {
        $result = array( 'response' => 'success', 'message'=>'<strong>Merci !</strong>&nbsp; Le message a été envoyé.' );
    } else {
        $result = array( 'response' => 'error', 'message'=>'<strong>Une erreur est survenue</strong>&nbsp; Impossible d\'envoyer le message.'  );
    }

    echo json_encode( $result );

    die;