<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiz App</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <style>
    body{
        background: linear-gradient(to bottom, #827eba, #ffffff);
    }
    .cquiz {
      margin-top: 50px;
    }
    .card {
      border-radius: 15px;
    }

    .img{
	display: flex;
	justify-content: flex-end;
    width: 90px;
    height: 90px;
    }



.image-cquiz img {
            width: 50px; /* Lebar container sesuai kebutuhan Anda */
            float: left; /* Menetapkan elemen ke kiri */
            margin-right: 20px; /* Jarak antara gambar dan teks */
            height: 40px;
            padding-left: 10px;
        }

    #timer {
    font-size: 18px;
    color: black; /* Warna teks hitam */
    text-align: center; /* Pusatkan teks */
    margin-top: 20px; /* Beri sedikit jarak dari elemen sebelumnya */
    font-weight: bold;
    }

  </style>
</head>
<body>

<div class="cquiz">
  <div class="card">
    <div class="card-body">
        <div class="image-cquiz">
            <img  src="{{ asset('logo biru.png') }}" >
          </div>
      <h5 class="card-title">Quiz</h5>



      <div id="timer" style="">Time: <span id="time">0:00</span></div>
      <p class="card-text">Pilih jawaban yang benar.</p>

      <div id="quiz-container">
        <!-- Questions and Options will be added dynamically here -->
      </div>
      <br>

      <button class="btn btn-primary" onclick="submitQuiz()">Submit</button>


  </div>


<!-- Bootstrap JS, Popper.js, and jQuery (required for Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

<!-- Custom JavaScript -->
<script src="{{ asset('js/quizz.js') }}"></script>
</body>
</html>
