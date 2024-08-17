@extends('layouts/landingLayout')

@section('title', 'About Stadium - Modern Sports Experience')

@section('content')
    <main class="about-page">
        <div class="container">
            <header class="text-center py-5">
                <h1 class="display-4 fw-bold">About Us</h1>
                <p class="lead text-muted">Revolutionizing the sports experience Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Repudiandae reprehenderit dolores perspiciatis voluptas aperiam. Modi ad esse, facere
                    sed quae nihil, beatae consectetur vitae ipsam optio ullam quas blanditiis provident. Lorem ipsum dolor,
                    sit amet consectetur adipisicing elit. Dicta tenetur magni aspernatur nostrum, libero reprehenderit
                    quasi fugit quam a accusantium beatae exercitationem laudantium illum natus incidunt quidem repellat,
                    voluptates officia!</p>
            </header>

            <section class="row align-items-center py-5">
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4">Our Mission</h2>
                    <p class="lead">At Stadium, we're passionate about bringing fans closer to the action. Our mission is
                        to create immersive, unforgettable sports experiences that connect people and celebrate the spirit
                        of competition. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta adipisci blanditiis
                        incidunt soluta voluptas corrupti! Repudiandae error unde distinctio officiis incidunt veritatis,
                        perspiciatis dolores vitae, magnam numquam autem dolor pariatur.</p>
                </div>
                <div class="col-lg-6">
                    <img src="https://placehold.co/600x400" alt="Stadium experience" class="img-fluid rounded shadow">
                </div>
            </section>

            <section class="bg-light rounded p-5 my-5">
                <h2 class="fw-bold mb-4">What We Do</h2>
                <div class="row g-4 whatwedo">
                    <div class="col-md-4">
                        <div class="feature-box text-center p-4">
                            <i class="bi bi-ticket-perforated fs-1 text-primary mb-3"></i>
                            <h3 class="h5 fw-bold">Smart Ticketing</h3>
                            <p>Seamless digital ticketing for hassle-free entry and enhanced security.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box text-center p-4">
                            <i class="bi bi-phone fs-1 text-primary mb-3"></i>
                            <h3 class="h5 fw-bold">Fan Engagement App</h3>
                            <p>Interactive mobile app for real-time stats, replays, and exclusive content.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box text-center p-4">
                            <i class="bi bi-graph-up fs-1 text-primary mb-3"></i>
                            <h3 class="h5 fw-bold">Analytics Platform</h3>
                            <p>Data-driven insights to optimize operations and enhance fan experiences.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-5">
                <h2 class="fw-bold mb-4">Our Team</h2>
                <p class="lead mb-5">We're a diverse group of sports enthusiasts, tech innovators, and customer experience
                    experts, united by our passion for transforming the world of sports. Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Quasi cupiditate quibusdam omnis doloribus nostrum sunt hic explicabo
                    nobis quam amet ducimus enim officiis, animi non maiores perspiciatis dolores est aut.</p>
                <div class="row g-4">
                    @for ($i = 1; $i <= 4; $i++)
                        <div class="col-md-3">
                            <div class="card border-0 shadow-sm">
                                <img src="https://placehold.co/300x300" class="card-img-top" alt="Team member">
                                <div class="card-body text-center">
                                    <h5 class="card-title mb-1">Team Member {{ $i }}</h5>
                                    <p class="card-text text-muted text-center">Position</p>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </section>

            <section class="text-center py-5">
                <h2 class="fw-bold mb-4">Why Choose Stadium?</h2>
                <p class="lead mb-5">We combine cutting-edge technology with a deep understanding of sports culture to
                    deliver unparalleled experiences for fans, teams, and venues alike. Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Quas, fuga rerum corporis veniam reiciendis placeat quos quibusdam quasi
                    reprehenderit necessitatibus et. Quas necessitatibus quasi quidem optio, reiciendis mollitia temporibus
                    amet?</p>
                <a href="#" class="genric-btn success-border circle">Get in Touch</a>
            </section>
        </div>
    </main>

    <style>
        .about-page {
            font-family: 'Inter', sans-serif;
        }

        .feature-box {
            transition: transform 0.3s ease;
        }

        .feature-box:hover {
            transform: translateY(-10px);
        }

        p {
            text-align: start;
        }

        .whatwedo p {
            text-align: center;
        }
    </style>
@endsection
