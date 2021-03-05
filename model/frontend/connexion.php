<?php
function getProduits()
  {
      
      $db = dbConnect();    
      $req=$db->query('SELECT *  FROM produits WHERE statut=1 ORDER BY id DESC');  
     
       return $req;
  }
function totalPdts(){
    $db = dbConnect();
    $req=$db->query('SELECT id FROM produits WHERE statut=1');
    $nbr =$req->rowCount();
    return $nbr;
}
function savon(){
    $db = dbConnect();
    $req=$db->query("SELECT * FROM produits WHERE statut=1 AND produit='savon'");    
    return $req;  
}
function shampoing(){
    $db = dbConnect();
    $req=$db->query("SELECT * FROM produits WHERE statut=1 AND produit='shampoing'");    
    return $req;  
}
function parfum(){
    $db = dbConnect();
    $req=$db->query("SELECT * FROM produits WHERE statut=1 AND produit='parfum'");    
    return $req;  
}

function add($title,$prix,$content,$photo,$statut,$produit)
{
    $db = dbConnect();
    $add = $db->prepare('INSERT INTO produits(title,prix,content,photo,statut,produit) VALUES(?,?,?,?,?,?)');
    $addProduit = $add->execute(array($title,$prix,$content,$photo,$statut,$produit));    
    return  $addProduit;
}
function addProduit(){
    $db = dbConnect(); 
    $req=$db->query('SELECT * FROM produits ORDER BY id DESC');
    return $req;

}
function edit($id){
    $db = dbConnect();
    $accep=$db->prepare('UPDATE produits SET statut = 1 WHERE id = :id');
    $acc=$accep->execute(array('id'=>$id));
    return $acc;

}
function delete($id)
 {
    $db = dbConnect();
    $delPos =$db->prepare("DELETE FROM produits WHERE id = ?");
    $delPos->execute(array($id));
    $delPost=$delPos->fetch();
    return $delPost;
}

function visiteur(){
    $db = dbConnect(); 
    $req=$db->query('SELECT * FROM adresseip');
    $nbr =$req->rowCount();
    return $nbr;

}
function dbConnect()
{
    try
    {
        //$db = new PDO('mysql:host=db5001837368.hosting-data.io;dbname=dbs1511134;charset=utf8', 'dbu978936', 'Romane1010&');

        $db = new PDO('mysql:host=localhost;dbname=eshop;charset=utf8', 'root', '');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}