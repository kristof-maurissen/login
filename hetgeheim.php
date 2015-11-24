<?php

session_start();

if (!isset($_SESSION["accessok"])){
    header("location: login.php");
    exit(0);
} 
    include("presentation/geheimepagina.php");


