<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="animate.css-master/animate.min.css">
<link rel="stylesheet" href="animate.css-master/animate.min.css">
<script src="js/jquery-3.2.1.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/edit_all.js"></script>
 <style type="text/css">
 body { margin:55px auto;background-color:#F2F2F2;}
 .wel_note{ height:100px; background-image:url(images/slate_bg.jpg); border-radius:20px; }
 .welcome_note{ padding:30px;letter-spacing:5px;}
 .tabular_layout{height:300px;}
 .content_1{ background-color:#CCCCFF; height:400px;}
 .logo{ color:gold; font-family:Tahoma; letter-spacing:6px; font-size:28px; padding-left:20px;}
 .caption{ z-index:100; margin:10px auto;}
 .image{ z-index:0}
 .nav{ padding-left:100px;}
 .li{ padding-right:72px; font-family:Tahoma; font-size:16px; font-weight:600; }
 .label{ color:#FF3300;}
 .footer{ margin:0px auto;}
 
 
 /* dashboard styling*/
 
 .holder{ height:200px; }
 .holder2{height:200px; }
 .holder3{height:200px; }
 .holder4{height:200px; }
.block{margin:35px auto; width:300px; height:200px; border:6px blue outset;  background-image:url(images/slate_bg.jpg); color:#FFFFFF; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:18px; border-radius:25px; box-shadow:#737373 1px 14px 14px 0px}
.btn{ font-size:18px; font-weight:bold;}
.bor_line{ border-radius:20px;}
.text-center{ padding:70px 9px;; font-family:Tahoma; font-size:30px; font-weight:800;}
.text-center1{padding:70px 2px;}
 td:hover{ background-color:#66CC33}
 .gly{ color:#0000CC;font-size:36px; margin:-150px; font-size:36px}



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
    background-color:#F2F2F2;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
	border-radius:30px;
    width: 40%; /* Could be more or less, depending on screen size */
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
    color: red;
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
    background-color:#F2F2F2;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
	border-radius:30px;
    width: 50%; /* Could be more or less, depending on screen size */
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
    color: red;
    text-decoration: none;
    cursor: pointer;
}


/* 3rd modal styling */

 /* The Modal (background) */
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
   background-color:#F2F2F2;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
	border-radius:30px;
    width: 50%; /* Could be more or less, depending on screen size */
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
    color: red;
    text-decoration: none;
    cursor: pointer;
}


/* 4th modal styling */

 /* The Modal (background) */
.modal3 {
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
.modal-content3 {
    background-color:#F2F2F2;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
	border-radius:30px;
    width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close3{
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close3:hover,
.close3:focus {
    color: red;
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
 
 $("btn").addClass(animateNam).one(animationend, function(){ $(this).removeClass(animateNam)})
 })
 
 
 }
 
 setInterval('animElem()',3000);
 
//hover effects
  $(document).ready(function() {
  $(".block, .logo").hover(
  function(){
  $(this).css({"transform":"scale(1.1,1.1)"})
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
<script src="js/4thmodal.js"></script>
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
 <a class="logo navbar-brand" href="#"><strong class="logo"><img src="images/logo1.png" width="324" height="30"></strong></a>
</div>
<div class="collapse navbar-collapse" id="example-navbar-collapse">
<ul class="li nav navbar-nav  navbar-right">
<li class="effects"><a href="dashboard.php"><span class="glyphicon glyphicon-dashboard"></span>Dashboard</a></li>
<li class="effects active"><a href="view_log_file.php">View Log file</a></li>
<li class="effects" ><a href="admin.php"><span class=" glyphicon glyphicon-log-in"></span>  LogOut</a></li>

</ul>
</div>



    </div><!-- end of 1st col-md-12 -->
      
    </div><!-- end of 1st row -->
</div><!-- end of 1st container -->

</body>
</html>                                                                                                                                                                                                                                                                                                                                                                                         </div><!-- end of 1st col-md-12 -->
      
    </div><!-- end of 1st row -->
</div><!-- end of 1st container -->

</body>
</html>