<?php
function showNav($value){
    echo '<ul>
            <li '.active($value, "index").'><a href="">Schronisko</a></li>
            <li '.active($value, "schronisko").'><a href="">Sklep</a></li>
            <li '.active( $value, "sklep").'><a href="">Weternynarz</a></li>
            
        </ul>';
}
function active($obecnaStrona, $stronaWymagana){
    return $obecnaStrona === $stronaWymagana ? "class='active'" : '';
}
?>