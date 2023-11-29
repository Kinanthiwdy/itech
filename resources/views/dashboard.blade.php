@extends('layout.tampilberanda')
@section('title', 'ITech Home')

@section('content')
    {{-- Content --}}
    <section id="home">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-6 textHome" style="font-weight: bold;">
                    <h3 style=" font-family: 'Poppins', sans-serif;">Selamat Datang, Joko Widodo!</h3>
                    <h1 style=" font-family: 'Poppins', sans-serif; text-align: left">Siap Hadapi Dunia IT? Bareng <span
                            class="itechStyle" style=" font-family: 'Poppins', sans-serif;">ITech</span>, Pasti Mudah!</h1>
                </div>
                <div class="col-3">
                    <img src="logo biru.png" alt="Logo ITech" width="300" height="300">
                </div>
            </div>
        </div>
    </section>

    <section id="layanan">
        <div class="container text-center">
            <div class="row justify-content-center styleLayanan">
                <div class="col">
                    <h2 style=" font-family: 'Poppins', sans-serif;">Layanan</h2>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <p>
                        Layanan ITech adalah platform web pembelajaran TI dengan metode beragam, fasilitas berbagi
                        materi, analisis statistik, serta dukungan evaluasi dan perbaikan kemampuan belajar mandiri
                        mahasiswa.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center styleLayanan">
                <div class="row justify-content-center styleLayanan">
                    <div class="col-3 stylecolLayanan">
                        <img src="bukuIcon.png" alt="Icon Buku" width="50" height="50" style="padding-bottom: 10px">
                        <h6>Materi Belajar</h6>
                        <a href="/materibelajar" style="text-decoration: none; color: blue;">Read More <svg
                                xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                                class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                                <path fill-rule="evenodd"
                                    d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                            </svg></a>
                    </div>
                    <div class="col-3 stylecolLayanan">
                        <img src="dataIcon.png" alt="Icon Buku" width="50" height="50" style="padding-bottom: 10px">
                        <h6>Statistika Hasil Belajar</h6>
                        <a href="/statistika" style="text-decoration: none; color: blue">Read More <svg
                                xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                                class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                                <path fill-rule="evenodd"
                                    d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                            </svg></a>
                    </div>
                    <div class="col-3">
                        <img src="chatIcon.png" alt="Icon Buku" width="50" height="50" style="padding-bottom: 10px">
                        <h6>Chat Admin</h6>
                        <a href="https://linktr.ee/AdminITech" style="text-decoration: none; color: blue">Read More <svg
                                xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                                class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                                <path fill-rule="evenodd"
                                    d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                            </svg></a>
                    </div>
                </div>
            </div>

        </div>
        </div>
        </div>
    </section>
    <section id="tentangKami">
        <div class="container text-center">
            <div class="row">
                <h1 style="font-family: 'Poppins', sans-serif; padding-bottom: 2rem;">Tentang Kami</h1>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-6 textTentang" style="text-align: justify">
                    ITech adalah sebuah platform web yang menyediakan pembelajaran dalam bidang Teknologi Informasi (TI)
                    dengan
                    menggunakan metode beragam. Platform ini tidak hanya menawarkan materi-materi pembelajaran berkualitas,
                    tetapi juga menyediakan fasilitas berbagi materi antar pengguna. Dengan demikian, mahasiswa dapat saling
                    berinteraksi dan berkolaborasi untuk memperdalam pemahaman mereka terhadap topik TI yang sedang
                    dipelajari.ITech bertujuan untuk menjadi lebih dari sekadar
                    platform
                    pembelajaran online, tetapi juga menjadi lingkungan belajar kolaboratif yang memotivasi, mendukung,
                    dan
                    mengarahkan mahasiswa menuju keberhasilan dalam pemahaman dan penerapan konsep-konsep TI.
                </div>
                <div class="col-md-6">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('logo ITech.png') }}" class="d-block img-fluid" alt="Logo ITech"
                                    style="height: 350px; width: 350px; margin: auto;">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('foto1.png') }}" class="d-block img-fluid" alt="Foto 1"
                                    style="height: 350px; width: 350px; margin: auto;">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('foto2.png') }}" class="d-block img-fluid" alt="Foto 2"
                                    style="height: 350px; width: 350px; margin: auto;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Content End --}}
@endsection
