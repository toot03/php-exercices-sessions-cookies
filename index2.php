<?php
session_start();
echo $_SESSION["nom"];
echo $_SESSION["prenom"];
echo $_SESSION["age"];
$finCookie=time()+60*60*24;
$login=htmlentities($_POST["login"]);
$motdepasse=htmlentities($_POST["motDePasse"]);
setcookie("login",$login,$finCookie);
setcookie("mot_de_passe",$motdepasse,$finCookie);

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index 2</title>
</head>
<body>
<form action="index3.php">
    <input type="submit" value="Cookie Page">
</form>
</body>
</html>