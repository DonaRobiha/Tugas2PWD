<?php
$nama = "Dona Robiha";
$nim = "124240026";
$plug = "SI B";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learnify - Ketentuan Kuis</title>
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
            width: 30rem;
        }
        .card-title {
            text-align: center;
            margin-bottom: 20px; 
        }
        .subtitle {
            font-size: 18px;
            margin-bottom: 20px; 
            font-weight: bold;
        }
        .btn-info {
            float: right; 
            margin-top: 10px; 
        }
    </style>
</head>
<body style="background-color: #AFEEEE">
    <form action="kuis.php" method="post">
        <header class="px-4 d-flex flex-wrap py-3 mb-4 border-bottom align-items-center" style="background-color:#008080;">
            <img src="logo.png" width="100px">
            <span class="logo">Learnify:</span>
            <span class="tagline">Belajar Cerdas, Kuasai Dunia!</span>
        </header>
        <div class="container d-flex justify-content-center align-items-center vh-100">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Ketentuan Kuis</h5>
                    <p class="subtitle">Ketentuan Untuk mengerjakan kuis:</p>
                    <ol class="text-left"> 
                        <li>Kuis terdiri dari 5 pertanyaan.</li>
                        <li>Setiap pertanyaan memiliki 4 pilihan jawaban.</li>
                        <li>Pilihlah satu jawaban yang menurut Anda benar.</li>
                        <li>Setiap jawaban benar akan mendapatkan 20 poin.</li>
                        <li>Jawaban yang salah tidak akan mendapatkan poin.</li>
                        <li>Pengguna dapat melihat skor akhir setelah menyelesaikan kuis.</li>
                    </ol>
                    <div class="mt-3">
            <button type="submit" class="btn btn-info">Mulai Mengerjakan Kuis!</button>
            </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>