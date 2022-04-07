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
 .label{ color:#FF3300;font-size: 24px;}
 .footer{ margin:12px auto; font-size:12px;}



 /* dashboard styling*/
 
 .holder{ height:200px; }
 .holder2{height:200px; }
 .holder3{height:200px; }
 .holder4{height:200px; }
.block{margin:35px auto; width:300px; height:200px; border:6px #666666 outset;  background-image:url(images/slate_bg.jpg); color:#FFFFFF; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:18px; border-radius:50%; box-shadow:#737373 1px 14px 14px 0px}
.btn{ font-size:18px; font-weight:bold;}
.bor_line{ border-radius:20px;}
.text-center{ padding:70px 80px; font-family:Tahoma; font-size:30px; font-weight:800; }
.text-center1{padding:70px 20px;}
.text-center2{padding:70px 50px;}

 td:hover{ /*background-color:#66CC33 */}
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
    width: 75%; /* Could be more or less, depending on screen size */
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
$("#ss").hide();
$(document). on('click','#search_inventory', function(){
var search_inv = $("#inventory_search").val();
  if (search_inv == ""  ){
  
      return false;
  
  }else{
  
  
   $("#form_inv").slideUp(1000)
  $("#ss").fadeIn(2200);
 // $(".modal-content2").css({"width":"80"+"%"});
  }

//

}); // end of on

$(document). on('click','#Inventory_back', function(){
    
  $("#ss").fadeOut(2200);
  $("#form_inv").slideDown(1000)
//

}); // end of on
});//end of ready
 
 
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
<li class="" ><a href="wh_mangr_dashboard.php"><span class=" glyphicon glyphicon-refresh"></span>&nbsp;Refresh</a></li>
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
      
          <h2 style=" font-family:Tahoma;  font-weight:bold"> WAREHOUSE MANAGER DASHBOARD</h2>
          <div class="preloader ">
               <div class="loader"></div>
               </div>
      </div>
      
         
                <div class="container">
                      <div class="row">
                            <div class="col-md-4">
                                  <div class="holder">
                                  
                                       <center>
                                           <div class="block" id="myBtn">
                                           
                                              <div class="text-center1"><center><img src="images/category.png" width="324" height="45"></center></div>
                                             
                                              
                                           </div><!-- end of block-->
                                       </center>
                                  
                                  </div><!-- end of holder -->
                                  
                            </div><!-- end of col-md-6 -->
                            
                            <!-- 2nd column starts here -->

                            
                            <div class="col-md-4">
                                  <div class="holder2">
                                  
                                       <center>
                                           <div class="block" id="myBtn1" onClick="modal2();">
                                           <center>
                                           <div class="text-center"><center><img src="images/stock.png" width="272" height="36"></center></div>
                                   
                                           </center>
                                           </div><!-- end of block-->
                                       </center>
                                  
                                  </div><!-- end of holder in 2nd col -->
                                  
                            </div><!-- end of col-md-6 in 2nd col -->
                            

                             <div class="col-md-4">
                                  <div class="holder2">
                                  
                                       <center>
                                           <div class="block" id="myBtn2" onClick="modal3();">
                                           <center>
                                           <div class="text-center2"><center><img src="images/delivery.png" width="272" height="36"></center></div>
                                   
                                           </center>
                                           </div><!-- end of block-->
                                       </center>
                                  
                                  </div><!-- end of holder in 2nd col -->
                                  
                            </div><!-- end of col-md-6 in 2nd col -->
                            
                                     
                         
                      </div><!-- end of 2nd row -->
                      
                      <!-- start of 3rd and 4th cols -->
                      
                      
                                
                      
                            
                                     
                         
                      </div><!-- end of 2nd row -->  
                      
                     <!-- all modals stay here --> 
                      

                    <!-- Trigger/Open The Modal -->



<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content for create users -->
   <div class="modal-content">
     <span class="close"><button class="btn btn-danger">X</button></span>
     <div class="page-header"><h1>ADD CATEGORY</h1></div>
     <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" onSubmit="return false;">
     <input type="text" id="categorysearch" name="categorysearch" placeholder="Search category"> 
     <input type="submit" id="searchcat" class="btn btn-success" class="form-control" value="Search" >
     <font size="-1"><button type="button" id="searchcat2" class="btn btn-info" >Back</button>

   </form>
     <hr/>
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" onSubmit="return false;" id="cat_form" >
  <label class="label" for="Category">Category ID</label>
  <input type="text" id="categoryId" name="categoryId" placeholder="Category ID" class="form-control " >
          
  </select>
                                   <br/>
   <label class="label" for="Name">Category Name</label>
   <input type="text" id="categoryname" name="categoryname" placeholder="Category Name" class="form-control" >
   <br/>
  
    <input type="submit"  id="add_cat" name="add_cat"  class="btn btn-info" value="ADD"  class="form-control" > &nbsp; 
    
                                   
  </form>
     <div id="live_category"></div>

  </div>

</div>

</div>




<!-- The Modal -->
<div id="myModal1" class="modal1">

  <!-- Modal content for view active users -->
 <div class="modal-content1">
    <span class="close1 "><button class="btn btn-danger">X</button></span>
      <h2>ADD STOCK</h2>
          <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" onSubmit="return false;">
    <input type="text" id="inventory_search" name="inventory_search" placeholder="Search Inventory"> 
    <input type="submit" id="search_inventory" class="btn btn-success" class="form-control" value="Search" >
    <input type="submit" id="Inventory_back" class="btn btn-info" class="form-control" value="Back" >
 <hr/>
</form>
        <form role="form"  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form" onSubmit="return false;" id="form_inv">


         <br/>                
             <label class="label" for="productcode">Product Code</label>
             <input type="text" id="productcode" name="productcode" placeholder="Enter Product Code" class="form-control" >
          <br/>                  
              <label class="label" for="productname">Product Name</label>
              <input type="text" id="productname" name="productname" placeholder="Enter Product Name" class="form-control" >
         <br/>                   
              <label class="label" for="color">Color</label>
              <input type="text" id="color" name="color" placeholder="Enter Color" class="form-control">
          <br/>                 
              <label class="label" for="categoryname">Category Name</label>
              <select id="categoryname2" name="categoryname2" class="form-control">
                <option>Select Category</option>

               <?php
                   class MyDB extends SQLite3
                   {
                          function __construct()
                          {
                              $this->open('my_database.db');
                          }
                   }
                        $db = new MyDB();
                        $sql = "SELECT * FROM category";

                        $ret = $db->query($sql);

                       while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
                        $categoryname = $row["categoryname"];
                        echo "<option>".$categoryname."</option>";
                       }
                 ?>

              </select>
            <br/>
              <label class="label" for="quantity">Quantity</label>
              <input type="number" id="quantity" name="quantity" placeholder="Enter Quantity" class="form-control" >
        <br/>
              <label class="label" for="reorderquantity">Re-Order Quantity</label>
              <input type="text" id="reorderquantity" name="reorderquantity" placeholder="Enter Re-Order Quantity" class="form-control" >
            
          <br/>
              <label class="label" for="costprice">Cost Price</label>
              <input type="text" id="costprice" name="costprice" placeholder="Enter Cost Price" class="form-control" >
            
          <br/>
              <label class="label" for="sellingprice">Selling Price</label>
              <input type="text" id="sellingprice" name="sellingprice" placeholder="Enter Selling Price" class="form-control" >
            
         <br/>
              <label class="label" for="wholesaleprice">Dealer Price</label>
              <input type="text" id="wholesaleprice" name="wholesaleprice" placeholder="Enter Wholesale Price" class="form-control" >
            
          <br/>
              <label class="label" for="manufacturingdate">Manufacturing Date</label>
              <input type="date" id="manufacturingdate" name="manufacturingdate" placeholder="Enter Manufacturing Date" class="form-control" >
            
         
         <br/>
              <label class="label" for="expirydate">Expiry Date</label>
              <input type="date" id="expirydate" name="expirydate" placeholder="Enter Expiry Date" class="form-control" >
            
         
         
               <br/>
               <input  type="submit" id="add_inventory" name="add_inventory" class="btn btn-success" value="Add New Product"  class="form-control" >
                                
        
          <br/>
            <marquee>Notification Prompt</marquee>

           
          </form>

            
 <div id="ss"></div>
                 <div id="live_edit_inventory"></div>


          
  </div>

</div>
<div id="myModal2" class="modal2">

  <!-- Modal content for create users -->
   <div class="modal-content2">
     <span class="close2"><button class="btn btn-danger">X</button></span>
     <div class="page-header"><h1>VIEW TRANSACTIONS</h1></div>
     <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" onSubmit="return false;">
     <input type="text" id="search_trans" name="search_trans" placeholder="Search Transaction"> 
     <input type="submit" id="searchtrans" class="btn btn-success" class="form-control" value="Search" >
     <font size="-1"><button type="button" id="searchtrans2" class="btn btn-info" >Back</button>

   </form>
     <hr/>

     <div id="display_trans"></div>

  </div>

</div>

</div>


  <!-- The Modal -->
<!--<div id="myModal2" class="modal2">-->

  <!-- Modal content for edit users -->
 <!-- <div class="modal-content2">
    <span class="close2">close</span>
    <div class="page-header"><h1>Change User</h1></div>
    
    <form  method="post" action="<?php //echo $_SERVER['PHP_SELF']?>" onSubmit="return false">

           <label>Search</label>&nbsp;&nbsp;<input type="text"  id="search" name="search" placeholder="search" >
            <input type="submit"  class="btn btn-success" id="sub" value="Search">


	</form>
  

 <div id="live"><center><div class="loader" id="loader" style="display:none"></div></center></div>
 
  </div>

</div> -->


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