<!doctype html>
<html>
    <head>
        <title> données</title>
    </head>

<body>

<?php

if(isset($_POST['login']))
{
    echo "Le login de l'utilisateur est :".$_POST['login'];
}
echo"<br>";
if(isset($_POST["password"]))
{
    echo "Le Mot de passe de l'utilisateur est :".$_POST['password'];
}

?>


</body>
</html>