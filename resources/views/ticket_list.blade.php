<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Festava Live - Ticket HTML Form</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/templatemo-festava-live.css') }}" rel="stylesheet">

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
                            <strong class="text-dark">Welcome to Music Festival 2023</strong>
                        </p>
                    </div>

                </div>
            </div>
        </header>


        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/">
                    Festava Live
                </a>

                <a href="ticket" class="btn custom-btn d-lg-none ms-auto me-4">Buy Ticket</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="/#section_1">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="/#section_2">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="/#section_3">Artists</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="/#section_4">Schedule</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="/#section_5">Pricing</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="/#section_6">Contact</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="/ticket_list">My Tickets</a>
                        </li>
                        
                        @auth
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
                                            style="position: absolute; margin-top: 0.5rem; width: 12rem; border-radius: 0.375rem; box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.05); background-color: #ffffff; border: 1px solid rgba(0, 0, 0, 0.05);"
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


        <section class="ticket-section section-padding">
            <div class="section-overlay"></div>

            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-10">
                        <table class="table-auto w-full custom-form ticket-form mb-5 mb-lg-0">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">ID</th>
                                    <th class="px-4 py-2">Nama Acara</th>
                                    <th class="px-4 py-2">Nama Pemesan</th>
                                    <th class="px-4 py-2">Jumlah</th>
                                    <th class="px-4 py-2">Additional</th>
                                    <th class="px-4 py-2">Tanggal Pemesanan</th>
                                    <th class="px-4 py-2">Status</th>
                                    <th class="px-4 py-2">Bukti Transfer</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ticket->where('email', Auth::user()->email) as $tickets)
                                    <tr>
                                        <td class="border px-4 py-2">{{ $tickets->id }}</td>
                                        <td class="border px-4 py-2">{{ $tickets->nama_acara }}</td>
                                        <td class="border px-4 py-2">{{ $tickets->nama }}</td>
                                        <td class="border px-4 py-2">{{ $tickets->jumlah }}</td>
                                        <td class="border px-4 py-2">{{ $tickets->additional }}</td>
                                        <td class="border px-4 py-2">{{ $tickets->created_at }}</td>
                                        <td class="border px-4 py-2">
                                            @if ($tickets->sudah_dibayar == 'Sudah')
                                                Sudah Dibayar
                                            
                                            @elseif($tickets->bukti_trf == NULL)
                                                <a href="{{ route('bayar', ['id' => $tickets->id]) }}">Belum Dibayar</a>
                                            @else
                                                Menunggu Konfirmasi
                                            @endif
                                        </td>
                                        <td class="border px-4 py-2">
                                            <img src="{{ asset('images/bukti_trf/' . $tickets->bukti_trf) }}" alt="" width="200px" onclick="openModal('imageModal{{$tickets->id}}')">
                                        </td>
                                    </tr>
                                    <div id="imageModal{{$tickets->id}}" class="modal" style="display: none; position: fixed; z-index: 1000; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.9);">
                                        <span class="close" style="position: absolute; top: 15px; right: 35px; color: #f1f1f1; font-size: 40px; font-weight: bold; transition: 0.3s;" onclick="closeModal('imageModal{{$tickets->id}}')">&times;</span>
                                        <img class="modal-content" src="{{ asset('images/bukti_trf/' . $tickets->bukti_trf) }}" style="margin: auto; display: block; width: 80%; max-width: 700px;">
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
        </section>
    </main>


    <footer class="site-footer">
        <div class="site-footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <h2 class="text-white mb-lg-0">Festava Live</h2>
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
                            <a href="#" class="site-footer-link">Pricing</a>
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
                        Silang Junction South, Tagaytay, Cavite, Philippines</p>

                    <a class="link-fx-1 color-contrast-higher mt-3" href="#">
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
                        <p class="copyright-text">Copyright © 2036 Festava Live Company</p>
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
    <!-- JAVASCRIPT FILES -->

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <script>
        function openModal(modalId) {
            var modal = document.getElementById(modalId);
            if (modal) {
                modal.style.display = "block";
            } else {
                console.error("Modal with ID '" + modalId + "' not found.");
            }
        }

    
        function closeModal(modalId) {
    var modal = document.getElementById(modalId);
    if (modal) {
        modal.style.display = "none";
    } else {
        console.error("Modal with ID '" + modalId + "' not found.");
    }
}
    </script>
</body>

</html>
