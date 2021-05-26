<?php

 class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=casadelaguacate",
			            "root",
			            "toor");

		$link->exec("set names utf8");

		return $link;

	}

}