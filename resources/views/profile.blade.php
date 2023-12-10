<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(to right, #ffffff, #007bff);
            padding-top: 80px;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .profile-card {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 400px;
            width: 100%;
        }

        .profile-header {
            background-color: #007bff;
            color: #ffffff;
            text-align: center;
            padding: 20px;
        }

        .profile-icon {
            font-size: 72px;
            margin-bottom: 20px;
        }

        .profile-info {
            text-align: center;
            padding: 20px;
        }

        .profile-info h4,
        .profile-info p {
            margin-bottom: 10px;
        }

        .btn-edit-profile {
            background-color: #007bff;
            color: #ffffff;
        }
    </style>
    <title>Profile Card</title>
</head>
<body>

<div class="profile-card">
    <div class="profile-header">
        <i class="fas fa-user-circle profile-icon"></i>
    </div>
    <div class="profile-info">
        <h4>Name: {{ Auth::user()->name }} </h4>
        <p>Username:  {{ Auth::user()->username }}</p>
        <p>Email:  {{ Auth::user()->email }}</p>
    </div>
    <div class="text-center pb-3">
        <button class="btn btn-edit-profile">Edit Profile</button>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
