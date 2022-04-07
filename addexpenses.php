<?php

$messg = "";



if (isset($_POST["expdate"]) && isset($_POST["expid"]) && isset($_POST["exptitle"]) && isset($_POST["expprice"]) ) {
   
    $expdate = $_POST["expdate"]; // filter everything but numbers and letters
    $expid =$_POST["expid"]; // filter everything but numbers and letters
	$exptitle = $_POST["exptitle"]; // filter everything but numbers and letters
    $expprice =$_POST["expprice"]; // filter everything but numbers and letter


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
     $sql = "INSERT INTO add_expense(exp_date, exp_code, exp_title, exp_price) VALUES ('$expdate','$expid','$exptitle','$expprice')"; // query the person
     $db->exec($sql);     

        $messg  .='Expense Created';
        
    echo $messg;
 exit();
}

?>

