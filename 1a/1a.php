<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turma 1A</title>
    <a href="../index.php">← Voltar ao início</a>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #160914;
            color: white;
        }

        header {
            padding: 25px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #21101d;
            border-bottom: 1px solid #8e5d18;
        }

        header h1 {
            color: #e7a9c8;
        }

        nav a {
            color: #d8b866;
            text-decoration: none;
            font-weight: bold;
        }

        .hero {
            text-align: center;
            padding: 100px 20px 70px;
            background:
                radial-gradient(circle, #4a1837, transparent 55%),
                #160914;
        }

        .badge {
            display: inline-block;
            border: 1px solid #d8b866;
            color: #d8b866;
            padding: 8px 20px;
            border-radius: 30px;
            margin-bottom: 25px;
        }

        .hero h2 {
            font-size: 70px;
            color: #e7a9c8;
        }

        .hero h2 span {
            color: #d8b866;
        }

        .hero p {
            margin-top: 20px;
            color: #c7b9c0;
            font-size: 18px;
        }

        .cards {
            max-width: 1100px;
            margin: auto;
            padding: 60px 25px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .card {
            background: #24121f;
            padding: 35px;
            border-radius: 20px;
            border: 1px solid #67472c;
            transition: .3s;
        }

        .card:hover {
            transform: translateY(-8px);
            border-color: #d8b866;
            box-shadow: 0 15px 35px rgba(216,184,102,.12);
        }

        .card h3 {
            color: #d8b866;
            margin-bottom: 15px;
        }

        .card p {
            color: #bbaeb5;
            line-height: 1.6;
        }

        .voltar {
            display: block;
            width: fit-content;
            margin: 0 auto 70px;
            padding: 14px 30px;
            background: linear-gradient(135deg, #d46a9c, #d8b866);
            color: white;
            text-decoration: none;
            border-radius: 10px;
            font-weight: bold;
        }

        footer {
            text-align: center;
            padding: 25px;
            color: #9f8995;
            border-top: 1px solid #35202d;
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
    <h1>🌸 TURMA 1A</h1>
    <nav>
        <a href="index.php">Início</a>
    </nav>
</header>

<section class="hero">

    <div class="badge">TURMA 01A</div>

    <h2>BACK <span>END</span></h2>

    <p>Ambiente exclusivo de treinamento da turma 1A.</p>

</section>

<section class="cards">

    <div class="card">
        <h3>🐘 PHP</h3>
        <p>Programação e desenvolvimento Back End.</p>
    </div>

    <div class="card">
        <h3>🗄️ SQL</h3>
        <p>Banco de dados e comandos SQL.</p>
    </div>

    <div class="card">
        <h3>🔧 CRUD</h3>
        <p>Criação, leitura, atualização e exclusão.</p>
    </div>

</section>

<a class="voltar" href="../index.php">← Voltar ao início</a>

<footer>
    Turma 1A • Back End • 2026
</footer>

</body>
</html>