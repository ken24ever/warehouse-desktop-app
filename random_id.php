<?php
$randomID="";
// here we amake a connection to DB
 class MyDB4 extends SQLite3
        {
            function __construct()
            {
                 $this->open('my_database.db');
            }
        }
        $db = new MyDB4(); 

// this section generates random transaction Id 
$chars = "1234567890987654321452263623572";

for($i = 0; $i < 4; $i++){
	$randomID .= $chars{rand() % 10};
}

$sql = "UPDATE transID SET random_id = '$randomID' WHERE name = 'name' ";
$db->exec($sql);


echo "Transaction ID is: $randomID";

?>