<?php 
$dynamicList = "";

if(isset($_POST["searchinv"])){

$search = $_POST["searchinv"];
    // Connect to the MySQL database  
 class MyDB extends SQLite3
        {
            function __construct()
            {
                 $this->open('my_database.db');
            }
        }
        $db = new MyDB();
    
        $sql = "SELECT * FROM inventory WHERE  pname LIKE '%$search%' "; // query the person
		    $ret = $db->query($sql);

		$dynamicList .='<div class="table-responsive" style="margin:-20px">
  <table class="table table-hover table-bordered">
  <thead>
             <tr>
       <th>CODE</th>
		   <th>NAME</th> 
		   <th> COLOR</th>
		   <th> CATEGORY</th>
		   <th> QUANTITY</th>
		   <th> RE-ORDER QUANTITY</th>
       <th>COST PRICE</th>
       <th>SELLING PRICE</th>
       <th>WHOLE SALE PRICE</th>
       <th>MANUFACTURING DATE</th>
       <th>EXPIRY DATE</th>
			
          
           </tr>
		   </thead>
		   ';

    
       while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
        $pcode = $row["pcode"];
        $pname = $row["pname"];
        $pcolor = $row["pcolor"];
	      $pcategory = $row["pcategory"];
	      $pquantity = $row["pquantity"];
	      $preorder = $row["preorder"];
        $pcostprice = $row["pcostprice"];
        $psellingprice = $row["psellingprice"];
        $pwholesaleprice = $row["pwholesaleprice"];
        $pmanufacturingdate = $row["pmanufacturingdate"];
        $pexpirydate = $row["pexpirydate"];
     
		$dynamicList .= '<tbody>

    <td align="center"><font size="-1">'.$row["pcode"].'</font></td><br/>
    <td align="center" class="pname"   data-id1="'.$row["pcode"].'"><font size="-1">'.$row["pname"].'</font></td>
    <td align="center" class="pcolor"   data-id2="'.$row["pcode"].'"><font size="-1">'.$row["pcolor"].'</font></td>
    <td align="center" class="pcategory"   data-id3="'.$row["pcode"].'"><font size="-1">'.$row["pcategory"].'</font></td>
        <td align="center" class="pquantity" contenteditable   data-id3="'.$row["pcode"].'"><font size="-1">'.$row["pquantity"].'</font></td>

    <td align="center" class="preorder"   data-id4="'.$row["pcode"].'"><font size="-1">'.$row["preorder"].'</font></td>
    <td align="center" class="pcostprice"   data-id5="'.$row["pcode"].'"><font size="-1">'.$row["pcostprice"].'</font></td>
        <td align="center" class="psellingprice"   data-id5="'.$row["pcode"].'"><font size="-1">'.$row["psellingprice"].'</font></td>
    <td align="center" class="ppwholesaleprice"   data-id5="'.$row["pcode"].'"><font size="-1">'.$row["pwholesaleprice"].'</font></td>
    <td align="center" class="pmanufacturingdate"   data-id5="'.$row["pcode"].'"><font size="-1">'.$row["pmanufacturingdate"].'</font></td>
    <td align="center" class="pexpirydate"   data-id5="'.$row["pcode"].'"><font size="-1">'.$row["pexpirydate"].'</font></td>

 
  ';
}
  
$dynamicList .= '</tbody></table></div>';
	echo $dynamicList;
}
?>