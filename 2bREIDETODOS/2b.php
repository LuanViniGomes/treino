<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turma 2B</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #050505;
            color: white;
        }

        header {
            padding: 25px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: white;
            color: black;
        }

        header h1 {
            color: black;
            letter-spacing: 3px;
        }

        nav a {
            color: black;
            text-decoration: none;
            font-weight: bold;
        }

        .hero {
            min-height: 60vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background:
                radial-gradient(circle, #292929, transparent 45%),
                #050505;
        }

        .badge {
            border: 1px solid #777;
            padding: 9px 22px;
            border-radius: 30px;
            color: #aaa;
            margin-bottom: 30px;
            letter-spacing: 2px;
        }

        .hero h2 {
            font-size: clamp(55px, 9vw, 100px);
            letter-spacing: 8px;
            font-weight: 900;
        }

        .hero h2 span {
            color: #777;
        }

        .hero p {
            color: #888;
            margin-top: 25px;
            font-size: 18px;
        }

        .cards {
            max-width: 1100px;
            margin: auto;
            padding: 70px 25px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .card {
            padding: 40px 30px;
            background: #0d0d0d;
            border: 1px solid #333;
            transition: .3s;
        }

        .card:hover {
            background: white;
            color: black;
            transform: translateY(-8px);
        }

        .card h3 {
            font-size: 24px;
            margin-bottom: 15px;
        }

        .card p {
            color: #888;
            line-height: 1.6;
        }

        .card:hover p {
            color: #333;
        }

        .voltar {
            display: block;
            width: fit-content;
            margin: 0 auto 70px;
            padding: 14px 35px;
            background: white;
            color: black;
            text-decoration: none;
            font-weight: bold;
        }

        footer {
            background: white;
            color: black;
            text-align: center;
            padding: 28px;
            letter-spacing: 2px;
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
    <h1>2B</h1>

    <nav>
        <a href="index.php">INÍCIO</a>
    </nav>
</header>

<section class="hero">

    <div class="badge">TURMA 02B</div>

    <h2>BACK <span>END</span></h2>

    <p>Ambiente de treinamento da turma 2B.</p>

</section>

<section class="cards">

    <div class="card">
        <h3>PHP</h3>
        <p>Programação e desenvolvimento Back End.</p>
    </div>

    <div class="card">
        <h3>SQL</h3>
        <p>Consultas e manipulação de bancos de dados.</p>
    </div>

    <div class="card">
        <h3>CRUD</h3>
        <p>Gerenciamento de registros e informações.</p>
    </div>

</section>

<a class="voltar" href="index.php">← VOLTAR</a>

<footer>
    2B • BACK END • 2026
</footer>

</body>
</html>