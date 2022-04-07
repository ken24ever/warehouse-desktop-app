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
 .footer{ margin:0px auto;}


 /* dashboard styling*/
 
 .holder{ height:200px; }
 .holder2{height:200px; }
 .holder3{height:200px; }
 .holder4{height:200px; }
.block{margin:35px auto; width:300px; height:200px; border:6px #666666 outset;  background-image:url(images/slate_bg.jpg); color:#FFFFFF; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:18px; border-radius:50%; box-shadow:#737373 1px 14px 14px 0px}
.btn{ font-size:18px; font-weight:bold;}
.bor_line{ border-radius:20px;}
.text-center{ padding:70px 9px;; font-family:Tahoma; font-size:30px; font-weight:800; }
.text-center1{padding:70px 2px;}
 td:hover{ background-color:#66CC33}
 .gly{ color:#0000CC;font-size:36px; margin:-150px; font-size:36px}
 #live{ padding:-20px;}


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
    margin: 5% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
	border-radius:30px;
    width: 40%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
    color:#000000;
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
    margin: 5% auto; /* 15% from the top and centered */
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
    margin:5% auto; /* 15% from the top and centered */
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
    margin:5% auto; /* 15% from the top and centered */
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
 <a class="logo navbar-brand" href="#"><strong class="logo"><img src="images/b-edge.png" width="202" height="48"></strong></a>
</div>
<div class="collapse navbar-collapse" id="example-navbar-collapse">
<ul class="li nav navbar-nav  navbar-right">
<li class="effects active"><a href="dashboard.php"><span class="glyphicon glyphicon-dashboard"></span>&nbsp;Dashboard</a></li>
<li class="" ><a href="dashboard.php"><span class=" glyphicon glyphicon-refresh"></span>&nbsp;Refresh</a></li>
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
      
          <h2 style=" font-family:Tahoma;  font-weight:bold"> Admin Dashboard</h2>
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
                                           
                                              <div class="text-center"><center><img src="images/creat_logo.png" width="200" height="30"></center></div>
                                             
                                              
                                           </div><!-- end of block-->
                                       </center>
                                  
                                  </div><!-- end of holder -->
                                  
                            </div><!-- end of col-md-6 -->
                            
                            <!-- 2nd column starts here -->
                            
                            <div class="col-md-6">
                                  <div class="holder2">
                                  
                                       <center>
                                           <div class="block" id="myBtn1" onClick="modal2();">
                                           <center>
                                           <div class="text-center"><center><img src="images/view_logo.png" width="200" height="30"></center></div>
                                   
                                           </center>
                                           </div><!-- end of block-->
                                       </center>
                                  
                                  </div><!-- end of holder in 2nd col -->
                                  
                            </div><!-- end of col-md-6 in 2nd col -->
                            
                                     
                         
                      </div><!-- end of 2nd row -->
                      
                      <!-- start of 3rd and 4th cols -->
                      
                      
                                
                      <div class="row">
                            <div class="col-md-6">
                                  <div class="holder3">
                                  
                                       <center>
                                           <div class="block" id="myBtn2" onClick="modal3()";>
                                           <center>
                                           <div class="text-center1">
                                              <center><img src="images/change_logo.png" width="200" height="30"></center>
                                              </div>
                                              </center>
                                           </div><!-- end of block-->
                                       </center>
                                  
                                  </div><!-- end of holder -->
                                  
                            </div><!-- end of col-md-6 -->
                            
                            <!-- 2nd column starts here -->
                            
                            <div class="col-md-6">
                                  <div class="holder4">
                                  
                                       <center>
                                           <div class="block" id="myBtn3" onClick="modal4()">
                                           <center>
                                           <div class="text-center">
                                            <center><img src="images/delete_logo.png" width="200" height="30"></center>
                                             </div>
                                             </center>
                                           </div><!-- end of block-->
                                       </center>
                                  
                                  </div><!-- end of holder in 2nd col -->
                                  
                           
                            
                                     
                         
                      </div><!-- end of 2nd row -->  
                      
                     <!-- all modals stay here --> 
                      

                    <!-- Trigger/Open The Modal -->



<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content for create users -->
  <div class="modal-content">
    <span class="close">close</span>
    <div class="page-header"><h1>New User</h1></div>
    
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post"  >
  
   <select id="accesslevel" name="accesslevel" class="form-control " >
                                   <option value="">Select level</option>
                                   <script>
                                    for (var i=1; i <= 5; i++ ){
									document.write("<option>"+i+"</option>");
									}
                                   </script>
                                   </select>
                                   <br/>
  <input type="text" id="username" name="username" placeholder="Enter Username" class="form-control" >
  <br/>
  <div style="color:red; font-family:Tahoma; font-size:16px">Auto-Generated Password </div>
   <input type="text" id="password" name="password"  value="<?php //This function generates a 4 digit bank transfer pin number
																	$chars = "abcdefghijklmnopqrstuvwxyz";
																	$newbtp = '';
																	for($i=0;$i<4;$i++)
																	{
																		$newbtp .= $chars{rand() % 10};
																	}
																	echo $newbtp;?>
   
      "  class="form-control"  disabled  >
   <br/>
   
   <br/>
  
    <input type="submit" id="submit"  class="btn btn-success" value="CREATE"  class="form-control"> &nbsp;<center><div class="loader" style="display:none"></div></center>
                                   
  </form>
  </div>

</div>




<!-- The Modal -->
<div id="myModal1" class="modal1">

  <!-- Modal content for view active users -->
  <div class="modal-content1">
    <span class="close1 ">close</span>
      <h2 style="color:#000000; font-family:Tahoma;  font-weight:bold">ACTIVE USERS</h2>
   <div id="liveDisp"><center><div class="loader" id="loader" style="display:none"></div></center></div> 
  </div>

</div>


  <!-- The Modal -->
<div id="myModal2" class="modal2">

  <!-- Modal content for edit users -->
  <div class="modal-content2">
    <span class="close2">close</span>
    <div class="page-header"><h1>Change User</h1></div>
    
    <form  method="post" action="<?php echo $_SERVER['PHP_SELF']?>" onSubmit="return false">

           <label>Search</label>&nbsp;&nbsp;<input type="text"  id="search" name="search" placeholder="search" >
            <input type="submit"  class="btn btn-success" id="sub" value="Search">


	</form>
  

 <div id="live"><center><div class="loader" id="loader" style="display:none"></div></center></div>
 
  </div>

</div>


  <!-- The Modal -->
<div id="myModal3" class="modal3">

  <!-- Modal content for delete users -->
  <div class="modal-content3">
    <span class="close3">close</span>
    <div class="page-header"><h1>Delete User</h1></div>
     <form  method="post" action="<?php echo $_SERVER['PHP_SELF']?>" onSubmit="return false">

           <label>Search</label>&nbsp;&nbsp;<input type="text"  id="search1" name="search1" placeholder="search" >
            <input type="submit"  class="btn btn-success" id="sub1" value="Search">


	</form>
   <div class="live_delete"><center><div class="loader" id="loader" style="display:none"></div></center></div>
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