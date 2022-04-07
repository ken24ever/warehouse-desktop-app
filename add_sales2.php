<?php

$messg = "";
 $dynamicList ="";
 $tot_amount = 0;
 $tot_amt_due = 0;


if (isset($_POST["vpscode"]) && isset($_POST["vpsname"]) && isset($_POST["vpsquantity"]) && isset($_POST["vpsprice"]) && isset($_POST["vpsdiscount"]) && isset($_POST["vpsmodeofpayment"])&& isset($_POST["color"]) && isset($_POST["bal"]) && isset($_POST["cashreceived"]) ) {
         
		
        $vpcode = $_POST["vpscode"];
		$color = $_POST["color"];
    	$vpname = $_POST["vpsname"];
    	$vpquantity = $_POST["vpsquantity"];
    	$vpprice = $_POST["vpsprice"];
        $vpdiscount = $_POST["vpsdiscount"];
        $vpmodeofpayment = $_POST["vpsmodeofpayment"];
		 $bal = $_POST["bal"];
		  $cash_rec = $_POST["cashreceived"];
		
		
     

    class MyDB4 extends SQLite3
        {
            function __construct()
            {
                 $this->open('my_database.db');
            }
        }
        $db = new MyDB4(); 
		
		// retrieving the active random ID for a particular transaction
		 $sql3 = "SELECT random_id FROM transID";
        $sel= $db->query($sql3);
	while($row1 = $sel->fetchArray(SQLITE3_ASSOC) ){
		$result =$row1['random_id'];
       
	   }// end of 1st while loop 
	   // 
    $tot_amount = ($vpquantity * $vpprice);
	$tot_amt_due= ($tot_amount - $vpdiscount);

        $sql = "INSERT INTO sales(pscode,psname,psqty,psprice,psdiscount,psmop,pstot,psamtdue,color,pscashrec,psbal,random_id) VALUES            ('$vpcode','$vpname','$vpquantity','$vpprice','$vpdiscount','$vpmodeofpayment','$tot_amount','$tot_amt_due','$color','$cash_rec','$bal','$result')" ; // query the person
		
		$select = "SELECT * FROM inventory where pname = '$vpname'   "; // query the person
		    $ret = $db->query($select);
			  while($fetch_row = $ret->fetchArray(SQLITE3_ASSOC) ){
			  
			  $pqty =$fetch_row["pquantity"];
			  }	
		
     $db->exec($sql);     

 $dynamicList .='<table border="2" style="margin:4px;overflow:scroll; vertical-align:inherit" cellpadding="600" >';
 

 $sql2 = "SELECT * FROM sales WHERE random_id= '$result' order by id DESC  ";
  
  $ret = $db->query($sql2);
    
       while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
	    $id = $row["id"];
        $pcode_sale = $row["pscode"];
        $pname_sale = $row["psname"];
        $pqty_sale = $row["psqty"];
        $pprice_sale = $row["psprice"];
        $pdiscount_sale = $row["psdiscount"];
        $pmop_sale = $row["psmop"];
        $tot_amt = $row["pstot"];
		$amtDue =$row["psamtdue"];
	    $qty_added = ($pqty - $vpquantity);
	
	   // here we update the quantity in inv table to balance the records 
     	   	$sql2 = "UPDATE inventory SET pquantity='$qty_added' WHERE pcode = '$vpcode'"; 
	   	$update2= $db -> exec($sql2);

  $dynamicList .=  '<tbody><tr style="margin:4px;"><td align="center"  style="width:13.2%; font-size:11px">'.$row["pscode"].'</td><td align="center" style="width:13.0%; padding:14px;  font-size:11px">'.$row["psname"].'</td><td align="center" style="width:13.1%; font-size:11px" >'.$row["psqty"].'</td><td align="center" style="width:10.1%; font-size:11px" >'.$row["psprice"].'</td><td align="center" style="width:13.4%;  font-size:11px" >'.$row["psdiscount"].'</td><td align="center" style="width:13.5%; font-size:11px" >'.$row["psmop"].'</td><td align="center" style="width:11.9%; font-size:11px">'.$row["pstot"].'</td><td align="center" style="width:13.4%; font-size:11px" >'.$row["psamtdue"].'</td></tr>'; 
 
 
}// end of 2nd while loop
$dynamicList .= '</tbody></table>';

echo $dynamicList; 

// here we insert records into table for further confirmation
   $d= date("Y/d/m"); // filter everything but numbers and letters
    $t = date("h:i:sa"); // filter everything but numbers and letters
	$date_time = $d. " " .$t;
 $sql_trans_tab = "INSERT INTO trans_table(trans_id, prod_name,color, qty, pay_date) VALUES ('$result','$vpname','$color','$vpquantity','$date_time')" ; 
 $db -> exec($sql_trans_tab);


  
} // end of if isset
 

?>
