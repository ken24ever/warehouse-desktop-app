<?php
 class MyDB extends SQLite3
        {
            function __construct()
            {
                 $this->open('my_database.db');
            }
        }
    $db = new MyDB();
	
   $sale_id = $_POST["id"];
   
  
	   // here we also delete from trans table
	   
       $delFrm_trans_table = "DELETE FROM trans_table WHERE id = '$sale_id'  ";
       $delete_rec  = $db -> exec($delFrm_trans_table);

  	  
		
echo 'you deleted ID'.$sale_id.' from the system';

exit();


?>
