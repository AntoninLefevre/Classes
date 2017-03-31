<?php
	require_once 'autoload.inc.php';

	session_start();

	$wp = new Webpage('connexion.php');
	$fm = new FlashMessage();


	$wp->appendContent($fm->getFlashMessage());
	$wp->appendContent(User::connectionForm("connexion.php"));
	echo $wp->toHTML();
