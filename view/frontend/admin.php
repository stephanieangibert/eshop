<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/style2.css">
</head>
<body>
    <div class="container">
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
        <br>
        <br>
        <?php if(isset($msg)):
            echo '<div id="avertiPHP" ><font color="red"> ⛔'. $msg.'</font></div>';endif;?>
    </div>
</body>
</html>