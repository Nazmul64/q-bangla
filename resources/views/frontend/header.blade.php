
    <!--header section start-->
    <header class="header position-relative z-9">
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-dark navbar-theme-primary fixed-top headroom">
            <div class="container position-relative">
                 @foreach ($sitelogo as $sitelogo )
                <a class="navbar-brand mr-lg-3" href="{{ route('home') }}">
                    <img width="90px" class="navbar-brand-dark"    src="{{ asset('frontend/site_logos') }}/{{ $sitelogo->main_logo }}" alt="menuimage">
                </a>
                  @endforeach
                <div class="navbar-collapse collapse" id="navbar-default-primary">
                    <div class="navbar-collapse-header">
                        <div class="row">
                            <div class="col-6 collapse-brand">
                                <a href="#">
                                    <img    src="{{ asset('frontend') }}/assets/img/logo-color.png" alt="menuimage">
                                </a>
                            </div>
                            <div class="col-6 collapse-close">
                                <i class="fas fa-times" data-toggle="collapse" role="button"
                                   data-target="#navbar-default-primary" aria-controls="navbar-default-primary"
                                   aria-expanded="false" aria-label="Toggle navigation"></i>
                            </div>
                        </div>
                    </div>
                    <ul class="navbar-nav navbar-nav-hover ml-auto">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                <span class="nav-link-inner-text">Home</span>
                                <i class="fas fa-angle-down nav-link-arrow ml-1"></i>
                            </a>
                            <ul class="sub-menu dropdown-menu">
                                <li><a class="dropdown-item" href="index.html">Home Page 01</a></li>
                                <li><a class="dropdown-item" href="index-2.html">Home Page 02</a></li>
                                <li><a class="dropdown-item" href="index-3.html">Home Page 03</a></li>
                                <li><a class="dropdown-item" href="index-4.html">Home Page 04</a></li>
                                <li><a class="dropdown-item" href="index-5.html">Home Page 05</a></li>
                                <li><a class="dropdown-item" href="index-6.html">Home Page 06</a></li>
                                <li><a class="dropdown-item" href="index-7.html">Home Page 07</a></li>
                                <li><a class="dropdown-item" href="index-8.html">Home Page 08 <span class="badge badge-danger ml-2">New</span></a></li>
                                <li><a class="dropdown-item" href="index-9.html">Home Page 09 <span class="badge badge-danger ml-2">New</span></a></li>
                                <li><a class="dropdown-item" href="index-10.html">Home Page 10 <span class="badge badge-danger ml-2">New</span></a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about-us.html">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown" role="button">
                                <span class="nav-link-inner-text">Pages </span>
                                <i class="fas fa-angle-down nav-link-arrow ml-1"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle dropdown-item d-flex justify-content-between align-items-center" aria-haspopup="true" aria-expanded="false">Login & Signup <i class="fas fa-angle-right nav-link-arrow"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="basic-login.html">Login Page 1</a></li>
                                        <li><a class="dropdown-item" href="login.html">Login Page 2</a></li>
                                        <li><a class="dropdown-item" href="basic-sign-up.html">Signup Page 1</a></li>
                                        <li><a class="dropdown-item" href="sign-up.html">Signup Page 2</a></li>
                                        <li><a class="dropdown-item" href="password-reset.html">Reset Password</a></li>
                                        <li><a class="dropdown-item" href="change-password.html">Change Password</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle dropdown-item d-flex justify-content-between align-items-center" aria-haspopup="true" aria-expanded="false">Utilities <i class="fas fa-angle-right nav-link-arrow"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="download.html">Download Page</a></li>
                                        <li><a class="dropdown-item" href="review.html">Review Page</a></li>
                                        <li><a class="dropdown-item" href="faq.html">FAQ Page</a></li>
                                        <li><a class="dropdown-item" href="404.html">404 Page</a></li>
                                        <li><a class="dropdown-item" href="coming-soon.html">Coming Soon</a></li>
                                        <li><a class="dropdown-item" href="thank-you.html">Thank You Page</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle dropdown-item d-flex justify-content-between align-items-center" aria-haspopup="true" aria-expanded="false">Team <i class="fas fa-angle-right nav-link-arrow"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="team.html">Our Team Members</a></li>
                                        <li><a class="dropdown-item" href="team-single.html">Team Member Profile</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item" href="project-details.html">Project Details </a></li>
                                <li><a class="dropdown-item" href="services-details.html">Services Details</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="project.html">Project</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                <span class="nav-link-inner-text">Blog</span>
                                <i class="fas fa-angle-down nav-link-arrow ml-1"></i>
                            </a>
                            <ul class="sub-menu dropdown-menu">
                                <li><a class="dropdown-item" href="blog-default.html">Blog Grid</a></li>
                                <li><a class="dropdown-item" href="blog-no-sidebar.html">Blog No Sidebar</a></li>
                                <li><a class="dropdown-item" href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                <li><a class="dropdown-item" href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                <li><a class="dropdown-item" href="blog-single-left-sidebar.html">Details Left Sidebar</a></li>
                                <li><a class="dropdown-item" href="blog-single-right-sidebar.html">Details Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.html">Contact Us</a></li>
                    </ul>
                </div>
                <div class="d-flex align-items-center">
                    <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbar-default-primary" aria-controls="navbar-default-primary" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </nav>
    </header>
    <!--header section end-->
