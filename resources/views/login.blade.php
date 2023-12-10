
<body>
    <div class="container">
        <div class="img">
            <img src="login.png" alt="Login">
        </div>


        <div class="login-content">
            <form action="/login" method="post">
                @csrf
                <img src="logo.png" alt="Logo">
                <h3 class="title">Yuk, Daftar atau Masuk</h3>
                <h3 class="title">GRATIS!</h3>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <input type="email" name="email" id="email" placeholder="Email" required>
                    </div>
                </div>

                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <input type="password" name="password" id="password" placeholder="Password" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-block" style="font-family: 'Poppins', sans-serif;">Log
                    In</button>
                <hr>
                <a class="text" style="text-align: center" href="/register">Belum Punya Akun? Daftar</a>
                @if ($errors->any())
                <div role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            </form>
        </div>
    </div>
</body>
