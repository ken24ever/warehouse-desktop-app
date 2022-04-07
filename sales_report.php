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
  <center><h1 style="color:#000000; font-family:Tahoma;  font-weight:bold"> SALES REPORT </h1></center>
  
  <form class="form-horizontal"  role="form" method="post" action=" ">
    
    <fieldset abled>
      <div class="row">
        
        <div class="col-md-6">
          <label for="by1" class="col-sm-2 control-label"> By</label>
          <select id="by1" class="form-control">
            <option>By</option>
          </select>&nbsp;&nbsp;&nbsp;

          <label for="from1" class="col-sm-2 control-label">From</label>
          <input type="date" id="from1" class="form-control" placeholder="date">&nbsp;&nbsp;&nbsp;

          <label for="to1" class="col-sm-2 control-label">To</label>
          <input type="date" id="to1" class="form-control" placeholder="date">

          
        </div>
      </div>
      
    </fieldset>


     
  </form>
  <center><h2 style="color:#000000; font-family:Tahoma;  font-weight:bold"> Sales Table/Content </h2></center>
  <form class="form-horizontal" role="form" method="post" action="">           
  <center><table class="table" border="1" style="border-collapse: collapse;">
    <thead>
      <tr>
        <th width="8%">Product Code</th>
        <th width="8%">Product Name</th>
        <th width="8%">Quantity</th>
        <th width="8%">Price</th>
        <th width="8%">Dicount</th>
        <th width="8%">Payment Mode</th>
        <th width="8%">Total Amount</th>
        <th width="8%">Amount Due</th>
        <th width="8%">Color</th>
        <th width="8%">Cash Received</th>
        <th width="8%">Balance</th>
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
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
      </tr>
      <tr>
        <td width="8%"> </td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
        <td width="8%"></td>
      </tr>
    </tbody>
          
  </table></center><br/><br/><br/><br/><br/>
  <div class="row">
        <div class="col-md-6">
          <label for="total" class="col-sm-2 control-label">Total</label>
          <input type="text" id="total" class="form-control" placeholder="total">
        </div>
      </div>
  </form>
</div>

</body>


</html><!--End of Sales Report  -->
