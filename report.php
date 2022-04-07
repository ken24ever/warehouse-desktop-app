<html>
<head>
<title>DIRECTOR'S DETAILS</title>
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
       <a class="logo navbar-brand" href="index.php"><strong class="logo">APEX BUSINESS EDGE</strong></a>

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
      
       <center><h1 style="color:#000000; font-family:Tahoma;  font-weight:bold"> REPORT DIRECTORY </h1></center>
          
      </div>
      
      
      <form role="form"  method="post" action=" " class=" ">
          
                                
                                <Center>  
                                <input  type="submit" id="pur_report" name="pur_report" class="btn btn-success" value="Purchase Report"  class="form-control" >
          

                                
                                <input  type="submit" id="Stk_report" name="Stk_report" class="btn btn-success" value="Stock Report"  class="form-control" >
                      <br/><br/> 

                                <input  type="submit" id="cr_report" name="cr_report" class="btn btn-success" value="Supplier Report"  class="form-control" >
                           
                                          
                                <input  type="submit" id="sale_report" name="sale_report" class="btn btn-success" value="Sales Report"  class="form-control" >

                      <br/><br/>     
          
                                <input  type="submit" id="exp_report" name="exp_report" class="btn btn-success" value="Expense Report"  class="form-control" >
      
                                 
                                <input  type="submit" id="pro_report" name="pro_report" class="btn btn-success" value="Profit  Report"  class="form-control" >


                      <br/><br/> 

                                <input  type="submit" id="dr_report" name="dr_report" class="btn btn-success" value="Dealer  Report"  class="form-control" >
                                 
                                

          

                                 <input  type="submit" id="vat_report" name="vat_report" class="btn btn-success" value="  VAT  Report"  class="form-control" >
                      <br/><br/>  

                                 </Center>
       

         
         
       
                    
                                 
        </form>
     
    </div>
      
  </div>
</div>