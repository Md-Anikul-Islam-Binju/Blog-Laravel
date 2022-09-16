<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin || Blog</title>
    <!-- vendor css -->
    <link href="{{asset('admin/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('admin/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{asset('admin/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{asset('admin/lib/rickshaw/rickshaw.min.css')}}" rel="stylesheet">
    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{asset('admin/css/starlight.css')}}">



  </head>

  <body>
    <!-- START: LEFT PANEL-->
    <div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i>Admin</a></div>
    <div class="sl-sideleft">
      <div class="input-group input-group-search">
        <input type="search" name="search" class="form-control" placeholder="Search">
        <span class="input-group-btn">
          <button class="btn"><i class="fa fa-search"></i></button>
        </span>
      </div>

      <label class="sidebar-label">Admin Panel Blog Site</label>
      <div class="sl-sideleft-menu">
        <a href="{{route('admin.home')}}" class="sl-menu-link active">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div>
        </a>


        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
            <span class="menu-item-label">Category</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div>
        </a>
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('blog.category')}}" class="nav-link">Add Category</a></li>
          <li class="nav-item"><a href="{{route('blog.category.show')}}" class="nav-link">All Category</a></li>
          <li class="nav-item"><a href="{{route('blog.sub.category')}}" class="nav-link">Add Sub Category</a></li>
          <li class="nav-item"><a href="{{route('blog.sub.category.show')}}" class="nav-link">All Sub Category</a></li>
        </ul>

        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
            <span class="menu-item-label">Post</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div>
        </a>
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('blog.page')}}" class="nav-link">Blog Post</a></li>
          <li class="nav-item"><a href="{{route('blog.post.show')}}" class="nav-link">Blog Show</a></li>
        </ul>
      </div>
      <br>
    </div>
    <!--END: LEFT PANEL-->

    <!-- HEAD PANEL -->
    <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div>
      <div class="sl-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name">Admin<span class="hidden-md-down"></span></span>
              <img src="{{URL::to('admin/img/img3.jpg')}}" class="wd-32 rounded-circle" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
              <li><a href="{{url('/')}}"><i class="icon ion-ios-home-outline"></i> Home Page</a></li>
                <li><a href=""><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                <li><a href=""><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
                <li><a href=""><i class="icon ion-power"></i> Sign Out</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div>
        </nav>
      </div>
    </div>
    <!-- END: HEAD PANEL -->

    <!--START: MAIN PANEL -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Admin</a>
        <span class="breadcrumb-item active">Dashboard</span>
      </nav>
      @yield('content')
    </div>


    <!-- END: MAIN PANEL -->
    <script src="{{asset('admin/lib/jquery/jquery.js')}}"></script>
    <script src="{{asset('admin/lib/popper.js/popper.js')}}"></script>
    <script src="{{asset('admin/lib/bootstrap/bootstrap.js')}}"></script>
    <script src="{{asset('admin/lib/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{asset('admin/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
    <script src="{{asset('admin/lib/jquery.sparkline.bower/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('admin/lib/d3/d3.js')}}"></script>
    <script src="{{asset('admin/lib/rickshaw/rickshaw.min.js')}}"></script>
    <script src="{{asset('admin/lib/chart.js/Chart.js')}}"></script>
    <script src="{{asset('admin/lib/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('admin/lib/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('admin/lib/Flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('admin/lib/flot-spline/jquery.flot.spline.js')}}"></script>
    <script src="{{asset('admin/js/starlight.js')}}"></script>
    <script src="{{asset('admin/js/ResizeSensor.js')}}"></script>
    <script src="{{asset('admin/js/dashboard.js')}}"></script>

  </body>
</html>
