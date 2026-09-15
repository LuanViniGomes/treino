<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turma 2A</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f4f8ff;
            color: #102a43;
        }

        header {
            padding: 25px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: white;
            box-shadow: 0 3px 20px rgba(0,0,0,.08);
        }

        header h1 {
            color: #1261c9;
        }

        nav a {
            color: #1261c9;
            text-decoration: none;
            font-weight: bold;
        }

        .hero {
            text-align: center;
            padding: 100px 20px;
            background: linear-gradient(135deg, #ffffff, #e7f1ff);
        }

        .badge {
            display: inline-block;
            padding: 8px 20px;
            border-radius: 30px;
            background: #1261c9;
            color: white;
            margin-bottom: 25px;
            font-weight: bold;
        }

        .hero h2 {
            font-size: 70px;
            color: #102a43;
        }

        .hero h2 span {
            color: #1261c9;
        }

        .hero p {
            color: #62748a;
            margin-top: 20px;
            font-size: 18px;
        }

        .cards {
            max-width: 1100px;
            margin: auto;
            padding: 65px 25px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .card {
            background: white;
            padding: 40px 30px;
            border-radius: 18px;
            border: 1px solid #d9e6f5;
            box-shadow: 0 10px 30px rgba(30,80,140,.08);
            transition: .3s;
        }

        .card:hover {
            transform: translateY(-8px);
            border-color: #1261c9;
            box-shadow: 0 15px 35px rgba(18,97,201,.15);
        }

        .card h3 {
            color: #1261c9;
            margin-bottom: 15px;
            font-size: 23px;
        }

        .card p {
            color: #62748a;
            line-height: 1.6;
        }

        .voltar {
            display: block;
            width: fit-content;
            margin: 0 auto 70px;
            padding: 14px 30px;
            background: #1261c9;
            color: white;
            text-decoration: none;
            border-radius: 9px;
            font-weight: bold;
        }

        footer {
            background: white;
            border-top: 1px solid #dce5ef;
            text-align: center;
            padding: 25px;
            color: #62748a;
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
    <h1>🔵 TURMA 2A</h1>

    <nav>
        <a href="../index.php">Início</a>
    </nav>
</header>

<section class="hero">

    <div class="badge">TURMA 02A</div>

    <h2>BACK <span>END</span></h2>

    <p>Ambiente de treinamento da turma 2A.</p>

</section>

<section class="cards">

    <div class="card">
        <h3>🐘 PHP</h3>
        <p>Desenvolvimento de aplicações Back End.</p>
    </div>

    <div class="card">
        <h3>🗄️ Banco de Dados</h3>
        <p>Organização e armazenamento de informações.</p>
    </div>

    <div class="card">
        <h3>⌨️ SQL</h3>
        <p>Comandos para trabalhar com dados.</p>
    </div>

</section>

<a class="voltar" href="../index.php">← Voltar ao início</a>

<footer>
    Turma 2A • Back End • 2026
</footer>

</body>
</html>