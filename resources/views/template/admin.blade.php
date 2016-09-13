<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') | Admin </title>

    <!-- Bootstrap -->
    <link href="<?=App::make('url')->to('/');?>/resources/assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=App::make('url')->to('/');?>/resources/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?=App::make('url')->to('/');?>/resources/assets/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href=".<?=App::make('url')->to('/');?>/resources/assets/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
   
    <!-- Custom Theme Style -->
    <link href="<?=App::make('url')->to('/');?>/resources/assets/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-code"></i> <span>IFNMG Pirapora!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
            <img src="<?=App::make('url')->to('/');?>/resources/assets/images/img.jpg" alt="..." class="img-circle profile_img">              </div>
              <div class="profile_info">
                <span>Bem Vindo,</span>
                <h2>{{ Auth::user()->nome }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Administrador Geral</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Dashboard</a></li>
                      <li><a href="index2.html">Dashboard2</a></li>
                      <li><a href="index3.html">Dashboard3</a></li>
                    </ul>
                  </li>
                  
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?=App::make('url')->to('/');?>/resources/assets/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?=App::make('url')->to('/');?>/resources/assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?=App::make('url')->to('/');?>/resources/assets/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src=".<?=App::make('url')->to('/');?>/resources/assetsnprogress/nprogress.js"></script>
   
    <!-- gauge.js -->
    <script src="<?=App::make('url')->to('/');?>/resources/assets/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src=".<?=App::make('url')->to('/');?>/resources/assets/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?=App::make('url')->to('/');?>/resources/assets/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?=App::make('url')->to('/');?>/resources/assets/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?=App::make('url')->to('/');?>/resources/assets
/Flot/jquery.flot.js"></script>
    <script src="<?=App::make('url')->to('/');?>/resources/assets
/Flot/jquery.flot.pie.js"></script>
    <script src="<?=App::make('url')->to('/');?>/resources/assets
/Flot/jquery.flot.time.js"></script>
    <script src="<?=App::make('url')->to('/');?>/resources/assets
/Flot/jquery.flot.stack.js"></script>
    <script src="<?=App::make('url')->to('/');?>/resources/assets
/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?=App::make('url')->to('/');?>/resources/assets/js/flot/jquery.flot.orderBars.js"></script>
    <script src="<?=App::make('url')->to('/');?>/resources/assets/js/flot/date.js"></script>
    <script src="<?=App::make('url')->to('/');?>/resources/assets/js/flot/jquery.flot.spline.js"></script>
    <script src="<?=App::make('url')->to('/');?>/resources/assets/js/flot/curvedLines.js"></script>
   
    <!-- bootstrap-daterangepicker -->
    <script src="<?=App::make('url')->to('/');?>/resources/assets/js/moment/moment.min.js"></script>
    <script src="<?=App::make('url')->to('/');?>/resources/assets/js/datepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?=App::make('url')->to('/');?>/resources/assets/js/custom.min.js"></script>


  </body>
</html>