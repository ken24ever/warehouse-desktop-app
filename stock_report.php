<!DOCTYPE html>
<html lang="en">
<head>
  <title>Reporting</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="../../ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">
  <center><h1 style="color:#000000; font-family:Tahoma;  font-weight:bold"> STOCK REPORT </h1></center>
  
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

</body>


</html><!--End of Stock Report  -->
