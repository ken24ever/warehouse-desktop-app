<?php
 class MyDB extends SQLite3
        {
            function __construct()
            {
                 $this->open('my_database.db');
            }
        }
    $db = new MyDB();
	
   $add_tot_qty ="";
   // $trans_id ="";
	
   $sale_id = $_POST["id"];
   
    $SelectPcode = "SELECT * FROM sales WHERE id= '$sale_id'  ";
     $ret = $db->query($SelectPcode);
	 
      while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
	    $id = $row["id"];
        $pcode_sale = $row["pscode"];
		$pqty_sale = $row["psqty"];
		$sales_color = $row["color"];
		$sale_pname = $row["psname"];
		
		}
		
		$qty = "SELECT * FROM inventory WHERE pcode = '$pcode_sale'  ";
     $inv = $db->query($qty);
	 
      while($row1 = $inv->fetchArray(SQLITE3_ASSOC) ){
        $pcode_inv = $row1["pcode"];
		$pqty_inv = $row1["pquantity"];
		}
		// here we add quantity deleted from sales to quantity originally in inventory table
       $add_tot_qty  = ($pqty_sale + $pqty_inv );
	   
       $sql = "DELETE FROM sales WHERE id = $sale_id";
       $delete = $db -> exec($sql);
	 
	   // here we also delete from trans table
	   
       $delFrm_trans_table = "DELETE FROM trans_table WHERE id = '$sale_id'  ";
       $delete_rec  = $db -> exec($delFrm_trans_table);

  	    $sql2 = "UPDATE inventory SET pquantity='$add_tot_qty' WHERE pcode = '$pcode_sale'"; 
	   	$update2= $db -> exec($sql2);
		
echo 'you deleted ID'.$sale_id.' from the system';

exit();


?>
