<?php
function showNav($value){
    echo '<ul>
            <li '.active($value, "index").'><a href=""></a></li>
            <li '.active($value, "schronisko").'><a href=""></a></li>
            <li '.active( $value, "sklep").'><a href=""></a></li>
            <li '.active($value, "weterynarz").'><a href=""></a></li>
        </ul>';
}
function active($obecnaStrona, $stronaWymagana){
    return $obecnaStrona === $stronaWymagana ? "class='active'" : '';
}
?>