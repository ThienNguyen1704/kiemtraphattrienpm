<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('images/goku.jpg');
            background-size: cover;
            background-position: center;
        }
        .container {
            max-width: 400px;
            margin: 100px auto;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }
        h2 {
            margin-top: 0;
            color: #fff;
            background-color: #1818e2;
            padding: 10px 0;
            border-radius: 5px 5px 0 0;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #1818e2;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #44674d;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>ĐĂNG NHẬP</h2>
        <form method="POST" action="login_p.php">
            <label for="username">Tài Khoản:</label><br>
            <input type="text" id="username" name="username" required><br><br>
            
            <label for="password">Mật khẩu:</label><br>
            <input type="password" id="password" name="password" required><br><br>
            
            <input type="submit" value="Đăng nhập">
        </form>
    </div>
</body>
</html>
