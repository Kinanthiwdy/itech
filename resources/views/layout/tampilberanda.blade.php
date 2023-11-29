<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleHome.css">
    <!-- Add the Poppins font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body>
    {{-- Header --}}
    <nav class="navbar navbar-expand-md navbar-light"
        style="background-color: #7598CF; position: sticky; top: 0; z-index: 1000;  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3); ">
        <div class="container">
            <a class="navbar-brand" href="/dashboard#">
                <img src="logo ITech header.png" alt="Logo ITech" class="d-inline-block align-text-top imghead">
                <span style="font-weight: bold;">ITech</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation" style="border-color: #fff; color: #ffffff8d;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/dashboard#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard#tentangKami">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                            </svg>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/biodata">Biodata</a></li>
                            <li><a class="dropdown-item" href="/">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- Header End --}}

    @yield('content')

    <section id="kontak">
        {{-- Footer --}}
        <footer>
            <div class="container" style="margin-top: 20px">
                <div class="row justify-content-between">
                    <div class="col-4">
                        <img src="logo biru 2.png" alt="Logo" class="imgfoot">
                    </div>

                    <div class="col">
                        <h4 style="text-align: right"><b>ITech</b></h4>
                        <p style="text-align: right">Platform belajar IT interaktif yang
                            mudah</p>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <p style="font-size: 10px; text-align: center"><b> &copy; Kelompok 3 Pendidikan Teknik
                                Informatika Universitas Negeri Malang, 2023.</b></p>
                    </div>
                </div>
        </footer>
        {{-- Footer End --}}

    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
