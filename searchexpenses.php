<?php 
$dynamicList = "";

if(isset($_POST["exp_search"])){

$search = $_POST["exp_search"];
    // Connect to the MySQL database  
 class MyDB extends SQLite3
        {
            function __construct()
            {
                 $this->open('my_database.db');
            }
        }
        $db = new MyDB();
    
        $sql = "SELECT * FROM add_expense WHERE exp_date = '$search' "; // query the person
		    $ret = $db->query($sql);

		$dynamicList .='<div class="table-responsive" style="margin:-20px">
  <table class="table table-hover table-bordered">
  <thead>
       <tr>
      <th >ID</th> 

	   <th > DATE</th>
       <th >CODE</th>
       <th > TITLE</th>
       <th> PRICE</th>
       </tr>
		   </thead>
		   ';

    
       while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
	           
	    $exp_id = $row["id"];
        $exp_date = $row["exp_date"];
        $exp_code = $row["exp_code"];
        $exp_title = $row["exp_title"];
        $exp_price = $row["exp_price"];
		
   $dynamicList .= '<tbody><td align="center"><font size="-1">'.$row["id"].'</font></td><br/>
   <td align="center" class="exp_date"   data-id1="'.$row["id"].'"><font size="-1">'.$row["exp_date"].'</font></td>
   <td align="center" class="exp_code"  data-id2="'.$row["id"].'"><font size="-1">'.$row["exp_code"].'</font></td>
   <td align="center" class="exp_title"   data-id3="'.$row["id"].'"><font size="-1">'.$row["exp_title"].'</font></td>
   <td align="center" class="exp_price"   data-id4="'.$row["id"].'"><font size="-1">'.$row["exp_price"].'</font></td>';
}

  $dynamicList .= '</table><table>';
  echo $dynamicList;
}
?>