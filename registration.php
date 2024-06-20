<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'user_auth');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['register'])) {
        $username = trim($_POST['reg_username']);
        $password = $_POST['reg_password'];

        if (empty($username) || empty($password)) {
            echo "Заповніть усі поля.";
        } else {
            $passwordHash = password_hash($password, PASSWORD_BCRYPT);

            // Перевірка наявності користувача з таким логіном
            $sql = "SELECT id FROM users WHERE username = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('s', $username);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
                echo "Користувач з таким логіном вже існує. Спробуйте інший логін.";
            } else {
                // Додавання нового користувача
                $stmt->close();
                $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param('ss', $username, $passwordHash);

                if ($stmt->execute()) {
                    $_SESSION['username'] = $username;
                    header('Location: index.php');
                    exit;
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            $stmt->close();
        }
    } elseif (isset($_POST['login'])) {
        $username = trim($_POST['login_username']);
        $password = $_POST['login_password'];

        if (empty($username) || empty($password)) {
            echo "Заповніть усі поля.";
        } else {
            $sql = "SELECT id, password FROM users WHERE username = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('s', $username);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($id, $hashedPassword);

            if ($stmt->num_rows > 0) {
                $stmt->fetch();
                if (password_verify($password, $hashedPassword)) {
                    $_SESSION['username'] = $username;
                    header('Location: index.php');
                    exit;
                } else {
                    echo "Невірний логін або пароль.";
                }
            } else {
                echo "Невірний логін або пароль.";
            }
            $stmt->close();
        }
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Реєстрація та Авторизація</title>
    <style>
        .jumbotron {
            background-image: url("hero_bg.jpg");
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card {
            background: rgba(255, 255, 255, 0.7);
            padding: 20px;
            border-radius: .55rem;
            box-shadow: 0 1px 2px 0 rgb(0 0 0 / 10%);
            width: 400px;
            margin: 10px;
        }
        .header h2 {
            text-align: center;
        }
        .body label {
            display: block;
            margin: 10px 0 5px;
        }
        .body input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .body button {
            width: 100%;
            padding: 10px;
            background: blue;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .body button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="jumbotron">
        <form action="registration.php" method="POST" class="card">
            <div class="header">
                <h2>Реєстрація</h2>
            </div>
            <div class="body">
                <label for="reg_username">Логін:</label>
                <input type="text" id="reg_username" name="reg_username" required>
                <label for="reg_password">Пароль:</label>
                <input type="password" id="reg_password" name="reg_password" required>
                <button type="submit" name="register">Зареєструватись</button>
            </div>
        </form>

        <form action="registration.php" method="POST" class="card">
            <div class="header">
                <h2>Авторизація</h2>
            </div>
            <div class="body">
                <label for="login_username">Логін:</label>
                <input type="text" id="login_username" name="login_username" required>
                <label for="login_password">Пароль:</label>
                <input type="password" id="login_password" name="login_password" required>
                <button type="submit" name="login">Увійти</button>
            </div>
        </form>
    </div>
</body>
</html>
