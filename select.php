<?php
 $infoDisplay = "";
  class MyDB extends SQLite3
        {
            function __construct()
            {
                 $this->open('my_database.db');
            }
        }
        $db = new MyDB();
      $sql = "SELECT * FROM users";
      $ret = $db->query($sql);
       $infoDisplay .='<div class="table-responsive">
      <table class="table table-hover table-bordered">
      <thead>
             <tr>
           <th >USER ID</th> 
       <th > USER ACCESS LEVEL</th>
       <th > USER NAME </th>
        <th >USER PASSWORD </th> 
      <th> DATE CREATED </th> 
      <th> LAST LOGIN DATE </th>
           </tr>
       </thead>
       ';

      while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
        $user_id = $row["user_id"];
        $user_access_level = $row["user_access_level"];
        $user_name = $row["user_name"];
        $user_password = $row["user_password"];
        $date_created = $row["date_created"];
        $last_login_date = $row["date_last_login"];
   
     $infoDisplay .= '<tbody><td align="center"><font size="-1">'.$row["user_id"].'</font></td><br/>
   <td align="center" class="user_acess_level" data-id1="'.$row["user_id"].'" ><font size="-1">'.$row["user_access_level"].'</font></td>
  <td align="center"  class="user_name" data-id2="'.$row["user_id"].'"><font size="-1">'.$row["user_name"].'</font></td>
   <td align="center"  class="user_password" data-id3="'.$row["user_id"].'"><font size="-1">****</font></td>
   <td align="center" class="date_created" data-id4="'.$row["user_id"].'"><font size="-1">'.$row["date_created"].'</font></td>
  <td align="center"  class="last_login_date" data-id5="'.$row["user_id"].'"><font size="-1">'.$row["date_last_login"].'</font></td>';
   

      }
   
  
      $infoDisplay .= '</table></div>';
      echo $infoDisplay;

?>