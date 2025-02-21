<?php

require_once "models/pdoModel.php";

function getProduitRouge(){
    $req ="SELECT * FROM produit where codeCat = 'RG'";
    $stmt = setDB()->prepare($req);
    $stmt->execute();
    $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $datas;
}

function getProduitRose(){
    $req ="SELECT * FROM produit where codeCat = 'RO'";
    $stmt = setDB()->prepare($req);
    $stmt->execute();
    $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $datas;
}

function getProduitBlanc(){
    $req ="SELECT * FROM produit where codeCat = 'BL'";
    $stmt = setDB()->prepare($req);
    $stmt->execute();
    $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $datas;
}

function getProduitBio(){
    $req ="SELECT * FROM produit where codeCat = 'BIO'";
    $stmt = setDB()->prepare($req);
    $stmt->execute();
    $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $datas;
}

function getProduitMo(){
    $req ="SELECT * FROM produit where codeCat = 'MO'";
    $stmt = setDB()->prepare($req);
    $stmt->execute();
    $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $datas;
}

function getProduitBIB(){
    $req ="SELECT * FROM produit where codeCat = 'BIB'";
    $stmt = setDB()->prepare($req);
    $stmt->execute();
    $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $datas;
}

?>