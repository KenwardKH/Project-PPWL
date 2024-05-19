<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>ConHub Tickets</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans+JP:wght@100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">


    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/templatemo-festava-live.css" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Plus Jakarta Sans', Times, serif;
        }

        .wrapper {
            width: 100%;
            position: relative;

        }

        .wrapper i {
            height: 50px;
            width: 50px;
            background: rgb(118, 233, 118);
            text-align: center;
            line-height: 50px;
            border-radius: 50%;
            cursor: pointer;
            position: absolute;
            top: 50%;
            font-size: 1.25 rem;
            transform: translateY(-50%);
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.23);

        }

        .wrapper i:first-child {
            left: -22px;

        }

        .wrapper i:last-child {
            right: -22px;

        }

        .carousel {
            margin-left: 40px;
            margin-right: 40px;
        }

        .wrapper .carousel {
            display: grid;
            grid-auto-flow: column;
            grid-auto-columns: calc((100% / 3) - 12px);
            gap: 16px;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            scroll-behavior: smooth;
            scrollbar-width: 0;
        }

        .carousel::-webkit-scrollbar {
            display: none;
        }

        .carousel :where(.card, .img) {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .carousel.dragging {
            scroll-snap-type: none;
            scroll-behavior: auto;
        }

        .carousel.no-transition {
            scroll-behavior: auto;
        }

        .carousel.dragging .card {
            cursor: grab;
            user-select: none;
        }

        .carousel .card {
            scroll-snap-align: start;
            height: 640px;
            list-style: none;
            background: #231816;
            border-radius: 8px;
            display: flex;
            cursor: pointer;
            width: 98%;
            padding-top: 15px;
            padding-bottom: 15px;
            align-items: center;
            justify-content: space-around;
            flex-direction: column;
        }

        .card .img img {
            width: 200px;
            height: 250px;
            border: 4px solid #fff;
        }

        .card h2 {
            font-weight: 500;
            font-size: 32px margin: 30px 0 5px;
        }

        .card span {
            color: #fff;
            font-size: 1.31rem;

        }

        @media screen and (max-width: 900px) {
            .wrapper .carousel {
                grid-auto-columns: calc((100% / 2) - 9px);

            }
        }

        @media screen and (max-width: 600px) {
            .wrapper .carousel {
                grid-auto-columns: 100%;

            }
        }
    </style>

    <!--

TemplateMo 583 Festava Live

https://templatemo.com/tm-583-festava-live

-->
</head>

<body>

    <main>

        <header class="site-header">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 d-flex flex-wrap">
                        <p class="d-flex me-4 mb-0">
                            <i class="bi-person custom-icon me-2"></i>
                            <strong class="text-dark">Welcum to Live Concert 2024</strong>
                        </p>
                    </div>

                </div>
            </div>
        </header>


        <nav class="navbar navbar-expand-lg">
            <div class="container">
                {{-- <a class="navbar-brand" href="/">
                    ConHub
                </a> --}}

                <div height="20px" width="20px">
                    <img src="images\logo.png">
                </div>

                <a href="ticket" class="btn custom-btn d-lg-none ms-auto me-4">Buy Ticket</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_1">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">Artists</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">Schedule</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_5">Contact</a>
                        </li>

                        @auth
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="/ticket_list">My Tickets</a>
                            </li>
                            <li>
                                <div class="hidden sm:flex sm:items-center sm:ms-6" x-data="{ open: false }">
                                    <div class="relative">
                                        <button @click="open = !open"
                                            style="align-items: center; display: inline-flex; padding: 0.5rem 0.75rem; font-size: 0.875rem; line-height: 1.25rem; font-weight: 500; border-radius: 0.375rem; color: #6B7280; background-color: #FFFFFF; transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, color 0.15s ease-in-out;"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                            <div style="display: flex">
                                                {{ Auth::user()->name }}
                                                <svg class="fill-current" style="width:20px"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        </button>
                                        <div x-show="open" @click.away="open = false"
                                            style="position: absolute; margin-top: 0.5rem; width: 12rem; border-radius: 0.375rem; box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.05); background-color: #FFFFFF; border: 1px solid rgba(0, 0, 0, 0.05);"
                                            class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none z-10">
                                            <div class="py-1" role="none">
                                                <a href="{{ route('profile.edit') }}"
                                                    style="display: block; padding: 0.5rem 1rem; font-size: 0.875rem; line-height: 1.25rem; color: #4B5563; transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;"
                                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                                    role="menuitem" tabindex="-1" id="menu-item-0">Profile</a>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <button type="submit"
                                                        style="display: block; width: 100%; padding: 0.5rem 1rem; font-size: 0.875rem; line-height: 1.25rem; text-align: left; color: #4B5563; transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;"
                                                        class="block w-full px-4 py-2 text-left text-sm text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                                                        role="menuitem" tabindex="-1" id="menu-item-1">Log Out</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </li>
                        @else
                            <li><a href="{{ route('login') }}" class="btn custom-btn d-lg-block d-none"
                                    style="margin: 10px">Login</a></li>
                            <li><a href="{{ route('register') }}" class="btn custom-btn d-lg-block d-none"
                                    style="margin: 10px">Register</a></li>
                        @endauth
                    </ul>

                </div>
            </div>
        </nav>


        <section class="hero-section" id="section_1">
            <div class="section-overlay"></div>

            <div class="container d-flex justify-content-center align-items-center">
                <div class="row">

                    <div class="col-12 mt-auto mb-5 text-center">
                        <small>ConHub Live Presents</small>

                        <h1 class="text-white mb-5">Live Concert 2024</h1>

                        <a class="btn custom-btn smoothscroll" href="#section_2">Let's begin</a>
                    </div>

                        {{-- <div class="location-wrap mx-auto py-3 py-lg-0">
                            <h5 class="text-white">
                                <i class="custom-icon bi-geo-alt me-2"></i>
                                National Center, United States
                            </h5>
                        </div>

                        <div class="social-share">
                            <ul class="social-icon d-flex align-items-center justify-content-center">
                                <span class="text-white me-3">Share:</span>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link">
                                        <span class="bi-facebook"></span>
                                    </a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link">
                                        <span class="bi-twitter"></span>
                                    </a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link">
                                        <span class="bi-instagram"></span>
                                    </a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>

            <div class="video-wrap">
                <video autoplay="" loop="" muted="" class="custom-video" poster="">
                    <source src="video/Rifa.mp4" type="video/mp4">

                    Your browser does not support the video tag.
                </video>
            </div>
        </section>


        <section class="about-section section-padding" id="section_2">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center">
                        <div class="services-info">
                            <h2 class="text-white mb-4">Tentang ConHub</h2>

                            <p class="text-white">ConHub (Consert Hub) adalah platform online untuk membeli tiket konser spesifik dalam Live Concert 2024, menawarkan pengalaman baru dengan special guest yaitu artis-artis ternama / populer dengan harga tiket yang terjangkau.</p>

                            {{-- <h6 class="text-white mt-4">Once in Lifetime Experience</h6>

                            <p class="text-white">You can only expereince tits only once in your life outside from Only Fans.</p> --}}

                            <h6 class="text-white mt-4">Pesta Sepanjang Waktu</h6>

                            <p class="text-white">Semoga konser-konser yang kami tawarkan ini akan menjadi pengalaman baru yang tak akan terlupakan</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="about-text-wrap">
                            <img src="images/TesRif1.jpg" class="about-image img-fluid">

                            <div class="about-text-info d-flex">
                                <div class="d-flex">
                                    <i class="about-text-icon bi-person"></i>
                                </div>


                                <div class="ms-4">
                                    <h3>Kenangan yang menyenangkan</h3>

                                    <p class="mb-0">Rasakan momen festival yang luar biasa bersama kami</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="artists-section section-padding" id="section_3">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-12 text-center">
                        <h2 class="mb-4">Special Guests</h1>
                    </div>

                    <div class="col-lg-5 col-12">
                        <div class="artists-thumb">
                            <div class="artists-image-wrap">
                                <img src="images/artists/Eminem2.jpg"
                                    class="artists-image img-fluid">
                            </div>

                            <div class="artists-hover">
                                <p>
                                    <strong>Name:</strong>
                                    Eminem
                                </p>

                                <p>
                                    <strong>Debut:</strong>
                                    1988
                                </p>

                                <p>
                                    <strong>Music:</strong>
                                    Rap / Hip-Hop
                                </p>

                                <hr>

                                <p class="mb-0">
                                    <strong>Youtube Channel:</strong>
                                    <a href="https://www.youtube.com/channel/UCfM3zsQsOnfWNUppiycmBuw">EminemMusic</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12">
                        <div class="artists-thumb">
                            <div class="artists-image-wrap">
                                <img src="images/artists/BabyMetal2.jpg"
                                    class="artists-image img-fluid">
                            </div>

                            <div class="artists-hover">
                                <p>
                                    <strong>Name:</strong>
                                    Baby Metal
                                </p>

                                <p>
                                    <strong>Debut:</strong>
                                    2010
                                </p>

                                <p>
                                    <strong>Music:</strong>
                                    Metal
                                </p>

                                <hr>

                                <p class="mb-0">
                                    <strong>Youtube Channel:</strong>
                                    <a href="https://www.youtube.com/@BABYMETAL">BABYMETAL</a>
                                </p>
                            </div>
                        </div>

                        <div class="artists-thumb">
                            <img src="images/artists/Raisa1.jpg"
                                class="artists-image img-fluid">

                            <div class="artists-hover">
                                <p>
                                    <strong>Name:</strong>
                                    Raisa
                                </p>

                                <p>
                                    <strong>Debut:</strong>
                                    2010
                                </p>

                                <p>
                                    <strong>Music:</strong>
                                    Pop
                                </p>

                                <hr>

                                <p class="mb-0">
                                    <strong>Youtube Channel:</strong>
                                    <a href="https://www.youtube.com/channel/UC8xcPPVYvUxv1CPoEcqj4fQ">raisa6690</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="schedule-section section-padding" id="section_4">
            <div class="container">
                <div class="row">

                    <div class="col-12 text-center">
                        <h2 class="text-white mb-4">Event Schedule</h1>

                            <div class="wrapper">

                                <i id="left">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16"
                                        style="top: 10px;height: 30px;width: 30px;right: 10px;position: absolute;">
                                        <path
                                            d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                                    </svg>
                                </i>
                                <ul class="carousel">
                                    @foreach ($jadwal_konsers as $jadwal)
                                        <li class="card">
                                            <div class="img">
                                                <img src="{{ asset('images/poster/' . $jadwal->gambar) }}"
                                                    alt="" draggable="false">
                                            </div>
                                            <h2 style="color: gold; font-weight:bold; margin:0">
                                                {{ $jadwal->nama }}
                                            </h2>
                                            <h4 style="color: red; font-weight:bold; margin:0">
                                                {{ $jadwal->artis }}
                                            </h4>
                                            <span>{{ $jadwal->tanggal_konser }}</span>
                                            <span>{{ $jadwal->waktu_mulai }}</span>
                                            <span>Rp{{ number_format($jadwal->harga, 0, ',', '.') }}</span>
                                            <span>{{ $jadwal->lokasi }}</span>
                                            <span>Last Order: {{ $jadwal->tanggal_akhir }}</span>
                                            @auth
                                                <a href="{{ route('beli_tiket', $jadwal->id) }}"
                                                    class="btn custom-btn">Buy Ticket</a>
                                            @else
                                                <button onclick="buy_ticket()" class="btn custom-btn">Buy Ticket</button>
                                            @endauth
                                        </li>
                                    @endforeach
                                </ul>
                                <i id="right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16"
                                        style="top: 10px;height: 30px;width: 30px;right: 10px;position: absolute;">
                                        <path
                                            d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                    </svg>
                                </i>

                            </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-section section-padding" id="section_5">
            @auth
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h2 class="text-center mb-4">Interested? Let's talk</h2>

                            <nav class="d-flex justify-content-center">
                                <div class="nav nav-tabs align-items-baseline justify-content-center" id="nav-tab"
                                    role="tablist">
                                    <button class="nav-link active" id="nav-ContactForm-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-ContactForm" type="button" role="tab"
                                        aria-controls="nav-ContactForm" aria-selected="false">
                                        <h5>Contact Form</h5>
                                    </button>

                                    <button class="nav-link" id="nav-ContactMap-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-ContactMap" type="button" role="tab"
                                        aria-controls="nav-ContactMap" aria-selected="false">
                                        <h5>Google Maps</h5>
                                    </button>
                                </div>
                            </nav>

                            <div class="tab-content shadow-lg mt-5" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-ContactForm" role="tabpanel"
                                    aria-labelledby="nav-ContactForm-tab">
                                    <div class="custom-form contact-form mb-5 mb-lg-0">
                                        <div class="contact-form-body">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-12">
                                                    <input type="text" name="contact-name" id="contact-name"
                                                        class="form-control" placeholder="Full name" required>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-12">
                                                    <input type="email" name="contact-email" id="contact-email"
                                                        pattern="[^ @]*@[^ @]*" class="form-control"
                                                        placeholder="Email address" required readonly
                                                        value="{{ Auth::user()->email }}">
                                                </div>
                                            </div>

                                            <textarea name="contact-message" rows="3" class="form-control" id="contact-message" placeholder="Message"></textarea>

                                            <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                                <button onclick="sendMail()" class="form-control">Send message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="nav-ContactMap" role="tabpanel"
                                    aria-labelledby="nav-ContactMap-tab">
                                    <iframe class="google-map"
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29974.469402870927!2d120.94861466021855!3d14.106066818082482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd777b1ab54c8f%3A0x6ecc514451ce2be8!2sTagaytay%2C%20Cavite%2C%20Philippines!5e1!3m2!1sen!2smy!4v1670344209509!5m2!1sen!2smy"
                                        width="100%" height="450" style="border:0;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    <!-- You can easily copy the embed code from Google Maps -> Share -> Embed a map // -->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @else
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <nav class="d-flex justify-content-center">
                                <div class="nav nav-tabs align-items-baseline justify-content-center" id="nav-tab"
                                    role="tablist">
                                    <button class="nav-link active" id="nav-ContactForm-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-ContactForm" type="button" role="tab"
                                        aria-controls="nav-ContactForm" aria-selected="false">
                                        <h5>Contact Form</h5>
                                    </button>

                                    <button class="nav-link" id="nav-ContactMap-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-ContactMap" type="button" role="tab"
                                        aria-controls="nav-ContactMap" aria-selected="false">
                                        <h5>Google Maps</h5>
                                    </button>
                                </div>
                            </nav>

                            <div class="tab-content shadow-lg mt-5" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-ContactForm" role="tabpanel"
                                    aria-labelledby="nav-ContactForm-tab">
                                    <div class="custom-form contact-form mb-5 mb-lg-0">
                                        <div class="contact-form-body">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-12">
                                                    <input type="text" name="contact-name" id="contact-name"
                                                        class="form-control" placeholder="Full name" required>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-12">
                                                    <input type="email" name="contact-email" id="contact-email"
                                                        pattern="[^ @]*@[^ @]*" class="form-control"
                                                        placeholder="Email address" required>
                                                </div>
                                            </div>

                                            <textarea name="contact-message" rows="3" class="form-control" id="contact-message" placeholder="Message"></textarea>

                                            <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                                <button onclick="noEmail()" class="form-control">Send message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="nav-ContactMap" role="tabpanel"
                                    aria-labelledby="nav-ContactMap-tab">
                                    <iframe class="google-map"
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63713.73565657227!2d98.58752882167968!3d3.5624908999999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312f97601b85fb%3A0x61aad0b3bbb7313a!2sUniversity%20of%20North%20Sumatra%20-%20Faculty%20of%20Computer%20Science%20and%20Information%20Technology!5e0!3m2!1sid!2sid!4v1716109447000!5m2!1sid!2sid"
                                        width="100%" height="450" style="border:0;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    <!-- You can easily copy the embed code from Google Maps -> Share -> Embed a map // -->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endauth
        </section>
    </main>


    <footer class="site-footer">
        <div class="site-footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <h2 class="text-white mb-lg-0">ConHub</h2>
                    </div>

                    <div class="col-lg-6 col-12 d-flex justify-content-lg-end align-items-center">
                        <ul class="social-icon d-flex justify-content-lg-end">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-twitter"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-apple"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-instagram"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-youtube"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-pinterest"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 mb-4 pb-2">
                    <h5 class="site-footer-title mb-3">Links</h5>

                    <ul class="site-footer-links">
                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Home</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">About</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Artists</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Schedule</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <h5 class="site-footer-title mb-3">Have a question?</h5>

                    <p class="text-white d-flex mb-1">
                        <a href="tel: 090-080-0760" class="site-footer-link">
                            090-080-0760
                        </a>
                    </p>

                    <p class="text-white d-flex">
                        <a href="mailto:hello@company.com" class="site-footer-link">
                            hello@company.com
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 col-11 mb-4 mb-lg-0 mb-md-0">
                    <h5 class="site-footer-title mb-3">Location</h5>

                    <p class="text-white d-flex mt-3 mb-2">
                        Jalan Dr. T. Mansur No.9, Padang Bulan, Kec. Medan Baru, Kota Medan, Sumatera Utara 20155</p>

                    <a class="link-fx-1 color-contrast-higher mt-3" href="https://maps.app.goo.gl/hgcMdmUZKkkd5gTi7">
                        <span>Our Maps</span>
                        <svg class="icon" viewBox="0 0 32 32" aria-hidden="true">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="16" cy="16" r="15.5"></circle>
                                <line x1="10" y1="18" x2="16" y2="12"></line>
                                <line x1="16" y1="12" x2="22" y2="18"></line>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="site-footer-bottom">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-12 mt-5">
                        <p class="copyright-text">Copyright © 2036 ConHub Live Company</p>
                    </div>

                    <div class="col-lg-8 col-12 mt-lg-5">
                        <ul class="site-footer-links">
                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Terms &amp; Conditions</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Privacy Policy</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Your Feedback</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--

T e m p l a t e M o

-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script type="text/javascript">
        (function() {
            emailjs.init("FRBle9ocLF-9uGEAk");
        })();
    </script>
    <script>
        function sendMail() {
            var params = {
                from_name: document.getElementById("contact-name").value,
                message: document.getElementById("contact-message").value,
                email: document.getElementById("contact-email").value,
            }
            emailjs.send("service_pwx12bn", "template_ihslo6e", params).then(function(res) {
                alert("Email Berhasil Dikirim! ");
                location.reload();
            })
        }
    </script>

    <script>
        function buy_ticket() {
            alert('Login terlebih dahulu untuk membeli tiket')
        }

        function noEmail() {
            alert('Login terlebih dahulu untuk mengirim email')
        }

        document.addEventListener("DOMContentLoaded", function() {
            const carousel = document.querySelector(".carousel");
            const arrowBtns = document.querySelectorAll(".wrapper i");
            const wrapper = document.querySelector(".wrapper");

            const firstCard = carousel.querySelector(".card");
            const firstCardWidth = firstCard.offsetWidth;

            let isDragging = false,
                startX,
                startScrollLeft,
                timeoutId;

            const dragStart = (e) => {
                isDragging = true;
                carousel.classList.add("dragging");
                startX = e.pageX;
                startScrollLeft = carousel.scrollLeft;
            };

            const dragging = (e) => {
                if (!isDragging) return;

                // Calculate the new scroll position
                const newScrollLeft = startScrollLeft - (e.pageX - startX);

                // Check if the new scroll position exceeds
                // the carousel boundaries
                if (newScrollLeft <= 0 || newScrollLeft >=
                    carousel.scrollWidth - carousel.offsetWidth) {

                    // If so, prevent further dragging
                    isDragging = false;
                    return;
                }

                // Otherwise, update the scroll position of the carousel
                carousel.scrollLeft = newScrollLeft;
            };

            const dragStop = () => {
                isDragging = false;
                carousel.classList.remove("dragging");
            };

            const autoPlay = () => {

                // Return if window is smaller than 800
                if (window.innerWidth < 800) return;

                // Calculate the total width of all cards
                const totalCardWidth = carousel.scrollWidth;

                // Calculate the maximum scroll position
                const maxScrollLeft = totalCardWidth - carousel.offsetWidth;

                // If the carousel is at the end, stop autoplay
                if (carousel.scrollLeft >= maxScrollLeft) return;

                // Autoplay the carousel after every 2500ms
                timeoutId = setTimeout(() =>
                    carousel.scrollLeft += firstCardWidth, 2500);
            };

            carousel.addEventListener("mousedown", dragStart);
            carousel.addEventListener("mousemove", dragging);
            document.addEventListener("mouseup", dragStop);
            wrapper.addEventListener("mouseenter", () =>
                clearTimeout(timeoutId));
            wrapper.addEventListener("mouseleave", autoPlay);

            // Add event listeners for the arrow buttons to
            // scroll the carousel left and right
            arrowBtns.forEach(btn => {
                btn.addEventListener("click", () => {
                    carousel.scrollLeft += btn.id === "left" ?
                        -firstCardWidth : firstCardWidth;
                });
            });
        });
    </script>
    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
</body>

</html>
