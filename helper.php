<?php
function showNav($value){
    echo '<ul class="nav">
            <li '.active($value, "schronisko").'><a href="schronisko.php">Schronisko</a></li>
            <li '.active( $value, "sklep").'><a href="sklep.php">Sklep</a></li>
            <li '.active($value, "weterynarz").'><a href="weterynarz.php">Weterynarz</a></li>
        </ul>';
}
function active($obecnaStrona, $stronaWymagana){
    return $obecnaStrona === $stronaWymagana ? "class='active'" : '';
}

function showFooter(){

}
function showHeader(){
    echo '
    <div id="imgCont">
        <a href="index.php"><img src="img/bone.png" id="logo"></a>
        </div>

        <div id="sliderCont">
            <input type="range" min="1" max="3" id="sliderTheme" value="1">
        </div>
        <div class="cosmetic"></div>

        <div class="headerbtns"><button id="login" >Zaloguj się</button>
        <button id="signin" >Zarejestruj się</button></div>
        <div class="smallScreenbtns">
            <img src="img/down.png" id="arrow">
            <div class="ssbContent">
                <button id="loginMini" >Zaloguj się</button>
                <button id="signinMini" >Zarejestruj się</button>
            </div>
        </div>
    ';

}
function headINFO($title){
    echo '
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <title>'.$title.'</title>
    ';
}
?>