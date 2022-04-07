<?php
                 class MyDB extends SQLite3
        {
            function __construct()
            {
                 $this->open('my_database.db');
            }
        }
        $db = new MyDB();
		$pqty = "";
		if (isset($_POST['prdName'])){
		     $product_name = $_POST['prdName'];
			
		   $sql = "SELECT * FROM inventory where pname = '$product_name'"; // query the person
		    $dbcon = $db->query($sql);
			  while($row = $dbcon->fetchArray(SQLITE3_ASSOC) ){
			  
			  $pqty =$row["pquantity"];
			  }	
		
		}
         echo  "<strong style='font-size:16px; color:red;'>(".$pqty.")</strong>";
                 ?>