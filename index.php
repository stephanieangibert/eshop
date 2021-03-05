<?php
require('controller/frontend.php');
// require('controller/backend.php');

try {

    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'admin') {
            backoffice();
        }    
    
          else if($_GET['action']=='edit'){
            if(isset($_GET['id']) && $_GET['id']>0){
                accept($_GET['id']);
            }
            else {
                throw new Exception('Tous les champs ne sont pas remplis !');
            }
        }
        else if($_GET['action']=='delete'){
            if(isset($_GET['id']) && $_GET['id']>0){
                deleteProduit($_GET['id']);
            }
            else {
                throw new Exception('Tous les champs ne sont pas remplis !');
            }
        }
      
      
   
    }else{
        pagePrincipale();
        
     }    

    }
     

catch(Exception $e) { 
    echo 'Erreur : ' . $e->getMessage();
}
