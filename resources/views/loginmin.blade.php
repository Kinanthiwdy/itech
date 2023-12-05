<!-- resources/views/login.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="loginBox">
        <h3>Login</h3>
        <form method="POST" action="{{ url('/loginmin') }}">
            @csrf
            <div class="inputBox">
                <input type="text" name="username" required>
                <span>Username</span>
            </div>
            <div class="inputBox">
                <input type="password" name="password" required>
                <span>Password</span>
            </div>
            <div class="inputBox">
                <input type="submit" value="Login" href>
            </div>
        </form>
    </div>
</body>
</html>
