<?php 

    // Connect to the MySQL database
	if(  isset($_POST["id"]) &&  isset($_POST["text"]) && isset($_POST["categoryname"]) ) {
	
	     
    $categoryid = $_POST["id"];  
    $text = $_POST["text"];  
    $categoryname= $_POST["categoryname"];
	
	 
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
	   if (   $_POST["categoryname"] == "categoryname"    ){
	   
	   	$sql = "UPDATE category  SET categoryname='$text' WHERE categoryid = '$categoryid' "; // query the p
	   	$db -> exec($sql);

    echo "Category Was Successfully updated";
	exit();
	   
	   }
	
	}//end of outer if
?>