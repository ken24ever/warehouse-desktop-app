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
  <center><h1 style="color:#000000; font-family:Tahoma;  font-weight:bold">PROFITABILITY REPORT </h1></center>
  
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

</body>


</html><!--End of Profitability Report  -->
