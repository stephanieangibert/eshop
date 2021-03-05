<?php

$db = new PDO('mysql:host=localhost;dbname=eshop;charset=utf8', 'root', '');
$temps_session=15;
$temps_actuel=date("U");
$ip_user=$_SERVER['REMOTE_ADDR'];


$req_ip_exist= $db->prepare("SELECT * FROM adresseip WHERE ip_user = ?");
$req_ip_exist->execute(array($ip_user));
$ip_exist=$req_ip_exist->rowCount();

if($ip_exist==0){
    $add_ip=$db->prepare("INSERT INTO adresseip(ip_user,time) VALUES (?,?)");
    $add_ip->execute(array($ip_user,$temps_actuel));
}else{
    $update_ip=$db->prepare("UPDATE adresseip SET compteur=compteur+1 WHERE ip_user = ?");
    $update_ip->execute(array($ip_user));
}

$nbreuser=$db->query("SELECT * FROM adresseip");
$userNbr=$nbreuser->rowCount();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Holtwood+One+SC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> <link href="https://fonts.googleapis.com/css2?family=Galindo&display=swap" rel="stylesheet">
    
    <title>Document</title>
</head>
<body ontouchstart="">
        <section class="premiere" >
            <nav>
                <ul>
                <a id="accueil" class="itemMenu"> <li>Accueil</li></a>
                <a id="produit" class="itemMenu"> <li class="liPdt">Produits<span class="pdt">(<?php echo $nbreDePdts ?>)</span></li></a>
                <a href="#contact" class="itemMenu">     <li>Contact</li></a>
                </ul>
            </nav>
            <div class="container">
                <div class="block1">
                    <h3>@stephange.fr</h3>
                </div>
                <div class="block2">
                  <div class="shop"><h2>eshop</h2></div> 
                </div>
                <div class="block3">
                    <div class="titre">
                    <h1>e shop <span>&</span></h1>
                    <div id="bg">
                  la boutique
                  <div id="bgPetit"></div>
                </div>
                <div class="choixContainer">
                <div class="choix">
            <div class="btnChoix">Savon</div>
            <div class="btnChoix">Shampoing</div>
            <div class="btnChoix">Parfum</div>
            <div class="btnChoix">Tous</div>
        </div>
        </div>
                </div>                
                </div>
                <div class="block4">
                  
                </div>
            </div>
        </section>  
     
        
           <section class="hauteur"></section>
        <section class="deuxieme" id="deuxieme">
       
            <div class="container2">
            <?php
  
       while($data = $produitsDuSite->fetch())
{?>

   

    <div class="card1">   <?php if($data['photo']!=""):
                                      echo'<img src="member/photo/'.$data['photo'].'">';
                  endif; ?>
      
    <div class="card-content">
        <div class="card-titre">
        <h4><?php echo htmlspecialchars($data['title']); ?></h4>  <div class="prix"><?php echo htmlspecialchars($data['prix']); ?></div>
    </div>
        <p class="card-text"><?php echo htmlspecialchars($data['content']); ?></p>
     
    </div>
   
    </div>  
    <?php    }?> 
</section>
<section class="deuxiemeSavon">
       
       <div class="container2">
       <?php

  while($data = $savon->fetch())
{?>



<div class="card1">   <?php if($data['photo']!=""):
                                 echo'<img src="member/photo/'.$data['photo'].'">';
             endif; ?>
 
<div class="card-content">
   <div class="card-titre">
   <h4><?php echo htmlspecialchars($data['title']); ?></h4>  <div class="prix"><?php echo htmlspecialchars($data['prix']); ?></div>
</div>
   <p class="card-text"><?php echo htmlspecialchars($data['content']); ?></p>

</div>

</div>  
<?php    }?> 
</section>
<section class="deuxiemeShampoing">
       
       <div class="container2">
       <?php

  while($data = $shampoing->fetch())
{?>



<div class="card1">   <?php if($data['photo']!=""):
                                 echo'<img src="member/photo/'.$data['photo'].'">';
             endif; ?>
 
<div class="card-content">
   <div class="card-titre">
   <h4><?php echo htmlspecialchars($data['title']); ?></h4>  <div class="prix"><?php echo htmlspecialchars($data['prix']); ?></div>
</div>
   <p class="card-text"><?php echo htmlspecialchars($data['content']); ?></p>

</div>

</div>  
<?php    }?> 
</section>
<section class="deuxiemeParfum">
       
       <div class="container2">
       <?php

  while($data = $parfum->fetch())
{?>



<div class="card1">   <?php if($data['photo']!=""):
                                 echo'<img src="member/photo/'.$data['photo'].'">';
             endif; ?>
 
<div class="card-content">
   <div class="card-titre">
   <h4><?php echo htmlspecialchars($data['title']); ?></h4>  <div class="prix"><?php echo htmlspecialchars($data['prix']); ?></div>
</div>
   <p class="card-text"><?php echo htmlspecialchars($data['content']); ?></p>

</div>

</div>  
<?php    }?> 
</section>
 <video autoplay muted loop id="Video">  
    <source src="public/images/woman.mp4" type="video/mp4"  value="transparent">            </video>    
  
<footer id="contact">
    <div class="footerContainer">
    <?php 
         if(isset($userNbr)):
            echo '<div id="compteur"><font color="#303030">'. $userNbr.'</font></div>';endif;?> 
    <div class="footer1">
      <div class="footerContain">
        <h5>Nous</h5>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis autem repudiandae error sequi exercitationem. Hic explicabo ipsum corrupti! Porro perferendis excepturi laudantium voluptas culpa? Totam deleniti accusantium in excepturi fuga quaerat nisi.</p>
        <div class="reseau">
            <i class="fab fa-twitter"></i>
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-behance"></i>
        </div>      
    </div>
    </div>       
    
    <div class="footer2">
        <div class="footerContain">
        <h5>Adresse</h5>
        <div class="localisation">
            <i class="fas fa-map-marker-alt"></i>
            <span>Sainte Luce sur Loire,France</span>
        </div>
        <div class="phone">
            <i class="fas fa-mobile-alt"></i>
            <span>33 01 02 04 05 06</span>
        </div>
        <div class="mail">
            <i class="fas fa-envelope-square"></i>
            <span>@stephange.fr</span>
        </div>
    </div>
</div>
    <div class="footer3">
        <div class="footerContain">
            <div class="footer3Contain">
        <h5>Contacte moi</h5>
        <form action="" method="post">

        <label for="">Email</label>
        <input type="mail" name="mail">
        <label for="">Message</label>
        <textarea id="" cols="30" rows="5" name="message"></textarea>
        <input type="submit" value="envoie" name="submitFooter">
         </form>
    </div>
    <?php if(isset($msg)):
            echo '<div ><font color="red"> ⛔'. $msg.'</font></div>';endif;?>
</div>
</div>
</div>

</footer>
<?php if(isset($_POST['submitFooter'])) {   
    $mail=htmlspecialchars($_POST['mail']);
    $message=htmlspecialchars($_POST['message']);  
    if(!empty($_POST['mail']) AND !empty($_POST['message'])) {
      $req = $db->prepare('INSERT INTO categorie( mail,message) VALUES(:mail,:message)');
      $req->execute(array(        
        'mail' => $mail,
        'message' => $message       
        ));

    }

  } 
  ?>
 
<script src="public/js/app.js"></script>
<script src="public/js/glitch.js"></script>
<script src="public/js/choix.js"></script>

</body>
</html>
