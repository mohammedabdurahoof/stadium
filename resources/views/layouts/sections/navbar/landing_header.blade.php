<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header {{ Route::currentRouteName() === 'home' ? 'home' : '' }}">

            <div class="header-bottom header-sticky"
                style="position: {{ Route::currentRouteName() === 'home' ? 'absolute' : 'relative' }}">
                <div class="container">
                    <div class="row align-items-center" style="padding: 0.5rem 0">
                        <div class="col-xl-4 col-lg-4 col-md-4 header-flex">
                            <!-- sticky -->
                            <div>
                                <a href="/">
                                    {{-- <h1 id="logo" style="font-weight: 900;">Stadium</h1> --}}
                                    <img src="{{ asset('assets/img/logo_dark.png') }}" alt="logo" srcset=""
                                        width="80" id="logo_dark">
                                    <img src="{{ asset('assets/img/logo_light.png') }}" alt="logo" srcset=""
                                        width="80" id="logo_light" style="display: none">
                                </a>
                            </div>

                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8 d-none d-md-block">
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-md-block f-right">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{ route('home') }}">Home</a></li>
                                        {{-- <li><a href="about.html">about</a></li> --}}
                                        <li><a href="{{ route('news') }}">News</a></li>
                                        <li><a href="{{ route('stadium') }}">Stadiums</a></li>
                                        <li><a href="{{ route('clubs') }}">Clubs</a></li>
                                        {{-- <li><a href="#">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog_details.html">Blog Details</a></li>
                                                <li><a href="elements.html">Element</a></li>
                                            </ul>
                                        </li> --}}
                                        {{-- <li><a href="contact.html">Contact</a></li> --}}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-md-none "></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>


<script>
    var currentRoute = "{{ Route::currentRouteName() }}";
</script>
