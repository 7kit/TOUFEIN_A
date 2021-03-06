<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('niceadmin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('niceadmin/css/bootstrap-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('niceadmin/css/elegant-icons-style.css') }}" rel="stylesheet">
    <link href="{{ asset('niceadmin/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('niceadmin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('niceadmin/css/style-responsive.css') }}" rel="stylesheet">
</head>
<body>
    <section id="container" class="">
      <!--header start-->

      <header class="header dark-bg">
        <div class="toggle-nav">
          <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
        </div>

        <!--logo start-->
        <!-- <a href="index.html" class="logo">Tou <span class="lite">Fein</span></a> -->
        <a href="index.html"><img height="60px" src="niceadmin/assets/img/logo.png" alt="" class="img-fluid" style=" margin-top:0px"></a>
        <!--logo end-->

        


        <div class="top-nav notification-row">
          <!-- notificatoin dropdown start-->
          <ul class="nav pull-right top-menu">
            @guest
                <li class="">
                    <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="">
                        <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
            
            <!-- task notificatoin start -->
            <!-- task notificatoin end -->
            <!-- inbox notificatoin start-->
            <!-- inbox notificatoin end -->
            <!-- alert notification start-->
            <li id="alert_notificatoin_bar" class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                              <i class="icon-bell-l"></i>
                              <span class="badge bg-important">7</span>
                          </a>
              
            </li>
            <!-- alert notification end-->
            <!-- user login dropdown start-->
            <li class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                              <span class="profile-ava">
                                  <img alt="" src="niceadmin/img/avatar1_small.jpg">
                              </span>
                              <span class="username">{{ Auth::user()->name }}</span>
                              <b class="caret"></b>
                          </a>
              <ul class="dropdown-menu extended logout">
                <div class="log-arrow-up"></div>
                <li class="eborder-top">
                  <a href="#"><i class="icon_profile"></i> My Profile</a>
                </li>
                <li>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="icon_key_alt"></i> Log Out</a>
                </li>
                <li>
                  <a href="#"><i class="icon_key_alt"></i> Documentation</a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </ul>
            </li>
            <!-- user login dropdown end -->
            @endguest
          </ul>
          <!-- notificatoin dropdown end-->
        </div>
      </header>
      <!--header end-->

      <!--sidebar start-->
      <aside>
        <div id="sidebar" class="nav-collapse ">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu">
            <li class="">
              <a class="" href="index.html">
                            <i class="icon_house_alt"></i>
                            <span>Dashboard</span>
                        </a>
            </li>

          </ul>
          <!-- sidebar menu end-->
        </div>
      </aside>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
        <section class="wrapper">
          <div class="row">
            <div class="col-lg-12">
              <h3 class="page-header"><i class="fa fa fa-bars"></i> Pages</h3>
              <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="index.html">Accueil</a></li>
                <li><i class="fa fa-bars"></i>Dashboard subscriber</li>
                <!-- <li><i class="fa fa-square-o"></i>Pages</li> -->
              </ol>
            </div>
          </div>
          <!-- page start-->
            <div class="row">
              <div class="col-lg-12">
                <!-- début de la partie publicité -->
                <section class="panel">
                              <div class="carousel slide auto panel-body" id="c-slide">
                                <ol class="carousel-indicators out">
                                  <li data-target="#c-slide" data-slide-to="0"></li>
                                  <li data-target="#c-slide" data-slide-to="1"></li>
                                  <li class="active" data-target="#c-slide" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                  <div class="item text-center">
                                    <h3>Effectuez vos trasactions en toute sécurité avec <b>TouFein</b>, votre plateforme de confiance.</h3>
                                    <small>Très sécurisé</small>
                                  </div>
                                  <div class="item text-center">
                                    <h3>Procéder à la création de voter aujourd'hui sans plus tarder, c'est simple et facile, mais surtout sans aucun frais </h3>
                                    <small>Nous vous comprenons</small>
                                  </div>
                                  <div class="item text-center active">
                                    <h3>Tranférez des unités d'argent que nous appelons <b>Fein</b> sur la plateforme, via Flooz, TMoney, MTN Money ou tout autre mobile money et ce sera parti pour profitez au maximum de cette plateforme !</h3>
                                    <small>Facilement intégrable.</small>
                                  </div>
                                </div>
                                <a class="left carousel-control" href="#c-slide" data-slide="prev">
                                                  <i class="arrow_carrot-left_alt2"></i>
                                              </a>
                                <a class="right carousel-control" href="#c-slide" data-slide="next">
                                                  <i class="arrow_carrot-right_alt2"></i>
                                              </a>
                              </div>
                </section>
                <!-- fin de la partie publicité -->
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                <!-- debut du panel servant de home -->
                <section class="panel">
                  <div class="panel-heading">Transactions</div>
                    <div class="panel-body" id="#">
                        <div class="row" style="margin-bottom:30px">
                          <div class="col-lg-6"></div>
                          <div class="col-lg-3">
                              <div class="">
                                <a class="btn btn-success" style="float:right">Créditer mon compte</a>
                              </div>
                          </div>
                          <div class="col-lg-3">
                              <div class=""><a class="btn btn-primary" style="float:right">Débiter mon compte</a></div>
                          </div>
                        </div>
                        <!-- debut de la partie des tabs -->
                        <section class="panel">
                                      <header class="panel-heading tab-bg-primary ">
                                        <ul class="nav nav-tabs">
                                          <li class="active">
                                            <a href="#home" data-toggle="tab">Home</a>
                                          </li>
                                          <li>
                                            <a href="#about" data-toggle="tab">About</a>
                                          </li>
                                          <li>
                                            <a href="#profile" data-toggle="tab">Profile</a>
                                          </li>
                                          <li>
                                            <a href="#contact" data-toggle="tab">Contact</a>
                                          </li>
                                        </ul>
                                      </header>
                                      <div class="panel-body">
                                        <div class="tab-content">
                                          <div class="tab-pane active" id="home">
                                            Home
                                          </div>
                                          <div class="tab-pane" id="about">About</div>
                                          <div class="tab-pane" id="profile">Profile</div>
                                          <div class="tab-pane" id="contact">Contact</div>
                                        </div>
                                      </div>
                                    </section>
                        <!-- fin de la partie des tabs -->
                    </div>
                </section>
                <!-- fin du panel servant de home -->
              </div>
            </div>
          <!-- page end-->
        </section>
      </section>
      <!--main content end-->
      <div class="text-right">
        <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
            -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
      </div>
    </section>
    <!-- container section end -->
    <!-- javascripts -->
    <script src="{{ asset('niceadmin/js/jquery.js') }}"></script>
    <script src="{{ asset('niceadmin/js/bootstrap.min.js') }}"></script>
    <!-- nice scroll -->
    <script src="{{ asset('niceadmin/js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('niceadmin/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
    <!--custome script for all page-->
    <script src="{{ asset('niceadmin/js/scripts.js') }}"></script>
</body>
</html>