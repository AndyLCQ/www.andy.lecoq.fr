<?php 

/**
* 
*/
class App 
{
	static $baseDeDonnees = null;
	static function getBaseDeDonnees(){
		if (!self::$baseDeDonnees){
			self::$baseDeDonnees= new BaseDeDonnees('root', 'admadm', 'test');
		}
		return self::$baseDeDonnees;
	}
	static function redirection($page){
		header("Location : $page");
		exit();
	}
	static function getAuth(){
		return new Auth(Session::getInstance(), array('restrict_message' => 'Interdit'));
	}
}