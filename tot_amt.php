<?php
                 class MyDB extends SQLite3
        {
            function __construct()
            {
                 $this->open('my_database.db');
            }
        }
        $db = new MyDB();
		$tot_amount = "";
		if (isset($_POST['prdcode']) && isset($_POST['psquantity']) isset($_POST['psprice']) isset($_POST['psdiscount']) ){
		     $prdcode = $_POST['prdcode'];
			 $prdqty = $_POST['psquantity'];
			 $prdprc = $_POST['psprice'];
			 $prddis = $_POST['psdiscount'];
			 
			
	
			
        $sql1 = "INSERT INTO sales(pscode,pstot) VALUES('$vpcode','$tot_amount')" ; // query the person
	
			
		   $sql = "SELECT * FROM sales where pscode = '$prdcode'"; // query the person
		    $dbcon = $db->query($sql);
			  while($row = $dbcon->fetchArray(SQLITE3_ASSOC) ){
			  
			  $tot_amt =$row["pstot"];
			  }	
		   $tot_amount = ($vpquantity * $vpprice);
		  
		}
         echo $tot_amount;
                 ?>