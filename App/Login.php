<?php
$username = $_POST["username"];
$password = $_POST["password"];

$server_root = "/nnhs-appdev/app/";

$success = $server_root."main.php"; // Change this to the page to go to once logged in
$fail = $server_root."fail.php"; // Change this to the page to go to when an incorrect password is entered
$baddb = $server_root."#cta"; // The password entry page

session_start();


//$_SESSION["password"] = $password; // This line may be used insecurely, so it is recommended keep this line commented!

$user_name = "Appdev";
$sql_password = "Appdev";
$database = "nnhs-appdev";
$server = "127.0.0.1";

$db_handle = mysql_connect($server, $user_name, $sql_password);
$db_found = mysql_select_db($database);
if($db_found){
    $SQL = "SELECT * FROM login";
    $result = mysql_query($SQL);

    while ( $db_field = mysql_fetch_assoc($result) ) {
        if(($db_field["Username"] == $username) and ($db_field["Password"] == /*crypt(*/$password/*, $db_field["salt"])*/)){
            $_SESSION["username"] = $username;
            $_SESSION["logged_in"] = true;
            $_SESSION["priv"] = $db_field["privalage"];
            $_SESSION["id"] = $db_field["ID"];
            $_SESSION["fname"] = $db_field["fname"];
            $_SESSION["lname"] = $db_field["lname"];
            $_SESSION["name"] = $db_field["fname"]." ".$db_field["lname"];
            if($db_field["root"] == 1){
                $_SESSION["root"] = true;
            } else{
                $_SESSION["root"] = false;
            }
            mysql_close( $db_handle );
            header('Location: '.$success);
            die();
        }

    }
    mysql_close( $db_handle );
    session_unset();
    session_destroy();
    session_start();
    $_SESSION["logged_in"] = false;
    header('Location: '.$fail);
    die();
} else{
    mysql_close( $db_handle );
    session_unset();
    session_destroy();
    session_start();
    $_SESSION["logged_in"] = false;
    header("Location: ".$baddb);
    die();
}
?>