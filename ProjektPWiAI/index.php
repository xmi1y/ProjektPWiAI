<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylemain.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <title>Schronisko</title>
</head>
<body>
    <nav>
        <ul>
            <li><img src="img/bone.png" alt="aaa"></li>
            <li><a class="active" href="index.php">Główna</a></li>
            <li><a href="#news">Aktualności</a></li>
            <li><a href="#contact">Kontakt</a></li>
            <li><button onclick="location.href='login.php'">Zaloguj się</button></li>
            <li><button onclick="location.href='rejestracja.php'">Zarejestruj</button></li>
        </ul>      
    </nav>  
    <main>

        <h1>Nasza oferta</h1>

        <section>
            <article>
                <h2>Opieka nad psami</h2>
                <img src="img/opieka.jpg" alt="opieka nad psem">
            </article>
            <article>
                <h2>Pakiet weterynaryjny</h2>
                <img src="img/weterynarz.jpg" alt="pies u weterynarza">
            </article>
            <article>
                <h2>Akcesoria i karma</h2>
                <img src="img/akcesoriaikarma.jpg" alt="akcesoria i karma dla psów">
            </article>
        </section>
        <section>
            <article>
                <h2>Alex</h2>
                <img src="img/owczarek.jpg" alt="Owczarek niemiecki długowłosy" id="Alex">
                <p>
                Alex ma 5 lat, jest u nas od 2 lat. Posiada wszystkie szczepienia oraz jest regularnie badany przez weterynarza.
                <br>Ten niezwykle inteligentny czworonóg, bardzo odważny, posłuszny i mocno przywiązany do właściciela, świetnie sprawdza się m.in. w charakterze stróża prawa, psa do zadań specjalnych, tropiciela czy psa przewodnika.
                Owczarek niemiecki doskonale radzi sobie niemal w każdej dziedzinie pracy i sportu. Jest jednak psem niezwykle energicznym, któremu niejednokrotnie trudno dotrzymać kroku. 
                </p>
            </article>
            <article>
                <h2>Henio</h2>
                <img src="img/bulldog.jpg" alt="Bulldog angielski" id="Henio">
                <p>
                Henio ma 3 lata, jest u nas od roku. Posiada wszystkie szczepienia oraz jest regularnie badany przez weterynarza.
                <br>Buldog angielski to pies nietypowy zarówno pod względem wyglądu, jak i spokojnego, wręcz leniwego usposobienia. Nie jest to typ sportowca, ale nie powinien też być cały czas trzymany w zamknięciu - jak każdy pies, potrzebuje codziennych spacerów i zabaw. Buldog jest mało towarzyski w stosunku do swoich współbraci, okazuje natomiast wielką przyjaźń swoim opiekunom. 
            </p>
            </article>
            <article>
                <h2>Sky</h2>
                <img src="img/DrentsePatrijshond.jpg" alt="Drentse patrijshond" id="Sky">
                <p>Sky ma 4 lata, jest u nas od urodzenia. Posiada wszystkie szczepienia oraz jest regularnie badana przez weterynarza.
                    <br>Drentse patrijshond to niezwykle rzada rasa pochodząca z Holandii należąca do grupy wyżłów. Ten średniej wielkości, mocno zbudowany i szybki pies był używany do polowań na bażanty, króliki i kuropatwy. Stąd też pochodzi jego nazwa: drentse patrijshond po holendersku to "pies na kuropatwy".
                </p>
            </article>           
        </section>
    </main>
    <footer>
        <p id="f">Miłosz Gunia i Wiktor Jerzykiewicz</p>
    </footer>
</body>
</html>