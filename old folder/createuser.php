<?php
    session_start();
    if(!isset($_SESSION["user"])){
     header("Location: login.php ");
   	    exit();
    }
?>
<?php
$messg = "";

if (isset($_POST["accesslevel"]) && isset($_POST["username"]) && isset($_POST["password"])) {

    $accesslevel = $_POST["accesslevel"]; // filter everything but numbers and letters
    $username =$_POST["username"]; // filter everything but numbers and letters
    $password =$_POST["password"]; // filter everything but numbers and letters
    // Connect to the MySQL database  
    include "includes/connect_db.php"; 
     $sql1 = mysql_query("SELECT user_id FROM inventory_user WHERE user_name = '$username' AND user_password = '$password' LIMIT 1 ")or die(mysql_error());
     $count_id = mysql_num_rows($sql1);
     if($count_id > 0){
     	
          $messg .='<div class="alert alert-success"> <div class="panel-body">User Name Exist</div> </div>' ;
     }else{
    
        $sql = mysql_query("INSERT INTO inventory_user (user_acess_level, user_name, user_password, date_created, last_login_date) VALUES ('$accesslevel','$username','$password', now(), now())")or die(mysql_error()); // query the person

        $messg .='<div class="alert alert-success"> <div class="panel-body">User Created</div> </div>' ;
     }
}


?>
<!doctype html>
<html>
<head></head>
<body>
	<form action="createuser.php" method="post">
<table>
<tr>
<td>
<label>Access Level</label>
</td>
<td>
<select name="accesslevel">
	<option>1</option>
    <option>2</option>
	<option>3</option>
	<option>4</option>
	<option>5</option>

</select>
</td>
</tr>
<tr>
<td>
<label>User Name</label>
</td>
<td>
<input type="text" name="username">
</td>
</tr>
<tr>
<td>
<label>Password</label>
</td>
<td>
<input type="password" name="password">
</td>
</tr>
<td>
<input type="submit" value="Create User" /><?php echo $messg; ?>
</td>
</tr>
</table>
</form>
</body>
</html>



