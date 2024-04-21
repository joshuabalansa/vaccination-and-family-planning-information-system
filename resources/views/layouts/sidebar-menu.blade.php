<div class="sidebar-menu">

    <div class="sidebar-menu-inner">

        <header class="logo-env">

            <!-- logo -->
            <div class="logo">
                <a href="{{ route('dashboard') }}">
                    {{ auth()->user()->name }}<br>
                    @if (auth()->user()->role === 2)
                        @
                    @endif
                    {{ auth()->user()->email }}
                </a>
            </div>

            <!-- logo collapse icon -->

            <div class="sidebar-collapse">
                <a href="#"
                    class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                    <i class="entypo-menu"></i>
                </a>
            </div>


            <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
            <div class="sidebar-mobile-menu visible-xs">
                <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                    <i class="entypo-menu"></i>
                </a>
            </div>

        </header>


        <ul id="main-menu" class="main-menu">

            <li class="active">
                <a href="{{ route('dashboard') }}">
                    <i class="entypo-gauge"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>

            @if (auth()->user()->role === 2 || auth()->user()->role === 3)
                <li class="active">
                    <a href="{{ route('dashboard') }}">
                        <i class="entypo-calendar"></i>
                        <span class="title">Schedules</span>
                    </a>
                </li>
            @endif

            @if (auth()->user()->role === 2)
                <li class="active">
                    <a href="{{ route('dashboard') }}">
                        <i class="entypo-doc-text-inv"></i>
                        <span class="title">Records</span>
                    </a>
                </li>
            @endif

            @if (auth()->user()->role === 2 || auth()->user()->role === 3)
                <li class="active">
                    <a href="{{ route('dashboard') }}">
                        <i class="entypo-box"></i>
                        <span class="title">Vaccination</span>
                    </a>
                </li>
            @endif

            @can('viewAppointments', \App\Models\Patient::class)
                <li>
                    <a href="{{ route('appointment.records') }}">
                        <i class="entypo-layout"></i>
                        <span class="title">Appointments</span>
                    </a>
                </li>
            @endcan

            @can('viewPatients', \App\Models\Patient::class)
                <li>
                    <a href="{{ route('patient.index') }}">
                        <i class="entypo-users"></i>
                        <span class="title">Patients</span>
                    </a>
                </li>
            @endcan

            @if (auth()->user()->role === 1)
                <li>
                    <a href="{{ route('vaccine.index') }}">
                        <i class="entypo-box"></i>
                        <span class="title">Vaccines</span>
                    </a>
                </li>
            @endif
            <li>
                <a href="#">
                    <i class="entypo-heart"></i>
                    <span class="title">Family Planning</span>
                </a>
            </li>
            @if (auth()->user()->role === 1)
                <li>
                    <a href="#">
                        <i class="entypo-doc-text-inv"></i>
                        <span class="title">Reports</span>
                    </a>
                </li>
            @endif
            <li class="has-sub">
                <a href="ui-panels.html">
                    <i class="entypo-user"></i>
                    <span class="title">Profile</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ route('profile.edit') }}">
                            <span class="title">Change Password</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <span class="title">Sign out</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
