@include('layout.tampilogin', ['title' => 'Login ITech'])

<body>

    <div class="container">
        <div class="img">
            <img src="{{ asset('login.png') }}" alt="Deskripsi Gambar">
        </div>
        <div class="login-content">
            <form action="index.html">
                <img src="{{ asset('logo.png') }}" alt="Deskripsi Gambar">
                <h3 class="title">Yuk, Daftar atau Masuk</h3>
                <h3 class="title">GRATIS!</h3>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <input type="text" class="input" placeholder="Username" required>
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <input type="password" class="input" placeholder="Password" required>
                    </div>
                </div>
                <a href="#">Forgot Password?</a>
                <button type="submit" class="btn"><a style="text-align: center; color: white; font-size: 1.2rem;"
                        href="/dashboard">LOGIN</a></button>
                <button type="submit" class="btn google-button">
                    <img src="{{ asset('google.png') }}" alt="Google Icon"> Login with Google
                </button>
                <a class="text" style="text-align: center" href="/register">Belum Punya Akun? Daftar</a>
            </form>
        </div>
    </div>
    <script src="{{ asset('main.js') }}"></script>

</body>
