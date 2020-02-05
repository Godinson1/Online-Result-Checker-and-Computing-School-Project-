<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>EDO STATE UNIVERSITY</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('storage/img/core-img/favicon.ico')}}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 d-flex justify-content-between">
                        <!-- Logo Area -->
                        <div class="logo">
                            <a href="/admin"><img style="width: 50px; height:50px;" src="/storage/img/bg-img/images.jpeg"></a>
                        </div>

                        <!-- Top Contact Info -->
                        <div class="top-contact-info d-flex align-items-center">
                            <a data-toggle="tooltip" data-placement="bottom" title="Click to Logout" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="credit-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="creditNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="/admin/check">COMPUTE</a></li>
                                   <!-- <li><a href="">STUDENT</a>
                                        <ul class="dropdown">
                                            <li><a class="disabled" href="/second">&nbsp; SECOND SEMESTER</a></li>
                                            <li><a href="/admin/student-profile">PROFILE</a></li> 
                                        </ul>
                                    </li>-->
                                    <li><a href="/admin/view-students">VIEW STUDENTS</a></li>
                                    <li><a href="/admin/search">SEARCH</a></li>
                                    
                                    
                                   
                                    
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Contact-->
                        <div class="contact">
                            <a data-toggle="tooltip" data-placement="bottom" title="Admin Logged In" href="#">                        <!-- <img src="/storage/img/core-img/call2.png" alt=""> -->
                                {{--Auth::user()->name--}} <span class="caret"></span>
                            </a>
                        </div>
                     
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
