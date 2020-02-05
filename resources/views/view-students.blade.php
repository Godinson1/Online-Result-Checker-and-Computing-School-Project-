@include('inc.admin-navbar')
<!-- ##### Hero Area Start ##### -->
<div class="hero-area">
    <div class="hero-slideshow owl-carousel">

        <!-- Single Slide -->
        <div class="single-slide bg-img">
            <!-- Background Image-->
            <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(/storage/img/bg-img/GG.png);"></div>
            <!-- Welcome Text -->
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-lg-9">
                        <div class="welcome-text text-center">
                            <h2 data-animation="fadeInUp" data-delay="300ms">view all<span> students</span></h2>            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide Duration Indicator -->
            <div class="slide-du-indicator"></div>
        </div>

        <!-- Single Slide -->
        <div class="single-slide bg-img">
            <!-- Background Image-->
            <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(/storage/img/bg-img/course-5.jpg);"></div>
            <!-- Welcome Text -->
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-lg-9">
                        <div class="welcome-text text-center">
                            <h2 data-animation="fadeInDown" data-delay="300ms"><span>EDO STATE UNIVERSITY</span> IYAMHO</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide Duration Indicator -->
            <div class="slide-du-indicator"></div>
        </div>

        <!-- Single Slide -->
        <div class="single-slide bg-img">
            <!-- Background Image-->
            <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(/storage/img/bg-img/GG.png);"></div>
            <!-- Welcome Text -->
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-lg-9">
                        <div class="welcome-text text-center">
                            <h2 data-animation="fadeInUp" data-delay="300ms">RESULT<span> CHECKING</span></h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide Duration Indicator -->
            <div class="slide-du-indicator"></div>
        </div>

    </div>
</div>
<!-- ##### Hero Area End ##### -->

<section>
        <h1>TOTAL STUDENT IN DEPARTMENT - <span class="badge badge-light">{{$results->count()}}</span></h1>
    @if($results->count() > 0)
        @foreach($results as $result)
        <div class="container-fluid">
                  <div class= "jumbotron">
                      <div class="row">
                          <div class="col-md-4 col-sm-4">
                          <img class="rounded-circle" style="width: 150px; height:150px;" src="/storage/profile_images/{{$result['profile_image']}}">
                          </div>
                           <div class="col-md-8 col-sm-8">
                                  <h3>{{$result['name']}}</h3>
                                  <small style="font-size: 30px;">{{$result['gpa']}}</small>
                           </div>
                      </div>
                      
          
                 @endforeach
                 @endif
        </div>
</section>

@include('inc.footer')