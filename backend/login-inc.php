<?php   
require '../scripts/reCaptcha.php';
// require 'header.php';

session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $reCaptcha = new reCaptcha();
        $verificationResult = $reCaptcha->verify();

        if ($verificationResult['success']) {

            $auID = $_POST["auID"];
            $email = $_POST["email"];
            $pwd = $_POST["pwd"];

            include "DBhelper.php";
            include "login-classes.php";
            include "login-cont-classes.php";

            $login = new loginCont($auID, $email, $pwd);
        
            $login->loginUser();

            header("location: ../webpages/dashboard.php");
            exit();
        }
    }

