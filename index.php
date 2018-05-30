<?php
session_start();
$_SESSION["nom"]="owsinski<br>";
$_SESSION["prenom"]="theo<br>";
$_SESSION["age"]="23 ans";

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>php cookie</title>
</head>
<body>
<?php
$user_agent=$_SERVER['HTTP_USER_AGENT'];
$adresse_ip = $_SERVER['REMOTE_ADDR'];
$nom_serveur=$_SERVER['SERVER_NAME'];
?>
<p>User agent : <?=$user_agent;?></p>
<p>adresse IP : <?=$adresse_ip;?></p>
<p>nom du serveur : <?=$nom_serveur;?> </p>
<a href="index2.php">accès page 2</a>
<form action="index2.php" method="post">
    <input type="text" name="login" placeholder="login" value="">
    <input type="text" name="motDePasse" placeholder="mot de passe" value="">
    <input type="submit" value="valider">
</form>

</body>
</html>