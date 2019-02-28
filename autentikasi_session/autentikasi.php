<?php
    function do_login($username, $password){
        //Cek kondisi jika username dan password salah
        if($username !="admin" || $password != "admin"){
            header("location:indexAutentikasi.php");
        }
        //Cek kondisi jika username dan password benar
        if($username == "admin" && $_POST["password"] == "admin"){
            $_SESSION["user"] = $username;
            $_SESSION["pass"] = $password;

            header("location:beranda.php");

        }
    }

    function check_login(){
        //cEK KONDISI LOGIN SESSION
        if(!isset($_SESSION["user"])){
            header("location:indexAutentikasi.php");
        }
    }