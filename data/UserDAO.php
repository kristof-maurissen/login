<?php
require_once("DBConfig.php"); 
require_once("entities/User.php");

class UserDAO {

	public function getByGebruikersnaam($userName) {
		$dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
		$sql = "select id, username, password from users where username = :gebruikersnaam";
		
                $stmt = $dbh->prepare($sql); 
                $stmt->execute(array(':gebruikersnaam' => $userName)); 
                $rij = $stmt->fetch(PDO::FETCH_ASSOC);

			if ($rij) {
				$user = User::create($rij["id"], $rij["username"], $rij["password"]);
				$dbh = null;
				return $user;
			} else {
				return null;
			}
		} 
	
	
	
}

