<?php
// Put the folling PHP code in every page except Login.php, Logout.php, Register.php, and Fail.php:
// Code starts --------------------------------------------------------------------------------
$server_root = "/nnhs-appdev/app/";

$main_page = $server_root."main.php"; // Change this to the page to go to once logged in
$fail_page = $server_root."fail.php"; // Change this to the page to go to when an incorrect password is entered

session_start();
$username = $_SESSION["username"];

if(isset($_SESSION["logged_in"]) !== true){
    if($_SESSION["logged_in"] !== true){
        header('Location: '.$fail_page);
        die();
    }
} else{
    header('Location: '.$fail_page."?cookies=false");
    die();
}
// End of code ---------------------------------------------------------------------------------
?>

<html>
    Welcome, <?php echo $_SESSION["name"]; ?>! <!-- Username and privilege level: --> Your username is: '<?php echo $_SESSION['username'] ?>'. Your privilege level is: <?php echo $_SESSION['priv'] ?> Are you root: <?php if($_SESSION["root"] === true){ echo "true"; } else { echo "false"; } ?>
    
</html>
<?php
function alert($msg)
    {
        echo '<script type="text/javascript">alert("' . $msg . '"); </script>';
    }

/*
 * 
 * To use the username in HTML code, use the following code:
 *              <?php echo $_SESSION['username'] ?>
 * 
 * 
 *  Just paste the code where the username should be.
 * 
 */
/* To redirect, use the following PHP code (Only works before any data is returned to the browser):
 *      header("Location: page_to_load");
 *      die();
 * 
 * Where page_to_load is the page to redirect to.
 */
?>