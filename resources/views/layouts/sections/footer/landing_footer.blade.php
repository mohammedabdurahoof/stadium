<footer>
    <!-- Footer Start-->
    <div class="footer-main footer-bg">
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-logo">
                                {{-- <a href="/"><img src="{{ asset('assets/landing/img/logo/logo2_footer.png') }}" alt=""></a> --}}
                                <a href="/">
                                    <h1 style="font-weight: 900">Stadium</h1>
                                </a>

                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p class="info1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore.</p>
                                    <p class="info2">Lorem ipsum dolor sit amet, consectetur</p>
                                    <p class="info2">Phone: +91 1234567890</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Quik Links</h4>
                            </div>
                            <div class="footer_link">

                                <ul>
                                    <li><a href="/about"><i class="fa fa-angle-right"></i> About</a></li>
                                    <li><a href="/contact"><i class="fa fa-angle-right"></i> Contact us</a></li>
                                    <li><a href="/news"><i class="fa fa-angle-right"></i> News</a></li>
                                    <li><a href="/events"><i class="fa fa-angle-right"></i> Events</a></li>
                                    <li><a href="/faq"><i class="fa fa-angle-right"></i> FAQ</a></li>
                                    <li><a href="/policy"><i class="fa fa-angle-right"></i> Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-5 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Popular Matches</h4>
                            </div>
                            @foreach ($matches as $item)
                                <div class="whats-right-single mb-20">

                                    <div class="whats-right-cap">
                                        <h4><a href="latest_news.html">{{ $item->name }}</a>
                                        </h4>
                                        <p>{{ $item->team1 }} | {{ $item->team2 }}</p>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- footer-bottom aera -->
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12">
                            <div class="footer-copy-right text-center">
                                <p>
                                    Copyright &copy;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved by <a href="/">Stadium</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>
