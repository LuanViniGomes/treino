<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turma 1B</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #080808;
            color: white;
        }

        header {
            padding: 24px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #0d0d0d;
            border-bottom: 3px solid #ffd000;
        }

        header h1 {
            color: #ffd000;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        nav a:hover {
            color: #ffd000;
        }

        .hero {
            text-align: center;
            padding: 100px 20px;
            background:
                radial-gradient(circle at center, #332a00, transparent 50%),
                #080808;
        }

        .badge {
            display: inline-block;
            background: #ffd000;
            color: black;
            padding: 8px 18px;
            font-weight: bold;
            margin-bottom: 25px;
        }

        .hero h2 {
            font-size: 70px;
            font-weight: 900;
            letter-spacing: 3px;
        }

        .hero h2 span {
            color: #ffd000;
        }

        .hero p {
            color: #999;
            margin-top: 20px;
            font-size: 18px;
        }

        .cards {
            max-width: 1100px;
            margin: auto;
            padding: 60px 25px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .card {
            background: #111;
            padding: 40px 30px;
            border: 1px solid #333;
            position: relative;
            transition: .3s;
        }

        .card:hover {
            border-color: #ffd000;
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(255,208,0,.1);
        }

        .card h3 {
            color: #ffd000;
            margin-bottom: 15px;
            font-size: 23px;
        }

        .card p {
            color: #999;
            line-height: 1.6;
        }

        .voltar {
            display: block;
            width: fit-content;
            margin: 0 auto 70px;
            padding: 14px 30px;
            background: #ffd000;
            color: black;
            text-decoration: none;
            font-weight: bold;
        }

        footer {
            background: #ffd000;
            color: black;
            text-align: center;
            padding: 25px;
            font-weight: bold;
        }

        @media (max-width: 700px) {
            .cards {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

<header>
    <h1>⚡ TURMA 1B</h1>

    <nav>
        <a href="index.php">INÍCIO</a>
    </nav>
</header>

<section class="hero">

    <div class="badge">TURMA 01B</div>

    <h2>BACK <span>END</span></h2>

    <p>Ambiente de treinamento da turma 1B.</p>

</section>

<section class="cards">

    <div class="card">
        <h3>PHP</h3>
        <p>Fundamentos da programação Back End.</p>
    </div>

    <div class="card">
        <h3>SQL</h3>
        <p>Consultas e manipulação de bancos de dados.</p>
    </div>

    <div class="card">
        <h3>CRUD</h3>
        <p>Gerenciamento completo de registros.</p>
    </div>

</section>

<a class="voltar" href="index.php">← VOLTAR</a>

<footer>
    TURMA 1B • BACK END • 2026
</footer>

</body>
</html>