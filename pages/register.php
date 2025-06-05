<?php

include "../koneksi.php";

session_start();

$error = "";


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Tangkap input form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];

    // Cek ke database
    $query = "INSERT INTO tbl_user ( username , password , nama) VALUES ('$username','$password','$nama')";

    //eksekusi
    $result = mysqli_query($koneksi, $query);


}






?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            width: 500px;
            height: 550px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        h2 {
            color: #ff8c00;
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="password"],
        input[type="nama"] {
            width: 400px;
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
            width: 100%;
            font-weight: bold;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #e67600;
        }

        .footer {
            margin-top: 15px;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>

<body>

    <div class="login-container">

        <form action="" method="POST">
            <h2>register</h2>
            <?php $Username ?> <input type="text" name="username" placeholder="username"><br>
            <?php $Password ?> <input type="password" name="password" placeholder="password"><br>
            <?php $nama ?> <input type="text" name="nama" placeholder="nama"><br>
            <input type="submit" value="Login">
        </form>

    </div>

</body>

</html>