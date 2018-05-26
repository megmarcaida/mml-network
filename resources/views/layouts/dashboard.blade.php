<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/app.js') }}" defer></script>

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
                  <li class="active">
                      <a href="dashboard.html">
                          <i class="ti-panel"></i>
                          <p>Dashboard</p>
                      </a>
                  </li>
                  <li>
                      <a href="user.html">
                          <i class="ti-user"></i>
                          <p>User Profile</p>
                      </a>
                  </li>
                  <li>
                      <a href="table.html">
                          <i class="ti-view-list-alt"></i>
                          <p>Table List</p>
                      </a>
                  </li>
                  <li>
                      <a href="typography.html">
                          <i class="ti-text"></i>
                          <p>Typography</p>
                      </a>
                  </li>
                  <li>
                      <a href="icons.html">
                          <i class="ti-pencil-alt2"></i>
                          <p>Icons</p>
                      </a>
                  </li>
                  <li>
                      <a href="maps.html">
                          <i class="ti-map"></i>
                          <p>Maps</p>
                      </a>
                  </li>
                  <li>
                      <a href="notifications.html">
                          <i class="ti-bell"></i>
                          <p>Notifications</p>
                      </a>
                  </li>
          <li class="active-pro">
                      <a href="upgrade.html">
                          <i class="ti-export"></i>
                          <p>Upgrade to Premium</p>
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
                      <a class="navbar-brand" href="#">Dashboard</a>
                  </div>
                  <div class="collapse navbar-collapse">
                      <ul class="nav navbar-nav navbar-right">
                          <li>
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
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
                                      <i class="ti-settings"></i>
                                <p>Settings</p>
                                <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
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
                                  <li><a href="#">Notification 2</a></li>
                                  <li><a href="#">Notification 3</a></li>
                                  <li><a href="#">Notification 4</a></li>
                                  <li><a href="#">Another notification</a></li>
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
