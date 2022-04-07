<?php
 class MyDB extends SQLite3
        {
            function __construct()
            {
                 $this->open('my_database.db');
            }
        }
    $db = new MyDB();

   $usr_id = $_POST["id"];

$sql = "DELETE FROM users WHERE user_id = $usr_id";
$db -> exec($sql);

echo 'you deleted ID'.$usr_id.' from the system';
exit();


?>
