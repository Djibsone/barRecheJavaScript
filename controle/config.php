<?php 

function dbConnect() {

    try {
        $db = new PDO('mysql:host=127.0.0.1;dbname=ecomm;charset=utf8','djibril','tamou');
        //setAttribut(PDO::ATTR_ERRMODE, PDOException::ATTR_ERRMODE);
        return $db;
    } catch (Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
    
}

function getArticles(){
    $db = dbConnect();

    $req = $db->query('SELECT * FROM articles');
    $req->execute();
    return $req;
}