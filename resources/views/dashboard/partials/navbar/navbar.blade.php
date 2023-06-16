
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0"></i>SIEN</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        @can('admin')
                            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                                Dashboard
                            </a>
                            <a class="nav-link {{ Request::is('datauser') ? 'active' : '' }}" aria-current="page" href="/datauser">
                                Data User
                            </a>
                            <a class="nav-link {{ Request::is('dataorder') ? 'active' : '' }}" aria-current="page" href="/dataorder">
                                Data Pemesanan
                            </a>
                        @else
                            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                                Dashboard
                            </a>
                            <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/dashboard/about">About</a>
                            <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
                                Order
                            </a>
                            <a class="nav-link {{ ($active === "contacts") ? 'active' : '' }}" href="/dashboard/contact">Contacts</a>
                        @endcan
                    </div>
                    @auth
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3"><i class="fas fa-sign-out-alt"></i> Logout</button>
                        </form>

                    @else
                        <a href="/login" class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3">Login</a>
                        <a href="/register" class="btn button-custom text-light rounded-pill py-2 px-4 ms-3">Register</a>
                    @endauth
                </div>
            </nav>

            <div class="container-xxl py-5 background-index hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated zoomIn">{{ $title }}</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                                    <li class="breadcrumb-item text-white active" aria-current="page">{{ $title }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->