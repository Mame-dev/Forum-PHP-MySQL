<?php
try{
    session_start();
    //Creation BDD
    $bdd = new PDO('mysql:host=localhost;dbname=forum;charset=utf8;', 'root', 'root');
}catch(Exception $e){
    //s'il ya erreur cela se plante
    die('Une erreur a été trouvé : ' . $e->getMessage());
}
