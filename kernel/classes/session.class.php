<?php 

class Session {

	static $instance = null ;

	public function __construct(){
		session_start();
	}
	static function getInstance(){
		if(!self::$instance){
			self::$instance =  new Session();
		}
		return self::$instance;
	}
	public function setFlash($key, $message){
		$_SESSION['flash'][$key] = $message;
	}
	public function hasFlashes(){
		return isset($_SESSION['flash']);
	}
	public function getFlashes(){
		$flashes = $_SESSION['flash'];
		unset($_SESSION['flash']);

		return $flashes;
	}
	public function write($key, $value){
		$_SESSION[$key] =  $value;
	}
	public function read($key){
		return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
	}
	public function delete($key){
		unset($_SESSION[$key]);
	}
}