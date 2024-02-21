<!DOCTYPE html>
<html lang="en">

<head>
 @include('showappointment.styles')
</head>

<body>
    <div class="main-wrapper">
      @include('showappointment.topbar')
     @include('showappointment.sidebar')
        <div class="page-wrapper">
            <div class="content">
                   @yield('content')
            </div>
            <div class="notification-box">
            @include('showappointment.notification-box')
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
 @include('showappointment.scripts')

</body>



</html>