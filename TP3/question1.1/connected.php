
<?php
    if(isset($_GET["login"])){
        echo "Le login de l'utilisateur est :".$_GET["login"];
    }
    echo"<br>";
    if(isset($_GET["password"])){
        echo "Le Mot de passe de l'utilisateur est :".$_GET["password"];
    }
?>
