<?php 
$dynamicList = "";

if(isset($_POST["searchtrans"]) && isset($_POST["searchtrans"])){

$search = $_POST["searchtrans"];
    // Connect to the MySQL database  
 class MyDB extends SQLite3
        {
            function __construct()
            {
                 $this->open('my_database.db');
            }
        }
        $db = new MyDB();
    
        $sql = "SELECT * FROM trans_table WHERE trans_id = '$search' "; // query the person
		    $ret = $db->query($sql);

		$dynamicList .='<div class="table-responsive" style="margin:-20px">
  <table class="table table-hover table-bordered">
  <thead>
       <tr>
      <th >ID</th> 

       <th >TRANS ID</th> 
		   <th > PRODUCT NAME</th>
       <th >COLOR</th>

		   <th > QTY PAID FOR</th>

		  
			 <th> DATE OF PAYMENT</th>
      <th> QUANTITY TAKEN</th>
       <th> QUANTITY LEFT</th>


 
		
       </tr>
		   </thead>
		   ';

    
       while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
        $id = $row["id"];
        $trans_id = $row["trans_id"];
        $prod_name = $row["prod_name"];
        $color = $row["color"];
        $qty = $row["qty"];
        //$price = $row["price"];
        $pay_date = $row["pay_date"];
        $qty_taken = $row["qty_taken"];
        $qty_left = $row["qty_left"];

		
		  $dynamicList .= '<tbody><td align="center"><font size="-1">'.$row["id"].'</font></td><br/>
   <td align="center" class="trans_id"   data-id1="'.$row["id"].'"><font size="-1">'.$row["trans_id"].'</font></td>
   <td align="center" class="prod_name"  data-id2="'.$row["id"].'"><font size="-1">'.$row["prod_name"].'</font></td>
   <td align="center" class="color"   data-id3="'.$row["id"].'"><font size="-1">'.$row["color"].'</font></td>
   <td align="center" class="qty"  data-id4="'.$row["id"].'"><font size="-1">'.$row["qty"].'</font></td>
      <td align="center" class="pay_date"  data-id6="'.$row["id"].'"><font size="-1">'.$row["pay_date"].'</font></td>
   <td align="center" class="qty_taken"  contenteditable data-id7="'.$row["id"].'"><font size="-1">'.$row["qty_taken"].'</font></td>
   <td align="center" class="qty_left"  data-id8="'.$row["id"].'"><font size="-1">'.$row["qty_left"].'</font></td>';
}

  $dynamicList .= '</table><table><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td></td><td><input type="submit" class="btn btn-danger" value="Print Delivery Reciept"></td><td></td><td></td><td></td><td></td></tr></table></div>';
  echo $dynamicList;
}
?>