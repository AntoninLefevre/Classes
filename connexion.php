<?php

	require_once 'autoload.inc.php';

	if(isset($_POST['connectionForm'])){
		$fm = new FlashMessage();
		if($user = User::createFromAuth($_POST)){
			$message = "L'utilisateur est connecté";
		} else {
			$message = "Erreur lors de l'authentification";
		}

		$fm->setFlashMessage($message);
	}

	header('Location: index.php');