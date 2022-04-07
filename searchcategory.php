<?php 
$dynamicList = "";

if(isset($_POST["searchcat2"])){

$search = $_POST["searchcat2"];
    // Connect to the MySQL database  
 class MyDB extends SQLite3
        {
            function __construct()
            {
                 $this->open('my_database.db');
            }
        }
        $db = new MyDB();
    
        $sql = "SELECT * FROM category WHERE categoryname  LIKE '%$search%' "; // query the person
		    $ret = $db->query($sql);

		$dynamicList .='<div class="table-responsive" style="margin:-20px">
  <table class="table table-hover table-bordered">
  <thead>
             <tr>
           <th >ID</th> 
		   <th > NAME</th>
		
			<th>EDIT</th>
            <th>DELETE</th>

           </tr>
		   </thead>
		   ';

    
       while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
        $categoryid = $row["categoryid"];
        $categoryname = $row["categoryname"];
      
		
		$dynamicList .= '<tbody><td align="center"><font size="-1">'.$row["categoryid"].'</font></td><br/>
   <td align="center" class="categoryname"  contenteditable data-id1="'.$row["categoryid"].'"><font size="-1">'.$row["categoryname"].'</font></td>
    <td><font size="-1"><button type="button" value="'.$row["categoryid"].'"  id="edit1" class="btn btn-success">-</button></font></td>
<td><font size="-1"><button type="button" id="btn_deletecat" class="btn btn-danger" value='.$row["categoryid"].'>x</button></td></font>
 
  ';
}
  
$dynamicList .= '</table></div>';
	echo $dynamicList;
}
?>