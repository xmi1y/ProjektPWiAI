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
    <link rel="stylesheet" href="stylerej.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <title>Rejestracja</title>
</head>
<body>

    <nav>
        <ul>
            <li><img src="img/bone.png" alt="aaa"></li>
            <li><a class="active" href="index.php">Główna</a></li>
            <li><a href="#news">Aktualności</a></li>
            <li><a href="#contact">Kontakt</a></li>
            <li><button onclick="location.href='login.php'">Zaloguj się</button></li>
        </ul>


    </nav>  
    <main>
        <form action="rejestracja.php" method="post">
            <label for="login">Login:</label><br>
            <input type="text" id="login" name="login" placeholder="Wpisz swój login"><br>
            <label for="text">Hasło:</label><br>
            <input type="pass" id="pass" name="pass" placeholder="Wpisz swoje hasło">
            <label for="pass2">Powtórz Hasło:</label><br>
            <input type="text" id="pass2" name="pass2" placeholder="Wpisz swoje hasło">
            <button type="submit">Zarejestrój się</button>
            <?php
        $conn = mysqli_connect('localhost', 'root', '','projekt');
        if (!$conn) {
            die("Błąd połączenia z bazą danych: " . mysqli_connect_error());
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $login = trim($_POST['login']);
            $password = trim($_POST['pass']);
            $password2 = trim($_POST['pass2']);
            if (empty($login) || empty($password) || empty($password2)) {
                echo "<p style='color: red;'>Wszystkie pola są wymagane!</p>";
            } 
            elseif ($password !== $password2) {
                echo "<p style='color: red;'>Hasła nie są identyczne!</p>";
            } 
            else {
                $login = mysqli_real_escape_string($conn, $login);
                $password = mysqli_real_escape_string($conn, $password);
                $sql = "SELECT id_user FROM Uzytkownicy WHERE login = '$login'";
                $result = mysqli_query($conn, $sql);
        
                if (mysqli_num_rows($result) > 0) {
                    echo "<p style='color: red;'>Ten login jest już zajęty!</p>";
                } else {
                    $sql = "INSERT INTO Uzytkownicy (login, pass) VALUES ('$login', '$password')";
                    if (mysqli_query($conn, $sql)) {
                        $_SESSION['user'] = $login;
                        setcookie('user', $login, time() + (300), "/"); // Ciasteczko na 30 dni
                        header("Location: index.php");
                        exit();
                    } else {
                        echo "<p style='color: red;'>Błąd rejestracji: " . mysqli_error($conn) . "</p>";
                    }
                }
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