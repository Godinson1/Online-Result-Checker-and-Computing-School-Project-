@include('inc.admin-navbar')
<!DOCTYPE html>
<html>
 <head>
  <title>ONLINE RESULT</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>

<div class="container box">
        <h3 align="center">All Student's Record</h3><br />
        <div class="panel panel-default">
         <div class="panel-heading">Search Student's Data</div>
         <div class="panel-body">
          <div class="form-group">
           <input type="text" name="search" id="search" class="form-control" placeholder="Search Student's Data" />
          </div>
          <div class="table-responsive">
           <h3 align="center">Total Data : <span id="total_records"></span></h3>
           <table class="table table-striped table-dark table-bordered">
            <thead>
             <tr>
              <th>Surname</th>
              <th>Lastname</th>
              <th>Address</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Bvn</th>
              <th>Profile</th>
             </tr>
            </thead>
            <tbody>
     
            </tbody>
           </table>
          </div>
         </div>    
        </div>
       </div>
    
     
      </body>
     </html>
     
     <script>
     $(document).ready(function(){
     
      fetch_customer_data();
     
      function fetch_customer_data(query = '')
      {
       $.ajax({
        url:"{{ route('profile.action') }}",
        method:'GET',
        data:{query:query},
        dataType:'json',
        success:function(data)
        {
         $('tbody').html(data.table_data);
         $('#total_records').text(data.total_data);
        }
       })
      }
     
      $(document).on('keyup', '#search', function(){
       var query = $(this).val();
       fetch_customer_data(query);
      });
     });
     </script>
     
     @include('inc.footer')
