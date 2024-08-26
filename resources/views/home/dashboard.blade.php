<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - @yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/app.css') }}">
    <style>
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 90px 0 0;
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
            z-index: 99;
        }

        @media (max-width: 767.98px) {
            .sidebar {
                top: 11.5rem;
                padding: 0;
            }
        }

        .navbar {
            box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .1);
        }

        @media (min-width: 767.98px) {
            .navbar {
                top: 0;
                position: sticky;
                z-index: 999;
            }
        }

        .sidebar .nav-link {
            color: #333;
        }

        .sidebar .nav-link.active {
            color: #0d6efd;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-light bg-light p-3">

        <div class="d-flex col-12 col-md-3 col-lg-2 mb-2 mb-lg-0 flex-wrap flex-md-nowrap justify-content-between">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">
                  <img src="{{ asset('storage/logo/logo.png') }}" width="40" height="40" class="d-inline-block align-top" alt="">
                </a>
              </nav>
            <button class="navbar-toggler d-md-none collapsed mb-3" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="col-12 col-md-4 col-lg-2">
            <input class="form-control form-control-dark" type="text" placeholder="Search" aria-label="Search">
        </div>

        <div class="col-12 col-md-5 col-lg-8 d-flex align-items-center justify-content-md-end mt-3 mt-md-0">

            <div class="col-12 col-md-5 col-lg-8 d-flex align-items-center justify-content-md-end mt-3 mt-md-0">
                <div class="col-12 col-md-5 col-lg-8 d-flex align-items-center justify-content-md-end mt-3 mt-md-0">
                    <div class="image ml-2">
                        <img src="dist/img/avatar.png" width="45px" height="45px" class="img-circle" alt="User Image">
                    </div>
                </div>
                <div class="dropdown">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{ route('app_logout') }}">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-5 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            <span class="ml-2">User Dashboard</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('livre.userindex') }}">
                            <?xml version="1.0" encoding="utf-8"?><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  width="24" height="24" x="0px" y="0px" viewBox="0 0 122.88 96.16" style="enable-background:new 0 0 122.88 96.16" xml:space="preserve"><style type="text/css"><![CDATA[
                                .st0{fill:#2E2E2E;}
                                .st1{fill:#DA5652;}
                            ]]></style><g><path class="st1" d="M108.82,14.33c-0.02-0.18-0.05-0.37-0.05-0.57c0-0.19,0.01-0.38,0.05-0.57V0.7 c-8.76-0.83-17.79,0.13-25.68,3.12c-7.37,2.8-13.73,7.39-17.86,13.98v71.15c6.43-4.29,13-7.82,19.75-10.22 c7.69-2.74,15.6-4.04,23.79-3.39V14.33L108.82,14.33L108.82,14.33z M57.71,88.21V17.68C53.74,10.68,47.32,6,40.08,3.22 C31.87,0.08,22.64-0.63,14.6,0.51l-0.43,75.05c8.77-0.32,17.36,0.8,25.43,3.44C46.03,81.09,52.12,84.16,57.71,88.21L57.71,88.21 L57.71,88.21z"/><path class="st0" d="M6.62,79.25l0.35-61.69H0v78.5c9.57-2.47,19.17-4.04,28.85-4.11c8.93-0.05,17.86,1.19,26.81,4.22 c-5.56-4.5-11.76-7.82-18.38-9.97c-8.33-2.72-17.34-3.62-26.58-2.83c-2.09,0.17-3.91-1.38-4.09-3.46 C6.59,79.68,6.59,79.46,6.62,79.25L6.62,79.25L6.62,79.25z M68.95,95.59c8.37-2.63,16.72-3.71,25.08-3.66 c9.67,0.05,19.28,1.64,28.85,4.11V17.56h-6.48v62.03c0,2.09-1.7,3.79-3.79,3.79c-0.3,0-0.59-0.03-0.87-0.1 c-8.29-1.3-16.32-0.22-24.16,2.57C81.26,88.1,75.06,91.47,68.95,95.59L68.95,95.59L68.95,95.59z"/></g></svg>
                            <span class="ml-2">BOOKS</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('personnel.userindex') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            <span class="ml-2">STAFFS</span>
                          </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('fournisseur.userindex') }}">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"  shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 303.929"><path d="M322.28 215.472l24.884 65.336 12.507-35.617-6.13-6.7c-4.611-6.737-3.028-14.384 5.516-15.765 2.881-.468 6.122-.177 9.26-.177 3.319 0 7.019-.307 10.166.388 7.93 1.749 8.757 9.437 4.805 15.554l-6.133 6.7 12.51 35.617 22.503-65.336c16.241 14.616 52.42 17.561 70.304 27.53 24.785 13.874 24.107 36.112 29.528 60.927l-179.117-.002a18.92 18.92 0 00-.642-4.869c-1.843-6.883-2.862-14.206-3.872-21.49-2.095-15.093-4.184-30.093-12.465-45.631-1.703-3.191-3.836-5.912-6.283-8.297 4.63-2.165 8.912-4.794 12.659-8.168zm-88.996 20.248c-7.952-15.961-10.664-22.124-22.399-34.842 22.116 8.555 40.931 9.637 57.664 20.135 10.647 6.673 26.445 11.699 30.752 19.778 10.602 19.888 9.044 41.982 14.712 63.138H0c5.666-21.156 4.105-43.25 14.713-63.138 4.307-8.079 20.625-13.105 31.277-19.778 16.728-10.498 35.543-11.58 57.665-20.135-11.735 12.718-14.451 18.881-22.405 34.842l23.033-.564 51.705 41.296 54.263-41.296 23.033.564zm-113.643-57.169v13.905l-10.767 23.016 48.365 37.543 48.426-37.908-15.015-23.982v-12.936c18.447-.982 34.294-2.626 43.065-4.769 11.334-2.764 20.785-6.9 27.306-13.138-10.174-4.887-16.686-13.271-20.42-24.183-8.685-25.399-.462-49.514-4.34-77.08-5.192-36.929-29.348-49.297-53.302-46.743C152.404-12.835 97.558 1.845 82.742 44.752c-7.484 21.662-2.947 38.216-3.739 60.166-1.063 29.542-8.773 46.433-25.484 52.73 5.784 6.882 14.056 12.172 24.953 15.728 8.134 2.654 23.281 4.329 41.169 5.175zm198.045-6.886c-2.253.039-4.091-.237-6.094-1.35-2.671-1.478-4.548-4.019-5.818-6.883-2.687-6.009-4.816-21.818 1.945-26.343l-1.264-.819-.144-1.749c-.26-3.183-.327-7.033-.39-11.074-.247-14.868-.557-32.877-12.831-36.491l-5.267-1.55 3.468-4.179c9.922-11.934 20.281-22.371 30.732-30.384 11.821-9.064 23.835-15.1 35.592-16.835 12.086-1.794 23.796.913 34.612 9.426 3.192 2.516 6.294 5.533 9.283 9.076 11.539 1.084 20.976 7.137 27.71 15.778 4.018 5.154 7.071 11.251 9.017 17.735a59.423 59.423 0 012.424 20.096c-.656 12.117-5.206 23.954-14.375 32.587 1.611.055 3.131.417 4.475 1.118 5.115 2.668 5.281 8.458 3.936 13.312-1.328 4.06-3.017 8.771-4.608 12.726-1.937 5.339-4.769 6.332-10.243 5.757-12.291 53.789-86.622 55.624-102.16.046z"/></svg>
                              <span class="ml-2">SUPPLIERS</span>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('emprunt.userindex') }}">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                              <span class="ml-2">BORROWS</span>
                            </a>
                          </li>

                        <li class="nav-item">
                            <a class="btn btn-sm btn-warning ml-3 mt-2" href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard">
                                ⚡︎ Library Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-sm btn-primary ml-3 mt-2" href="https://themesberg.com">
                                By Bookwise ❤️
                            </a>
                        </li>
                      </ul>
                </div>
            </nav>
            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Overview</li>
                    </ol>
                </nav>
                <section>

                    <h3>Welcome to our library</h3>
                    <h5>Our books available for your enjoyment</h5>
                    <p></p>
                    <div class="container">
                        <div class="row">
                            @foreach ($books as $book)
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top" src="{{ Storage::url($book->Cover) }}" alt="{{ $book->Title }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $book->Title }}</h5>
                                        <p class="card-text">
                                            <a class="btn btn-primary" href="{{ route('emprunt.userindex') }}">Borrow</a>
                                            @if ($book->files)
                                            <a class="btn btn-secondary" href="#" onclick="window.open('{{ Storage::url($book->files) }}', '_blank', 'fullscreen=yes'); return false;">Read</a>
                                            @else
                                            Can't read
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </section>

                @include('script')
</body>
</html>
