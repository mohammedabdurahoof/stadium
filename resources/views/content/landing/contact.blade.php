@extends('layouts/landingLayout')

@section('title', 'Contact Stadium - Get in Touch')

@section('content')
    <main class="contact-page py-5">
        <div class="container">
            <header class="text-center mb-5">
                <h1 class="display-4 fw-bold">Contact Us</h1>
                <p class="lead text-muted">We'd love to hear from you</p>
            </header>

            <div class="row g-5">
                <div class="col-lg-6">
                    <h2 class="h3 mb-4">Send us a message</h2>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="genric-btn success-border circle">Send Message</button>
                    </form>
                </div>
                <div class="col-lg-6">
                    <h2 class="h3 mb-4">Contact Information</h2>
                    <ul class="list-unstyled">
                        <li class="d-flex mb-3">
                            <i class="bi bi-geo-alt-fill text-primary me-3 fs-4"></i>
                            <div>
                                <h3 class="h6 mb-1">Address</h3>
                                <p class="mb-0">123 Stadium Street, Sports City, SC 12345</p>
                            </div>
                        </li>
                        <li class="d-flex mb-3">
                            <i class="bi bi-telephone-fill text-primary me-3 fs-4"></i>
                            <div>
                                <h3 class="h6 mb-1">Phone</h3>
                                <p class="mb-0">+1 (555) 123-4567</p>
                            </div>
                        </li>
                        <li class="d-flex mb-3">
                            <i class="bi bi-envelope-fill text-primary me-3 fs-4"></i>
                            <div>
                                <h3 class="h6 mb-1">Email</h3>
                                <p class="mb-0">info@stadium.com</p>
                            </div>
                        </li>
                    </ul>
                    <h2 class="h3 mb-4 mt-5">Our Location</h2>
                    <div class="map-container rounded overflow-hidden">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.2412648338226!2d-73.98780268509869!3d40.75779794235255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes%20Square!5e0!3m2!1sen!2sus!4v1628611462323!5m2!1sen!2sus"
                            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <style>
        .contact-page {
            font-family: 'Inter', sans-serif;
        }

        .map-container {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }
    </style>
@endsection
