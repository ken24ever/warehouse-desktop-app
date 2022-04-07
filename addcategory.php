<?php

$messg = "";



if (isset($_POST["cid"]) && isset($_POST["cname"])) {
   
    $cid = $_POST["cid"]; // filter everything but numbers and letters
    $cname =$_POST["cname"]; // filter everything but numbers and letters


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
     $sql = "INSERT INTO category(categoryid, categoryname) VALUES ('$cid','$cname')"; // query the person
     $db->exec($sql);     

        $messg  .='Category Created';
        
    echo $messg." and your random pass is ";
 exit();
}

?>