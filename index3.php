<?php
$finCookie=time()+60*60*24;
$cookieLogin= $_COOKIE['login'];
$cookieMotDePasse=$_COOKIE['mot_de_passe'];
$nom=htmlentities($_POST["nom"]);
$valeur=htmlentities($_POST["valeur"]);
setcookie($nom,$valeur,$finCookie);
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index3</title>
</head>
<body>
<p><?=$cookieLogin; ?></p>
<p><?=$cookieMotDePasse;?></p>
<form action=""method="post">
    <input type="text" name="nom" placeholder="nom">
    <input type="text" name="valeur" placeholder="valeur">
    <input type="submit" value="modifier">
</form>
</body>
</html>