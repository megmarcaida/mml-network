<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="{{ asset('assets/css/paper-dashboard.css') }}" rel="stylesheet"/>

    <!-- Main CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('assets/css/demo.css') }}" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
</head>
<body>

  <div class="wrapper">
      <div class="sidebar" data-background-color="white" data-active-color="danger">

      <!--
      Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
      Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->

        <div class="sidebar-wrapper">
              <div class="logo">
                    <a href="{{ url('/home') }}" class="simple-text">
                        {{ config('app.name', 'Laravel') }}
                    </a>
              </div>

              <ul class="nav">
                  <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              <i class="ti-panel"></i>
                        <p>Stats</p>
                        </a>
                        <ul class="dropdown-menu side-menu">
                          <li><a href="home">Dashboard</a></li>
                          <li><a href="direct">Directs</a></li>
                          <li><a href="genealogy">Genealogy</a></li>
                          <li><a href="#">Pass Up</a></li>
                          <li><a href="#">Tables of Exit</a></li>
                          <li><a href="binary-genealogy">Binary Genealogy</a></li>
                          <li><a href="indirect">Indirects</a></li>
                        </ul>
                  </li>
                  <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              <i class="ti-tag"></i>
                        <p>Products and Services</p>
                        </a>
                        <ul class="dropdown-menu side-menu">
                          <li><a href="#">E-Loading</a></li>
                          <li><a href="#">Data Entry</a></li>
                          <li><a href="#">E-Books</a></li>
                          <li><a href="#">Free SMS</a></li>
                        </ul>
                  </li>
                  <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              <i class="ti-money"></i>
                        <p>E-Wallet</p>
                        </a>
                        <ul class="dropdown-menu side-menu">
                          <li><a href="#">Add Wallet Funds</a></li>
                          <li><a href="#">My Payments</a></li>
                          <li><a href="#">Purchase</a></li>
                          <li><a href="#">Code List</a></li>
                          <li><a href="#">Mode of Payments</a></li>
                          <li><a href="#">Conversion Center</a></li>
                        </ul>
                  </li>
                  <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              <i class="ti-wallet"></i>
                        <p>Encashment</p>
                        </a>
                        <ul class="dropdown-menu side-menu">
                          <li><a href="#">Settings</a></li>
                          <li><a href="#">My Encashments</a></li>
                          <li><a href="#">Encashment Request</a></li>
                        </ul>
                  </li>
                  <li class="dropdown">
                        <a href="#">
                              <i class="ti-desktop"></i>
                        <p>Transaction History</p>
                        </a>
                  </li>

          <li class="active-pro">
                      <a href="upgrade.html">
                          <i class="ti-export"></i>
                          <p>Upgrade Account</p>
                      </a>
                  </li>
              </ul>
        </div>
      </div>

      <div class="main-panel">
          <nav class="navbar navbar-default">
              <div class="container-fluid">
                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar bar1"></span>
                          <span class="icon-bar bar2"></span>
                          <span class="icon-bar bar3"></span>
                      </button>

                  </div>
                  <div class="collapse navbar-collapse">
                      <ul class="nav navbar-nav navbar-right">
                          <li>
                              <a href="home">
                                  <i class="ti-panel"></i>
                                  <p>Stats</p>
                              </a>
                          </li>
                          <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                      <i class="ti-bell"></i>
                                      <p class="notification">5</p>
                                <p>Notifications</p>
                                <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a href="#">Notification 1</a></li>
                                  <li><a href="#">Notification 2</a></li>
                                  <li><a href="#">Notification 3</a></li>
                                  <li><a href="#">Notification 4</a></li>
                                  <li><a href="#">Another notification</a></li>
                                </ul>
                          </li>


                          <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                      <i class="ti-user"></i>
                                <p>{{  Auth::user()->firstname . ' ' .  Auth::user()->lastname }}</p>
                                <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a href="profile">Profile</a></li>
                                  <li><a href="#">Account Activation</a></li>
                                  <li><a href="#">Link Account</a></li>
                                  <li><a href="#">System</a></li>
                                  <li><a href="#">Help</a></li>
                                  <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                  </li>
                                </ul>
                          </li>
                      </ul>

                  </div>
              </div>
          </nav>


          <div class="content">
              <div class="container-fluid">

                        @yield('content')
              </div>
          </div>


          <footer class="footer">
              <div class="container-fluid">
                  <nav class="pull-left">
                      <ul>

                          <li>
                              <a href="#">
                                  MML
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                 Blog
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  Licenses
                              </a>
                          </li>
                      </ul>
                  </nav>
                  <div class="copyright pull-right">
                      &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="#">MML</a>
                  </div>
              </div>
          </footer>

      </div>
  </div>



</body>
<!--   Core JS Files   -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="{{ asset('assets/js/bootstrap-checkbox-radio.js') }}"></script>

<!--  Charts Plugin -->
<script src="{{ asset('assets/js/chartist.min.js') }}"></script>

<!--  Notifications Plugin    -->
<script src="{{ asset('assets/js/bootstrap-notify.js') }}"></script>


<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="{{ asset('assets/js/paper-dashboard.js') }}"></script>

<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('assets/js/demo.js') }}"></script>


</html>
