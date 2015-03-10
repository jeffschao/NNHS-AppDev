<?php
// Put the folling code in every page except Login.php, Logout, and Fail.php:
// Code starts
$main_page = "/nnhs-appdev/app/main.php";
$fail_page = "/nnhs-appdev/app/fail.php";

session_start();
if(isset($_SESSION["logged_in"]) == false)
    if($_SESSION["logged_in"] == false){
        header('Location: '.$fail_page);
    }
else{
    header('Location: '.$fail_page);
}
// Code ends
?>

<html>
    This is the main site!
    
</html>
<?php

/*
 * 
 * To use the username in HTML code, use the following code:
 *              <?php echo $_SESSION['username'] ?>
 * 
 * 
 *  Just paste the code where the username should be.
 * 
 */

// To redirect, use:
//      echo '<script type = text/javascript>window.location.href = $site_to_go_to  ."?username='.$_GET['username'].'";</script>';

function alert($msg) 
    {
        echo '<script type="text/javascript">alert("' . $msg . '"); </script>';
    }
$username = $_SESSION["username"];
?>