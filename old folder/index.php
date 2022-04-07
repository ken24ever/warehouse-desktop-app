<html>
<head>
<title>home</title>
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
 .logo{ color:gold; font-family:Tahoma; letter-spacing:6px; richness:inherit; font-size:28px;}
 .caption{ z-index:100; margin:10px auto;}
 .image{ z-index:0}
 .li{ padding-right:72px; }
 
 /* 3D EFFECT */

 </style>
 
 <script type="text/javascript">
 // animation section
 function animElem(){
 var animateNam = 'animated rollIn ';
 var animationend ='webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationEnd animationEnd'
 $(document).ready(function(e){
 
 $(".welcome").addClass(animateNam).one(animationend, function(){ $(this).removeClass(animateNam)})
 })
 
 
 }
 
 setInterval('animElem()',2000);
 
 // animation section
 function animElem1(){
 var animateNam = 'animated rollOut ';
 var animationend ='webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationEnd animationEnd'
 $(document).ready(function(e){
 
 $(".others").addClass(animateNam).one(animationend, function(){ $(this).removeClass(animateNam)})
 })
 
 
 }
 
 setInterval('animElem1()',2100);
 
 // animation section
 function animElem3(){
 var animateNam = 'animated shake ';
 var animationend ='webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationEnd animationEnd'
 $(document).ready(function(e){
 
 $(".logo").addClass(animateNam).one(animationend, function(){ $(this).removeClass(animateNam).slow(1000)})
 })
 
 
 }
 
 setInterval('animElem3()',4100);
 
 //hover effects
  $(document).ready(function() {
  $(".image").hover(
  function(){
  $(this).css({"transform":"scale(0.9,0.9)"})
  $(this).css({"transition":"1.5s"})
  

  },
  
 function(){
 $(this).css({"transform":"scale(1.0,1.0)"})
  
 }
 
  )		
 
 
 })

 // animation section
 function animElem4(){
 var animateNam = 'animated rollIn rollOut rollIn';
 var animationend ='webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationEnd animationEnd'
 $(document).ready(function(e){
 
 $(".text_1").addClass(animateNam).one(animationend, function(){ $(this).removeClass(animateNam)})
 })
 
 
 }
 setInterval('animElem4()',2000);
 
  // animation section
 function animElem5(){
 var animateNam = 'animated rollIn rollOut rollIn';
 var animationend ='webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationEnd animationEnd'
 $(document).ready(function(e){
 
 $(".text_2").addClass(animateNam).one(animationend, function(){ $(this).removeClass(animateNam)})
 })
 
 
 }
 setInterval('animElem5()',2000);
</script>
</head>

<body>
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
<li ><a href="admin.php">Admin</a></li>
<li  ><a href="login.php"><span class=" glyphicon glyphicon-log-in"></span>  LogIn</a></li>

</ul>
</div>



 
 </div>
                   </nav>
                </div><!-- end of column -->
          </div><!-- end of row -->
 </div><!-- end of con-fluid -->
 


 
 <div class="container">
 
    <div class="row">
    
         <div class=" wel_note col-md-12">
          <center><p class="welcome_note lead"> <strong style="font-size:36px; font-family:Tahoma; color:#E6E600;" class="welcome"><i>WELCOME</i></strong><em style=" color:#FFFFFF; "><small class="others">  TO BUSINESS EDGE INVENTORY MANAGEMENT SYSTEM</small></em></p></center>
        </div><!-- end of wel_note -->
    </div><!-- end of row -->
 
          <div class="row">
 
                <div class="tabular_layout col-md-12 ">
                    
               <table class="table ">
               
               <tr>
               <td>
               <img src="images/web_img1.png" class="  image img-thumbnail img-circle img-responsive" height="300" width="600">
               <center>
               <div class=" caption ">
               
              <button class="text_1 btn btn-success"> business edge inventory management system suite!!!</button>
               
               </div>
               </center>
               </td>
               
               <td>
               
               <img src="images/web_img2.png" class=" image img-thumbnail img-circle img-responsive" height="300" width="600">
               <center>
               <div class=" caption ">
               
              <button class="text_2 btn btn-success"> business edge inventory management system suite!!!</button>
               
               </div>
               </center>
               </td>
               </tr>
               
               <tr >
               
               <td>
               <div class="container-fluid">
               <div class="row">
               <div class="col-md-12">
               
               <p class="lead">&copy; Copyright Of Business Edge Inc.</p>
               </div>
               </div>
               </div>
               </td>
               
               </tr>     
              </table>
                 </div><!-- end of tabular_layout -->
                 
                 
 
          </div><!-- end of inner row -->
          
          
 </div><!-- end of container -->
 
        
          
 </div><!-- end of container -->
</body>
</html>
