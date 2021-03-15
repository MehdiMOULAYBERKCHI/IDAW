<?php
    function renderMenuToHTML($currentPageId) {
// un tableau qui d\'efinit la structure du site
    $mymenu = array(
// idPage titre
        'indexQuestion5' => array( 'Accueil' ),
        'cv' => array( 'Cv' ),
        'projets' => array('Mes Projets'),
        'infos-techniques' => array('infos-techniques')


);

    echo "<div class = \"conteneur\">";

    foreach($mymenu as $pageId => $pageParameters) {
        echo "<div class = \"elmt\"> 
        <nav class=\"menu\">
        <ul>
          <li> 
            <a href=\"$pageId.php\"> $pageParameters[0]  </a>  </li></ul>
        </nav>

        </div>";

           
}

    echo "</div>";




}
?>


