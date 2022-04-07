<?php
class MyDB4 extends SQLite3
        {
            function __construct()
            {
                 $this->open('my_database.db');
            }
        }
        $db = new MyDB4();

if (isset($_POST["name"])){
$name = $_POST["name"];
 $d= date("Y/d/m"); // filter everything but numbers and letters
    $t = date("h:i:sa"); // filter everything but numbers and letters
	$date_time = $d. " " .$t;

$sql = "INSERT INTO customer_sales(custName, date) VALUES ('$name','$date_time')" ; // query the person
 $query = $db -> exec($sql);


}// end of if 
echo $name." is stored in the system." ;
?>