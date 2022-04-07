<?php

          $messg="";
		  $uid = 0;

          if( isset($_POST["username"]) && isset($_POST["password"]) ){

                class MyDB extends SQLite3{

                     function __construct(){

                         $this->open("my_database.db");
                     }
                }
                $db = new MyDB();

                $username = $_POST["username"];
                $password= $_POST["password"];

               

                $sql = "SELECT user_id,user_access_level FROM users WHERE user_name ='$username' AND new_pass = '$password' ";
                $ret =$db->query($sql);

                while($row = $ret ->fetchArray(SQLITE3_ASSOC)){

                  $id = $row["user_id"];
				  $ulevel = $row["user_access_level"];
				  ++$uid;
                }
				if($uid == 0){
					$messg .= "Invalid Username or password";
				}else{


				        switch($ulevel){
						
						
						   
					       case 1:
						   header('Location: wh_mangr_dashboard.php');
						   exit();
						   break;
						   
						   case 2:
						   header('Location: sales_personnel.php');
				           exit();
                           break;
						   
						   case 3:
						   header('Location: account_audit.php');
                           exit();
                           break;		
						   				   
						   case 4:
						   header('Location: general_manager.php');
                           exit();
                           break;		
						   				   
						   case 5:
						   header('Location: ceo.php');
                           exit();
                           break;
						   
						}
						
						}

              
             
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
 <style type="text/css">
 body { margin:100px auto; background-color:#F2F2F2;}
  .navbar{ height:55px;}
 .wel_note{ height:100px; background-image:url(images/slate_bg.jpg); border-radius:20px; }
 .welcome_note{ padding:30px;letter-spacing:5px;}
 .tabular_layout{height:300px;}
 .content_1{ background-color:#CCCCFF; height:400px;}
 .logo{ color:gold; font-family:Tahoma; letter-spacing:6px; font-size:28px;padding:0px 25px}
 .caption{ z-index:100; margin:10px auto;}
 .image{ z-index:0}
 .nav{ padding-left:100px;}
 .li{ padding-right:72px; font-size:16px; font-weight:600;}
 .label{ color:#FF3300; font-size:14px; font-family:Tahoma;}
 
 /*  page preloader  */
.preloader{ position:fixed; top:0; left:0; width:100%; height:100%; /*background:#000;*/ transition:4s;}
.preloader:before{ content:''; position:absolute; left:0; width:50%; height:100%; background:#000; transition:4s;}
.preloader.complete:before{ left:-50%;}
.preloader:after{ content:''; position:absolute; right:0; width:50%; height:100%; background:#000; transition:4s;}
.preloader.complete:after{ right:-50%;}
.preloader.complete{
opacity: 0;
visibility:hidden;
pointer-events:none;
}

/*  page loader  */

.loader{ position:absolute; top:50%; left:50%; transform: translate(-50%, -50%); width:40px; height:40px; box-sizing:border-box; border:3px solid #fff; animation: animate 8s linear infinite; z-index:10000;
 }
 .loader:before{ content:''; position:absolute; top:0; left:0; right:0; bottom:0; background:#000000; animation:animateBg 2s linear infinite;
 }
 @keyframes animate{
    0%
	{
	  transform: translate(-50%, -50%) rotate(0deg);
	}
    25%
	{
	transform: translate(-50%, -50%) rotate(180deg);
	}
	50%
	{
	transform: translate(-50%, -50%) rotate(180deg);
	}
	75%
	{
	transform: translate(-50%, -50%) rotate(360deg);
	}
	100%
	{
	transform: translate(-50%, -50%) rotate(360deg);
	}
	
 
 }
 
  @keyframes animateBg{
  0%
  {
   height: 0;
   background:#000000;
  
  }
  25%
  {
   height: 25%;
   background:#FFFFFF ;
   }
  50%
  {
   height: 50%;
   background:#FFFFFF;
   
  }
    75%
  {
   height: 75%;
   background:#FFFFFF ;
   
  }
    100%
  {
   height: 100%;
   background:#FFFFFF;
    
  }
  }

 </style>
 <script type="text/javascript">
 $(window).on('load', function(){
  $('.preloader').addClass('complete')
});
 
 // animation section
 function animElem(){
 var animateNam = 'animated  rollOut rollIn';
 var animationend ='webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationEnd animationEnd'
 $(document).ready(function(e){
 
 $(".label_title").addClass(animateNam).one(animationend, function(){ $(this).removeClass(animateNam)})
 })
 
 
 }
 
 setInterval('animElem()',3000);
 
  //hover effects
  $(document).ready(function() {
  $(".logo").hover(
  function(){
  $(this).css({"transform":"scale(1.1,1.1)"})
  $(this).css({"transition":".8s"})
  

  },
  
 function(){
 $(this).css({"transform":"scale(1.0,1.0)"})
  
 }
 
  )		
 })
 

 
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
 <a class="logo navbar-brand" href="index.php"><strong class="logo"><img src="images/b-edge.png" width="202" height="48"></strong></strong></a>
</div>
<div class="collapse navbar-collapse" id="example-navbar-collapse">
<ul class="li nav navbar-nav  navbar-right">
<li><a href="index.php">Back</a></li>
<li><a href="admin.php">Admin</a></li>
<li class="" ><a href="login.php"><span class=" glyphicon glyphicon-refresh"></span>&nbsp;Refresh</a></li>
<li class="active" ><a href="login.php"><span class=" glyphicon glyphicon-log-in"></span>&nbsp;LogIn</a></li>

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
      
          <h2 style="color:#000000; font-family:Tahoma;  font-weight:bold"> Login User</h2>
          
           <div class="preloader ">
               <div class="loader"></div>
               </div>
               
      </div>
      
      
      <form role="form"  method="post" action="login.php" class="form"  >
      
         <div class="form-group col-md-8">
                                 
                                 <label class="label" for="username">STAFF ID</label>
                                 <br/> 

                                 <input type="text" id="username" name="username" placeholder="Enter Staff ID" class="form-control" >
                           
                       </div>
                         
                       <div class="form-group col-md-8">
                                 
                                 <label class="label" for="password">STAFF PASSWORD</label>
                                 <br/>

                                 <input type="password" id="password" name="password" placeholder="Enter Staff Password" class="form-control" >
                           
                       </div> 
                       
                       
                        <div class="form-group col-md-8">
                  
                               <a href="reset_pass.php"><small><p class="text" style="color:#FF0000; font-family:Verdana; font-weight:500" > Reset Password </p></small></a>
                           
                       </div> 
                       
                        <div class="form-group col-md-8">
                                 
                                 
                                 <input type="submit" id="submit" name="submit" class="btn btn-success" value="Login"  class="form-control">
                                 <?php echo $messg; ?>
                              </div>            
      </form>
     
      </div>
      
    </div>
</div>

</body>
</html>