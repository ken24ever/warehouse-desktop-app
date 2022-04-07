<?php 
$messg = "";
// Parse the log in form if the user has filled it out and pressed "Log In"
if (isset($_POST["name"]) && isset($_POST["code"])  && isset($_POST["price"])  && isset($_POST["cate"])) {

   // $name = $_POST["name"]; // filter everything but numbers and letters
   // $code =$_POST["code"]; // filter everything but numbers and letters
   // $img =$_POST["name"]; // filter everything but numbers and letters
    $image = "$img.jpg";
    $price =$_POST["price"]; // filter everything but numbers and letters
    $cate = $_POST["cate"];

    // Connect to the MySQL database  
    include "connect_db.php"; 
    
        $sql = mysql_query("INSERT INTO tbl_product (name,code,image,price,category) VALUES ('$name','$code','$image','$price','$cate')")or die(mysql_error()); // query the person

          $pid = mysql_insert_id();
  // Place image in the folder 
          $newname = "$pid.jpg";
         // $newname = "$name.jpg";
        move_uploaded_file($_FILES['file']['tmp_name'], "../imgs/$newname");


        $messg .='<div class="panel panel-success"> <div class="panel-body">Product Saved</div> </div>' ;
     }

?>