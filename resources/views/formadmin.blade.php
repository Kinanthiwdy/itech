<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>User Profile Form</title>
    <style>
        #content {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .card {
            width: 35rem;
            margin: 20px;
            background-color: #7598CF;
        }

        .card-body {
            padding: 20px;
        }
    </style>
</head>

<body>

    <section id="content">
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Pilih Matkul</label>
                        <select class="form-control" id="matkul">
                            <option value="aok">Arsitektur dan
                                Organisasi Komputer</option>
                            <option value="c++">Dasar
                                Pemrograman C++</option>
                            <option value="pbo">Pemrograman
                                Berbasis Obyek</option>
                            <option value="web">Pemrograman Web</option>
                            <option value="phyton"> Phyton</option>
                            <option value="rpl">RPL</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Pilih Pertemuan</label>
                        <select class="form-control" id="pertemuan">
                            <option value="satu">Pertemuan 1</option>
                            <option value="dua">Pertemuan 2</option>
                            <option value="tiga">Pertemuan 3</option>
                            <option value="empat">Pertemuan 4</option>
                        </select>
                    </div>
                    <div class="panel-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <p style="margin-bottom: 5px;">Masukkan File</p>
                        <form action="{{ route('store.file') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="file" name="file" class="form-control" />
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="mb-3">
                        <label for="semester" class="form-label"style="margin-top: 15px;">Deskripsi</label>
                        <textarea type="deskripsi" class="form-control" id="deskripsi"></textarea>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Upload File...</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
