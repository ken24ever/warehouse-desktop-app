<?php
                 class MyDB extends SQLite3
        {
            function __construct()
            {
                 $this->open('my_database.db');
            }
        }
        $db = new MyDB();
		$tot_amt_due = "";
		if (isset($_POST['prdcode']) && isset($_POST['psquantity']) isset($_POST['psprice']) isset($_POST['psdiscount']) ){
		     $prdcode = $_POST['prdcode'];
			 $prdqty = $_POST['psquantity'];
			 $prdprc = $_POST['psprice'];
			 $prddis = $_POST['psdiscount'];
			
			$tot_amt_due= ($tot_amount - $vpdiscount);
		 /*  $sql = "SELECT * FROM sales where psname = '$prdcode'"; // query the person
		    $dbcon = $db->query($sql);
			  while($row = $dbcon->fetchArray(SQLITE3_ASSOC) ){
			  
			  $tot_amt_due =$row["psamtdue"];
			  }	
		*/
		
		
		}
         echo $tot_amt_due;
                 ?>