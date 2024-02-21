<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>
                <li>
                    <a href="{{ url('home') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                </li>
                <li class="active">
                    <a href="{{ route('doctors.Doctor')}}"><i class="fa fa-user-md"></i> <span>Doctors</span></a>
                </li>
                <li>
                    <a href="{{route('showappointment.showappointment')}}"><i class="fa fa-calendar"></i> <span>Appointments</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>