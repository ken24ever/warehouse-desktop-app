<?php 

    // Connect to the MySQL database
	if(  isset($_POST["id"]) &&  isset($_POST["text"]) && isset($_POST["columnName"]) ) {
	
	     
    $customerid = $_POST["id"];  
    $text = $_POST["text"];  
    $columnTitle= $_POST["columnName"];
	
	 
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
	   if (   $_POST["columnName"] == "custitle"    ){
	   
	   	$sql = "UPDATE customer  SET custitle='$text' WHERE custid = '$customerid' "; // query the p
	   	$db -> exec($sql);

    echo "Customer Title with ID <strong style='color:red;'> ".$customerid."</strong> Was Successfully Updated";
	exit();
	   
	   }else if  (   $_POST["columnName"] == "custname"    ){
	   
	   	$sql = "UPDATE customer  SET custname='$text' WHERE custid = '$customerid' "; // query the p
	   	$db -> exec($sql);

    echo "Customer Name  with ID <strong style='color:red;'> ".$customerid."</strong> Was Successfully Updated";
	exit();
	   
	   }else if  (   $_POST["columnName"] == "custphone"    ){
	   
	   	$sql = "UPDATE customer  SET custphone='$text' WHERE custid = '$customerid' "; // query the p
	   	$db -> exec($sql);

    echo "Customer Phone with ID  <strong style='color:red;'> ".$customerid." </strong> Was Successfully Updated";
	exit();
	   
	   }
	   else if  (   $_POST["columnName"] == "custadd"    ){
	   
	   	$sql = "UPDATE customer  SET custadd='$text' WHERE custid = '$customerid' "; // query the p
	   	$db -> exec($sql);

    echo "Customer Address with ID <strong style='color:red;'> ".$customerid." </strong> Was Successfully Updated";
	exit();
	   
	   }
	else if  (   $_POST["columnName"] == "custemail"    ){
	   
	   	$sql = "UPDATE customer  SET custemail='$text' WHERE custid = '$customerid' "; // query the p
	   	$db -> exec($sql);

    echo "Customer Email with ID <strong style='color:red;'>".$customerid."</strong> Was Successfully Updated";
	exit();
	   
	   }
	}//end of outer if
?>