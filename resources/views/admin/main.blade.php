<!DOCTYPE html>
<html lang="en">



<head>
 @include('admin.styles')
</head>

<body>
    <div class="main-wrapper">
      @include('admin.topbar')
     @include('admin.sidebar')
        <div class="page-wrapper">
            <div class="content">
                   @yield('content')
            </div>
            <div class="notification-box">
            @include('admin.notification-box')
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
 @include('admin.scripts')

</body>



</html>