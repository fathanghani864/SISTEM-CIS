<?php
include "../koneksi.php";
session_start();

$error = "";

if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = $_POST['password']; // password asli dari input user

    if (empty($username) || empty($password)) {
        $error = "Username dan password wajib diisi!";
    } else {
        // Cari user berdasarkan username
        $stmt = $koneksi->prepare("SELECT * FROM admin WHERE username=?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $data = $result->fetch_assoc();

            // Verifikasi password yang diketik dengan hash yang ada di DB
            if (password_verify($password, $data['password'])) {
                // Password benar, set session dan redirect
                $_SESSION['login'] = true;
                $_SESSION['username'] = $data['username'];
                header("Location: dashboard.php");
                exit();
            } else {
                $error = "Password salah!";
            }
        } else {
            $error = "Username tidak ditemukan!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login Page - Warna Orange</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: #ff8c00;
            /* orange */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 400px;
            text-align: center;
            display: flex;
            flex-direction: column;
        }

        h2 {
            color: #ff8c00;
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        input[type="submit"] {
            background-color: #ff8c00;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 15px;
        }

        input[type="submit"]:hover {
            background-color: #e67600;
        }

        .error-message {
            color: red;
            margin-bottom: 15px;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <form action="" method="POST" autocomplete="off">
            <h2>Login</h2>

            <?php if ($error): ?>
                <div class="error-message"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>

            <input type="text" name="username" placeholder="Username"
                value="<?= isset($username) ? htmlspecialchars($username) : '' ?>" required>

            <input type="password" name="password" placeholder="Password" required>

            <input type="submit" name="login" value="Login">
        </form>
    </div>

</body>

</html>