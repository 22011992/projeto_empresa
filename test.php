<?php

    require './config/cfTrabalhos.php';

    $cf = new cfTrabalhos();

    echo($cf->dateToBr("2012-10-3"));
    echo "<br />";
    echo($cf->dateToUs("11/03/1990")); 

?>