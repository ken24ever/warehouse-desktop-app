<?php
 class MyDB extends SQLite3
        {
            function __construct()
            {
                 $this->open('my_database.db');
            }
        }
    $db = new MyDB();

   $cat_id = $_POST["id"];

$sql = "DELETE FROM category WHERE categoryid = $cat_id";
$db -> exec($sql);

echo 'you deleted ID'.$cat_id.' from the system';
exit();


?>
