<?php 

    // Connect to the MySQL database
	if(  isset($_POST["id"]) &&  isset($_POST["text"]) && isset($_POST["column_name"]) ) {
	
	     
    $userid = $_POST["id"];  
    $text = $_POST["text"];  
    $column_name= $_POST["column_name"];
	
	 
 class MyDB extends SQLite3
        {
            function __construct()
            {
                 $this->open('my_database.db');
            }
        }
        $db = new MyDB();	/*
	$sqlCol= mysqli_query($db_conx,"select user_name from inventory_user where user_id='$userid' limit 1")or die(mysqli_error($db_conx));
	$fetch = mysqli_fetch_row($sqlCol);
	  $col_name = $fetch[2];*/
	   if (   $_POST["column_name"] == "user_name"    ){
	   
	   	$sql = "UPDATE users  SET user_name='$text' WHERE user_id = '$userid' "; // query the p
	   	$db -> exec($sql);

    echo "Username Was Successfully updated";
	exit();
	   
	   }
	else if (  $_POST["column_name"] == "user_password") {

	$sql1 = "UPDATE users  SET user_password ='$text' WHERE user_id = '$userid' "; // query the p
    $db -> exec($sql1);

    echo "Password Was Successfully updated";
	exit();
	}
	
	}//end of outer if
?>