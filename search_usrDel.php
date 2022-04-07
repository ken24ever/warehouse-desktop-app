<?php 
$dynamicList = "";

if(isset($_POST["del"])){

$search = $_POST["del"];
    // Connect to the MySQL database  
     class MyDB extends SQLite3
        {
            function __construct()
            {
                 $this->open('my_database.db');
            }
        }
        $db = new MyDB();

        $sql = "SELECT * FROM users WHERE user_name = '$search' LIMIT 1"; // query the person
        $ret = $db->query($sql);

		
		$dynamicList .='<div class="table-responsive">
  <table class="table table-hover table-bordered">
  <thead>
             <tr>
           <th >USER ID</th> 
		   <th > USER ACCESS LEVEL</th>
		   <th > USER NAME </th>
		    <th >USER PASSWORD </th> 
			<th> DATE CREATED </th> 
			<th> LAST LOGIN DATE </th>
			<th>DELETE USER</th>
           </tr>
		   </thead>
		   ';

       // Place image in the folder 
      while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
        $user_id = $row["user_id"];
        $user_access_level = $row["user_access_level"];
        $user_name = $row["user_name"];
        $user_password = $row["user_password"];
        $date_created = $row["date_created"];
        $last_login_date = $row["date_last_login"];
		
		$dynamicList .= '<tbody><td align="center"><font size="-1">'.$row["user_id"].'</font></td><br/>
   <td align="center" class="user_acess_level" data-a='.$row["user_id"].'><font size="-1">'.$row["user_access_level"].'</font></td>
  <td align="center"  class="user_name" data-b='.$row["user_id"].' contenteditable title="edit me"><font size="-1">'.$row["user_name"].'</font></td>
   <td align="center"  class="user_password" data-c='.$row["user_id"].' contenteditable title="edit me"><font size="-1">****</font></td>
   <td align="center" class="date_created" data-d='.$row["user_id"].' ><font size="-1">'.$row["date_created"].'</font></td>
  <td align="center"  class="last_login_date" data-e='.$row["user_id"].' ><font size="-1">'.$row["date_last_login"].'</font></td>
  <td align="center"   data-f2 = " '.$row["user_id"].' " ><font size="-1"><button type="button" id="btn_delete" class="btn btn-danger" value='.$row["user_id"].'>x</button> </font></td>
 
  ';
  
   

	}
       
  $dynamicList .= '</table></div>';
	echo $dynamicList;
}
?>