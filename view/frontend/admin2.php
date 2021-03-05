<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="public/css/styleAdmin.css">
        <title>Document</title>
    </head>
    <body>   
    
    <?php if(isset($_POST['submit'])){
        if($_POST['mdp']=="Romane"){?>
   <h2>Hello admin 😉</h2>
        <div class="nbrvisiteurs">
        <h5>Nombre de visiteurs sur ton site :</h5><div id="compteurAdmin"><?php echo $visiteur; ?></div>
        </div>
        <h4>Pour insérer un produit</h4>
        <section>
        <form method="post" action="" enctype="multipart/form-data" id="actualite">
    
        <div class="entete">
    <div class="titre">
    <label>Le titre</label>
    <input type="text" name="title" id="title"></input> 
    </div>
    <div class="prix">
    <label>Le prix 💲</label>
    <input type="text" name="prix" id="prix"></input> 
    </div>
    </div>
     <label>Dans quelle catégorie ?</label>
     <select name="produit">
    <option value="savon">Savon</option>
    <option value="shampoing">Shampoing</option>
    <option value="parfum">Parfum</option>
    <option value="autre">Autre</option>
     </select>
    <div class="message">
    <label>Rédaction du message 🧾</label>
    <textarea type="text" name="content" id="content" rows="10" cols="48"></textarea>
    </div>
    <br>
    <label for="file" id="photo">Insérer une photo:📂</label> 
    <input type="file" name="photo" />
    <br>
    <input type="submit" id="submit" name="submitAdd" value="envoyer" >
    </form>
    <?php if(isset($msg)){
 echo '<div id="avertiPHP" ><font color="red">'. $msg.'</font></div>';
    }?>
               
    </section>
    
    <h4>Gestion des fiches produits <a href="index.php">Retour sur le site</a></h4>
    <section>
    <div class="container">
    <?php
      
           while($data = $produit->fetch())
    {?>
    
       
     <div class="card">
        <div class="card1">   <?php if($data['photo']!=""){
            echo'<img src="member/photo/'.$data['photo'].'">';

        }?>                                  
                     
          
        <div class="card-content">
            <div class="card-titre">
            <h4><?php echo htmlspecialchars($data['title']); ?></h4>  <div class="prix"><?php echo htmlspecialchars($data['prix']); ?></div>
        </div>
            <p class="card-text"><?php echo htmlspecialchars($data['content']); ?></p>
         
        </div>
       
        </div>  
        <div class="bouton">   
        <?php if( $data['statut']==1){
     echo'<font id="boutonEnLigne"><a href="index.php?action=edit&amp;id='.$data['id'].'" class="btn1">En ligne</a></font>';
        }else{
            echo'<font id="aEditer">  <a href="index.php?action=edit&amp;id='.$data['id'].'" class="btn2">Editer</a></font>';  
        }
       
         echo'<font id="annuler"> <a href="index.php?action=delete&amp;id='.$data['id'].'" class="btn3">Annuler</a></font>';?>
       
        </div>
        </div>           <?php    }?> 
     
         
                    
                    </section> 
                                           
              

 <?php }  

     if($_POST['mdp']!=="Romane"){?>
        <body>
        <div class="wrapper">
    <div class="containerBis">
    <div class="containerMdp">
    <h1>Hello Admin 🔜</h1>
    <form action="" method="post">
    <label for="">Mot de passe</label>
    <input type="password" name="mdp">
    <br>
    <br>
    <div class="bouton">
    <input type="submit" name="submit">
    </div>
    </form>
    <div class="">Mauvais mot de passe !</div>
    </div>
    <br>
    <br>
    </div>  
    </div>       
    </body>
    <?php }
     }
    else{?>
        <body>
        <div class="wrapper">
    <div class="containerBis">
    <div class="containerMdp">
    <h1>Hello Admin 🔜</h1>
    <form action="" method="post">
    <label for="">Mot de passe</label>
    <input type="password" name="mdp">
    <br>
    <br>
    <div class="bouton">
    <input type="submit" name="submit">
    </div>
    </form>
    </div>
    </div>
    <br>
    <br>
    </div>  
    </div>       
    </body>
   <?php  }?>
   

   
  
       
    </body>
    </html>
    
    
    





