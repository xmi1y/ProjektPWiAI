<?php
function showNav($value){
    echo '<ul class="nav">
            <li '.active($value, "schronisko").'><a href="">Schronisko</a></li>
            <li '.active( $value, "sklep").'><a href="">Sklep</a></li>
            <li '.active($value, "weterynarz").'><a href="">Weterynarz</a></li>
        </ul>';
}
function active($obecnaStrona, $stronaWymagana){
    return $obecnaStrona === $stronaWymagana ? "class='active'" : '';
}

function showFooter(){

}
function showHeader(){

}
function headINFO($title){
    echo '
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <title>'.$title.'</title>
    ';
}
?>