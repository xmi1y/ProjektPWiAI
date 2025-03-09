<?php
session_start();
if (isset($_COOKIE['user'])) {
    $_SESSION['user'] = $_COOKIE['user'];
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylelogin.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <title>Logowanie</title>
</head>
<body>

    <nav>
        <ul>
            <li><img src="img/bone.png" alt="aaa"></li>
            <li><a class="active" href="index.php">Główna</a></li>
            <li><a href="#news">Aktualności</a></li>
            <li><a href="#contact">Kontakt</a></li>
            <li><button onclick="location.href='rejestracja.php'">Zarejestruj</button></li>
        </ul>

    </nav>  
    <main>
        <form action="login.php" method="post">
            <label for="login">Login:</label><br>
            <input type="text" id="login" name="login" placeholder="Wpisz swój login"><br>
            <label for="pass">Hasło:</label><br>
            <input type="text" id="pass" name="pass" placeholder="Wpisz swoje hasło">
            <button type="submit">Zaloguj się</button>
            <?php 
            $conn = mysqli_connect('localhost', 'root', '','projekt');
            if (!$conn) {
                die("Błąd połączenia z bazą danych: " . mysqli_connect_error());
            }
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $login = trim($_POST['login']);
                $password = trim($_POST['pass']);
                $login = mysqli_real_escape_string($conn, $login);
                $password = mysqli_real_escape_string($conn, $password);
                $sql = "SELECT pass FROM uzytkownicy WHERE login = '$login'";
                $result = mysqli_query($conn, $sql);
            
                if ($result && mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $stored_password = $row['pass'];
            
                    if ($password === $stored_password) {
                        $_SESSION['user'] = $login;
                        
                        if (isset($_POST['remember'])) {
                            $user = "user";
                            setcookie($user, $login, time() + (300), "/");
                        }
            
                        header("Location: index.php");
                        exit();
                    } else {
                        echo "Błędne hasło!";
                    }
                } else {
                    echo "Użytkownik nie istnieje!";
                }
            }
            
            mysqli_close($conn);
            ?>
        </form>
    </main>
    <footer>
        <p id="f">Miłosz Gunia i Wiktor Jerzykiewicz</p>
    </footer>
</body>
</html>