<?php
    session_start();
        if(isset($_SESSION["user"])){
            header("location:beranda.php");
        }
        include ("autentikasi.php");
?>

<html>
        <head>
        <title>Login</title>
        <link rel="stylesheet" href="cssNya.css">
        </head>        
        <body>
            <?php
                if(isset($_GET["error"])){
                    if($_GET["error"] == "wrong"){
                    echo "<h3> Username dan Password SALAH! </h3>";
                    }
                }
                if(isset($_GET["notif"])){
                    if($_GET["notif"] == "logout"){
                    echo "<h3> Berhasil Login </h3>";
                    }
                }
                if(isset($_POST["submit"])){
                    echo do_login($_POST["username"], $_POST["password"]);
                }
            ?>
            <div class="container">
                <section class="login-box">
                <h2>Login</h2>
            <form action = "<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                Username: <input type="text" name="username" id="username" placeholder="Username"><br>
                Password: <input type="password" name="password" id="password" placeholder="Password"><br>
                <input type="submit" name="submit" value="Login">
            </form>
            </div>

        </body>
</html>
    