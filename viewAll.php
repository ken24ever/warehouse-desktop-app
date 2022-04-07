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
 

 $sql2 = "SELECT * FROM trans_table WHERE trans_id= '$result'  order by id DESC   ";
  
  $ret = $db->query($sql2);
    
       while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
	    $id = $row["id"];
        $pname = $row["prod_name"];
        $pcolor= $row["color"];
        $pqty = $row["qty"];
        $payDate = $row["pay_date"];
      
     
	    

  $dynamicList .= '<tbody><tr style="margin:4px;"><td align="center" style="width:13.2%; padding:14px; font-size:11px">'.$row["prod_name"].'</td><td align="center" style="width:13.0%; padding:14px;  font-size:11px">'.$row["color"].'</td><td align="center" style="width:10.1%; font-size:11px" >'.$row["qty"].'</td><td align="center" style="width:13.4%; font-size:11px" >'.$row["pay_date"].'</td><td style="width:20%; font-size:11px"><button type="button" id="itemFrmTrans" class="btn btn-danger" value="'.$row["id"].'">x</button></td></tr>'; 
 
 
}// end of 2nd while loop
$dynamicList .= '</tbody></table>';


echo $dynamicList;

?>