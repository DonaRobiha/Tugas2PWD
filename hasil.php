<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learnify - Hasil Kuis</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .logo {
            font-family: "Lucida Console", Monaco, monospace; 
            font-size: 36px; 
            font-weight: bold;
            color: black; 
        }
        .tagline {
            font-family: "Lucida Console", Monaco, monospace;
            font-size: 20px; 
            color: black; 
            margin-left: 10px;
        }
        .card {
            width: 90%; 
            max-width: 1200px; 
            margin: 0 auto; 
            padding: 20px; 
        }
        .card-title {
            text-align: center;
            margin-bottom: 20px; 
        }
        .btn-primary {
            float: right; 
            margin-top: 10px; 
        }
        .hasil-kuis {
            margin-top: 20px;
        }
        .hasil-kuis p {
            margin: 10px 0;
        }
        .skor {
            font-weight: bold;
            margin-top: 20px;
        }
        .correct {
            color: green; 
        }
        .incorrect {
            color: red; 
        }
    </style>
</head>
<body style="background-color: #AFEEEE">
<header class="px-4 d-flex flex-wrap py-3 mb-4 border-bottom align-items-center" style="background-color:#008080;">
    <img src="logo.png" width="100px">
    <span class="logo">Learnify:</span>
    <span class="tagline">Belajar Cerdas, Kuasai Dunia!</span>
</header>
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card" style="background-color:#40E0D0;">
        <div class="card-body">
            <h5 class="card-title text-center">Hasil Kuis</h5>
            <div class="hasil-kuis">
                <?php
              
                $correct_answers = [
                    'q1' => 'a', 
                    'q2' => 'd', 
                    'q3' => 'd', 
                    'q4' => 'c', 
                    'q5' => 'a'  
                ];

                $user_answers = [
                    'q1' => $_POST['q1'] ?? '',
                    'q2' => $_POST['q2'] ?? '',
                    'q3' => $_POST['q3'] ?? '',
                    'q4' => $_POST['q4'] ?? '',
                    'q5' => $_POST['q5'] ?? ''
                ];

                $score = 0;

                
                foreach ($correct_answers as $question => $correct_answer) {
                    $user_answer = $user_answers[$question];
                    echo "<p><strong>Pertanyaan " . substr($question, 1) . ":</strong> ";
                    if ($user_answer === $correct_answer) {
                        echo "<span class='correct'>Jawaban Anda benar!</span></p>";
                        $score += 1; 
                    } else {
                        echo "<span class='incorrect'>Jawaban Anda salah. Jawaban yang benar: <strong>$correct_answer</strong>.</span></p>";
                    }
                }

                
                echo "<div class='skor'>";
                echo "<p><strong>Skor Pengguna:</strong> $score / 5</p>";
                echo "<p><strong>Persentase Nilai:</strong> " . ($score / 5 * 100) . "%</p>";
                echo "</div>";
                ?>
            </div>
            <a href="index.html" class="btn btn-primary">Kembali ke Halaman Utama</a>
        </div>
    </div>
</div>
</body>
</html>