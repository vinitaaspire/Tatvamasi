<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Tatvamasi - Admin</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('back/assets/css/app.min.css')}}">

  <link rel="stylesheet" href="{{asset('back/assets/bundles/datatables/datatables.min.css')}}">
  <link rel="stylesheet" href="{{asset('back/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('back/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('back/assets/css/components.css')}}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{asset('back/assets/css/custom.css')}}">
  <link rel='shortcut icon' type='image/x-icon' href='{{asset("back/assets/img/favicon.ico")}}' />

  <link rel="stylesheet" href="{{asset('back/assets/bundles/summernote/summernote-bs4.css')}}">
  <link rel="stylesheet" href="{{asset('back/assets/bundles/codemirror/lib/codemirror.css')}}">
  <link rel="stylesheet" href="{{asset('back/assets/bundles/codemirror/theme/duotone-dark.css')}}">
  <link rel="stylesheet" href="{{asset('back/assets/bundles/jquery-selectric/selectric.css')}}">

  <!-- Add these links in your HTML head section -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">
<script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
  <div class="loader"></div>
  <div id="app">
 
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
           
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
        
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="{{asset('back/assets/img/user.png')}}"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello {{ Auth::guard('admin')->user()->name }}</div>
              <a href="{{route('admin.profile')}}" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profile
              </a> 
              <div class="dropdown-divider"></div>
              <form method="post" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit"  class="dropdown-item has-icon text-danger">  <i class="fas fa-sign-out-alt"></i> Logout</button>
            </form>

            
            </div>
          </li>
        </ul>
      </nav>

      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{route('admin.dashboard')}}"> <img alt="image" src="{{asset('back/assets/img/logo.png')}}" class="header-logo" /> <span
                class="logo-name">Tatvamasi</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>

            <li class="dropdown  {{ (request()->is('admin')) ? 'active' : '' }}">
              <a href="{{route('admin.dashboard')}}" class="nav-link"><i data-feather="airplay"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown {{ (request()->is('admin/order*')) ? 'active' : '' }}">
              <a href="{{route('order.index')}}" class=" nav-link "><i
                  data-feather="pie-chart"></i><span>Orders</span></a>
            </li>

            


            <li class="dropdown {{ (request()->is('admin/courses*') || request()->is('admin/category*') || request()->is('admin/trial*') || request()->is('admin/batch*') || request()->is('admin/coupon*')  ? 'active' : '') }}">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="target"></i><span>Courses</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('courses.index')}}">Courses</a></li>
                  <li><a class="nav-link" href="{{route('batch.index')}}">Batch</a></li>
                <!--<li><a class="nav-link" href="{{route('category.index')}}">Categorys</a></li>-->
                <li><a class="nav-link" href="{{route('trial.index')}}">Trial Class</a></li>
                <li><a class="nav-link" href="{{route('coupon.index')}}">Coupon</a></li>
              </ul>
            </li>
            
             <li class="dropdown {{ (request()->is('admin/contactUs*') || request()->is('admin/enquiry*') ? 'active' : '') }}">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="radio"></i><span>Enquiry</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('contactUs.index')}}">Contact Us</a></li>
                <li><a class="nav-link" href="{{route('contactUs.create')}}">Enquiry</a></li>
              
              </ul>
            </li>
         
            <li class="dropdown {{ (request()->is('admin/blog*')) ? 'active' : '' }}  ">
              <a href="{{route('blog.index')}}" class=" nav-link "><i
                  data-feather="umbrella"></i><span>Blog</span></a>
            </li>
            <li class="dropdown {{ (request()->is('admin/banner*')) ? 'active' : '' }} ">
              <a href="{{route('banner.index')}}" class=" nav-link "><i
                  data-feather="camera"></i><span>Banner</span></a>
             
            </li>
             <li class="dropdown {{ (request()->is('admin/feature*')) ? 'active' : '' }} ">
              <a href="{{route('feature.index')}}" class=" nav-link "><i
                  data-feather="cloud-lightning"></i><span>Feature</span></a>
             
            </li>
            <li class="dropdown {{ (request()->is('admin/testimonial*')) ? 'active' : '' }}  ">
              <a href="{{route('testimonial.index')}}" class=" nav-link "><i
                  data-feather="message-circle"></i><span>Testimonial</span></a>
             
            </li>
            <li class="dropdown {{ (request()->is('admin/trainers*')) ? 'active' : '' }}  ">
              <a href="{{route('trainers.index')}}" class=" nav-link "><i
                  data-feather="command"></i><span>Trainers</span></a>
            </li>
           


        
            <li class="dropdown {{ (request()->is('admin/pricing*')) ? 'active' : '' }}">
              <a href="{{route('pricing.index')}}" class=" nav-link "><i
                  data-feather="slack"></i><span>Pricing</span></a>
            </li>

          

            <li class="dropdown {{ (request()->is('admin/about*')) ? 'active' : '' }}">
              <a href="{{route('about.index')}}" class=" nav-link "><i
                  data-feather="tag"></i><span>About US</span></a>
            </li>

            <li class="dropdown {{ (request()->is('admin/whyus*')) ? 'active' : '' }}">
              <a href="{{route('whyus.index')}}" class=" nav-link "><i
                  data-feather="navigation"></i><span>Why Choose Us</span></a>
            </li>
            <li class="dropdown {{ (request()->is('admin/partners*')) ? 'active' : '' }}">
              <a href="{{route('partners.index')}}" class=" nav-link "><i
                  data-feather="gitlab"></i><span>Partners</span></a>
            </li>
            
             <li class="dropdown {{ (request()->is('admin/setting*') || request()->is('mail/setting*') ? 'active' : '') }}">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="settings"></i><span>Settings</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('setting.index')}}">Setting</a></li>
                <li><a class="nav-link" href="{{route('mail.index')}}">Mail</a></li>
                
              </ul>
            </li>
            
           

          </ul>
        </aside>
      </div>
      <!-- Main Content -->
    {{ $slot}}

      <footer class="main-footer">
        <div class="footer-left">
          <a href="{{route('admin.dashboard')}}">Tatvamsi</a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="{{asset('back/assets/js/app.min.js')}}"></script>
  <!-- JS Libraies -->
  <script src="{{asset('back/assets/bundles/apexcharts/apexcharts.min.js')}}"></script>
  <!-- Page Specific JS File -->
  <script src="{{asset('back/assets/js/page/index.js')}}"></script>
  <!-- Template JS File -->
  <script src="{{asset('back/assets/js/scripts.js')}}"></script>
  <!-- Custom JS File -->
  <script src="{{asset('back/assets/js/custom.js')}}"></script>

  <script src="{{asset('back/assets/bundles/datatables/datatables.min.js')}}"></script>
  <script src="{{asset('back/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('back/assets/bundles/jquery-ui/jquery-ui.min.js')}}"></script>
  <!-- Page Specific JS File -->
  <script src="{{asset('back/assets/js/page/datatables.js')}}"></script>

  <script src="{{asset('back/assets/bundles/summernote/summernote-bs4.js')}}"></script>
  <script src="{{asset('back/assets/bundles/codemirror/lib/codemirror.js')}}"></script>
  <script src="{{asset('back/assets/bundles/codemirror/mode/javascript/javascript.js')}}"></script>
  <script src="{{asset('back/assets/bundles/jquery-selectric/jquery.selectric.min.js')}}"></script>
  <script src="{{asset('back/assets/bundles/ckeditor/ckeditor.js')}}"></script>
  <!-- Page Specific JS File -->
  <script src="{{asset('back/assets/js/page/ckeditor.js')}}"></script>
    <script src="{{asset('back/assets/js/page/forms-advanced-forms.js')}}"></script>
    
 <script src="{{asset('back/assets/js/page/forms-advanced-forms.js')}}"></script>
    <script src="{{asset('back/assets/bundles/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
  

</body>



</html>