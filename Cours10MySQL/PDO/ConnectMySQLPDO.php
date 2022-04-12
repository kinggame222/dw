<?php 
// connection au serveur MySQL (mode PDO)
// 1) le nom de l'hôte  2) la base  3) le login et 4) le password
// ---------------------------------------------------------------



try {
    $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(PDOException $e) {
    $msg = 'ERREUR PDO dans ' . $e->getFile() . '<br> L.' . $e->getLine() . ' : ' . $e->getMessage();
    die($msg);
}

//try {
//    $strConnection = 'mysql:host=localhost;dbname=test';
//    $arrExtraParam= array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
//    $db = new PDO($strConnection, 'root', '', $arrExtraParam); 
//    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//}
//catch(PDOException $e) {
//    $msg = 'ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
//    die($msg);
//}


?> 
