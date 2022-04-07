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
  <center><h1 style="color:#000000; font-family:Tahoma;  font-weight:bold"> SUPPLIER/CREDITOR REPORT </h1></center>
  
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

</body>


</html><!--End of Suppliers Report  -->
