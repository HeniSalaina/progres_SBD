<?php
    require "koneksi.php";
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #FF66B2;
            font-family:Arial , Helvetica; /* Change the font family */
        }

        .login-box {
            width: 300px;
            background: linear-gradient(#FF66B2, #66A3FF, #B266FF); /* Pink, Blue, Purple */
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 255, 0.7);
            text-align: center;
        }

        .login-box h2 {
            margin-bottom: 30px;
            color: white;
        }

        .user-box {
            position: relative;
            margin-bottom: 20px;
        }

        .user-box input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #000; /* Change the font color to black */
            margin-bottom: 10px;
            border: none;
            border-bottom: 2px solid #adadad;
            outline: none;
            background: transparent;
        }

        .user-box label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #adadad;
            pointer-events: none;
            transition: 0.5s;
        }

        .user-box input:focus ~ label,
        .user-box input:valid ~ label {
            top: -20px;
            font-size: 14px;
            color: #4CAF50;
        }

       
        .gradient-button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 4px;
            background: linear-gradient(45deg, #4CAF50, #66FF66); /* Green gradient */
            color: #fff;
            transition: 0.3s;
        }

        .gradient-button:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Login </h2>
        <form action="#" method="post">
            <div class="user-box">
                <input type="text" name="username" required>
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <button type="submit" name="loginbtn" class="gradient-button">Login</button>
        </form>
    </div>

    <div>
<?php
        if(isset($_POST['loginbtn'])){
            
            $username = htmlspecialchars($_POST['username']);
            $password = htmlspecialchars($_POST['password']);

            $query = mysqli_query($con, "SELECT * FROM users WHERE username='$username'");
            $countdata = mysqli_num_rows($query);
            $data = mysqli_fetch_array($query);

            if($countdata > 0){
                
                if (password_verify($password, $data['password'])) {
                    $_SESSION['username'] = $data['username'];
                    $_SESSION['login'] = true;
                    header('location: adminpanel');
                    exit(); // Add exit() to stop further execution
                } else {
                    ?>
                    <div class="alert alert-warning" role="alert">
                        Password salah!
                    </div>
                    <?php
                }
            } else {
                ?>
                <div class="alert alert-warning" role="alert">
                    Akun tidak tersedia!
                </div>
                <?php
            }
        }
        ?>
    </div>
</body>
</html>
