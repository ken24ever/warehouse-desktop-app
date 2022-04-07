<?php
 $messg = "";
if (isset($_POST['custTitle']) && isset($_POST['custGen'])  && isset($_POST['custName']) && isset($_POST['custPhone']) && isset($_POST['custAdd']) && isset($_POST['custEmail']) ) {

  
   
    $cust_title= $_POST['custTitle']; // filter everything but numbers and letters
    $cust_gender =$_POST['custGen']; // filter everything but numbers and letters
  $cust_name= $_POST['custName']; // filter everything but numbers and letters
    $cust_phone =$_POST['custPhone']; // filter everything but numbers and letters
	  $cust_add= $_POST['custAdd']; // filter everything but numbers and letters
    $cust_email =$_POST['custEmail']; // filter everything but numbers and letters

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
     $sql = "INSERT INTO customer(custitle, custgender, custname, custphone, custadd, custemail   ) VALUES ('$cust_title','$cust_gender','$cust_name','$cust_phone','$cust_add','$cust_email')"; // query the person
     $db->exec($sql);     

        $messg  .="You just Created  ".$cust_name."  as a customer";
        
    echo $messg;
 exit();
}

?>