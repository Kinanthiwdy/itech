@include('layout.tampilregister', ['title' => 'Register ITech'])

<body>

    <div class="container">
        <div class="img">
            <img src="{{ asset('login.png') }}" alt="Deskripsi Gambar">
        </div>
        <div class="login-content">
            <form action="{{ route('register') }}" method="POST">
                @csrf

                <h1 class="title">Register</h1>
                <h5 class="title">Ayo segera daftarkan dirimu di ITech!</h5><br>

                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <input type="text" class="input" name="name" placeholder="Nama" required>
                    </div>
                </div>

                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="div">
                        <input type="email" class="input" name="email" placeholder="Email" required>
                    </div>
                </div>

                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="div">
                        <input type="tel" class="input" name="phone" placeholder="Telepon" required>
                    </div>
                </div>

                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <input type="password" class="input" name="password" placeholder="Password" required>
                    </div>
                </div>

                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <input type="password" class="input" name="password_confirmation"
                            placeholder="Verifikasi Password" required>
                    </div>
                </div>

                <button type="submit" class="btn">Daftar</button>
                <a class="text" style="text-align: center" href="/">Sudah Punya Akun? Login Disini</a>
            </form>
        </div>
    </div>
    <script src="{{ asset('main.js') }}"></script>
</body>
