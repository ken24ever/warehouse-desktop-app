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
  <script src="js/ware_js.js"></script>

 <style type="text/css">
 body { margin:55px auto;background-color:#F2F2F2;}
 .navbar{ height:55px;}
 .wel_note{ height:100px; background-image:url(images/slate_bg.jpg); border-radius:20px; }
 .welcome_note{ padding:30px;letter-spacing:5px;}
 .tabular_layout{height:300px;}
 .content_1{ background-color:#CCCCFF; height:400px;}
 .logo{ color:gold; font-family:Tahoma; letter-spacing:6px; font-size:28px; padding:0px 30px}
 .caption{ z-index:100; margin:10px auto;}
 .image{ z-index:0}
 .nav{ padding-left:100px;}
 .li{ padding-right:72px; font-family:Tahoma; font-size:16px; font-weight:600; }
 .label{ color:#FF3300;}
 .footer{ margin:12px auto; font-size:12px;}



 /* dashboard styling*/
 
 .holder{ height:200px; }
 .holder2{height:200px; }
 .holder3{height:200px; }
 .holder4{height:200px; }
.block{margin:35px auto; width:300px; height:200px; border:6px #666666 outset;  background-image:url(images/slate_bg.jpg); color:#FFFFFF; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:18px; border-radius:50%; box-shadow:#737373 1px 14px 14px 0px}
.btn{ font-size:18px; font-weight:bold;}
.bor_line{ border-radius:20px;}
.text-center{ padding:70px 18px; font-family:Tahoma; font-size:30px; font-weight:800; }

 td:hover{ background-color:#66CC33}
 .gly{ color:#0000CC;font-size:36px; margin:-150px; font-size:36px}
 #live{ padding:-20px;}
.pur_report{ height:15%; width:80%; box-shadow:#737373 1px 14px 14px 0px; font-size:24px}

   
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
  
  /*1st  The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 90%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

/*2nd The Modal (background) */
.modal1 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content1 {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 50%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close1 {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close1:hover,
.close1:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header1 {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body1 {padding: 2px 16px;}

.modal-footer1 {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

/* stock modal*/
.modal2 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content2 {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 90%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close2 {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close2:hover,
.close2:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header2 {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body2 {padding: 2px 16px;}

.modal-footer2 {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

/* sales report */
.modal3 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content3 {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 90%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close3 {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close3:hover,
.close3:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header3 {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body3 {padding: 2px 16px;}

.modal-footer3 {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

/* expense report */
.modal4 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content4 {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 90%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close4 {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close4:hover,
.close4:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header4 {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body4 {padding: 2px 16px;}

.modal-footer4 {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

/* supplier report */
.modal5 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content5 {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 90%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close5 {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close5:hover,
.close5:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header5 {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body5 {padding: 2px 16px;}

.modal-footer5 {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

/* profit report */
.modal6 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content6 {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 90%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close6 {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close6:hover,
.close6:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header6 {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body6{padding: 2px 16px;}

.modal-footer6 {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

/* dealer */
.modal7 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content7 {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 90%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close7 {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close7:hover,
.close7:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header7 {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body7{padding: 2px 16px;}

.modal-footer7 {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

/* VAT */
.modal8 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content8 {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 90%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close8{
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close8:hover,
.close8:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header8 {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body8{padding: 2px 16px;}

.modal-footer8 {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}
 </style>
 <script type="text/javascript">
 $(window).on('load', function(){
  $('.preloader').addClass('complete');
});

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
 
// effect of add customer
$(document).ready(function (){

// we hide form2&3
$("#form_add_cust").show();
$("#liveDisp_customer").hide();
$(document). on('click','#searchcust', function(){
var search_customer = $("#customerSearch").val();
	if (search_customer == ""  ){
	
			return false;
  
  }else{
   $("#form_add_cust").slideUp(1000)
  $("#liveDisp_customer").fadeIn(2200);
  }

//

}); // end of on

$(document). on('click','#go_back', function(){
    
  $("#liveDisp_customer").fadeOut(2200);
  $("#form_add_cust").slideDown(1000)
//

}); // end of on

});//end of ready
 
 //effect of category
 $(document).ready(function (){
$("#cat_form").show();
$("#live_category").hide();
$(document). on('click','#searchcat', function(){
var search_cat = $("#categorysearch").val();
	if (search_cat == ""  ){
	
			return false;
  
  }else{
   $("#cat_form").slideUp(1000)
  $("#live_category").fadeIn(2200);
  }

//

}); // end of on

$(document). on('click','#searchcat2', function(){
    
  $("#live_category").fadeOut(2200);
  $("#cat_form").slideDown(1000)
//

}); // end of on
});//end of ready
 
 
 //effect of expenses
 $(document).ready(function (){
$("#exp_form").show();
$("#display_expenses").hide();

$(document).on('click','#search_exp', function(){
var search_expenses = $("#exp_search").val();
	if (search_expenses == ""  ){
	
			return false;
  
  }else{
   $("#exp_form").slideUp(1000)
  $("#display_expenses").fadeIn(2200);
 
  }

//

}); // end of on

$(document). on('click','#searchexp', function(){
    
  $("#display_expenses").fadeOut(2200);
  $("#exp_form").slideDown(1000)
//

}); // end of on
});//end of ready
 
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
 <a class="logo navbar-brand" href="#"><strong class="logo"><img src="images/b-edge.png" width="202" height="48"></strong></a>
</div>
<div class="collapse navbar-collapse" id="example-navbar-collapse">
<ul class="li nav navbar-nav  navbar-right">
<li class="" ><a href="account_audit.php"><span class=" glyphicon glyphicon-refresh"></span>&nbsp;Refresh</a></li>
<li class="effects" ><a href="admin.php"><span class=" glyphicon glyphicon-log-out"></span>&nbsp;LogOut</a></li>

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
      
          <h2 style=" font-family:Tahoma;  font-weight:bold"> ACCOUNT/AUDIT DASHBOARD</h2>
          <div class="preloader ">
               <div class="loader"></div>
               </div>
      </div>
      
         
                <div class="container">
                      <div class="row">
                            <div class="col-md-6">
                                  <div class="holder">
                                  
                                       <center>
                                           <div class="block" id="myBtn">
                                           
                                              <div class="text-center"><center><img src="images/reporting.png" width="324" height="45"></center></div>
                                             
                                              
                                           </div><!-- end of block-->
                                       </center>
                                  
                                  </div><!-- end of holder -->
                                  
                            </div><!-- end of col-md-6 -->
                            
                            
                            
                            <div class="col-md-6">
                                  <div class="holder">
                                  
                                       <center>
                                           <div class="block" id="myBtn1">
                                           
                                              <div class="text-center"><center><img src="images/expenses.png" width="324" height="45"></center></div>
                                             
                                              
                                           </div><!-- end of block-->
                                       </center>
                                  
                                  </div><!-- end of holder -->
                                  
                            </div><!-- end of col-md-6 -->
                            
                            
                                     
                         
                      </div><!-- end of 2nd row -->
                      
                      <!-- start of 3rd and 4th cols -->
                      
                      
                                
                      
                            
                                     
                         
                      </div><!-- end of 2nd row -->  
                      
                     <!-- all modals stay here --> 
                
                <!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close"><button class="btn btn-danger">X</button></span>
      <h2>Modal Header</h2>
    </div>
    <div class="modal-body">
   
     <div class="container">
         <div class="row">
     
             <div class="col-md-12">
             
                   <!-- first inner row -->
                   
                   
                     <div class="row">
                         
                          <!-- first inner col -->
                          <div class="col-md-3">
                          
                           <input  type="submit" name="pur_report" class="pur_report btn btn-success" value="Purchase Report"  class="form-control" >
                          
                          
                          
                          </div><!-- end of inner col-md-3  -->
                          
                             <!-- 2nd inner col -->
                          <div class="col-md-3">
                          
         
                       <input  type="submit" name="Stk_report" id="myBtn2" class=" pur_report btn btn-success" value="Stock Report"  class="form-control" >
   
                          
                          
                          </div><!-- end of inner col-md-3  -->
                          
                          
                           <!-- 3rd inner col -->
                          <div class="col-md-3">
                          
                
                                              <input  type="submit" id="myBtn3" name="sale_report" class="pur_report btn btn-success" value="Sales Report"  class="form-control" >        
                          
                          </div><!-- end of inner col-md-3  -->
                          
                          
                           <!-- 4th inner col -->
                          <div class="col-md-3">
             
                                 <input  type="submit" name="exp_report" id="myBtn4" class="pur_report btn btn-success" value="Expense Report"  class="form-control" >                  
                          
                          </div><!-- end of inner col-md-3  -->
                          
                           
                     </div><!-- end of inner row -->
             
             
             
             
             
             <!-- 2nd inner col -->
             <div class=" page-header"></div>
             <div class="row">
                         
                          <!-- first inner col -->
                          <div class="col-md-3">
                          
                                 <input  type="submit"  id="myBtn5"  name="exp_report" class="pur_report btn btn-success" value="Supplier Report"  class="form-control" >      
                          
                          </div><!-- end of inner col-md-3  -->
                          
                             <!-- 2nd inner col -->
                          <div class="col-md-3">

                                                <input  type="submit" id="myBtn6"  name="pro_report" class="pur_report btn btn-success" value="Profit  Report"  class="form-control" >       
                          
                          </div><!-- end of inner col-md-3  -->
                          
                          
                           <!-- 3rd inner col -->
                          <div class="col-md-3">
         
                                                 <input  type="submit" id="myBtn7" name="dr_report" class="pur_report btn btn-success" value="Dealer  Report"  class="form-control" >
                          </div><!-- end of inner col-md-3  -->
                          
                          
                           <!-- 4th inner col -->
                          <div class="col-md-3">
    
                                                    <input  type="submit" id="myBtn8" name="vat_report" class="pur_report btn btn-success" value="  VAT  Report"  class="form-control" >      
                          </div><!-- end of inner col-md-3  -->
                          
                           
                     </div><!-- end of inner row -->
       
             
             
             
             
             
             
             
             </div><!-- end of col-md-12 -->
     
         </div><!-- end of row -->
     </div><!-- end of container --> 
    </div>
    <div class="modal-footer">
      <h3>Modal Footer</h3>
    </div>
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



<!-- The Modal -->
<div id="myModal1" class="modal1">

  <!-- Modal content -->
  <div class="modal-content1">
    <div class="modal-header1">
      <span class="close1"><button class="btn btn-danger">X</button></span>
      <h2>EXPENSES</h2>
    </div>
    <div class="modal-body1">
         <div class="page-header"><h1>DETAILS</h1></div>

      <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" onSubmit="return false;" id="search_form_expenses">
     <input type="date" id="exp_search" name="exp_ssearch" placeholder="Search Expenses"> 
     <input type="submit" id="search_exp" class="btn btn-success" class="form-control" value="Search" >
     <font size="-1"><button type="button" id="searchexp" class="btn btn-info" >Back</button></font>

   </form>
     <hr/>
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" onSubmit="return false;" id="exp_form" >
   <label class="label" for="expense" style="font-size:18px;">EXPENSE DATE</label>
  <input type="date" id="expdate" name="expdate" placeholder="Expense Date" class="form-control " >
     <br/>

  <label class="label" for="expense"  style="font-size:18px;">EXPENSE CODE</label>
  <input type="text" id="expid" name="expid" placeholder="Expense Code" class="form-control " >
                                             <br/>
   <label class="label" for="expense"  style="font-size:18px;">EXPENSE TITLE</label>
   <input type="text" id="exptitle" name="exptitle" placeholder="Expense Title" class="form-control" >
   <br/>
   
    <label class="label" for="expense"  style="font-size:18px;">EXPENSE PRICE</label>
   <input type="text" id="expprice" name="expprice" placeholder="Expense Price" class="form-control" >
   <br/>
  
    <input type="submit"  id="add_exp" name="add_exp"  class="btn btn-info" value="ADD"  class="form-control" > &nbsp; 
    
                                   
  </form>
  <div id="display_expenses"></div>
    </div>
    
    
    <div class="modal-footer1">
      <h3>Modal Footer</h3>
    </div>
  </div>

</div>


<script>
// Get the modal
var modal1 = document.getElementById('myModal1');

// Get the button that opens the modal
var btn1 = document.getElementById("myBtn1");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close1")[0];

// When the user clicks the button, open the modal 
btn1.onclick = function() {
    modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
    modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}
</script>

                      

          </div><!-- end of 2nd container -->
          <!-- all modals for the buttons stay here -->
          


<!-- The Modal -->
<div id="myModal2" class="modal2">

  <!-- Modal content -->
  <div class="modal-content2">
    <div class="modal-header2">
      <span class="close2">×</span>
      <h2>Modal Header</h2>
    </div>
    <div class="modal-body2">
     <form class="form-horizontal"  role="form" method="post" action=" ">
    
    <fieldset abled>
      <div class="row">
        
        <div class="col-md-6">

          

          <label for="prod" class="col-sm-2 control-label">Product</label>
          <select id="prod" class="form-control">
            <option>Product</option>
          </select>&nbsp;&nbsp;&nbsp;

          <label for="cat" class="col-sm-2 control-label">Category</label>
          <select id="cat" class="form-control">
            <option>Category</option>
          </select> 



          
        </div>
      </div>
      
    </fieldset>


     
  </form>
  <center><h2 style="color:#000000; font-family:Tahoma;  font-weight:bold"> Stock Table/Content </h2></center>
  <form class="form-horizontal" role="form" method="post" action="">           
  <center><table class="table" border="1" style="border-collapse: collapse;">
    <thead>
      <tr>
        <th width="8%">Product Code</th>
        <th width="8%">Product Name</th>
        <th width="8%">Category</th>
        <th width="8%">Current Stock</th>
        <th width="8%">Re-Order level</th>
        <th width="8%">Cost Price</th>
        <th width="8%">Selling Price</th>
       
        </tr>
    </thead>
    <tbody>
      <tr>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
      
        
      </tr>
      <tr>  
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        
      </tr>
      <tr>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
      </tr>
    </tbody>
          
  </table></center>
  </form>
    </div>
    <div class="modal-footer2">
      <h3>Modal Footer</h3>
    </div>
  </div>

</div>
           <script>
// Get the modal
var modal2 = document.getElementById('myModal2');

// Get the button that opens the modal
var btn2 = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span2 = document.getElementsByClassName("close2")[0];

// When the user clicks the button, open the modal 
btn2.onclick = function() {
    modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span2.onclick = function() {
    modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}
</script>        
   
   

<!-- The Modal -->
<div id="myModal3" class="modal3">

  <!-- Modal content -->
  <div class="modal-content3">
    <div class="modal-header3">
      <span class="close3">×</span>
      <h2>Modal Header</h2>
    </div>
    <div class="modal-body3">
        <form class="form-horizontal"  role="form" method="post" action=" ">
    
    <fieldset abled>
      <div class="row">
        
        <div class="col-md-6">
          <label for="by1" class="col-sm-2 control-label"> By</label>
          <select id="by1" class="form-control">
            <option>By</option>
          </select>&nbsp;&nbsp;&nbsp;

          <label for="from1" class="col-sm-2 control-label">From</label>
          <input type="date" id="from1" class="form-control" placeholder="date">&nbsp;&nbsp;&nbsp;

          <label for="to1" class="col-sm-2 control-label">To</label>
          <input type="date" id="to1" class="form-control" placeholder="date">

          
        </div>
      </div>
      
    </fieldset>


     
  </form>
  <center><h2 style="color:#000000; font-family:Tahoma;  font-weight:bold"> Sales Table/Content </h2></center>
  <form class="form-horizontal" role="form" method="post" action="">           
  <center><table class="table" border="1" style="border-collapse: collapse;">
    <thead>
      <tr>
        <th width="8%">Product Code</th>
        <th width="8%">Product Name</th>
        <th width="8%">Quantity</th>
        <th width="8%">Price</th>
        <th width="8%">Dicount</th>
        <th width="8%">Payment Mode</th>
        <th width="8%">Total Amount</th>
        <th width="8%">Amount Due</th>
        <th width="8%">Color</th>
        <th width="8%">Cash Received</th>
        <th width="8%">Balance</th>
        </tr>
    </thead>
    <tbody>
      <tr>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
      </tr>
      <tr>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
      </tr>
      <tr>
        <td width="8%"> </td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
      </tr>
    </tbody>
          
  </table></center><br/><br/><br/><br/><br/>
  <div class="row">
        <div class="col-md-6">
          <label for="total" class="col-sm-2 control-label">Total</label>
          <input type="text" id="total" class="form-control" placeholder="total">
        </div>
      </div>
  </form>
    </div>
    <div class="modal-footer3">
      <h3>Modal Footer</h3>
    </div>
  </div>
</div> 

        <script>
// Get the modal
var modal3 = document.getElementById('myModal3');

// Get the button that opens the modal
var btn3 = document.getElementById("myBtn3");

// Get the <span> element that closes the modal
var span3 = document.getElementsByClassName("close3")[0];

// When the user clicks the button, open the modal 
btn3.onclick = function() {
    modal3.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span3.onclick = function() {
    modal3.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal3) {
        modal3.style.display = "none";
    }
}
</script>        
 
 <!-- The Modal -->
<div id="myModal4" class="modal4">

  <!-- Modal content -->
  <div class="modal-content4">
    <div class="modal-header4">
      <span class="close4">×</span>
      <h2>Modal Header</h2>
    </div>
    <div class="modal-body4">
      <form class="form-horizontal"  role="form" method="post" action=" ">
    
    <fieldset abled>
      <div class="row">
        
        <div class="col-md-6">
          
          <label for="from5" class="col-sm-2 control-label">From</label>
          <input type="date" id="from5" class="form-control" placeholder="date">&nbsp;&nbsp;&nbsp;

          <label for="to5" class="col-sm-2 control-label">To</label>
          <input type="date" id="to5" class="form-control" placeholder="date">
          
          
        </div>
      </div>
      
    </fieldset>


     
  </form>
  <center><h2 style="color:#000000; font-family:Tahoma;  font-weight:bold"> Expense Table </h2></center>
  <form class="form-horizontal" role="form" method="post" action="">           
  <center><table class="table" border="1" style="border-collapse: collapse;">
    <thead>
      <tr>
        <th width="200px">Title</th>
        <th width="200px">Amount</th>
        <th width="200px">Title Code</th>
       
        
        </tr>
    </thead>
    <tbody>
      <tr>
        <td width="200px"></td>
        <td width="200px"></td>
        <td width="200px"></td>
        
      </tr>
      <tr>
        <td width="200px"></td>
        <td width="200px"></td>
        <td width="200px"></td>
        

      </tr>
      <tr>
        <td width="200px"></td>
        <td width="200px"></td>
        <td width="200px"></td>
      </tr>
    </tbody>
          
  </table></center>
  
  </form>
    </div>
    <div class="modal-footer4">
      <h3>Modal Footer</h3>
    </div>
  </div>
</div> 

        <script>
// Get the modal
var modal4 = document.getElementById('myModal4');

// Get the button that opens the modal
var btn4 = document.getElementById("myBtn4");

// Get the <span> element that closes the modal
var span4 = document.getElementsByClassName("close4")[0];

// When the user clicks the button, open the modal 
btn4.onclick = function() {
    modal4.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span4.onclick = function() {
    modal4.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal4) {
        modal4.style.display = "none";
    }
}
</script>    



<!-- The Modal -->
<div id="myModal5" class="modal5">

  <!-- Modal content -->
  <div class="modal-content5">
    <div class="modal-header5">
      <span class="close5">×</span>
      <h2>Modal Header</h2>
    </div>
    <div class="modal-body5">
      <form class="form-horizontal"  role="form" method="post" action=" ">
    
    <fieldset abled>
      <div class="row">
        
        <div class="col-md-6">
          <label for="sup_id" class="col-sm-2 control-label"> Supplier ID</label>
          <select id="sup_id" class="form-control">
            <option>Supplier ID</option>
          </select>&nbsp;&nbsp;&nbsp;

          <label for="sup_nam" class="col-sm-2 control-label"> Supplier Name</label>
          <select id="sup_nam" class="form-control">
            <option>Supplier Name</option>
          </select>&nbsp;&nbsp;&nbsp;

          <label for="from2" class="col-sm-2 control-label">From</label>
          <input type="date" id="from2" class="form-control" placeholder="date">&nbsp;&nbsp;&nbsp;

          <label for="to2" class="col-sm-2 control-label">To</label>
          <input type="date" id="to2" class="form-control" placeholder="date">

          
        </div>
      </div>
      
    </fieldset>


     
  </form>
  <center><h2 style="color:#000000; font-family:Tahoma;  font-weight:bold"> Creditors Table </h2></center>
  <form class="form-horizontal" role="form" method="post" action="">           
  <center><table class="table" border="1" style="border-collapse: collapse;">
    <thead>
      <tr>
        <th width="20s%">Supplier ID</th>
        <th width="20%">Supplier Name</th>
        <th width="20%">Product</th>
        <th width="20%">Quantity</th>
        <th width="20%">Amount</th>
        
        </tr>
    </thead>
    <tbody>
      <tr>
        <td width="20%"></td>
        <td width="20%"></td>
        <td width="20%"></td>
        <td width="20%"></td>
        <td width="20%"></td>
      </tr>
      <tr>
        <td width="20%"></td>
        <td width="20%"></td>
        <td width="20%"></td>
        <td width="20%"></td>
        <td width="20%"></td>
        

      </tr>
      <tr>
        <td width="20%"></td>
        <td width="20%"></td>
        <td width="20%"></td>
        <td width="20%"></td>
        <td width="20%"></td>
      </tr>
    </tbody>
          
  </table></center>
  
  </form>
    </div>
    <div class="modal-footer5">
      <h3>Modal Footer</h3>
    </div>
  </div>
</div> 


        <script>
// Get the modal
var modal5 = document.getElementById('myModal5');

// Get the button that opens the modal
var btn5 = document.getElementById("myBtn5");

// Get the <span> element that closes the modal
var span5 = document.getElementsByClassName("close5")[0];

// When the user clicks the button, open the modal 
btn5.onclick = function() {
    modal5.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span5.onclick = function() {
    modal5.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal5) {
        modal5.style.display = "none";
    }
}
</script>  


<!-- The Modal -->
<div id="myModal6" class="modal6">

  <!-- Modal content -->
  <div class="modal-content6">
    <div class="modal-header6">
      <span class="close6">×</span>
      <h2>Modal Header</h2>
    </div>
    <div class="modal-body6">
       <form class="form-horizontal"  role="form" method="post" action=" ">
    
    <fieldset abled>
      <div class="row">
        
        <div class="col-md-6">

         

          <label for="prd_name" class="col-sm-2 control-label"> Product Name</label>
          <select id="prd_name" class="form-control">
            <option>Product Name</option>
          </select>&nbsp;&nbsp;&nbsp;

          <label for="category" class="col-sm-2 control-label"> Category</label>
          <select id="category" class="form-control">
            <option>Category</option>
          </select>&nbsp;&nbsp;&nbsp;

          <label for="from3" class="col-sm-2 control-label">From</label>
          <input type="date" id="from3" class="form-control" placeholder="date">&nbsp;&nbsp;&nbsp;

          <label for="to3" class="col-sm-2 control-label">To</label>
          <input type="date" id="to3" class="form-control" placeholder="date">
          

          
        </div>
      </div>
      
    </fieldset>


     
  </form>
  <center><h2 style="color:#000000; font-family:Tahoma;  font-weight:bold"> Profitability Table </h2></center>
  <form class="form-horizontal" role="form" method="post" action="">           
  <center><table class="table" border="1" style="border-collapse: collapse;">
    <thead>
      <tr>
        <th width="150px">Product Name</th>
        <th width="150px">Category</th>
        <th width="150px">Selling Price</th>
        <th width="150px">Cost Price</th>
        <th width="150px">Profits</th>
        
        </tr>
    </thead>
    <tbody>
      <tr>
        <td width="150px"></td>
        <td width="150px"></td>
        <td width="150px"></td>
        <td width="150px"></td>
        <td width="150px"></td>
      </tr>
      <tr>
        <td width="150px"></td>
        <td width="150px"></td>
        <td width="150px"></td>
        <td width="150px"></td>
        <td width="150px"></td>
        

      </tr>
      <tr>
        <td width="150px"></td>
        <td width="150px"></td>
        <td width="150px"></td>
        <td width="150px"></td>
        <td width="150pxs"></td>
      </tr>
    </tbody>
          
  </table></center>
  
  </form>

    </div>
    <div class="modal-footer6">
      <h3>Modal Footer</h3>
    </div>
  </div>
</div> 

        <script>
// Get the modal
var modal6 = document.getElementById('myModal6');

// Get the button that opens the modal
var btn6 = document.getElementById("myBtn6");

// Get the <span> element that closes the modal
var span6 = document.getElementsByClassName("close6")[0];

// When the user clicks the button, open the modal 
btn6.onclick = function() {
    modal6.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span6.onclick = function() {
    modal6.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal6) {
        modal6.style.display = "none";
    }
}
</script>  


<!-- The Modal -->
<div id="myModal7" class="modal7">

  <!-- Modal content -->
  <div class="modal-content7">
    <div class="modal-header7">
      <span class="close7">×</span>
      <h2>Modal Header</h2>
    </div>
    <div class="modal-body7">
      <form class="form-horizontal"  role="form" method="post" action=" ">
    
    <fieldset abled>
      <div class="row">
        
        <div class="col-md-6">
          <label for="deal_nam" class="col-sm-2 control-label"> Dealer Name</label>
          <select id="deal_nam" class="form-control">
            <option>Dealer Name</option>
          </select>&nbsp;&nbsp;&nbsp;

          <label for="comp_nam" class="col-sm-2 control-label"> Company Name</label>
          <select id="comp_nam" class="form-control">
            <option>Company Name</option>
          </select>&nbsp;&nbsp;&nbsp;

          <label for="from6" class="col-sm-2 control-label">From</label>
          <input type="date" id="from6" class="form-control" placeholder="date">&nbsp;&nbsp;&nbsp;

          <label for="to6" class="col-sm-2 control-label">To</label>
          <input type="date" id="to6" class="form-control" placeholder="date">

          
        </div>
      </div>
      
    </fieldset>


     
  </form>
  <center><h2 style="color:#000000; font-family:Tahoma;  font-weight:bold"> Debtors Table </h2></center>
  <form class="form-horizontal" role="form" method="post" action="">           
  <center><table class="table" border="1" style="border-collapse: collapse;">
    <thead>
      <tr>
        <th width="10%">Dealer ID</th>
        <th width="10%">Dealer Name</th>
        <th width="10%">Company Name</th>
        <th width="10%">Company Phone No</th>
        <th width="10%">Company Email</th>
        <th width="10%">Company Address</th>
        <th width="10%">LGA</th>
        
        </tr>
    </thead>
    <tbody>
      <tr>
        <td width="10%"></td>
        <td width="10%"></td>
        <td width="10%"></td>
        <td width="10%"></td>
        <td width="10%"></td>
        <td width="10%"></td>
        <td width="10%"></td>
      </tr>
      <tr>
        <td width="10%"></td>
        <td width="10%"></td>
        <td width="10%"></td>
        <td width="10%"></td>
        <td width="10%"></td>
        <td width="10%"></td>
        <td width="10%"></td>
        

      </tr>
      <tr>
        <td width="10%"></td>
        <td width="10%"></td>
        <td width="10%"></td>
        <td width="10%"></td>
        <td width="10%"></td>
        <td width="10%"></td>
        <td width="10%"></td>
      </tr>
    </tbody>
          
  </table></center>
  
  </form>
    </div>
    <div class="modal-footer7">
      <h3>Modal Footer</h3>
    </div>
  </div>
</div> 

        <script>
// Get the modal
var modal7 = document.getElementById('myModal7');

// Get the button that opens the modal
var btn7 = document.getElementById("myBtn7");

// Get the <span> element that closes the modal
var span7 = document.getElementsByClassName("close7")[0];

// When the user clicks the button, open the modal 
btn7.onclick = function() {
    modal7.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span7.onclick = function() {
    modal7.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal7) {
        modal7.style.display = "none";
    }
}
</script> 


<!-- The Modal -->
<div id="myModal8" class="modal8">

  <!-- Modal content -->
  <div class="modal-content8">
    <div class="modal-header8">
      <span class="close8">×</span>
      <h2>Modal Header</h2>
    </div>
    <div class="modal-body8">
      <p>Some text in the Modal Body</p>
      <p>Some other text...kkffj</p>
    </div>
    <div class="modal-footer8">
      <h3>Modal Footer</h3>
    </div>
  </div>
</div> 

        <script>
// Get the modal
var modal8 = document.getElementById('myModal8');

// Get the button that opens the modal
var btn8 = document.getElementById("myBtn8");

// Get the <span> element that closes the modal
var span8 = document.getElementsByClassName("close8")[0];

// When the user clicks the button, open the modal 
btn8.onclick = function() {
    modal8.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span8.onclick = function() {
    modal8.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal8) {
        modal8.style.display = "none";
    }
}
</script>
                
                <!-- footer -->
                    
                <div class=" container-fluid">
                     
                     <div class="row">
                     
                           <div class="col-md-12">
                           <div class="footer">
                           <div class="page-header"></div>
                           <p class="lead" style="font-size:12px">&copy; B-edge Inc.</p>
                           </div><!-- end of footer div
                           </div><!-- end of footer col-md-12-->
                           
                     </div><!-- end of footer row -->
                    
                </div><!-- end of footer container-fluid -->
                
     
      </div><!-- end of 1st col-md-12 -->
      
    </div><!-- end of 1st row -->
</div><!-- end of 1st container -->

</body>
</html>