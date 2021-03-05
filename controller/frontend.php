<?php
session_start();

require('model/frontend/connexion.php');

function pagePrincipale(){
   $produitsDuSite=getProduits();
   $nbreDePdts=totalPdts();
   $savon=savon();
   $shampoing=shampoing();
   $parfum=parfum();
   
    require('view/frontend/index1.php');  
}
// function admin(){
  
//    if(isset($_POST['submit'])){
//       if($_POST['mdp'] == "******"){   
//           header('location:index.php?action=admin2');
//          $msg="Bravo";
//       }else{
//          $msg="Mauvais mot de passe";
//       }
     
//    }
   

//    require('view/frontend/admin.php');
// }


function backoffice(){
    if(isset($_POST['submitAdd'])){
        if(isset($_FILES['photo']) && !empty($_FILES['photo']['name']) && !empty($_POST['title']) && !empty($_POST['prix']) && !empty($_POST['content']) && !empty($_POST['produit'])){
           $tailleMax = 2097152;
           $extensionsValides = array('jpg','jpeg','gif','png');
           $title=htmlspecialchars($_POST['title']);
           $prix=htmlspecialchars($_POST['prix']);
           $content=htmlspecialchars($_POST['content']);
           $produit=htmlspecialchars($_POST['produit']);                   
            $statut=0;
   
           if($_FILES['photo']['size'] <= $tailleMax){
              $extensionUpload = strtolower(substr(strrchr($_FILES['photo']['name'], '.'), 1));
            
              if(in_array($extensionUpload, $extensionsValides)){
                  $chemin = "member/photo/".$_POST['title'].".".$extensionUpload;
                  $resultat = move_uploaded_file($_FILES['photo']['tmp_name'], $chemin);
                     if($resultat){
                       $photo=0;
                      $photo=$_POST['title'].".".$extensionUpload;                     
                      $addProduit=add($title,$prix,$content,$photo,$statut,$produit);
                      $msg=" ✔️Votre fiche est enregistrée !";
                     }
                     else{
                      $msg = "⛔Erreur durant l'importation de votre photo";
                     }
              }else{
                  $msg = "⛔Votre photo doit être au format jpg, jpeg, gif ou png";
              }
           }else{
              $msg = "⛔Votre photo  ne doit pas dépasser 2Mo";
           }
               
        }else{if(!empty($_POST['title'])&&!empty($_POST['prix'])&&!empty($_POST['content'])){
          $title=htmlspecialchars($_POST['title']);
          $prix=htmlspecialchars($_POST['prix']);
          $content=htmlspecialchars($_POST['content']); 
          $produit=htmlspecialchars($_POST['produit']);
             
          $photo="";
           $statut=0;          
     
          $addProduit=add($title,$prix,$content,$photo,$statut,$produit);
          $msg=" ✔️Votre fiche est enregistrée !";
        } 
        else{
           $msg="⛔ Veuillez remplir tous les champs !";
        }          

        }
  
   }
    $produit=addProduit();
    $visiteur=visiteur();
  
    require('view/frontend/admin2.php');
}
function accept($id){
  
   $produit=addProduit();
   edit($id); 
   header('location:index.php?action=admin');
   require('view/frontend/admin2.php');
}
function deleteProduit($id){
   $produit=addProduit();
   delete($id);
   header('location:index.php?action=admin');
   require('view/frontend/admin2.php');
}
