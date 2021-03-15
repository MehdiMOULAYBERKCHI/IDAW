<?php

$listedestyles = array("fichedestyle1" ,"fichedestyle2" ,"fichedestylepardefault" );
$styleainclure = "fichedestylepardefault";




if (!empty($_GET['css'])){
    setcookie("fichedestyleutilisateur" , $_GET['css'], time()+3600);
    $styleainclure = $_GET['css'];
}




if(isset($_COOKIE['fichedestyleutilisateur'])){
    if (in_array($_COOKIE['fichedestyleutilisateur'] , $listedestyles , true )) 
    {
        $styleainclure = $_COOKIE['fichedestyleutilisateur'];
       
    }

}

?>

<!doctype html>
<html>
<head> 

    <?php 
    echo "<link rel =\"stylesheet\" href =\"".$styleainclure.".css\" type = \"text/css\"
    media = \"screen\" title = \"default\" charset = \"utf-8\">";

?>


</head>

<body>
<form id="style_form" action="index.php" method="GET">
    <select name="css">
        <option value="fichedestyle1">style1</option>
        <option value="fichedestyle2">style2</option>
    </select>
    <input type="submit" value="Appliquer" />
</form>


</body>
</html>