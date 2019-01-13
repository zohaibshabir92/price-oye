<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="Dashboard">
      <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>{{ config('app.name', 'PriceOye') }}</title>
      <!-- Bootstrap core CSS -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
      <!--external css-->
      <link href="{{ asset('font-awesome/css/font-awesome.css') }} " rel="stylesheet" />
      <link rel="stylesheet" type="text/css" href="{{ asset('js/gritter/css/jquery.gritter.css') }}" />
      <!-- Custom styles for this template -->
      <link href="{{ asset('css/style.css') }}" rel="stylesheet">
      <link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet">
      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <section id="container" >
         <!-- **********************************************************************************************************************************************************
            TOP BAR CONTENT & NOTIFICATIONS
            *********************************************************************************************************************************************************** -->
         <!--header start-->
         <header class="header black-bg">
            <div class="sidebar-toggle-box">
               <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <!--logo start-->
            <a class="logo"><b>Price Oye</b></a>
            <!--logo end-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="top-menu">
               <ul class="nav pull-right top-menu">
                  @guest
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
                  @else
                  <li class="nav-item dropdown">
                     <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                     {{ Auth::user()->name }} 
                     </a>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                           @csrf
                        </form>
                     </div>
                  </li>
                  @endguest
               </ul>
            </div>
         </header>
         <!--header end-->
         <!-- **********************************************************************************************************************************************************
            MAIN SIDEBAR MENU
            *********************************************************************************************************************************************************** -->
         <!--sidebar start-->
         <aside>
            <div id="sidebar"  class="nav-collapse ">
               <!-- sidebar menu start-->
               <ul class="sidebar-menu" id="nav-accordion">
                  <p class="centered"><a href="#"><img src="{{ asset('img/ui-sam.jpg') }}" class="img-circle" width="60"></a></p>
                  <h5 class="centered">Laravel Vue Task</h5>
                  <li class="mt">
                     <router-link to='/' class="active">
                        <i class="fa fa-dashboard"> Dashboard</i>
                     </router-link>
                  </li>

                  <li class="sub-menu">
                     <router-link to='/expense'>
                        <i class="fa fa-desktop"> List Expense</i>
                        
                     </router-link>
                  </li>
                   <li class="sub-menu">
                     <router-link to='/expense/create'>
                        <i class="fa fa-desktop"> Create Expense</i>
                     </router-link>
                  </li>
                  <li class="sub-menu">
                    <router-link to='/category'>
                        <i class="fa fa-cogs"> List Categories</i>
                       
                     </router-link>
                  </li>
                  <li class="sub-menu">
                     <router-link to='/category/create'>
                        <i class="fa fa-cogs"> Create Category</i>
                     </router-link>
                  </li>
               </ul>
               <!-- sidebar menu end-->
            </div>
         </aside>
         <!--sidebar end-->
         <!-- **********************************************************************************************************************************************************
            MAIN CONTENT
            *********************************************************************************************************************************************************** -->
         <!--main content start-->
         <section id="main-content">
            <section class="wrapper" id="app">
               <router-view></router-view>
            </section>
            <!-- /wrapper -->
         </section>
         <!-- /MAIN CONTENT -->
         <!--main content end-->
         
      </section>
      <script src="{{ asset('js/app.js') }}" defer></script>
      <script src="{{ asset('js/jquery.js') }}"></script>
      <script src="{{  asset('js/jquery-1.8.3.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <script class="include" type="text/javascript" src="{{ asset('js/jquery.dcjqaccordion.2.7.js') }}"></script>
      <script src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>
      <script src="{{ asset('js/jquery.nicescroll.js') }}" type="text/javascript"></script>
      <!--common script for all pages-->   
      <!--script for this page-->
      <script src="{{ asset('js/gritter/js/jquery.gritter.js') }}"></script>
      <script src="{{ asset('js/gritter-conf.js') }}"></script>
   </body>
</html>