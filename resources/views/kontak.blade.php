@extends('layout.tampilberanda')
@section('title', 'ITech Contact')

@section('content')

<body>
    <div class="container-fluid pt-5 pb-5 kontak" id="contact">
        <div class="container  ">
            <h2 class="display-3 text-center">Kontak Kami</h2>
            <p class="text-center">
                ITech seputar layanan kami
            </p>
            <div class="row pb-3">
                <div class="col-md-6">
                    <input class="form-control form-control-lg mb-3" type="text" placeholder="Nama" />
                    <input class="form-control form-control-lg mb-3" type="text" placeholder="Email" />
                    <input class="form-control form-control-lg" type="text" placeholder="No. Phone" />
                </div>
                <div class="col-md-6 ">
                    <textarea class="form-control form-control-lg mb-4" rows="5"></textarea>
                    <div class="alert alert-primary" role="alert">
                        <i><i class="fa-solid fa-triangle-exclamation"></i></i>
                        isi dengan benar dan seksama
                    </div>
                </div>
            </div>
            <div class="col-md-3 mx-auto text-center">
                <button type="button" class="btn btn-primary btn-lg">
                    Kirim Pesan
                </button>
            </div>
        </div>
    </div>

    <!-- end kontak -->

</body>
@endsection

