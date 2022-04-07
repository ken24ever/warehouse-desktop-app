<?php
 $dynamicList  = "";
 class MyDB4 extends SQLite3
        {
            function __construct()
            {
                 $this->open('my_database.db');
            }
        }
        $db = new MyDB4();
		
		 $sql3 = "SELECT random_id FROM transID";
        $sel= $db->query($sql3);
	while($row1 = $sel->fetchArray(SQLITE3_ASSOC) ){
		$result =$row1['random_id'];
       
	   }// end of 1st while loop
   
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
	    

  $dynamicList .= '<tbody><tr style="margin:4px;"><td align="center" style="width:20%; padding:14px; font-size:11px">'.$row["pscode"].'</td><td align="center" style="width:20%;padding:14px;  font-size:11px">'.$row["psname"].'</td><td style="width:20%; font-size:11px" >'.$row["psqty"].'</td><td style="width:20%; font-size:11px" >'.$row["psprice"].'</td><td style="width:20%;  font-size:11px" >'.$row["psdiscount"].'</td><td style="width:20%; font-size:11px" >'.$row["psmop"].'</td><td style="width:20%; font-size:11px">'.$row["pstot"].'</td><td style="width:20%; font-size:11px" >'.$row["psamtdue"].'</td><td style="width:20%; font-size:11px"><button type="button" id="deleteItem" class="btn btn-danger" value="'.$row["id"].'">x</button></td></tr>'; 
 
 
}// end of 2nd while loop
$dynamicList .= '</tbody></table>';


echo $dynamicList;

?>