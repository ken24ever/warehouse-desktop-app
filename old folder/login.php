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
 .label{ color:#FF3300;}

 </style>
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
 <a class="logo navbar-brand" href="#"><strong class="logo">BUSINESS EDGE</strong></a>
</div>
<div class="collapse navbar-collapse" id="example-navbar-collapse">
<ul class="li nav navbar-nav  navbar-right">
<li><a href="admin.php">Admin</a></li>





<li class="active" ><a href="login.php"><span class=" glyphicon glyphicon-log-in"></span>  LogIn</a></li>

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
      
      <div class="col-md-12">
      <div class="title page-header">
      
          <h1 style="color:#000000; font-family:Tahoma; font-size:14px; font-weight:bold"> Login User</h1>
          
      </div>
      
      
      <form role="form"  method="post" action="signup.php" class="form"  >
      
         <div class="form-group col-md-8">
                                 
                                 <label class="label" for="username">Username</label>
                                 <input type="text" id="username" name="username" placeholder="Enter Username" class="form-control" >
                           
                       </div>
                         
                       <div class="form-group col-md-8">
                                 
                                 <label class="label" for="password">Password</label>
                                 <input type="text" id="password" name="password" placeholder="Enter Password" class="form-control" >
                           
                       </div> 
                       
                        <div class="form-group col-md-8">
                                 
                                 
                                 <input type="submit" id="submit" name="submit" class="btn btn-success" value="Login"  class="form-control" >
                           
                              </div>            
      </form>
     
      </div>
      
    </div>
</div>

</body>
</html>