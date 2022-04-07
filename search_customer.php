<?php 
$dynamicList = "";

if(isset($_POST["searchCust"])){

$search = $_POST["searchCust"];
    // Connect to the MySQL database  
 class MyDB extends SQLite3
        {
            function __construct()
            {
                 $this->open('my_database.db');
            }
        }
        $db = new MyDB();
    
        $sql = "SELECT * FROM customer WHERE custname  LIKE '%$search%' "; // query the person
		    $ret = $db->query($sql);

		$dynamicList .='<div class="table-responsive" style="margin:-20px">
  <table class="table table-hover table-bordered">
  <thead>
             <tr>
           <th >ID</th>
		   <th >TITLE</th> 
		   <th > NAME</th>
		   <th > PHONE</th>
		   <th > ADDRESS</th>
		   <th > EMAIL</th>
            <th>DELETE</th>
          
           </tr>
		   </thead>
		   ';

    
       while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
        $customerId = $row["custid"];
        $customerTitle = $row["custitle"];
      $customerName = $row["custname"];
	  $customerPhone = $row["custphone"];
	  $customerAdd= $row["custadd"];
	   $customerEmail= $row["custemail"];
		
		$dynamicList .= '<tbody><td align="center"><font size="-1">'.$row["custid"].'</font></td><br/>
   <td align="center" class="custitle"   data-id1="'.$row["custid"].'"><font size="-1">'.$row["custitle"].'</font></td>
   <td align="center" class="custname"   data-id2="'.$row["custid"].'"><font size="-1">'.$row["custname"].'</font></td>
   <td align="center" class="custphone"   data-id3="'.$row["custid"].'"><font size="-1">'.$row["custphone"].'</font></td>
   <td align="center" class="custadd"   data-id4="'.$row["custid"].'"><font size="-1">'.$row["custadd"].'</font></td>
   <td align="center" class="custemail"   data-id5="'.$row["custid"].'"><font size="-1">'.$row["custemail"].'</font></td>
<td><font size="-1"><button type="button" id="deleteCustomer" class="btn btn-danger" value='.$row["custid"].'>x</button></td>

 
  ';
}
  
$dynamicList .= '</table></div>';
	echo $dynamicList;
}
?>