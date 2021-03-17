<?php

$user = "root";
$pass = "root";

try 
{
    $db = new PDO ('mysql:host=localhost;dbname=mabase', $user , $pass);
    $data = $db->query('SELECT * FROM id');
    print_r($data);
    foreach ($data as $row)
    {

        print_r($row);

    }
    $db = null;
 
} catch (PDOExecption $e) 
{
    print "Erreur ! :" . $e->getmessage() . "</br>";
    die();
}

?>