<!doctype html>
<html>
<head>
  <title>Mon Site Professionnel</title>
  <link rel ="stylesheet" href = "style.css" type = "text/css"
          media = "screen" title = "default" charset = "utf-8">
</head>


<?php
    require_once("template-header.php");
    require_once('template-menuQuestion5.php');
    renderMenuToHTML('indexQuestion5');

    $currentPageId = 'accueil';
    if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
}

    renderMenuToHTML($currentPageId);
?>
<section class="corps">
    <?php
        $pageToInclude = $currentPageId . ".php";
        if(is_readable($pageToInclude))
            require_once($pageToInclude);
        else
            require_once("error.php");
    ?>
</section>

<body>
  <body style="background-color: rgb(166, 29, 201);">
  <h1>Benvenuto !</h1>
  <img src = "http://youngpreneurpodcast.fr/wp-content/uploads/2016/08/Construire-lentonnoir-de-conversion-parfait-en-6-e%CC%81tapes-hello-meme.jpg" height = "100px" width = "200px">
  <p>Ci dessous le menu du site </p> 
  <cite>Apres vous ! </cite>
</body>

</html>