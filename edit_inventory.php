<?php 
$productCode = "";
 $text = "";
 $columnTitle ="";
 
  class MyDB extends SQLite3
        {
            function __construct()
            {
                 $this->open('my_database.db');
            }
        }
        $db = new MyDB();
 
	

  //	$sql = "UPDATE updated_stock_table SET pname='$pname ', old_stock = '$pquantity' WHERE pname = '$pname' "; // query the p
	//  $dcon =	$db -> exec($sql);
    // Connect to the MySQL database
	if(  isset($_POST["pcode"]) &&  isset($_POST["text"]) && isset($_POST["columnName"]) ) {
	
	     
    $productCode = $_POST["pcode"];  
    $text = $_POST["text"];  
    $columnTitle= $_POST["columnName"];
	
	 
    $sql = "SELECT * FROM inventory where pcode = ' $productCode' LIMIT 1   "; // query the person
		    $ret = $db->query($sql);
			  while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
			  $pcode = $row["pcode"];
        $pname = $row["pname"];
        $pcolor = $row["pcolor"];
	      $pcategory = $row["pcategory"];
	      $pquantity = $row["pquantity"];
	  
			  }	
		
		$add_qty = $text - $pquantity;
		$new_total= $pquantity + $add_qty;

		$sql1 = "insert into updated_stock_table (pname,old_stock, addition_stock, new_stock,date,color,pcode) values ('$pname ','$pquantity','$add_qty','$new_total','now()','$pcolor ','$pcode')"; // query the p
       $update1= $db -> exec($sql1);
	
	
	   if (   $_POST["columnName"] == "pquantity"    ){
	   
	   	$sql2 = "UPDATE inventory SET pquantity='$new_total' WHERE pcode = '$productCode' "; // query the p
	   	$update2= $db -> exec($sql2);
		
		

    echo "Stock Item with product name <strong style='color:red; font-size:24px; font-weight:bold;'> ".$pname."</strong> Was Successfully Updated".".New value added <strong style='color:red; font-size:24px; font-weight:bold;'> ".$add_qty."</strong>, old value <strong style='color:red; font-size:24px; font-weight:bold;'> ".$pquantity."</strong>, new quantity <strong style='color:red; font-size:24px; font-weight:bold;'> ".$new_total." </strong>";
	exit();
	
	   
	   }
	   
	}//end of outer if
?>