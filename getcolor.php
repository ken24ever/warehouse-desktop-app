<?php
                 class MyDB extends SQLite3
        {
            function __construct()
            {
                 $this->open('my_database.db');
            }
        }
        $db = new MyDB();
		$color = "";
		if (isset($_POST['prdName'])){
		     $product_name = $_POST['prdName'];
			
		   $sql = "SELECT * FROM inventory where pname = '$product_name'   "; // query the person
		    $ret = $db->query($sql);
			  while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
			  
			  $color = $row["pcolor"];
			  }	
		
		}
         echo  $color;
                 ?>