<?php
     $status = "";
     $id = "";
     if (isset($_POST["accesslevel"]) && isset($_POST["username"]) && isset($_POST["password"]) ){
        class MyDB extends SQLite3
        {
            function __construct()
            {
                 $this->open('my_database.db');
            }
        }
        $db = new MyDB();
        if(!$db){
              echo $db->lastErrorMsg();
        } else {
        //echo "Opened database successfully\n";
        }
        $uname = $_POST["username"];
        $passwd = $_POST["password"];

      $sql = "SELECT * FROM users WHERE user_name= '$uname' AND user_password= '$passwd' LIMIT 1";
      $ret = $db->query($sql);
      while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      $id .= $row['user_id'];
      $access_level=$row['user_access_level'];
      $username=$row["user_name"];
      $password=$row['user_password'];
      }
      if ($id!=""){
        if ($password==$_POST["password"]){
           header('Location: dashboard.php');    
        }else{
          
          $status .= "Wrong Password";
        }
      }else{
          $status .=  '<font color="red">User Does Not Exist</font>';
      }
   //echo "Operation done successfully\n";
   $db->close();
     }
?>



<?php 
$dynamicList = "";


    // Connect to the MySQL database  
    include "../includes/connect_db.php"; 
    
        $sql = mysql_query("SELECT * FROM customer_order")or die(mysql_error()); // query the person

       // Place image in the folder 
       $productCount = mysql_num_rows($sql); // count the output amount
       if ($productCount > 0) {
       while($row = mysql_fetch_array($sql)){ 
        $id = $row["id"];
        $name = $row["name"];
        $address = $row["address"];
        $city = $row["city"];
        $state = $row["state"];
        $securitycode = $row["securitycode"];
        $phone = $row["phone"];
        $price = $row["price"];




        $dynamicList .= "<tr><td>$id</td><td>$name</td><td>$address</td><td>$city</td><td>$state</td><td>$securitycode</td><td>$phone</td><td>$price</td><td><a href=orders.php?sec=$securitycode&p=$price>view order</a></td><td><a href=vieworders.php?del=$securitycode>delete order</a></td></tr>";
       
          }
      } else {
    $dynamicList = "We have no products listed in our store yet";
    }
mysql_close();
  


?>














<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="animate.css-master/animate.min.css">
<link rel="stylesheet" href="animate.css-master/animate.min.css">
<script src="js/jquery-3.2.1.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 
 <style type="text/css">
 body { margin:55px auto}
 .wel_note{ height:100px; background-image:url(images/slate_bg.jpg); border-radius:20px; }
 .welcome_note{ padding:30px;letter-spacing:5px;}
 .tabular_layout{height:300px;}
 .content_1{ background-color:#CCCCFF; height:400px;}
 .logo{ color:gold; font-family:Tahoma; letter-spacing:6px; font-size:28px;}
 .caption{ z-index:100; margin:10px auto;}
 .image{ z-index:0}
 .nav{ padding-left:100px;}
 .li{ padding-right:72px; }
 .label{ color:#FF3300;}
 
 
 /* dashboard styling*/
 
 .holder{ height:200px; }
.block{margin:35px auto; width:300px; height:120px; border:1px blue solid;  background-image:url(images/slate_bg.jpg); color:#FFFFFF; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:18px; border-radius:12px; box-shadow:#737373 1px 5px 10px 4px}
.btn{ font-size:18px; font-weight:bold;}
.bor_line{ border:4px #999999 groove; border-radius:20px;}



    /* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

/* 2nd modal styling */

 /* The Modal (background) */
.modal1 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content1 {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close1 {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close1:hover,
.close1:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}


.modal2 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content2 {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close2 {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close2:hover,
.close2:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}



 </style>
 <script type="text/javascript">
 // animation section
 function animElem(){
 var animateNam = 'animated shake';
 var animationend ='webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationEnd animationEnd'
 $(document).ready(function(e){
 
 $(".btn").addClass(animateNam).one(animationend, function(){ $(this).removeClass(animateNam)})
 })
 
 
 }
 
 setInterval('animElem()',3000);
 
//hover effects
  $(document).ready(function() {
  $(".block").hover(
  function(){
  $(this).css({"transform":"scale(1.0,0.9)"})
  $(this).css({"transition":"1.5s"})
  

  },
  
 function(){
 $(this).css({"transform":"scale(1.0,1.0)"})
  
 }
 
  )		
 
 
 });
 

 
</script>
</head>

<body>
<script src="js/2nd_modal.js"></script>
<script src="js/3rd_modal.js"></script>

<!-- navigation bar goes here! -->
<div class="container-fluid">
          <div class="row">
         
                 <div class="col-md-12">
             <!-- Navigation section -->
                      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                     <div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse"
data-target="#example-navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
 <a class="logo navbar-brand" href="#"><strong class="logo">BUSINESS EDGE</strong></a>
</div>
<div class="collapse navbar-collapse" id="example-navbar-collapse">
<ul class="li nav navbar-nav  navbar-right">
<li class="active"><a href="admin.php"><span class="glyphicon glyphicon-dashboard"></span>Dashboard</a></li>
<li ><a href="logout.php"><span class=" glyphicon glyphicon-log-in"></span>  LogOut</a></li>

</ul>
</div>



 
 </div>
                   </nav>
                </div><!-- end of column -->
          </div><!-- end of row -->
 </div><!-- end of con-fluid -->
 
<!-- menus goes here -->
   
   
<div class="container">
    <div class="row">
      
      <div class="bor_line col-md-12">
      <div class="title page-header">
      
          <h1 style="color:#000000; font-family:Tahoma; font-size:14px; font-weight:bold"> Admin Dashboard</h1>
          
      </div>
      
         
                <div class="container">
                      <div class="row">
                            <div class="col-md-6">
                                  <div class="holder">
                                  
                                       <center>
                                           <div class="block">
                                              CLICK TO CREATE A USER<br/>
                                           <br/>
                                              <div class="btn btn-danger" id="myBtn"> Click me!</div> <!-- end of btn -->
                                           </div><!-- end of block-->
                                       </center>
                                  
                                  </div><!-- end of holder -->
                                  
                            </div><!-- end of col-md-6 -->
                            
                            <!-- 2nd column starts here -->
                            
                            <div class="col-md-6">
                                  <div class="holder">
                                  
                                       <center>
                                           <div class="block">
                                              CLICK TO VIEW USERS<br/>
                                           <br/>
                                              <div class="btn btn-danger"  id="myBtn1" onClick="modal2();"> Click me!</div> <!-- end of btn -->
                                           </div><!-- end of block-->
                                       </center>
                                  
                                  </div><!-- end of holder in 2nd col -->
                                  
                            </div><!-- end of col-md-6 in 2nd col -->
                            
                                     
                         
                      </div><!-- end of 2nd row -->
                      
                      <!-- start of 3rd and 4th cols -->
                      
                      
                                
                      <div class="row">
                            <div class="col-md-6">
                                  <div class="holder">
                                  
                                       <center>
                                           <div class="block">
                                              CLICK TO EDIT USER<br/>
                                           <br/>
                                              <div class="btn btn-danger"  id="myBtn2" onClick="modal3();"> Click me!</div> <!-- end of btn -->
                                           </div><!-- end of block-->
                                       </center>
                                  
                                  </div><!-- end of holder -->
                                  
                            </div><!-- end of col-md-6 -->
                            
                            <!-- 2nd column starts here -->
                            
                            <div class="col-md-6">
                                  <div class="holder">
                                  
                                       <center>
                                           <div class="block">
                                              CLICK TO DELETE USERS<br/>
                                           <br/>
                                              <div class="btn btn-danger"> Click me!</div> <!-- end of btn -->
                                           </div><!-- end of block-->
                                       </center>
                                  
                                  </div><!-- end of holder in 2nd col -->
                                  
                           
                            
                                     
                         
                      </div><!-- end of 2nd row -->  
                      
                     <!-- all modals stay here --> 
                      

                    <!-- Trigger/Open The Modal -->



<!-- The Modal -->
<div id="myModal" class="modal fixed">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">×</span>
    <div class="page-header"><h1>New User</h1></div>
  <form action="dashboard.php" method="post">
  <select id="accesslevel" name="accesslevel" class="form-control " >
                                   <option value="">Select level</option>
                                   <script>
                                    for (var i=1; i <= 4; i++ ){
									document.write("<option>"+i+"</option>");
									}
                                   </script>
                                   </select>
                                   <br/>
  <input type="text" id="username" name="username" placeholder="Enter Username" class="form-control" >
  <br/>
   <input type="password" id="password" name="password" placeholder="Enter Password" class="form-control" >
   <br/>
   
   <input type="submit" id="submit" name="submit" class="btn btn-success" value="CREATE"  class="form-control" > &nbsp; 
                                   
  </form>
  </div>

</div>




<!-- The Modal -->
<div id="myModal1" class="modal1">

  <!-- Modal content -->
  <div class="modal-content1">
    <span class="close1">×</span>
       
       <table class="table" border="1" cellpadding="10" cellspacing="5" style="border-color:#111111;">

	<th>USER ID</th> <th>USER ACCESS LEVEL</th> <th>USER NAME</th> <th>USER PASSWORD</th> <th>DATE CREATED</th><th>LAST LOGIN DATE</th>



</table>
    
  </div>

</div>

<!-- The Modal -->
<div id="myModal2" class="modal2">

  <!-- Modal content -->
  <div class="modal-content2">
    <span class="close2">×</span>
       
       <table class="table" border="1" cellpadding="10" cellspacing="5" style="border-color:#111111;">

 

</table>
    
  </div>

</div>

    
                     <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script> 


          </div><!-- end of 2nd container -->
                
                <!-- footer -->
                    
                <div class=" container-fluid">
                     
                     <div class="row">
                     
                           <div class="col-md-12">
                           
                           <div class="page-header"></div>
                           <p class="lead">&copy; Copyright Of Business Edge Inc.</p>
                           </div><!-- end of footer col-md-12-->
                           
                     </div><!-- end of footer row -->
                    
                </div><!-- end of footer container-fluid -->
                
     
      </div><!-- end of 1st col-md-12 -->
      
    </div><!-- end of 1st row -->
</div><!-- end of 1st container -->

</body>
</html>