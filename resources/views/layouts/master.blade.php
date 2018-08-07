<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Starter</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper" id="app">

        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="/" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>A</b>LT</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Admin</b>LTE</span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" style="padding:0 10px !important" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span> </a>
     
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                      <!-- Messages: style can be found in dropdown.less-->

                      <!-- User Account Menu -->
                      <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="/" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                          <!-- The user image in the navbar-->
                          <img src="{{asset('cover_images/avatar.png')}}" class="user-image" alt="User Image">
                          <!-- hidden-xs hides the username on small devices so only the image appears. -->
                          <span class="hidden-xs">{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu">
                          <!-- The user image in the menu -->
                          <li class="user-header">
                            <img src="{{asset('cover_images/avatar.png')}}" class="user-image" alt="User Image">
                            <p>
                                {{ Auth::user()->name }} - Web Developer
                              <small>Member since Nov. 2012</small>
                            </p>
                          </li>
                          <!-- Menu Body -->
                          <li class="user-body">
                            <div class="row">
                              <div class="col-xs-4 text-center">
                                <a href="#">Followers</a>
                              </div>
                              <div class="col-xs-4 text-center">
                                <a href="#">Sales</a>
                              </div>
                              <div class="col-xs-4 text-center">
                                <a href="#">Friends</a>
                              </div>
                            </div>
                            <!-- /.row -->
                          </li>
                          <!-- Menu Footer-->
                          <li class="user-footer">
                            <div class="pull-left">
                              <a href="/" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                              <a href="#" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                          </li>
                        </ul>
                      </li>

                    </ul>
                  </div>
      
            </nav>
        </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('cover_images/avatar.png')}}" class="img-fluid rounded-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Alexander Pierce</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <!-- search form (Optional) -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
                </div>
            </form>
            <!-- /.search form -->

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">Panel</li>
                <!-- Optionally, you can add icons to the links -->
                <li class="@if(Request::segment(1) === 'dashboard'){{'active'}}@endif"><a href="{{url('dashboard')}}"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
                <li class="@if(Request::segment(1) === 'posts'){{'active'}}@endif"><a href="{{url('posts')}}"><i class="fa fa-link"></i> <span>Posts</span></a></li>
                <li class="@if(Request::segment(1) === 'category'){{'active'}}@endif"><a href="{{url('category')}}"><i class="fa fa-link"></i> <span>Category</span></a></li>
                <li class="@if(Request::segment(1) === 'options'){{'active'}}@endif"><a href="{{url('options')}}"><i class="fa fa-link"></i> <span>options</span></a></li>
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content container-fluid ">
            <div class="row">
                <div class="col-md-12">
                    @yield('content')
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    {{-- <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
    </footer> --}}

    </div>

    <script src="{{asset('js/app.js')}}"></script>
    <script>
        $('#EditModal').on('show.bs.modal', function (event) {
    
                var button = $(event.relatedTarget) 
                var title = button.data('mytitle') 
                var description = button.data('mydescription') 
                var cat_id = button.data('catid') 
    
                var modal = $(this);
               // model.find('.model-title').text('New message to ' + recipient)
                modal.find('.modal-body #title').val(title);
                modal.find('.modal-body #des').val(description);
                modal.find('.modal-body #cat_id').val(cat_id);
            })

            $('#DeleteModal').on('show.bs.modal', function (event) {
    
                var button = $(event.relatedTarget) 
                
                var cat_id = button.data('catid') 
                var modal = $(this);
                // model.find('.model-title').text('New message to ' + recipient)
                modal.find('.modal-body #cat_id').val(cat_id);
})
    </script>
    <script>

        $(".sidebar fa").on("click", function(){
          $(".sidebar").find(".active").removeClass("active");
          $(this).parent().addClass("active");
        });
        
        </script>
</body>

</html>