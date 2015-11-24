<?php
class User {

	private static $idMap = array();

	private $id;
	private $userName;
	private $password;
	
	public static function create($id, $userName, $password) {
		if (!isset(self::$idMap[$id])) {
			self::$idMap[$id] = new User($id, $userName, $password);
		}
		return self::$idMap[$id];
	}
	
	public function __construct($id, $userName, $password) {
		$this->id = $id;
		$this->userName = $userName;
		$this->password = $password;
	}
	
	public function getGebruikersnaam() {
		return $this->userName;
	}
	
	public function getWachtwoord() {
		return $this->password;
	}
}

