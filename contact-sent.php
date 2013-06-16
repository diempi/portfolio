<?php
	// On recupere les informations du formulaire
	if(isset($_POST['nom']) && ($_POST['nom'])!=''){
		$nom = $_POST['nom'];
	}

	if(isset($_POST['email']) && ($_POST['email'])!=''){
		$email = $_POST['email'];		
	}

	if(isset($_POST['message']) && ($_POST['message'])!=''){
		$message = $_POST['message'];		
	}	

	

	// Envoi de l'email
	//if(mail('didier@diempi.be','venant de '.$nom.' de l\'email '.$email,$message))
	if(imap_mail('mail@you',' Message venant de '.$nom.': '.$email,$message)){
		$message_status = 'Merci de votre message';
		echo 'ok';
	}
	else{
		$message_status = 'Erreur lors de l\'envoi de votre message veuillez verifier les champs en surbrillance;';
		echo 'ko';
	}

	
?>
