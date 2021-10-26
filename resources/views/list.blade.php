<!DOCTYPE html>
<html lang="en">
    <head>
        <title>list</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"> </script>
   <script> $(document).ready(function() {
    $('#tbl1').DataTable();
} );
   </script>

    </head>
    <body>
    
      <div class="container">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List Of Transactions</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="tbl1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>AMOUNT</th>
                    <th>AUTH CODE</th>
                    <th>PAYEMENT STATUS</th>
                     
                  </tr>
                  </thead>
                  <tbody> 
                 @foreach($payments as $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->amount}}</td>
                        <td>{{$row->authCode}}</td>
                         <td>{{$row->paymentStatus}}</td>   
                    </tr>
                 
                   @endforeach
                </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
       
    </body>
</html>
      
   