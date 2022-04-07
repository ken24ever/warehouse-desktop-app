<?php
//db connection
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
		
 $pagePerRecord = 5;
 $page = "";
 $output ="";
  
  if (isset($_POST["vpscode"]) && isset($_POST["vpsname"]) && isset($_POST["vpsquantity"]) && isset($_POST["vpsprice"]) && isset($_POST["vpsdiscount"]) && isset($_POST["vpsmodeofpayment"]) && isset($_POST["page"]) ) {
         
		$page = $_POST["page"];
        $vpcode = $_POST["vpscode"];
    	$vpname = $_POST["vpsname"];
    	$vpquantity = $_POST["vpsquantity"];
    	$vpprice = $_POST["vpsprice"];
        $vpdiscount = $_POST["vpsdiscount"];
        $vpmodeofpayment = $_POST["vpsmodeofpayment"];
		
		  $sql = "INSERT INTO sales(pscode,psname,psqty,psprice,psdiscount,psmop,random_id) VALUES            ('$vpcode','$vpname','$vpquantity','$vpprice','$vpdiscount','$vpmodeofpayment','$result')" ; // query the person
		
     $db->exec($sql); 
}//end of if isset
else{
  $page = 1;
}
$start_from = ( ( $page - 1 ) * $pagePerRecord );

 $sql2 = "SELECT * FROM sales WHERE random_id= '$result' order by id DESC LIMIT $start_from, $pagePerRecord  ";
 $ret = $db->query($sql2);
 $output.='<table border="2" style="margin:4px;overflow:scroll; vertical-align:inherit" cellpadding="600" >';
    while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
        $pcode_sale = $row["pscode"];
        $pname_sale = $row["psname"];
        $pqty_sale = $row["psqty"];
        $pprice_sale = $row["psprice"];
        $pdiscount_sale = $row["psdiscount"];
        $pmop_sale = $row["psmop"];



  $output .= "<tbody><tr style='margin:4px;' ><td style='width:20%'>$pcode_sale</td><td style='width:20%'>$pname_sale</td><td style='width:20%'>$pqty_sale</td><td style='width:20%'>$pprice_sale</td><td style='width:20%'>$pdiscount_sale</td><td style='width:20%'>$pmop_sale</td></tr>"; 
 
 
}// end of 2nd while loop

$output.= '</tbody></table><br/><div align="center">';
$page_query = "SELECT COUNT(id) FROM sales WHERE random_id= '$result' order by id DESC  ";
$page_results = $db->query($page_query);
$total_rec = $page_results // count($page_results);
$total_pages = ceil($total_rec / $pagePerRecord);  

for ($i = 1; $i <= $total_pages; $i++) {
  $output .='<span class="page_link" style="cursor:pointer; padding:6px; border:1px solid red; " id="'.$i.'">"'.$i.'"</span>';
}

$output.= '</div>';
echo  $output;  
?>