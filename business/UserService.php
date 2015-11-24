<?php

//business/UserService.php
require_once ("data/UserDAO.php");

class UserService {
    
    public function controlUser($userName, $password) {
        $dao = new UserDAO();
        $user = $dao->getByGebruikersnaam($userName);
        if (isset($user) && $user->getWachtwoord() == $password) {
            return true;    
        } else{
            return false;
        }
    }
}

