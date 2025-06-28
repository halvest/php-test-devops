<!-- Native PHP Login -->

<?php
session_start();

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Cek kredensial sederhana
    if ($username === 'admin' && $password === '123456') {
        $_SESSION['user'] = $username;
    } else {
        $error = "Username atau password salah.";
    }
}

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Sederhana</title>
    <style>
        body {
            background: #f4f4f4;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .box {
            background: white;
            padding: 20px;
            border-radius: 8px;
            width: 300px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .box h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        .box input, .box button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
        }
        .error {
            color: red;
            font-size: 0.9em;
            margin-top: 10px;
        }
        .welcome {
            text-align: center;
        }
    </style>
</head>
<body>
<div class="box">
    <?php if (isset($_SESSION['user'])): ?>
        <div class="welcome">
            <h2>Selamat Datang</h2>
            <p>Halo, <?= htmlspecialchars($_SESSION['user']) ?>!</p>
            <a href="?logout=true"><button>Logout</button></a>
        </div>
    <?php else: ?>
        <h2>Login</h2>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Masuk</button>
            <?php if ($error): ?>
                <p class="error"><?= $error ?></p>
            <?php endif; ?>
        </form>
    <?php endif; ?>
</div>
</body>
</html>
