<?php
$server_root = "/nnhs-appdev/app/";

function alert($msg)
    {
        echo '<script type="text/javascript">alert("' . $msg . '"); </script>';
    }
    
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if($_POST["key"] === "nnhs_tutoring"){ // Change the security key to something more secure!
        $user_name = "Appdev";
        $sql_password = "Appdev";
        $database = "nnhs-appdev";
        $server = "127.0.0.1";
        $exists = false;

        $db_handle = mysql_connect($server, $user_name, $sql_password);
        $db_found = mysql_select_db($database);
        if($db_found){
            $SQL = "SELECT * FROM login";
            $result = mysql_query($SQL);
            $username = str_replace("'", "", $_POST["username"]);
            while ( $db_field = mysql_fetch_assoc($result) ) {
                if($db_field["Username"] == $username){
                    $exists = true;
                }
            }
            if($exists == false){
                if(isset($_POST["Root"])){ $root = "1"; } else{ $root = "0"; }
                $fname = str_replace("'", "", $_POST["fname"]);
                $id = str_replace("'", "", $_POST["id"]);
                $lname = str_replace("'", "", $_POST["lname"]);
                $password = $_POST["password"];
                $salt = str_replace("'", "", mcrypt_create_iv(128));
                $priv = str_replace("'", "", $_POST["privalage"]);
                $crpt = str_replace("'", "", crypt($password, $salt));
                $SQL = "INSERT INTO login (fname, lname, ID, Username, Password, privalage, salt, root) VALUES ('".$fname."', '".$lname."', '".$id."', '".$username."', '".$crpt."', '".$priv."', '".$salt."', ".$root.");";
                $result = mysql_query($SQL);
                mysql_close($db_handle);
                header("Location: ".$server_root."register.php");
                die();
            } else{
                header("Location: ".$server_root."register.php?failed=true");
                die();
            }
        } else{
            echo("Failed to connect to the database!");
        }
    } else{
        die("Incorrect security key!");
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "GET"){
    if(isset($_GET["failed"])){
        if($_GET["failed"] == true){
            echo("That account already exists!");
        }
    }
}
?>

<html>
<head>
	<title>Register</title>
</head>
<body>
<form action="<?php echo $server_root ?>register.php" method="post" name="register">
<p>First name:&nbsp;<input maxlength="64" name="fname" type="text" />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Last name:&nbsp;<input maxlength="128" name="lname" type="text" /></p>

<p>&nbsp;</p>

<p>&nbsp; &nbsp; &nbsp; &nbsp; Privilege level:</p>

<p><input maxlength="1" name="privalage" type="text" value="2" /></p>

<p>&nbsp; &nbsp; 0 = Admin</p>

<p>&nbsp; &nbsp; 1 = Teacher</p>

<p>&nbsp; &nbsp; 2 = Student</p>

<p>Username: &nbsp; &nbsp;<input maxlength="32" name="username" type="text" /></p>

<p>Password: &nbsp; &nbsp;<input maxlength="128" name="password" type="password" /></p>

<p>Root? &nbsp; &nbsp;<input type="checkbox" name="Root" value="Yes" /></p>

<p>&nbsp;</p>

<p>ID: &nbsp; &nbsp;<input name="id" type="text" /></p>

<p>&nbsp; &nbsp; Security key:&nbsp;<input maxlength="256" name="key" type="password" /></p>

<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input name="Register" type="submit" value="Register!" /></p>
</form>

<p>&nbsp;</p>
</body>
</html>