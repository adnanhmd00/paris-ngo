
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
                <div class="sidebar-brand-icon">
                    {{-- <i class="fas fa-laugh-wink"></i> --}}
                    <img src="{{ asset('assets/images/logo.png') }}" style="width: 50px; background: white;" alt="">
                </div>
                <div class="sidebar-brand-text mx-3">NGO</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/admin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Divider -->
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.donations') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Donations</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-th-large"></i>
                    <span>Blog</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#manage-website"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Manage Website</span>
            </a>
                <div id="manage-website" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('admin.logo-settings') }}">Logo</a>
                        <a class="collapse-item" href="{{ route('admin.cover-images') }}">Cover Images</a>
                        <a class="collapse-item" href="{{ route('admin.box-texts') }}">Box Text</a>
                        <a class="collapse-item" href="{{ route('admin.slider-settings') }}">Sliders </a>
                        <a class="collapse-item" href="{{ route('admin.gallery') }}">Gallery </a>
                        {{-- <a class="collapse-item" href="{{ route('admin.about-us') }}">About Us</a> --}}
                        {{-- <a class="collapse-item" href="cards.html">Contact Us</a> --}}
                    </div>
                </div>
            </li>


            <hr class="sidebar-divider my-0">

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#about-us"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>About Us</span>
            </a>
                <div id="about-us" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('admin.about-us.vision') }}">Vision</a>
                        <a class="collapse-item" href="{{ route('admin.about-us.story') }}">Our Story</a>
                        <a class="collapse-item" href="{{ route('admin.about-us.team') }}">Our Team</a>
                        <a class="collapse-item" href="{{ route('admin.about-us.testimonials') }}">Testimmonials</a>
                        <a class="collapse-item" href="{{ route('admin.about-us.gallery') }}">Gallery</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#our-work"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Our Work</span>
            </a>
                <div id="our-work" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('admin.our-work.school') }}">Monsoon Kids School</a>
                        <a class="collapse-item" href="{{ route('admin.our-work.sewing') }}">Sewing Classes</a>
                        <a class="collapse-item" href="{{ route('admin.our-work.alumni') }}">Alumni Program</a>
                        <a class="collapse-item" href="{{ route('admin.our-work.community') }}">Community Outreach</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#our-impact"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Our Impact</span>
            </a>
                <div id="our-impact" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('admin.our-impact.students') }}">Students</a>
                        <a class="collapse-item" href="{{ route('admin.our-impact.alumni') }}">Alumni</a>
                        <a class="collapse-item" href="{{ route('admin.our-impact.community') }}">Community</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#get-involved"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Get Involved</span>
            </a>
                <div id="get-involved" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#">Donate</a>
                        <a class="collapse-item" href="{{ route('admin.volunteer') }}">Volunteer</a>
                        <a class="collapse-item" href="{{ route('admin.work-with-us') }}">Work With Us</a>
                    </div>
                </div>
            </li>
            <!-- Sidebar Toggler (Sidebar) -->
            {{-- <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div> --}}
        </ul>
        <!-- End of Sidebar -->