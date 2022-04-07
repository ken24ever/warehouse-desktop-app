<?php

$messg = "";



if (isset($_POST["usrAccess"]) && isset($_POST["usrName"]) && isset($_POST["pswrd"])) {

    $accesslevel = $_POST["usrAccess"]; // filter everything but numbers and letters
    $username =$_POST["usrName"]; // filter everything but numbers and letters
    $password =$_POST["pswrd"]; 
    $d= date("Y/d/m"); // filter everything but numbers and letters
    $t = date("h:i:sa"); // filter everything but numbers and letters
	$date_time = $d. " " .$t;


    class MyDB extends SQLite3
        {
            function __construct()
            {
                 $this->open('my_database.db');
            }
        }
        $db = new MyDB();

   //  $sql = "SELECT user_id FROM users WHERE user_name = '$username' AND user_password = '$password' LIMIT 1 ";
    // $ret = $db->query($sql);
     
     $sql = "INSERT INTO users(user_access_level, user_name, user_password, date_created, date_last_login) VALUES ('$accesslevel','$username','$password', '$date_time', '$date_time' )"; // query the person
     $db->exec($sql);
	 

        $messg .='User Created' ;
        
    echo $messg." and your random pass is ". $password;
 exit();
}

?>