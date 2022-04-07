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
 .label{ color:#FF3300; font-size:24px}
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
 td:hover{ background-color:#66CC33}
 .gly{ color:#0000CC;font-size:36px; margin:-150px; font-size:36px}
 #live{ padding:-20px;}


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

 
 /* The Modal (background) */
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
    width: 100%;
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
 
 

/* 2nd modal styling add customer */
/* The Modal (background) */
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
 
 /* INNER MODAL FOR SALES */
/* The Modal (background) */
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
    width: 40%;
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
 
 $(".gen").addClass(animateNam).one(animationend, function(){ $(this).removeClass(animateNam)})
 })
 
 
 }
 
 setInterval('animElem()',4000);
 
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

// by default input are disabled
 $(document).ready(function (){
 $("#pscode").attr('disabled','disabled');
 $("#psname").attr('disabled','disabled');
 $("#psquantity").attr('disabled','disabled');
 $("#psprice").attr('disabled','disabled');
 $("#psdiscount").attr('disabled','disabled');
 $("#psmodeofpayment").attr('disabled','disabled');
 })
 
 // by clicking generate sale button we enable all input fields and also disable generate button by changing the bgcolor to red
 $(document). on('click','.gen', function(){
  $("#pscode").removeAttr('disabled');
 $("#psname").removeAttr('disabled');
 $("#psquantity").removeAttr('disabled');
 $("#psprice").removeAttr('disabled');
 $("#psdiscount").removeAttr('disabled');
 $("#psmodeofpayment").removeAttr('disabled');
 $('.gen').attr('disabled','disabled');
 $('.gen').css({"background":"red"});
 });
 
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
<li class="" ><a href="sales_personnel.php"><span class=" glyphicon glyphicon-refresh"></span>&nbsp;Refresh</a></li>
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
      
          <h2 style=" font-family:Tahoma;  font-weight:bold"> SALES PERSONNEL DASHBOARD</h2>
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
                                           
                                              <div class="text-center"><center><img src="images/usr_sales.png" width="324" height="45"></center></div>
                                             
                                              
                                           </div><!-- end of block-->
                                       </center>
                                  
                                  </div><!-- end of holder -->
                                  
                            </div><!-- end of col-md-6 -->
                            
                            <!-- 2nd column starts here -->
                            
                            <div class="col-md-6">
                                  <div class="holder2">
                                  
                                       <center>
                                           <div class="block" id="myBtn1" >
                                           <center>
                                           <div class="text-center1"><center><img src="images/customer_dash.png" width="324" height="45"></center></div>
                                   
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

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close"><button class="btn btn-danger">X</button></span>
      <h1>SALES</h1><input  type="button" id="gen_id" name="gen_id" class="gen btn btn-success" value="Generate Sales"   class="form-control" >
    </div>
    <div class="modal-body">
     
     
    
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
              <select id="psmodeofpayment" name="psmodeofpayment" class="sales_form form-control"  >
              <option value="">Select Mode Of Payment</option>
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
              <input  type="submit"  name="enter" class="btn btn-success" value="Enter" id="myBtn2"  class="sales_form form-control" >
              </center>     
          </form>
          
          <!-- The Modal -->
<div id="myModal2" class="modal2">

  <!-- Modal content -->
  <div class="modal-content2">
    <div class="modal-header2">
    <h1>CUSTOMER's NAME HERE.</h1>
       <span class="close2"><button class="btn btn-danger">X</button></span>
     
    </div>
    <div class="modal-body2">
     
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
              <input type="submit" id="enter" name="enter" class="btn btn-success" value="OK"  class="form-control" >
              </center>
         
              
          
          </form>
    </div>
    <div class="modal-footer2">
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

          
          
                            
                            </div><!-- end of inner col-md-6-->
                            
                            <!-- 2nd form for sales i.e Credit Repayment-->
                              
                              <div class="credit_repay_form col-md-7" >
                              
                              
                              <div class="row">
                                 <div class="col-md-12" style="overflow:hidden">
                                     <div class="table-responsive" style="overflow:auto; height:500px">
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
                                       
                                   <table border="2" style="margin:4px;overflow:scroll; vertical-align:inherit" border="1" >
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
     
     
    </div>
    <div class="modal-footer">
   <h1>SALES</h1>
    </div>
  </div>

</div>



<!-- The Modal -->
<div id="myModal1" class="modal1">

  <!-- Modal content -->
  <div class="modal-content1">
    <div class="modal-header1">
      <span class="close1"><button class="btn btn-danger">X</button></span>
     <h1>ADD CUSTOMER</h1>
    </div>
    <div class="modal-body1">
      
  
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" onSubmit="return false;">
    <input type="text" id="customerSearch" name="customerSearch" placeholder="Search customer"> 
    <input type="submit" id="searchcust" class="btn btn-success" class="form-control" value="Search" >
    <font size="-1"><button type="button" id="go_back" class="btn btn-info" >Back</button></font>
    
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

    </div><!-- end of modal body -->
    <div class="modal-footer1">
      <h1>ADD CUSTOMER</h1>
    </div><!-- end of modal footer -->
  </div><!-- end of modal content -->

</div><!-- end of myModal  -->




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

  <!-- Modal content for add customer -->
  <div class="modal-content1">
    <span class="close1 "><button class="btn btn-danger">X</button></span>
        </div>

</div>


 
    
                     <script>

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