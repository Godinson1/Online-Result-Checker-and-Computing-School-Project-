@include('inc.admin-navbar')
@include('inc.messages')
<!DOCTYPE html>
<html>
 <head>
  <title>ONLINE RESULT</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>

   <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header"><h1>COMPUTE STUDENT'S RESULT</h1></div>


                  {!! Form::open(['action' => ['ResultController@update', $result->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                           <div class="form-group">
                           {{Form::text('mis_score', '', ['class'  => 'form-control', 'placeholder' => 'PHILOSOPHY SCORE'])}}
                          </div>
                           <div class="form-group">
                           {{Form::text('information_score', '', ['class'  => 'form-control', 'placeholder' => 'PHYSICS SCORE'])}}
                          </div>
                          <div class="form-group">
                              {{Form::text('project_score', '', ['class'  => 'form-control', 'placeholder' => 'ENGLISH SCORE'])}}
                          </div>
                          <div class="form-group">
                           {{Form::text('graphics_score', '', ['class'  => 'form-control', 'placeholder' => 'ALGEBRA SCORE'])}}
                           </div>
                           <div class="form-group">
                           {{Form::text('computer_score', '', ['class'  => 'form-control', 'placeholder' => 'COMPUTER SCORE'])}}
                          </div>  
                          <div class="form-group">
                          {{Form::text('statistics_score', '', ['class'  => 'form-control', 'placeholder' => 'STATISTICS SCORE'])}}
                          </div>    
                          {{Form::hidden('_method', 'PUT')}} 
                          <div class="form-group text-center">
                           {{Form::submit('UPLOAD', ['class' => 'btn btn-success'])}}
                          </div>
                   {!! Form::close() !!}	



              </div>
          </div>
      </div>
  </div>


@include('inc.footer')