<?php
$server_root = "/nnhs-appdev/app/";

$login_page = $server_root;  // The password entry page
session_start();
$s = isset($_SESSION["logged_in"]);
$d = isset($_GET["cookies"]);
if($d){
    $d = $_GET["cookies"];
}
if($s !== true or $d === "false"){
    session_unset();
    session_destroy();
    header('Location: '.$login_page."?cookies=false");
} else{
    session_unset();
    session_destroy();
    header('Location: '.$login_page."#cta");
}
die();
?>
<html>
    Access denied!
</html>