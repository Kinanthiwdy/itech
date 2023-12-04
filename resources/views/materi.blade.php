@extends('layout.tampilberanda')
@section('title', 'ITech Materi Belajar')

@section('content')

    <body>
        <div class="buku">
            <img class="book" src="{{ asset('book.png') }}" alt="Gambar 1">
            <a style="font-weight: bold;" href="#belajar">Buku Belajar IT</a>
            <div class="test">
                <img class="test" src="{{ asset('test.png') }}" alt="Gambar 2">
                <a style="font-weight: bold;" href="#soal">Test Kemampuan</a>
            </div>
        </div>
        <section id="belajar">
            <div class="container text-center">
                <div class="row justify-content-center styleLayanan">
                    <div class="col">
                        <h2 style=" font-family: 'Poppins', sans-serif; padding-top: 5rem;">Mau Belajar Dunia IT?</h2>
                        <p class="card-text">Klik di bawah ini untuk Membaca!</p>
                    </div>
                </div>
        </section>
        <section style="background-color: #7598CF; padding: 50px">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="cards-wrapper">
                            <div class="card">
                                <img src="{{ asset('aok.jpg') }}" class="card-img-top" alt="Deskripsi Gambar">
                                <div class="card-body">
                                    <h5 class="card-title">Materi Arsitektur dan <br>Organisasi Komputer</h5>
                                    <p class="card-text">Klik di bawah ini untuk Membaca!</p>
                                    <a class="anjay" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="card d-none d-md-block">
                                <img src="{{ asset('c2.jpg') }}" class="card-img-top" alt="Deskripsi Gambar">
                                <div class="card-body">
                                    <h5 class="card-title">Materi Dasar Pemrograman C++</h5>
                                    <p class="card-text">Klik di bawah ini untuk Membaca!</p>
                                    <a class="anjay" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="card d-none d-md-block">
                                <img src="{{ asset('pbo.jpg') }}" class="card-img-top" alt="Deskripsi Gambar">
                                <div class="card-body">
                                    <h5 class="card-title">Materi Pemrograman Berbasis Obyek</h5>
                                    <p class="card-text">Klik di bawah ini untuk Membaca!</p>
                                    <a class="anjay" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="cards-wrapper">
                            <div class="card">
                                <img src="{{ asset('web3.jpg') }}" class="card-img-top" alt="Deskripsi Gambar">
                                <div class="card-body">
                                    <h5 class="card-title">Materi Pemrograman Web (Html, Css, Laravel)</h5>
                                    <p class="card-text">Klik di bawah ini untuk Membaca!</p>
                                    <a class="anjay" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="card d-none d-md-block">
                                <img src="{{ asset('phyton.png') }}" class="card-img-top" alt="Deskripsi Gambar">
                                <div class="card-body">
                                    <h5 class="card-title">Materi Phyton</h5>
                                    <p class="card-text">Klik di bawah ini untuk Membaca!</p>
                                    <a class="anjay" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="card d-none d-md-block">
                                <img src="{{ asset('rpl.jpg') }}" class="card-img-top" alt="Deskripsi Gambar">
                                <div class="card-body">
                                    <h5 class="card-title">Materi RPL</h5>
                                    <p class="card-text">Klik di bawah ini untuk Membaca!</p>
                                    <a class="anjay" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </section>
        <section id="soal" style="padding: 3rem;">
            <div class="container text-center">
                <div class="row justify-content-center styleLayanan">
                    <div class="col">
                        <h2 style=" font-family: 'Poppins', sans-serif; padding-top: 5rem;">Mau Belajar Dunia IT?</h2>
                        <p>Di ITech ini terdapat fitur Test Kemampuan untuk mengukur kemampuan kalian dalam dunia IT di
                            setiap minggunya
                            <br>
                            Yuk, coba fitur Test Kemampuan ini!
                        </p>
                    </div>
                </div>
        </section>
        <section>
            <div id="carouselSoalControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="cards-wrapper">
                            <div class="card">
                                <img src="{{ asset('aok.jpg') }}" class="card-img-top" alt="Deskripsi Gambar">
                                <div class="card-body">
                                    <h5 class="card-title">Soal Arsitektur dan Organisasi Komputer</h5>
                                    <p class="card-text">Klik di bawah ini untuk mencoba kemampuan Anda!</p>
                                    <a class="anjay" href="/quiz">Start</a>
                                </div>
                            </div>
                            <div class="card d-none d-md-block">
                                <img src="{{ asset('c2.jpg') }}" class="card-img-top" alt="Deskripsi Gambar">
                                <div class="card-body">
                                    <h5 class="card-title">Soal Dasar Pemrograman C++</h5>
                                    <p class="card-text">Klik di bawah ini untuk mencoba kemampuan Anda!</p>
                                    <a class="anjay" href="#">Start</a>
                                </div>
                            </div>
                            <div class="card d-none d-md-block">
                                <img src="{{ asset('pbo.jpg') }}" class="card-img-top" alt="Deskripsi Gambar">
                                <div class="card-body">
                                    <h5 class="card-title">Soal Pemrograman Berbasis Obyek</h5>
                                    <p class="card-text">Klik di bawah ini untuk mencoba kemampuan Anda!</p>
                                    <a class="anjay" href="#">Start</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="cards-wrapper">
                            <div class="card">
                                <img src="{{ asset('web3.jpg') }}" class="card-img-top" alt="Deskripsi Gambar">
                                <div class="card-body">
                                    <h5 class="card-title">Soal Pemrograman Web (Html, Css, Laravel)</h5>
                                    <p class="card-text">Klik di bawah ini untuk mencoba kemampuan Anda!</p>
                                    <a class="anjay" href="#">Start</a>
                                </div>
                            </div>
                            <div class="card d-none d-md-block">
                                <img src="{{ asset('phyton.png') }}" class="card-img-top" alt="Deskripsi Gambar">
                                <div class="card-body">
                                    <h5 class="card-title">Soal Phyton</h5>
                                    <p class="card-text">Klik di bawah ini untuk mencoba kemampuan Anda!</p>
                                    <a class="anjay" href="#">Start</a>
                                </div>
                            </div>
                            <div class="card d-none d-md-block">
                                <img src="{{ asset('rpl.jpg') }}" class="card-img-top" alt="Deskripsi Gambar">
                                <div class="card-body">
                                    <h5 class="card-title">Soal RPL</h5>
                                    <p class="card-text">Klik di bawah ini untuk mencoba kemampuan Anda!</p>
                                    <a class="anjay" href="#">Start</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev" href="#carouselSoalControls" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselSoalControls" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    </body>
@endsection
