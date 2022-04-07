<?php
     $status = "";
     $id = "";
     if (isset($_POST["accs"]) && isset($_POST["usr"]) && isset($_POST["pwrd"]) ){
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
         $accesslevel = $_POST["accs"]; // filter everything but numbers and letters
         $username =$_POST["usr"]; // filter everything but numbers and letters
         $password =$_POST["pwrd"]; 

      $sql = "SELECT * FROM users WHERE user_name= '$username' AND user_password= '$password' LIMIT 1";
      $ret = $db->query($sql);
      while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      $id .= $row['user_id'];
      $access_level=$row['user_access_level'];
      $username=$row["user_name"];
      $password=$row['user_password'];
      }
      if ($id!=""){
        if ($password==$_POST["pwrd"]){
           header('Location: dashboard.php');    
        }else{
          
          $status .= "Wrong Password";
        }
      }else{
       $status .= '<div class="alert alert-danger"> <div class="panel-body">Invalid Username or Password</div> </div>';
      }
   //echo "Operation done successfully\n";
   $db->close();
     }
?>

<html>
<head>
<title>ADMIN/LOGIN</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="animate.css-master/animate.min.css">
<link rel="stylesheet" href="animate.css-master/animate.min.css">
<script src="js/jquery-3.2.1.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
  <script src="js/ajax.js"></script>
  <script src="js/main.js"></script>
 <style type="text/css">
 body { margin:100px auto}
 .wel_note{ height:100px; background-image:url(images/slate_bg.jpg); border-radius:20px; }
 .welcome_note{ padding:30px;letter-spacing:5px;}
 .tabular_layout{height:300px;}
 .content_1{ background-color:#CCCCFF; height:400px;}
 .logo{ color:gold; font-family:Tahoma; letter-spacing:6px; font-size:28px;}
 .caption{ z-index:100; margin:10px auto;}
 .image{ z-index:0}
 .nav{ padding-left:100px;}
 .li{ padding-right:72px; }
 .label{ color:#FF3300; font-size:14px; font-family:Tahoma;}
 
 /* styling for roller */

.loader {
  border: 5px solid #f3f3f3;
  border-radius: 50%;
  border-top: 5px solid #3498db;
  width: 300px;
  height: 300px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}



@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}







 </style>
 <script type="text/javascript">
   
   function admin(){
   
      var access_lev = _("accesslevel").value;
    var usrname = _("username").value;
       var pass = _("password").value
     
     if ( access_lev == "" && usrname == "" && pass == ""){
     
         _("roller").innerHTML = '<center><div class="alert alert-danger">Fill in all fields!</div></center>'
       
           } else {
              
          _("roller").innerHTML = '<center><div class="loader"></div></center>';
         var ajaxobj = ajaxObj("POST", "admin.php");
         ajaxobj.send("accs="+access_lev+"&usr="+usrname+"&pwrd="+pass);
         ajaxobj.onreadystatechange = function(){
                
            // here we know if responseText is true or false
                   if (ajaxobj.responseText == false ){
               
                     _("roller").innerHTML =ajaxobj.responseText;
                       
                        }//end of if statement ajax.responsetxt
                          else{
                window.location='http://localhost/project_101/dashboard.php';
                }//end of else
                
                
                
              }//end of onreadystatechange function
         
         }// end of if for validation
   
   }// end of admin function
 
 
  function modal(){

 }// end of modal
 </script>
 
 <script type="text/javascript">
 // animation section
 function animElem(){
 var animateNam = 'animated  rollOut rollIn';
 var animationend ='webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationEnd animationEnd'
 $(document).ready(function(e){
 
 $(".label_title").addClass(animateNam).one(animationend, function(){ $(this).removeClass(animateNam)})
 })
 
 
 }
 
 setInterval('animElem()',3000);
 

 
</script>
</head>

<body>
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
 <a class="logo navbar-brand" href="index.php"><strong class="logo">BUSINESS EDGE</strong></a>
</div>
<div class="collapse navbar-collapse" id="example-navbar-collapse">
<ul class="li nav navbar-nav  navbar-right">
<li><a href="index.php">Back</a></li>
<li class="active"><a href="admin.php">Admin</a></li>
<li ><a href="login.php"><span class=" glyphicon glyphicon-log-in"></span>  LogIn</a></li>

</ul>
</div>



 
 </div>
                   </nav>
                </div><!-- end of column -->
          </div><!-- end of row -->
 </div><!-- end of con-fluid -->
<!-- form section goes here -->
   
   
<div class="container">
    <div class="row">
      
      <div class="col-md-6">
      <div class="title page-header">
      
          <h2 style="color:#000000; font-family:Tahoma;  font-weight:bold"> ADMIN </h2>
          
      </div>
      
      
      <form role="form"  method="post" action="admin.php" class="form"  onSubmit="return false" >
      
                                    <div class="form-group col-md-8">
                                  
                                   <label class="label" for="access">Access Level</label>
                                   <select id="accesslevel" name="accesslevel" class="form-control" >
                                   <option value="">Select level</option>
                                   <script>
                                    for (var i=1; i <= 4; i++ ){
                  document.write("<option>"+i+"</option>");
                  }
                                   </script>
                                   </select>
                                  </div>
                                  
                                  <div class="form-group col-md-8">
                                 
                                 <label class="label" for="name">Name</label>
                                 <input type="text" id="username" name="username" placeholder="Enter username" class="form-control" >
                           
                              </div>
                              
                              <div class="form-group col-md-8">
                                 
                                 <label class="label" for="Password">Password</label>
                                 <input type="password" id="password" name="password" placeholder="Enter Password" class="form-control" >
                           
                              </div>
                              
                              <div class="form-group col-md-8">
                                 
                                 <input  type="submit" id="submit" name="submit" class="btn btn-success" value="Create" onClick="admin()"  class="form-control" >
                           
                              </div>
                              
                              <div class="form-group col-md-8">
                                <!-- <center><div class="loader"></div></center> -->
                                <div id="roller"><?php echo $status; ?></div>  
                                
                               
                              </div>
                                  
      </form>
     
      </div>
      
    </div>
</div>

</body>
</html>