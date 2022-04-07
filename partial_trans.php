<?php 

    // Connect to the MySQL database
  if(  isset($_POST["id"]) &&  isset($_POST["text"]) && isset($_POST["qty_taken"]) ) {
  
       
    $id = $_POST["id"];  
    $text = $_POST["text"];  
    $qty_taken= $_POST["qty_taken"];


  
   
 class MyDB extends SQLite3
        {
            function __construct()
            {
                 $this->open('my_database.db');
            }
        }
        $db = new MyDB(); 


       $sql = "SELECT qty FROM trans_table WHERE id = '$id'  LIMIT 1"; // query the person
      $ret = $db->query($sql);

      while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
        $qty = $row["qty"];

      }
      $qty_left = $qty - $text;


     if (   $_POST["qty_taken"] == "qty_taken"    ){
     
      $sql = "UPDATE trans_table  SET qty_taken='$text', qty_left = '$qty_left' WHERE id = '$id' "; // query the p
      $db -> exec($sql);

    echo "Quantity Was Successfully updated";
  exit();
     
     }
  
  }//end of outer if
?>