@include('inc.admin-navbar')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h1>EDIT STUDENT'S PROFILE</h1></div>
  
                    <small style="font-size:30px;">Name :  {{$profile->name}}<small><br>
                     <small style="font-size:30px;">Email  : {{$profile->email}}</small>
                    {!! Form::open(['action' => ['ProfileController@update', $profile->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                            <div class="form-group">
                            {{Form::text('age', '', ['class'  => 'form-control', 'placeholder' => 'AGE'])}}
                            </div>    
                            <div class="form-group">
                            {{Form::text('sex', '', ['class'  => 'form-control', 'placeholder' => 'SEX'])}}
                            </div>  
                            <div class="form-group">
                             {{Form::text('department', '', ['class'  => 'form-control', 'placeholder' => 'DEPARTMENT'])}}
                             </div>
                             <div class="form-group">
                                {{Form::text('level', '', ['class'  => 'form-control', 'placeholder' => 'LEVEL'])}}
                             </div>
                            <div class="form-group">
                            {{Form::text('school', '', ['class'  => 'form-control', 'placeholder' => 'SCHOOL'])}}
                            </div>
                            <div class="form-group">
                            {{Form::text('phone', '', ['class'  => 'form-control', 'placeholder' => 'PHONE'])}}
                             </div>    
                            <div class="form-group">
                             {{Form::text('matric_number', '', ['class'  => 'form-control', 'placeholder' => 'MATRIC NUMBER'])}}

                             {{Form::hidden('_method', 'PUT')}} 
                             <div class="form-group">
                             {{Form::label('profile_image', 'STUDENT IMAGE')}}
                             {{Form::file('profile_image')}}
                             </div> 
                            <div class="form-group text-center">
                             {{Form::submit('UPLOAD', ['class' => 'btn btn-success'])}}
                            </div>
                     {!! Form::close() !!}	

                            </div>
                </div>
            </div>
        </div>
</div>
</

@include('inc.footer')
