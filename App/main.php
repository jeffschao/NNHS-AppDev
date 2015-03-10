<?php
session_start();
if($_SESSION["logged_in"] == false){
    header('Location: '.$_SESSION["fail_page"]);
}
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