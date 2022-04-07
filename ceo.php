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
 body { margin:18px auto; background-color:#F2F2F2;}
  .navbar{ height:55px;}
 .wel_note{ height:100px; background-image:url(images/slate_bg.jpg); border-radius:22px; }
 .welcome_note{ padding:30px;letter-spacing:5px;}
 .tabular_layout{height:300px;}
 .content_1{ background-color:#CCCCFF; height:400px;}
 .logo{ color:gold; font-family:Tahoma; letter-spacing:6px; font-size:28px; padding:0px 30px; }
 .caption{ z-index:100; margin:10px auto;}
 .image{ z-index:0}
 .nav{ padding-left:100px;}
 .li{ padding-right:72px; font-size:16px; font-weight:600; }
 
 .label{ color:#009900; font-family:Verdana; font-size:16px}
 .footer{ margin:-20px auto;}
 /* sales modal layout */
 .main{ border:5px grey groove; border-radius:22px; height:520px;  overflow:hidden;}
 .inner{ height:auto;  border-right:5px grey groove; }
 .credit_repay_form{height:1000;  }
.inner_2nd_main{height:auto; border-top:5px grey groove; }
.cust_name_form{height:auto; border:5px grey groove;  }
tr{ border:2px green solid;}
th{ color:green}
#pscode{ background-color:gold;}
.label1{ color:#009900; font-family:Tahoma; font-size:16px; font-weight:bold;}
.sales_form{ background-color:#DADADA}
td{ padding:5px; cursor:pointer }
td:hover{ background-color:#66CC33}

 /* dashboard styling*/
 
 .holder{ height:220px;}

.block{margin:35px auto; width:250px; height:160px; border:1px blue solid; border:6px #666666 outset;  background-image:url(images/slate_bg.jpg); color:#FFFFFF; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:18px; border-radius:50%; box-shadow:#737373 1px 14px 14px 0px; cursor:pointer;}
.btn{ font-size:18px; font-weight:bold;}
.bor_line{ border-radius:22px;}
.text-center{ padding:68px 50px; font-family:Tahoma; font-size:30px; font-weight:800;}
.text-center1{ padding:68px 30px; font-family:Tahoma; font-size:30px; font-weight:800;}



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
    padding: 22px;
    border: 1px solid #888;
	border-radius:30px;
    width: 40%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
    color:red;
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
    padding: 22px;
    border: 1px solid #888;
	border-radius:30px;
    width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close1 {
    color: red;
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
    margin: 5% auto; /* 15% from the top and centered */
    padding: 22px;
    border: 1px solid #888;
	border-radius:30px;
    width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close2 {
    color: red;
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
    margin: 5% auto; /* 15% from the top and centered */
    padding: 22px;
    border: 1px solid #888;
	border-radius:30px;
    width: 100%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close3{
    color: red;
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

 /* INNER MODAL FOR SALES */

 /* The Modal (background) */
.modal4 {
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
.modal-content4 {
    background-color:#F2F2F2;
    margin: 5% auto; /* 15% from the top and centered */
    padding: 22px;
    border: 1px solid #888;
	border-radius:30px;
    width: 40%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close4{
    color: red;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close4:hover,
.close4:focus {
    color: red;
    text-decoration: none;
    cursor: pointer;
}


 /*  MODAL FOR SALES ORDER*/

 /* The Modal (background) */
.modal5 {
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
.modal-content5 {
    background-color:#F2F2F2;
    margin: 5% auto; /* 15% from the top and centered */
    padding: 22px;
    border: 1px solid #888;
	border-radius:30px;
    width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close5{
    color: red;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close5:hover,
.close5:focus {
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

.loader{ position:absolute; top:50%; left:50%; transform: translate(-50%, -50%); width:40px; height:40px; box-sizing:border-box; border:3px solid red; animation: animate 8s linear infinite; z-index:10000;
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
   background:green ;
   }
  50%
  {
   height: 50%;
   background:green;
   
  }
    75%
  {
   height: 75%;
   background:green ;
   
  }
    100%
  {
   height: 100%;
   background:green;
    
  }
  }
 </style>
 <script type="text/javascript">
 
$(window).on('load', function(){
  $('.preloader').addClass('complete');
});

 /* animation section
 function animElem(){
 var animateNam = 'animated shake';
 var animationend ='webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationEnd animationEnd'
 $(document).ready(function(e){
 
 $(".btn").addClass(animateNam).one(animationend, function(){ $(this).removeClass(animateNam)})
 })
 
 
 }
 
 setInterval('animElem()',3000);
 */
 
//hover effects
  $(document).ready(function() {
  $(".block").hover(
  function(){
  $(this).css({"transform":"scale(1.0,0.9)"})
  $(this).css({"transition":"1.5s"})
  

  },
  
 function(){
 $(this).css({"transform":"scale(1.0,1.0)"})
  
 }
 
  )		
 
 
 });
 
 //hover effects
  $(document).ready(function() {
  $(".logo").hover(
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
<script src="js/2nd_modal.js"></script>
<script src="js/3rd_modal.js"></script>
<script src="js/4thmodal.js"></script>
<script src="js/5thmodal.js"></script>
<script src="js/6thmodal.js"></script>
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
<li class="" ><a href="ceo.php"><span class=" glyphicon glyphicon-refresh"></span>&nbsp;Refresh</a></li>
<li ><a href="logout.php"><span class=" glyphicon glyphicon-log-out"></span>  LogOut</a></li>

</ul>
</div>



 
 </div>
                   </nav>
                </div><!-- end of column -->
          </div><!-- end of row -->
 </div><!-- end of con-fluid -->
 
<!-- menus goes here -->
    <div class="preloader ">
               <div class="loader"></div>
               </div>
   
<div class="container">
    <div class="row">
      
      <div class="bor_line col-md-12">
      <div class="title page-header">
      
          <h2 style=" font-family:Tahoma;  font-weight:bold">MANAGING DIRECTOR/CEO DASHBOARD</h2>
          
      </div>
      
         
                <div class="container">
                      <div class="row">
                      
                       <!-- 1ST column starts here -->
                            <div class="col-md-3">
                                  <div class="holder">
                                  
                                       <center>
                                           <div class="block" id="myBtn">
                                            <div class="text-center"><center><img src="images/add_cat.png" width="220" width="220"></center></div>
                                           </div><!-- end of block-->
                                       </center>
                                  
                                  </div><!-- end of holder -->
                                  
                            </div><!-- end of col-md-3 -->
                            
                            <!-- 2nd column starts here -->
                            <div class="col-md-3">
                                  <div class="holder">
                                  
                                       <center>
                                           <div class="block" id="myBtn">
                                            <div class="text-center"><center><img src="images/add_cat.png" width="220" width="220"></center></div>
                                           </div><!-- end of block-->
                                       </center>
                                  
                                  </div><!-- end of holder -->
                                  
                            </div><!-- end of col-md-3 -->
                            
                            <!-- 3rd column starts here -->
                            
                            <div class="col-md-3">
                                  <div class="holder">
                                  
                                       <center>
                                           <div class="block" id="myBtn1" onClick="modal2();">
                                               <div class="text-center"><center><img  src="images/add_inv.png" width="220" width="220"></center></div>
                                           </div><!-- end of block-->
                                       </center>
                                  
                                  </div><!-- end of holder in 2nd col -->
                                  
                            </div><!-- end of col-md-3 in 2nd col -->
                            
                            
                             <!-- 4th column starts here -->
                            
                            <div class="col-md-3">
                                  <div class="holder">
                                  
                                       <center>
                                           <div class="block" id="myBtn2" onClick="modal3();">
                                                    <div class="text-center"><center><img src="images/add_cust.png" width="220" width="220"></center></div>
                                                    
                                              
                                           </div><!-- end of block-->
                                       </center>
                                  
                                  </div><!-- end of holder in 2nd col -->
                                  
                            </div><!-- end of col-md-3 in 2nd col -->
                            
                            
                            
                            
                            
                            
                                     
                         
                      </div><!-- end of 2nd row -->
                      
                       <!-- 5TH column starts here -->
                
                      
                                 <!-- 5th column starts here -->
                            <div class="row">
                            <div class="col-md-3">
                                  <div class="holder">
                                  
                                       <center>
                                           <div class="block" id="myBtn3" onClick="modal4();">
                                             
                                     <div class="text-center"><center><img src="images/make_sales.png" width="220" width="220"></center></div>
                                             
                                           </div><!-- end of block-->
                                       </center>
                                  
                                  </div><!-- end of holder in 2nd col -->
                                  
                            </div><!-- end of col-md-3 in 2nd col -->
                            
                            
                              <!-- 6th column starts here -->
                            <div class="col-md-3">
                                  <div class="holder">
                                  
                                       <center>
                                           <div class="block" id="myBtn3" onClick="modal4();">
                                             
                                     <div class="text-center"><center><img src="images/make_sales.png" width="220" width="220"></center></div>
                                             
                                           </div><!-- end of block-->
                                       </center>
                                  
                                  </div><!-- end of holder in 2nd col -->
                                  
                            </div><!-- end of col-md-3 in 2nd col -->

                                  <!-- 7TH column starts here -->
                            
                            <div class="col-md-3">
                                  <div class="holder">
                                  
                                       <center>
                                           <div class="block" id="myBtn5" onClick="modal6();">
                                             
                                         <div class="text-center1"><center><img src="images/sales_order.png" width="220" width="220"></center></div>
                                           </div><!-- end of block-->
                                       </center>
                                  
                                  </div><!-- end of holder in 2nd col -->
                                 
                                  </div><!-- end of col-md-3 -->
                                  
                                   <!-- 8TH column starts here -->
                                   
                                  <div class="col-md-3">
                                  <div class="holder">
                                  
                                       <center>
                                           <div class="block" id="myBtn3" onClick="modal3();">
<div class="text-center"><center><img src="images/report.png" width="220" width="220"></center></div>
                                           </div><!-- end of block-->
                                       </center>
                                  
                                  </div><!-- end of holder in 2nd col -->
                                 
                                  </div><!-- end of col-md-3 -->
                                 
                         
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
      <h2>ADD INVENTORY</h2>
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
              <input type="text" id="quantity" name="quantity" placeholder="Enter Quantity" class="form-control" >
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
              <label class="label" for="wholesaleprice">Wholesale Price</label>
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

            <div id="ss"></div>
          </form>

            

                 <div id="live_inventory"></div>


          
  </div>

</div>


  <!-- The Modal -->
<div id="myModal2" class="modal2">

  <!-- Modal content for edit users -->
  <div class="modal-content2">
    <span class="close2"><button class="btn btn-danger">X</button></span>
    <div class="page-header"><h1>ADD CUSTOMER</h1></div>
  
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" onSubmit="return false;">
    <input type="text" id="customerSearch" name="customerSearch" placeholder="Search customer"> 
    <input type="submit" id="searchcust" class="btn btn-success" class="form-control" value="Search" >
    <font size="-1"><button type="button" id="go_back" class="btn btn-info" >Back</button>
    
 <hr/>
</form>
   
    <form role="form"  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" class="form" onSubmit="return false" id="form_add_cust">
                                  
                                
                                   <label class="label" for="customertitle">Customer Title</label>
                                   <select id="customertitle" name="customertitle" class="form-control" >
                                   <option value="">Select Title</option>
                                   <option value="Mr">Mr.</option>
                                   <option value="Ms">Ms.</option>
                                   <option value="Dr">Dr.</option>
                                   <option value="Prof">Prof.</option>
                                   <option value="Chief">Chief</option>
                                   </select>
                           <br/>

                                   <label class="label" for="gender">Gender</label>
                                   <select id="gender" name="gender" class="form-control" >
                                   <option value="">Select Gender</option><option value="Male">Male</option>
                                   <option value="Female">Female</option>
                                   </select>
                              <br/>
                                 <label class="label" for="customername"> Customer Name</label>
                                 <input type="text" id="customername" name="customername" placeholder="Enter Customer Name" class="form-control" >
                          <br/>

                                 <label class="label" for="phonenumber">Phone Number</label>
                                 <input type="text" id="phonenumber" name="phonenumber" placeholder="Enter Phone Number" class="form-control" >
<br/>

                                 <label class="label" for="homeaddress">Home Address</label>
                                 <input type="text" id="homeaddress" name="homeaddress" placeholder="Enter Home Address" class="form-control" >
<br/>

                                 <label class="label" for="emailaddess">Email Address</label>
                                 <input type="text" id="emailaddress" name="emailaddress" placeholder="Enter Email Address" class="form-control" >
<br/>

                                 <input  type="submit" id="addcustomer" name="addcustomer" class="btn btn-success" value="Add Customer"  class="form-control" >
                                
                            
                              
                             
                              
                              

                                  
      </form>
      
      
  

 <div id="liveDisp_customer"></div>
 
  </div>

</div>


  <!-- The Modal -->
<div id="myModal3" class="modal3">

  <!-- Modal content for delete users -->
  <div class="modal-content3">
    <span class="close3"><button class="btn btn-danger">X</button></span>
    <div class="page-header"><h1>SALES</h1></div>
    
    <!-- sales -->
    
    <div class="container-fluid">
        
        <div class="row">
          
           
           <div class="main col-md-12">
           
                
                
                <div class="container">
                  
                      <div class="row">
                
                            <div class="inner col-md-5">
                               
                               <!-- first form for sales i.e add items --> 
      <form role="form"  method="post"  action="<?php echo $_SERVER['PHP_SELF']; ?>" onSubmit="return false" class="form" id="form1">
      <div class="form-group col-md-6">
        <label class="label1" for="productcode">Product Code</label>
             <input type="text" id="pscode" name="pscode" placeholder="Enter Product Code" class=" form-control" >
         </div> 
         <div class="form-group col-md-6">              
              <label class="label1" for="productname">Product Name</label>
              <input type="text" id="psname" name="psname" placeholder="Enter Product Name" class="sales_form form-control" >
           </div>
           <div class="form-group col-md-6">
              <label class="label1" for="quantity">Quantity</label>
              <input type="text" id="psquantity" name="psquantity" placeholder="Enter Quantity" class="sales_form form-control" >
       </div>
       <div class="form-group col-md-6">
              <label class="label1" for="price">Price</label>
              <input type="text" id="psprice" name="psprice" placeholder="Enter Price" class="sales_form form-control" >
         </div>
         <div class="form-group col-md-6">                     
              <label class="label1" for="discount">Discount</label>
              <input type="text" id="psdiscount" name="psdiscount" placeholder="Enter Discount" class="sales_form form-control">
          </div>  
          <div class="form-group col-md-6"> 
              <label class="label1" for="modeofpayment">Mode Of Payment</label>
              <select id="psmodeofpayment" name="psmodeofpayment" class="sales_form form-control" >
              <option>Select Mode Of Payment</option>
              <option >Cash</option>
              <option>POS</option>
              <option>Bank/Teller</option>
              <option>Cheque</option>
              <option>Bank Draft</option>
              <option>Mobile Transfer</option>
              </select>
              </div>
              <center>                                 
              <input  type="submit" id="add_sales" name="add_sales" class="btn btn-success" value="Add Item"   class="form-control" >
              <input  type="submit" id="gen_id" name="gen_id" class="btn btn-success" value="Generate Sales"   class="form-control" >
              </center>     
          </form>  
          <hr>
          
          <form onSubmit="return false">
          <div class="form-group col-md-6">
        <label class="label1" for="productcode">Total Amount</label>
             <input type="text" id="tot_amt" name="tot_amt" placeholder="Enter Total Amount" class="sales_form form-control" >
         </div> 
         <div class="form-group col-md-6">              
              <label class="label1" for="productname" >Amount Due</label>
              <input type="text" id="amt_due" name="amt_due" placeholder="Enter Amount Due" class="sales_form form-control" >
           </div>
           <div class="form-group col-md-6">
              <label class="label1" for="quantity">Cash Received</label>
              <input type="text" id="cash_rec" name="cash_rec" placeholder="Enter Cash Received" class="sales_form form-control" >
       </div>
       <div class="form-group col-md-6">
              <label class="label1" for="price">Balance</label>
              <input type="text" id="bal" name="bal" placeholder="Enter Balance" class="sales_form form-control" >
         </div>
         
              <center>                                 
              <input  type="submit"  name="enter" class="btn btn-success" value="Enter" id="myBtn4" onClick="modal5();" class="sales_form form-control" >
              </center>     
          </form>

<!-- INNER MODAL FOR SALES -->
<div id="myModal4" class="modal4">

  <!-- Modal content -->
  <div class="modal-content4">
    <span class="close4"><button class="btn btn-danger">X</button></span>
  <div class="page-header"></div>
   <form onSubmit="return false">
         
       
              <label class="label1" for="custName">ENTER CUSTOMER's NAME</label>
              <select id="custName" name="custName" class="sales_form form-control">
                <option value="">Select Name</option>

               <?php
                   class MyDB1 extends SQLite3
                   {
                          function __construct()
                          {
                              $this->open('my_database.db');
                          }
                   }
                        $db = new MyDB1();
                        $sql = "SELECT * FROM customer";

                        $ret = $db->query($sql);

                       while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
                        $customername = $row["custname"];
                        echo "<option value='$customername'>".$customername."</option>";
                       }
                 ?>

              </select>
         <br/>
                    
             
         
              <center>                                 
              <input  type="submit" id="enter" name="enter" class="btn btn-success" value="OK"  class="form-control" >
              </center>
         
              
          
          </form>
  </div>

</div>
          
          
                            
                            </div><!-- end of inner col-md-6-->
                            
                            <!-- 2nd form for sales i.e Credit Repayment-->
                              
                              <div class="credit_repay_form col-md-7" style="overflow:scroll">
                              
                              
                              <div class="row">
                                 <div class="col-md-12" style="overflow:hidden">
                                     <div class="table-responsive" style="overflow:y-scroll; height:auto">
                                    <!-- <table class="table table-responsive " border="2" style="margin:4px auto;overflow:scroll">-->
                                    <table border="2" style="margin:4px;vertical-align:inherit" border="1"   >

                                        
                                           <thead>
                                            <th style='width:20%; padding:14px'>PRODUCT CODE</th>
                                           <th style='width:20%;padding:14px'>PRODUCT NAME</th>
                                           <th style='width:20%;padding:14px'>QUANTITY SOLD</th>
                                           <th style='width:20%;padding:14px'>UNIT PRICE</th>
                                           <th style='width:20%;padding:14px'>DISCOUNT</th>
                                           <th style='width:20%;padding:14px'>MODE OF PAYMENT</th>
                                           </thead>
                                      
                                       
                                    
                                                
                                       </table> 
                                       
                                   <table border="2" style="margin:4px;overflow:scroll;  vertical-align:inherit" border="1" >
                                    <span id="live_add_sales" ></span>
                                    </table>
                                   
</div><!-- end of inner column -->
</div><!-- end of inner row -->
                              
                              
                              </div><!-- end of col-md-6 for credit repay -->
                              
                     
                      </div><!-- end of inner row -->
                     
           
                </div><!-- end of inner container-->
        
           
           </div><!-- end of main col-md-12  -->
           
        </div><!-- end of main row -->
    
    </div><!-- end of main container-fluid  -->
    
         
               
   <div class="live_delete"></div>
  </div>

</div>

<!-- modal sales order -->
<!-- The Modal -->
<div id="myModal5" class="modal5">

  <!-- Modal content -->
  <div class="modal-content5">
    <span class="close5"><button class="btn btn-danger">X</button></span>
  <h2 style="color:#000000; font-family:Tahoma;  font-weight:bold">SALES ORDER</h2>
       <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" onSubmit="return false;">
    <input type="text" id="searchOder" name="searchOder" placeholder="Search Order"> 
    <input type="submit" id="search_order" class="btn btn-success" class="form-control" value="Search" >
    <font size="-1"><button type="button" id="sales_order_bck" class="btn btn-info" >Back</button>
    

</form>
   <hr/>
          <form role="form"  method="post" action=" " class=" " onSubmit="return false">
          
                                 
                                   <label class="label" for="salesid">Sales ID</label>
                                   <input type="text" id="salesid" name="salesid" placeholder="Enter Sales ID" class="form-control" >
                           
         <br/>
                                 
                                    <label class="label" for="trans_date">Transaction Date</label>
                                    <input type="text" id="trans_date" name="trans_date" placeholder="Enter Transaction Date" class="form-control" >  

       <br/>
                                 
                                    <label class="label" for="customername2">Customer Name</label>
                                    <select id="customername2" name="customername2" class="form-control" >
                                    <option>Select Customer</option>
                                    </select>

       <br/>
                                 
                                    <label class="label" for="customerid2">Customer ID</label>
                                    <input type="text" id="customerid2" name="customerid2" placeholder="******" class="form-control" >

         
           <br/>
                                 
                                   <label class="label" for="qty">Quantity</label>
                                   <input type="text" id="qty" name="qty" placeholder="Enter Quantity" class="form-control">

         
          <br/>
                                 
                                    <label class="label" for="amt_rcd">Amount Received</label>
                                    <input type="text" id="amt_rcd" name="amt_rcd" placeholder="Enter Amount Received" class="form-control" >

        
         
          <br/>
                                 
                                   <label class="label" for="prod_name">Product Name</label>
                                   <select id="prod_name" name="prod_name" class="form-control" >
                                   <option>Select Product</option>
                                   </select>
          
          
          <br/>
                                    <center>
                                    <input  type="submit" id="add_product" name="add_product" class="btn btn-success" value="Add Product" onClick=" " class="form-control"  ></center>
          
         
                    
                                 
        </form>
         
         
         
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
                    
            <!--    <div class=" container-fluid">
                     
                     <div class="row">
                     
                           <div class="col-md-12">
                            <div class="footer">
                           <div class="page-header"></div>
                           <p class="lead" style="font-size:12px">&copy; B-edge Inc.</p>
                           </div>end of class footer  
                           </div>end of footer col-md-12
                     </div>end of footer row 
                    
                </div>end of footer container-fluid 
                -->
                
     
      </div><!-- end of 1st col-md-12 -->
      
    </div><!-- end of 1st row -->
</div><!-- end of 1st container -->

</body>
</html>