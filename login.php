<?php

session_start();
require_once ("business/UserService.php");

    if (isset($_GET["action"]) && $_GET["action"] === "login"){
        $service = new UserService();
        $access = $service->controlUser($_POST["Gebruikersnaam"], $_POST["Wachtwoord"]);
        if ($access){
            $_SESSION["accessok"] = true;
            header("location: hetgeheim.php");
            exit(0);
        }else{
            header("location: login.php");
            exit(0);
        }
    
    } else {
        include ("presentation/loginForm.php");
    }
