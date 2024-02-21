<!DOCTYPE html>
<html lang="en">



<head>
 @include('doctors.styles')
</head>

<body>
    <div class="main-wrapper">
      @include('doctors.topbar')
     @include('doctors.sidebar')
        <div class="page-wrapper">
            <div class="content">
                   @yield('content')
            </div>
            <div class="notification-box">
            @include('doctors.notification-box')
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
 @include('doctors.scripts')

</body>



</html>