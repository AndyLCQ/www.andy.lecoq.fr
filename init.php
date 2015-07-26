<?php
	spl_autoload_register('app_autoload');
	function app_autoload($class){
		require "classes/$class.class.php";
	}