<?php

class FlashMessage {
	
	/**
	 * Le message flash
	 * @var String
	 */
	private $message;

	/**
	 * Le constructeur du message flash
	 * @param String $message Le message flash
	 */
	public function __construct() {
		self::startSession();
	}

	/**
	 * Démarre la session si elle n'existe pas
	 * @return null
	 */
	public static function startSession(){
		if(!session_id())
			session_start();
	}

	/**
	 * Retourne le message flash s'il existe et le supprimer
	 * @return String Le message flash
	 */
	public function getFlashMessage() {
		if(isset($_SESSION['flash'])){
			$fm = $_SESSION['flash'];
			unset($_SESSION['flash']);
			return $fm;
		} else {
			return "";
		}
	}

	/**
	 * Attribut une valeur au message flash
	 * @param String $message Le message
	 * @return null
	 */
	public function setFlashMessage(String $message){
		$_SESSION['flash'] = $message;
	}
}