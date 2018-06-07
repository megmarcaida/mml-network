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
    <link href="{{ asset('assets/admin/css/app.css') }}" rel="stylesheet">


    <link href="{{ asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/fullcalendar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/maruti-style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/maruti-media.css') }}" rel="stylesheet" class="skin-color" >

</head>
<body>
    <div id="app">
      <!--Header-part-->
      <div id="header">
        <h1><a href="dashboard.html">Maruti Admin</a></h1>
      </div>
      <!--close-Header-part-->

      <!--top-Header-messaages-->
      <div class="btn-group rightzero"> <a class="top_message tip-left" title="Manage Files"><i class="icon-file"></i></a> <a class="top_message tip-bottom" title="Manage Users"><i class="icon-user"></i></a> <a class="top_message tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span class="label label-important">5</span></a> <a class="top_message tip-bottom" title="Manage Orders"><i class="icon-shopping-cart"></i></a> </div>
      <!--close-top-Header-messaages-->

      <!--top-Header-menu-->
      <div id="user-nav" class="navbar navbar-inverse">
        <ul class="nav">
          <li class="" ><a title="" href="#"><i class="icon icon-user"></i> <span class="text">Profile</span></a></li>
          <li class=" dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a class="sAdd" title="" href="#">new message</a></li>
              <li><a class="sInbox" title="" href="#">inbox</a></li>
              <li><a class="sOutbox" title="" href="#">outbox</a></li>
              <li><a class="sTrash" title="" href="#">trash</a></li>
            </ul>
          </li>
          <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
          <li class="">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
            <i class="icon icon-share-alt"></i> <span class="text">Logout</span>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </li>
        </ul>
      </div>
      <div id="search">
        <input type="text" placeholder="Search here..."/>
        <button type="submit" class="tip-left" title="Search"><i class="icon-search icon-white"></i></button>
      </div>
      <!--close-top-Header-menu-->

      <div id="sidebar">
        <ul>
          <li class="active"><a href="{{ env('APP_URL', '') }}/admin"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
          <li> <a href="{{ env('APP_URL', '') }}/admin/master-file"><i class="icon icon-briefcase"></i> <span>Master File</span></a> </li>
          <li> <a href="{{ env('APP_URL', '') }}/admin/encashment-request"><i class="icon icon-inbox"></i> <span>Encashment Requests</span></a> </li>
          <li><a href="{{ env('APP_URL', '') }}/admin/transactions"><i class="icon icon-th"></i> <span>Transactions</span></a></li>
          <li><a href="{{ env('APP_URL', '') }}/admin/settings"><i class="icon icon-wrench"></i> <span>Settings</span></a></li>
        </ul>
      </div>
        <main class="py-4">
            @yield('content')
        </main>
        <div class="row-fluid">
          <div id="footer" class="span12"> 2012 &copy; Marutii Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
        </div>
    </div>
</body>

<script src="{{ asset('assets/admin/js/excanvas.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/jquery.ui.custom.js') }}"></script>
<script src="{{ asset('assets/admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/jquery.flot.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/jquery.flot.resize.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/jquery.gritter.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/jquery.peity.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/fullcalendar.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/maruti.js') }}"></script>
<script src="{{ asset('assets/admin/js/maruti.dashboard.js') }}"></script>
<script src="{{ asset('assets/admin/js/maruti.chat.js') }}"></script>
<script src="{{ asset('assets/admin/js/maruti.interface.js') }}"></script>
<script src="{{ asset('assets/admin/js//maruti.popover.js') }}"></script>

</html>
