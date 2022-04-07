<?php
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


// select total amount due for all transaction 
  $totalAmtDue = "select SUM(psamtdue) AS totsales  from sales where random_id = '$result' ";
  $amtDueTotal= $db -> query($totalAmtDue);
  while($row4 = $amtDueTotal->fetchArray(SQLITE3_ASSOC) ){
     $TotalAmtDue = $row4["totsales"];
	 
  }//end of while loop

echo  "<strong style='color:blue; font-size:24px; font-family:tahoma'>TOTAL AMOUNT: </strong> <strong style='color:red; font-size:24px; font-family:tahoma'> #".$TotalAmtDue."</strong>";
?>