<?php

    require './config/cfTrabalhos.php';

    $cf = new cfTrabalhos();

    echo($cf->dateToBr("2012-10-3"));
    echo "<br />";
    echo($cf->dateToUs("11/03/1990")); 
    
    echo"<br />";
    echo"<br />";
    
    echo($cf->dateTimeBR("2012-10-3 10:30:44"));
    echo"<br />";
    echo($cf->dateTimeUS("10/03/2013 3:12:34"));

?>