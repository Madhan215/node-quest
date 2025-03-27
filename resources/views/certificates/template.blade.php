<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Sertifikat Kelulusan</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap');


        body {
            text-align: center;
            font-family: "Times New Roman", serif;
        }

        .certificate {
            position: relative;
            background: white;
            border: 15px solid #006735;
            padding: 50px;
            margin: 60px auto;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
        }

        .watermark {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 80px;
            color: rgba(0, 0, 0, 0.1);
            font-weight: bold;
            z-index: 0;
            user-select: none;
            white-space: nowrap;
        }

        h1 {
            font-size: 45px;
            color: #006735;
            margin-bottom: 10px;
        }

        h2 {
            font-size: 30px;
            margin: 10px 0;
            font-family: 'Great Vibes', cursive;
            color: darkred;
        }

        h3 {
            font-size: 28px;
            margin-top: 5px;
            color: #006735;
        }

        p {
            font-size: 18px;
            margin: 10px 0;
        }

        .line {
            width: 60%;
            height: 2px;
            background: black;
            margin: 30px auto;
        }

        .signature {
            margin-top: 30px;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <div class="certificate">
        <!-- Watermark -->
        <div class="watermark">Node Quest</div>

        <h1>SERTIFIKAT KELULUSAN</h1>
        <p>Dengan ini diberikan kepada</p>
        <h2>{{ $name }}</h2>
        <p>Atas keberhasilannya menyelesaikan program pembelajaran Dasar Node.js dengan Score</p>
        <h3>{{ $score }}</h3>
        <p>Pada tanggal: {{ $completion_date }}</p>

        <div class="line"></div>
        <p class="signature">Instruktur</p>
        <p>(_______________________)</p>
    </div>
</body>

</html>
