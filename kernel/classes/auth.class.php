<?php

class Auth{
	private $session;
	private $options = array(
		'restrict_message' => 'Accès interdit'
	);
	public function __construct($session, $options = array()){
		$this->session = $session;
		$this->options = array_merge($this->options, $options);
	}
	public function register($baseDeDonnees, $username, $password, $email){
			// db -> insert
	}
	public function restrict(){
		if(!$this->session->read('auth')){
			$this->session->setFlash('danger', $this->options['restrict_message']);
		}
	}
	public function connect($utilisateur){
		$this->session->write('auth', $utilisateur);
	}
	public function login($baseDeDonnees, $username, $password, $remember = false){
		// requete recherche user

		// VERIFIE MDP
		// $this->connect($user);
		// return $user else false
	}
	public function logout(){
		$this->session->delete('auth');
	}
	public function reset_password($db, $email){

	}
}