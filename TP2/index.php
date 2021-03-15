<doctype! html>
<html>
    <head>
        <meta charset = "utf-8"/>
        <title> "Date + Heure dynamique en PHP"</title>
</head>
<body>
   
    <?php   

            setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
            echo (strftime("On est le %A %d %B"));
            echo"<br>";
            echo date('\I\l \e\s\t h:i:s A');
            echo"<br>";
            echo("Ci dessous le tableau représentant le programme de la semaine: ");
            echo"<br>";
            ;  

    ?>
    <table>
        <tr>
            <td> Lundi </td>
            <td> Mardi </td>
            <td> Mercredi </td>
            <td> Jeudi </td>
            <td> Vendredi </td>
            <td> Samedi </td>
            <td> Dimanche </td>
        </tr>
        <tr>   
            <td> 1 </td>
            <td> 2 </td>
            <td> 3 </td>
            <td> 4 </td>
            <td> 5 </td>
            <td> 6 </td>
            <td> 7 </td>
        </tr>
        <tr>
            <td> 8 </td>
            <td> 9 </td>
            <td> 10</td>
            <td> 11 </td>
            <td> 12 </td>
            <td> 13 </td>
            <td> 14 </td>
        </tr>
    </table>
</body>

</html>