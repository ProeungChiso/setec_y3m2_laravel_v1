<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="{{url('/')}}" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">Mentor</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{url('/')}}" class="{{Request::is('/') ? 'active' : ''}}">Home<br></a></li>
                <li><a href="{{url('frontend/about')}}" class="{{Request::is('frontend/about') ? 'active' : ''}}">About</a></li>
                <li><a href="{{url('frontend/courses')}}" class="{{Request::is('frontend/courses') ? 'active' : ''}}">Courses</a></li>
                <li><a href="{{url('frontend/trainers')}}" class="{{Request::is('frontend/trainers') ? 'active' : ''}}">Trainers</a></li>
                <li><a href="{{url('frontend/events')}}" class="{{Request::is('frontend/events') ? 'active' : ''}}">Events</a></li>
                <li><a href="{{url('frontend/pricing')}}" class="{{Request::is('frontend/pricing') ? 'active' : ''}}">Pricing</a></li>
                <li><a href="{{url('frontend/contact')}}" class="{{Request::is('frontend/contact') ? 'active' : ''}}">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted" href="{{url('frontend/get-start')}}">Get Started</a>

    </div>
</header>