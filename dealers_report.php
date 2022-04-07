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
  <center><h1 style="color:#000000; font-family:Tahoma;  font-weight:bold">DEALER/DEBTOR REPORT </h1></center>
  
  <form class="form-horizontal"  role="form" method="post" action=" ">
    
    <fieldset abled>
      <div class="row">
        
        <div class="col-md-6">
          <label for="deal_nam" class="col-sm-2 control-label"> Dealer Name</label>
          <select id="deal_nam" class="form-control">
            <option>Dealer Name</option>
          </select>&nbsp;&nbsp;&nbsp;

          <label for="comp_nam" class="col-sm-2 control-label"> Company Name</label>
          <select id="comp_nam" class="form-control">
            <option>Company Name</option>
          </select>&nbsp;&nbsp;&nbsp;

          <label for="from6" class="col-sm-2 control-label">From</label>
          <input type="date" id="from6" class="form-control" placeholder="date">&nbsp;&nbsp;&nbsp;

          <label for="to6" class="col-sm-2 control-label">To</label>
          <input type="date" id="to6" class="form-control" placeholder="date">

          
        </div>
      </div>
      
    </fieldset>


     
  </form>
  <center><h2 style="color:#000000; font-family:Tahoma;  font-weight:bold"> Debtors Table </h2></center>
  <form class="form-horizontal" role="form" method="post" action="">           
  <center><table class="table" border="1" style="border-collapse: collapse;">
    <thead>
      <tr>
        <th width="10%">Dealer ID</th>
        <th width="10%">Dealer Name</th>
        <th width="10%">Company Name</th>
        <th width="10%">Company Phone No</th>
        <th width="10%">Company Email</th>
        <th width="10%">Company Address</th>
        <th width="10%">LGA</th>
        
        </tr>
    </thead>
    <tbody>
      <tr>
        <td width="10%"></td>
        <td width="10%"></td>
        <td width="10%"></td>
        <td width="10%"></td>
        <td width="10%"></td>
        <td width="10%"></td>
        <td width="10%"></td>
      </tr>
      <tr>
        <td width="10%"></td>
        <td width="10%"></td>
        <td width="10%"></td>
        <td width="10%"></td>
        <td width="10%"></td>
        <td width="10%"></td>
        <td width="10%"></td>
        

      </tr>
      <tr>
        <td width="10%"></td>
        <td width="10%"></td>
        <td width="10%"></td>
        <td width="10%"></td>
        <td width="10%"></td>
        <td width="10%"></td>
        <td width="10%"></td>
      </tr>
    </tbody>
          
  </table></center>
  
  </form>
</div>

</body>


</html><!--End of Dealers Report  -->
