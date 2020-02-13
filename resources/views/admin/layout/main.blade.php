<!DOCTYPE html >
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>
      <!-- Global stylesheets -->
      
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
      <link href="{{asset('assets/global_assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
      <link href="{{asset('assets/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
      <link href="{{asset('assets/assets/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
      <link href="{{asset('assets/assets/css/layout.min.css')}}" rel="stylesheet" type="text/css">
      <link href="{{asset('assets/assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
      <link href="{{asset('assets/assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
      <link href="{{asset('assets/global_assets/css/icons/material/icons.css')}}" rel="stylesheet" type="text/css">
      <!-- /global stylesheets -->
      <!-- Core JS files -->
      <script src="{{asset('assets/global_assets/js/main/jquery.min.js')}}"></script>
      <script src="{{asset('assets/global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('assets/global_assets/js/plugins/loaders/blockui.min.js')}}"></script>
      <!-- /core JS files -->
      <!-- Theme JS files -->
      <script src="{{asset('assets/global_assets/js/plugins/visualization/d3/d3.min.js')}}"></script>
      <script src="{{asset('assets/global_assets/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
      <script src="{{asset('assets/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
      <script src="{{asset('assets/global_assets/js/plugins/ui/moment/moment.min.js')}}"></script>
      <script src="{{asset('assets/global_assets/js/plugins/pickers/daterangepicker.js')}}"></script>
      <script src="{{asset('assets/assets/js/app.js')}}"></script>
      <script src="{{asset('assets/global_assets/js/demo_pages/dashboard.js')}}"></script>
      <!-- /theme JS files -->
      @yield('head')
   </head>
   <body>
      <!-- Main navbar -->
      <div class="navbar navbar-expand-md navbar-dark">
         <div class="navbar-brand">
            <a href="index.html" class="d-inline-block">
            <img src="{{asset('assets/global_assets/images/logo.png')}}" alt="">
            </a>
         </div>
         <div class="d-md-none">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
            </button>
            <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-paragraph-justify3"></i>
            </button>
         </div>
         <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                  <i class="icon-paragraph-justify3"></i>
                  </a>
               </li>
            </ul>
            <span class="navbar-text ml-md-3 mr-md-auto">
            </span>
            <ul class="navbar-nav">
               <li class="nav-item dropdown dropdown-user">
                  <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                  <img src="{{asset('img/uploads/'.Auth::user()->prof_img.'')}}" class="rounded-circle" alt="">
                  <span>{{ Auth::user()->name }}</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                     <a href="{{route('getSettingsUser')}}" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
                     <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="icon-switch2"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                  </div>
               </li>
            </ul>
         </div>
      </div>
      <!-- /main navbar -->
      <!-- Page content -->
      <div class="page-content">
         <!-- Main sidebar -->
         <div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">
            <!-- Sidebar mobile toggler -->
            <div class="sidebar-mobile-toggler text-center">
               <a href="#" class="sidebar-mobile-main-toggle">
               <i class="icon-arrow-left8"></i>
               </a>
               Navigation
               <a href="#" class="sidebar-mobile-expand">
               <i class="icon-screen-full"></i>
               <i class="icon-screen-normal"></i>
               </a>
            </div>
            <!-- /sidebar mobile toggler -->
            <!-- Sidebar content -->
            <div class="sidebar-content">
               <!-- User menu -->
               <div class="sidebar-user">
                  <div class="card-body">
                     <div class="media">
                        <div class="mr-3">
                           <a href="#"><img src="{{asset('img/uploads/'.Auth::user()->prof_img.'')}}" width="38" height="38" class="rounded-circle" alt=""></a>
                        </div>
                        <div class="media-body ">
                           <div class="media-title mt-2 font-weight-semibold">{{ Auth::user()->name }} {{ Auth::user()->surname }}</div>
                        </div>
                        <div class="ml-3 align-self-center">
                           <a href="{{route('getSettingsUser')}}" class="text-white"><i class="icon-cog3"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- /user menu -->
               <!-- Main navigation -->
               <div class="card card-sidebar-mobile">
                  <ul class="nav nav-sidebar" data-nav-type="accordion">
                     <!-- Main -->
                     <li class="nav-item-header">
                        <div class="text-uppercase font-size-xs line-height-xs">Main</div>
                        <i class="icon-menu" title="Main"></i>
                     </li>
                     <li class="nav-item">
                        <a href="{{route('getHomeAdmin')}}" class="nav-link">
                        <i class="icon-home4"></i>
                        <span>
                        Home
                        </span>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="{{route('getProduct')}}" class="nav-link">
                        <i class="mi-shopping-basket"></i>
                        <span>
                        Product 
                        </span>
                        </a>
                     </li>
                      <li class="nav-item">
                        <a href="{{route('getCategory')}}" class="nav-link">
                        <i class="mi-folder-open "></i>
                        <span>
                        Category 
                        </span>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="{{route('getColor')}}" class="nav-link">
                        <i class="mi-palette "></i>
                        <span>
                        Color  
                        </span>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="{{route('getUsersList')}}" class="nav-link">
                        <i class="icon-user"></i>
                        <span>
                        Users List
                        </span>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="{{route('getSettings')}}" class="nav-link">
                        <i class="icon-gear"></i>
                        <span>
                        Site Settings
                        </span>
                        </a>
                     </li>
                     <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-copy"></i> <span>Layouts</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                           <li class="nav-item"><a href="index.html" class="nav-link active">Default layout</a></li>
                        </ul>
                     </li>
                  </ul>
               </div>
               <!-- /main navigation -->
            </div>
            <!-- /sidebar content -->
         </div>
         <!-- /main sidebar -->
         <!-- Main content -->
         <div class="content-wrapper">
            <!-- Page header -->
            <div class="page-header page-header-light">
               <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                  <div class="d-flex">
                     <div class="breadcrumb">
                        <a href="{{route('getHomeAdmin')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                        <span class="breadcrumb-item active">@yield('page-name')</span>
                     </div>
                     <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                  </div>
               </div>
            </div>
            <!-- /page header -->
            <!-- Content area -->
            <div class="content">
               @yield('content')    
            </div>
            <!-- /content area -->
            <!-- Footer -->
            <div class="navbar navbar-expand-lg navbar-light">
               <div class="text-center d-lg-none w-100">
                  <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
                  <i class="icon-unfold mr-2"></i>
                  Footer
                  </button>
               </div>
               <div class="navbar-collapse collapse" id="navbar-footer">
                  <span class="navbar-text">
                  &copy; 2019 - 2020. <a href="#">Shop-admin</a> by <a href="" target="_blank">Seynur Mamedov</a>
                  </span>
               </div>
            </div>
            <!-- /footer -->
         </div>
         <!-- /main content -->
      </div>
      <!-- /page content -->
   </body>
@yield('footer')
</html>