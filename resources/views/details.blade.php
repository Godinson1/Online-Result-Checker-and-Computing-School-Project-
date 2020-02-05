@include('inc.admin-navbar')

<section>
        <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header text-center"><h1>{{$results->name}}'s PROFILE</h1></div>
                            
                            <div class="row">
                                    <div class="col-md-8 col-sm-8">
                                        <small style="font-size: 30px;">Name : {{$results->name}}</small><br>
                                        <small style="font-size: 30px;">Matric Number : {{$results->matric_number}}<br>
                                        <small style="font-size: 30px;">School : {{$results->school}}<br>
                                        <small style="font-size: 30px;">Department : {{$results->department}}<br>
                                        <small style="font-size: 30px;">Sex : {{$results->sex}}<br>
                                        <small style="font-size: 30px;">Age : {{$results->age}}<br>
                                        <small style="font-size: 30px;">Phone : {{$results->phone}}<br>
                                        <small style="font-size: 30px;">Gpa : {{$results->gpa}}<br>
                                    </div>
                                     <div class="col-md-4 col-sm-4">
                                        <img class="rounded-circle" style="width: 300px; height:150px; float:right;" src="/storage/profile_images/{{$results['profile_image']}}">
                                     </div>
                                </div>

                        </div>
                    </div>
                </div>
        </div>
</section>
</section>

@include('inc.footer')