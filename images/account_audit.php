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
    width: 80%;
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
    width: 80%;
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
 
 
 //effect of inventory
 $(document).ready(function (){
$("#form_inv").show();
$("#live_inventory").hide();
$(document). on('click','#search_inventory', function(){
var search_inv = $("#inventory_search").val();
	if (search_inv == ""  ){
	
			return false;
  
  }else{
   $("#form_inv").slideUp(1000)
  $("#live_inventory").fadeIn(2200);
  }

//

}); // end of on

$(document). on('click','#Inventory_back', function(){
    
  $("#live_inventory").fadeOut(2200);
  $("#form_inv").slideDown(1000)
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
      <p>Some text in the Modal Body</p>
      <p>Some other text...</p>
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
      <h2>Modal Header</h2>
    </div>
    <div class="modal-body1">
      <p>Some text in the Modal Body</p>
      <p>Some other text...</p>
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