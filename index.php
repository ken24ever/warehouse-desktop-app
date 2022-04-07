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
 body { margin:60px auto; background-color:#F2F2F2; padding:0px;}
  .navbar{ height:55px;}
 .wel_note{ height:100px; background-image:url(images/slate_bg.jpg);  border-radius:20px; box-shadow:#737373 1px 14px 14px 0px;}
 .welcome_note{ padding:30px;letter-spacing:5px; }
 .tabular_layout{height:300px;}
 .content_1{ background-color:#CCCCFF; height:400px;}
 .logo{ color:#F2F2F2; font-family:Tahoma;  letter-spacing:6px; richness:inherit; font-size:35px; padding:0px 30px}
 .caption{ z-index:100; margin:10px auto;}
 .image{ z-index:0}
 .li{ padding-right:72px; font-size:16px; font-weight:600; }
#footer{ font-size:12px;}
.text_2{box-shadow:#737373 1px 14px 14px 0px;}
/*.ani_lightHus{ border:1px red solid; height:700px; width:400px;}*/
 
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
  $('.preloader').addClass('complete');
});


 // animation section
 function animElem1(){
 var animateNam = 'animated rollOut ';
 var animationend ='webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationEnd animationEnd'
 $(document).ready(function(e){
 
 $(".others").addClass(animateNam).one(animationend, function(){ $(this).removeClass(animateNam)})
 })
 
 
 }
 
 setInterval('animElem1()',2100);
 

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

<body bgcolor="#000000">
  <div class="container-fluid">
          <div class="row">
         
                 <div class="col-md-12">
             <!-- Navigation section -->
                      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                     <div class="navbar-header">
<button type="button" class="navbar-toggle " data-toggle="collapse"
data-target="#example-navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
 <a class="logo navbar-brand" href="#"><strong class="logo"><img src="images/b-edge.png" width="202" height="48"></strong></a>
</div>
<div class="collapse navbar-collapse" id="example-navbar-collapse">
<ul class="li nav navbar-nav  navbar-right">
<li ><a href="admin.php">Admin</a></li>
<li  ><a href="login.php"><span class=" glyphicon glyphicon-log-in "></span>  LogIn</a></li>

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
          <center><p class="welcome_note lead"> <strong style="font-size:36px; font-family:Tahoma; color:#F2F2F2; " class="welcome"><i>WELCOME</i></strong><em style=" color:#FFFFFF; "><small class="others">  TO   B-EDGE  DIGITAL PLATFORM</small></em></p></center>
        </div><!-- end of wel_note -->
    </div><!-- end of row -->
 
          <div class="row">
 
                <div class="tabular_layout col-md-12 ">
                    <div class="preloader ">
               <div class="loader"></div>
               </div>
               
               <table class="table ">
               
               <tr>
               
               <td>
               <center>
               
             <a href="login.php" >  <img src="images/web_img1.png" class=" image img-thumbnail img-circle img-responsive" height="300" width="600" title="login as a user"></a>
               </center>
               <center>
               <div class=" caption ">
               
              <button class="text_2 btn btn-success"> B-edge Warehouse Management System.</button>
               
               </div>
               </center>
               </td>
               
               </tr>
               
               
               <tr >
               
               <td>
               <div class="container-fluid">
               <div class="row">
               <div class="col-md-12">
               
               <p class="lead" id="footer">&copy; B-edge Inc.</p>
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
