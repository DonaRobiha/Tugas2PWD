<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learnify - Kuis</title>
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
            width: 95%;
            max-width: 1500px; 
            padding: 20px; /* Beri padding di dalam card */
        }
        .card-title {
            text-align: center;
            margin-bottom: 10px; /* Beri jarak bawah pada judul */
        }
        
        .btn-primary {
            float: right; 
            margin-top: 10px; 
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
                <h5 class="card-title text-center">Kuis</h5>
                <form action="hasil.php" method="post">
                    <!-- Pertanyaan 1 -->
                    <div class="mb-4">
                        <p><strong>1. Apa kepanjangan dari HTML?</strong></p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q1" id="q1a" value="a">
                            <label class="form-check-label" for="q1a">a. Hyper Text Markup Language</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q1" id="q1b" value="b">
                            <label class="form-check-label" for="q1b">b. Hyperlinks and Text Markup Language</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q1" id="q1c" value="c">
                            <label class="form-check-label" for="q1c">c. Home Tool Markup Language</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q1" id="q1d" value="d">
                            <label class="form-check-label" for="q1d">d. Hyper Tool Multi Language</label>
                        </div>
                    </div>

                    <!-- Pertanyaan 2 -->
                    <div class="mb-4">
                        <p><strong>2. Bagaimana cara mengatur latar belakang halaman menjadi warna merah dalam CSS?</strong></p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q2" id="q2a" value="a">
                            <label class="form-check-label" for="q2a">a. background: red;</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q2" id="q2b" value="b">
                            <label class="form-check-label" for="q2b">b. bgcolor: red;</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q2" id="q2c" value="c">
                            <label class="form-check-label" for="q2c">c. color-background: red;</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q2" id="q2d" value="d">
                            <label class="form-check-label" for="q2d">d. background-color: red;</label>
                        </div>
                    </div>

                    <!-- Pertanyaan 3 -->
                    <div class="mb-4">
                        <p><strong>3. Tag HTML apa yang digunakan untuk membuat baris baru?</strong></p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q3" id="q3a" value="a">
                            <label class="form-check-label" for="q3a">a. newline</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q3" id="q3b" value="b">
                            <label class="form-check-label" for="q3b">b. hr</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q3" id="q3c" value="c">
                            <label class="form-check-label" for="q3c">c. line</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q3" id="q3d" value="d">
                            <label class="form-check-label" for="q3d">d. br</label>
                        </div>
                    </div>

                    <!-- Pertanyaan 4 -->
                    <div class="mb-4">
                        <p><strong>4. Apa fungsi utama dari PHP?</strong></p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q4" id="q4a" value="a">
                            <label class="form-check-label" for="q4a">a. Mengatur tata letak halaman web</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q4" id="q4b" value="b">
                            <label class="form-check-label" for="q4b">b. Mengatur tampilan halaman web</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q4" id="q4c" value="c">
                            <label class="form-check-label" for="q4c">c. Memproses data di sisi server</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q4" id="q4d" value="d">
                            <label class="form-check-label" for="q4d">d. Menambahkan animasi ke halaman web</label>
                        </div>
                    </div>

                    <!-- Pertanyaan 5 -->
                    <div class="mb-4">
                        <p><strong>5. Bagaimana cara menampilkan gambar di HTML?</strong></p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q5" id="q5a" value="a">
                            <label class="form-check-label" for="q5a">a. img src="gambar.jpg"</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q5" id="q5b" value="b">
                            <label class="form-check-label" for="q5b">b. image src="gambar.jpg"</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q5" id="q5c" value="c">
                            <label class="form-check-label" for="q5c">c. pic src="gambar.jpg"</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q5" id="q5d" value="d">
                            <label class="form-check-label" for="q5d">d. photo src="gambar.jpg"</label>
                        </div>
                    </div>

                    <!-- Tombol Kirim Jawaban -->
                    <button type="submit" class="btn btn-primary">Kirim Jawaban</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>