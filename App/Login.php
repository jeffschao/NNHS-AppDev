<?php
$username = $_POST["username"];
$password = $_POST["password"];
$success = "/nnhs-appdev/app/main.php";
$fail = "/nnhs-appdev/app/fail.php";

session_start();

$_SESSION["username"] = $username;
//$_SESSION["password"] = $password; // This line may be used insecurely, so it is recommended keep this line commented!

if($username == "Hello" and $password == "World"){
    $_SESSION["logged_in"] = true;
    header('Location: '.$success);
} else{
    $_SESSION["logged_in"] = false;
    header('Location: '.$fail);
}
?>