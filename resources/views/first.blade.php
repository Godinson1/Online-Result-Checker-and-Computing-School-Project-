@include('inc.navbar')

<section>


                <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header"><h1>VIEW RESULT</h1></div>
                                    <img class="rounded-circle" style = "width:100px; height:100px; image-align:right; position:relative;" src="/storage/profile_images/{{$result->profile_image}}"><br>
                                   <h5>NAME : {{$result->name}}</h5><br>
                                   <h5>MATRICULATION NUMBER : {{$result->matric_number}}</h5><br>
                                   <h5>SCHOOL : {{$result->school}}</h5><br>
                                   <h5>DEPARTMENT : {{$result->department}}</h5><br>
                                   <h5>PHONE : {{$result->phone}}</h5><br>

                                   <table class="table table-striped table-dark">
                                    <tr>
                                        <th>COURSE</th>
                                        <th>COURSE UNIT</th>
                                        <th>SCORE</th>
                                        <th>GRADE</th>
                                    </tr>
                                    <tr>
                                        <th>ALGEBRA</th>
                                        <th>{{$result->graphics_unit}}</th>
                                        <th>{{$result->graphics_score}}</th>
                                        <th>{{$result->graphics_grade}}</th>
                                    </tr>
                                    <tr>
                                        <th>PHILOSOPHY</th>
                                        <th>{{$result->mis_unit}}</th>
                                        <th>{{$result->mis_score}}</th>
                                        <th>{{$result->mis_grade}}</th>
                                    </tr>
                                    <tr>
                                        <th>STATISTICS</th>
                                        <th>{{$result->statistics_unit}}</th>
                                        <th>{{$result->statistics_score}}</th>
                                        <th>{{$result->statistics_grade}}</th>
                                    </tr>
                                    <tr>
                                        <th>ENGLISH</th>
                                        <th>{{$result->project_unit}}</th>
                                        <th>{{$result->project_score}}</th>
                                        <th>{{$result->project_grade}}</th>
                                    </tr>
                                    <tr>
                                        <th>PHYSICS</th>
                                        <th>{{$result->information_unit}}</th>
                                        <th>{{$result->information_score}}</th>
                                        <th>{{$result->information_grade}}</th>
                                    </tr>
                                    <tr>
                                        <th>COMPUTER</th>
                                        <th>{{$result->computer_unit}}</th>
                                        <th>{{$result->computer_score}}</th>
                                        <th>{{$result->computer_grade}}</th>
                                    </tr>
                                </table>
                                   <hr>
                                    <table class="table table-striped table-success">
                                        <tr>
                                            <th>SEMESTER</th>
                                            <th>TCP</th>
                                            <th>TCU</th>
                                            <th>GPA</th>
                                        </tr>
                                        <tr>
                                            <td>FIRST</td>
                                            <td>{{$result->tcp}}</td>
                                            <td>{{$result->tcu}}</td>
                                            <td>{{$result->gpa}}</td>
                                        </tr>
                                   </table>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
            


</section>






@include('inc.footer')