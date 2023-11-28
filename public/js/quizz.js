
  const quizData = [
    {
      question: "Sistem computer terdiri dari tiga unsur berikut kecuali",
      options: [ "Software","Hardware","Brainware","Mailware"],
      correctAnswer: "d"
    },
    {
      question: "Komputer digital digunakan untuk…",
      options: [" Mengolah data kuantitatif", "Mengolah input jadi output", "Mengolah data kualitatif", "Mengatur software"],
      correctAnswer: "d"
    },
    {
        question: "Berikut merupakan contoh Barainware, kecuali…",
        options: ["Operator", "Spyware", "Programmer", "System analyst"],
        correctAnswer: "a"
      },
      {
        question: "Berikut ini merupakan storage device adalah…",
        options: ["Monitor", "Keyboard", "Pentium core i7", "Flashdisk"],
        correctAnswer: "a"
      },
      {
        question: "Hardware yang berfungsi sebagai alat penunjuk untuk mengatur posisi kursor di layar adalah…",
        options: [" Mouse", "Monitor", "Speaker", " Printer"],
        correctAnswer: "a"
      },
      {
        question: "Berikut ini merupakan application software, kecuali",
        options: ["Ubuntu", "Photoshop", "Norton", "Ms. Office"],
        correctAnswer: "a"
      },
      {
        question: "Tujuan pokok sistem komputer adalah…",
        options: ["Mengolah output jadi proses", "Mengolah data menjadi informasi", "Mengolah output jadi input", "Mengolah input menjadi proses"],
        correctAnswer: "a"
      },
      {
        question: "Komponen non fisik untuk menjalankan, mengendalikan dan mengatur proses oleh perangkat keras komputer adalah…",
        options: [" Hardware", "Mailware", "Brainware", "Software"],
        correctAnswer: "a"
      },
      {
        question: "Manusia dengan tenaga dan ilmu pengetahuan yang digunakan untuk mengoperasikan serta mengatur system komputer adalah…",
        options: [" Hardware", "Mailware", "Brainware", "Software"],
        correctAnswer: "a"
      },
    // Add more questions as needed
  ];

  function loadQuiz() {
    const quizContainer = document.getElementById('quiz-container');
    quizData.forEach((data, index) => {
      const questionCard = `
        <div class="card mt-3">
          <div class="card-body">
            <h6 class="card-subtitle mb-2 text-muted">Pertanyaan ${index + 1}:</h6>
            <p class="card-text">${data.question}</p>
            ${generateOptions(data.options, index)}
          </div>
        </div>
      `;
      quizContainer.innerHTML += questionCard;
    });
  }


  const totalTimeInSeconds = 300; // 5 menit

let timer;
let timeRemaining = totalTimeInSeconds;

// Fungsi untuk memulai timer
function startTimer() {
  timer = setInterval(updateTimer, 1000);
}

// Fungsi untuk mengupdate timer setiap detik
function updateTimer() {
  const minutes = Math.floor(timeRemaining / 60);
  const seconds = timeRemaining % 60;

  document.getElementById('time').innerHTML = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;

  if (timeRemaining === 0) {
    // Waktu habis, tambahkan logika yang sesuai di sini
    alert('Waktu habis!');
    clearInterval(timer);
  } else {
    timeRemaining--;
  }
}

// Fungsi untuk menghentikan timer
function stopTimer() {
  clearInterval(timer);
}

// Panggil fungsi startTimer() ketika halaman dimuat
window.onload = startTimer;

  function generateOptions(options, questionIndex) {
    return options.map((option, index) => `
      <div class="form-check">
        <input class="form-check-input" type="radio" name="q${questionIndex}" id="q${questionIndex}o${index}" value="${String.fromCharCode(97 + index)}">
        <label class="form-check-label" for="q${questionIndex}o${index}">
          ${option}
        </label>
      </div>
    `).join('');
  }

  function submitQuiz() {
    let score = 0;
    quizData.forEach((data, questionIndex) => {
      const selectedOption = document.querySelector(`input[name="q${questionIndex}"]:checked`);
      if (selectedOption) {
        const userAnswer = selectedOption.value;
        if (userAnswer === data.correctAnswer) {
          score++;
        }
      }
    });

    alert(`Skor Anda: ${score} dari ${quizData.length}`);
  }

  // Load quiz when the page is ready
  document.addEventListener('DOMContentLoaded', loadQuiz);

