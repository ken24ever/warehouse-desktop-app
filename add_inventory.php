
<?php
$messg = "";


if (isset($_POST["pcode"]) && isset($_POST["pname"]) && isset($_POST["pcolor"]) && isset($_POST["pcategoryname"]) && isset($_POST["pquantity"]) && isset($_POST["preorderqty"]) && isset($_POST["pcostprice"]) && isset($_POST["psellingprice"]) && isset($_POST["pwholesaleprice"]) && isset($_POST["pmanufacturingdate"]) && isset($_POST["pexpirydate"])) {
   
        $pcode = $_POST["pcode"];
    	$pname = $_POST["pname"];
    	$pcolor= $_POST["pcolor"];
    	$pcategoryname= $_POST["pcategoryname"];
        $pquantity= $_POST["pquantity"];
        $preorderqty= $_POST["preorderqty"];
        $pcostprice = $_POST["pcostprice"];
        $psellingprice= $_POST["psellingprice"];
        $pwholesaleprice= $_POST["pwholesaleprice"];
        $pmanufacturingdate = $_POST["pmanufacturingdate"];
        $pexpirydate = $_POST["pexpirydate"];

    class MyDB extends SQLite3
        {
            function __construct()
            {
                 $this->open('my_database.db');
            }
        }
        $db = new MyDB();

   //  $sql = "SELECT user_id FROM users WHERE user_name = '$username' AND user_password = '$password' LIMIT 1 ";
    // $ret = $db->query($sql);
$sql = "INSERT INTO inventory(pcode,pname,pcolor,pcategory,pquantity,preorder,pcostprice,psellingprice,pwholesaleprice,pmanufacturingdate,pexpirydate) VALUES ('$pcode','$pname','$pcolor','$pcategoryname','$pquantity','$preorderqty','$pcostprice','$psellingprice','$pwholesaleprice','$pmanufacturingdate','$pexpirydate')" ; // query the person

     $db->exec($sql);     

        $messg  .='Product Added';
        
    echo $messg;
 exit();
}else{

	echo "Please Complete All Fields";
}

?>
