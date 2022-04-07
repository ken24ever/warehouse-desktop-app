<html>
<head>
<title>SALES</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="animate.css-master/animate.min.css">
<link rel="stylesheet" href="animate.css-master/animate.min.css">
<script src="js/jquery-3.2.1.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
  <script src="js/ajax.js"></script>
  <script src="js/main.js"></script>
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
 
 /* styling for roller */
 
.loader {
  border: 5px solid #f3f3f3;
  border-radius: 50%;
  border-top: 5px solid #3498db;
  width: 300px;
  height: 300px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}



@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}







 </style>

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
             <a class="logo navbar-brand" href="index.php"><strong class="logo">BUSINESS EDGE</strong></a>


            </div>
          </nav>
    </div><!-- end of column -->
    </div><!-- end of row -->
</div><!-- end of con-fluid -->
<!-- form section goes here -->
   
   
<div class="container">
    <div class="row">
      
    <div class="col-md-6">
        <div class="title page-header">
      
        <h2 style="color:#000000; font-family:Tahoma;  font-weight:bold">Sales</h2>
          
        </div>
      
      
      <form role="form"  method="post" action="sales.php" class="form" onSubmit="">
                                  
          <div class="form-group col-md-8">
                                 
             <label class="label" for="productcode">Product Code</label>
             <input type="text" id="productcode" name="productcode" placeholder="Enter Product Code" class="form-control" >
                           
          </div>
          <div class="form-group col-md-8">
                                 
              <label class="label" for="productname">Product Name</label>
              <input type="text" id="productname" name="productname" placeholder="Enter Product Name" class="form-control" >
                           
          </div>
          
          <div class="form-group col-md-8">
              <label class="label" for="quantity">Quantity</label>
              <input type="text" id="quantity" name="quantity" placeholder="Enter Quantity" class="form-control" >
            
          </div>
          <div class="form-group col-md-8">
              <label class="label" for="price">Price</label>
              <input type="text" id="price" name="price" placeholder="Enter Price" class="form-control" >
            
          </div>
          <div class="form-group col-md-8">
                                 
              <label class="label" for="discount">Discount</label>
              <input type="text" id="discount" name="discount" placeholder="Enter Discount" class="form-control">
                           
          </div>
            
          <div class="form-group col-md-8">
                                
              <label class="label" for="modeofpayment">Mode Of Payment</label>
              <select id="modeofpayment" name="modeofpayment" class="form-control" >
              <option value="">Select Mode Of Payment</option><option value="">Cash</option><option value="">POS</option>
              <option value="">Bank/Teller</option><option value="">Cheque</option><option value="">Bank Draft</option>
              <option value="">Mobile Transfer</option>
              </select>
          </div>
                                          
          <div class="form-group col-md-8">
              <br/>
              <center>                                 
              <input  type="submit" id="additem" name="additem" class="btn btn-success" value="Add Item" onClick=" "  class="form-control" >
               <input  type="submit" id="creditrepayment" name="creditrepayment" class="btn btn-success" value="Credit Repayment" onClick=" "  class="form-control" >
              </center>
                                
          </div>
                              
                             
                              
                              

                                  
      </form>
     
      </div>
      
    </div>
</div>

</body>
</html> 