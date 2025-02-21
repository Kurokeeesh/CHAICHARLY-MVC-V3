<?php
require_once "models/produitsModel.php";



function testPage(){

    $donnees_recup = [
        "name"=>"jhon",
        "lastname"=>"doe",
        "age"=>28,
    ];

    $datas_page=[
    "description" => "Page de test du site",
    "title" => "Page de test",
    "view" => "views/pages/testPage.php",
    "layout" =>"views/components/layout.php",
    "datas_recep" => $donnees_recup,
    ];
    drawPage($datas_page);
}

function homePage(){


    $datas_page=[
    "description" => "Page home du site",
    "title" => "Accueil : ChaiCharly",
    "view" => "views/pages/homePage.php",
    "layout" =>"views/components/layout_2.php",
    ];
    drawPage($datas_page);
}

function vinsPage(){

    $produit = getProduitRouge();
    $produit1 = getProduitRose();
    $produit2 = getProduitBlanc();
    $produit3 = getProduitBio();
    $produit4 = getProduitMo();
    $produit5 = getProduitBIB();

    $datas_page=[
    "description" => "Page des vins du site",
    "title" => "Nos vins : ChaiCharly",
    "view" => "views/pages/vinsPage.php",
    "layout" =>"views/components/layout.php",
    "produit" => $produit,
    "produit1" => $produit1,
    "produit2" => $produit2,
    "produit3" => $produit3,
    "produit4" => $produit4,
    "produit5" => $produit5,
    ];
    drawPage($datas_page);
}

function tarifsPage(){

    $datas_page=[
    "description" => "Page des tarifs du site",
    "title" => "Tarifs : ChaiCharly",
    "view" => "views/pages/tarifsPage.php",
    "layout" =>"views/components/layout.php",
    ];
    drawPage($datas_page);
}
function cnxPage(){

    $datas_page=[
    "description" => "Page d'inscription du site",
    "title" => "Inscription : ChaiCharly",
    "view" => "views/pages/cnxPage.php",
    "layout" =>"views/components/layout.php",
    ];
    drawPage($datas_page);
}

function loginPage(){

    $datas_page=[
    "description" => "Page de connexion du site",
    "title" => "Connexion : ChaiCharly",
    "view" => "views/pages/loginPage.php",
    "layout" =>"views/components/layout.php",
    ];
    drawPage($datas_page);
}

?>