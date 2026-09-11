<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back End Training</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #080b14;
            color: white;
        }

        header {
            height: 80px;
            padding: 0 8%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: rgba(10, 14, 25, 0.95);
            border-bottom: 1px solid #252b3b;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .logo {
            font-size: 25px;
            font-weight: bold;
            color: #5ee7ff;
        }

        nav a {
            color: #ddd;
            text-decoration: none;
            margin-left: 28px;
            font-weight: bold;
            transition: .3s;
        }

        nav a:hover {
            color: #5ee7ff;
        }

        .hero {
            min-height: 65vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 40px 20px;
            background:
                radial-gradient(circle at top, #182d50, transparent 45%),
                #080b14;
        }

        .hero-content {
            max-width: 850px;
        }

        .tag {
            display: inline-block;
            padding: 8px 18px;
            border: 1px solid #5ee7ff;
            border-radius: 30px;
            color: #5ee7ff;
            margin-bottom: 25px;
        }

        h1 {
            font-size: clamp(45px, 7vw, 80px);
            margin-bottom: 20px;
        }

        h1 span {
            color: #5ee7ff;
        }

        .hero p {
            color: #aeb7c8;
            font-size: 19px;
            line-height: 1.7;
            margin-bottom: 35px;
        }

        .btn {
            display: inline-block;
            padding: 15px 32px;
            border-radius: 10px;
            background: linear-gradient(135deg, #5ee7ff, #7b61ff);
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: .3s;
        }

        .btn:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 30px #263f70;
        }

        .turmas {
            padding: 80px 8%;
            background: #0c101b;
        }

        .titulo {
            text-align: center;
            margin-bottom: 45px;
        }

        .titulo h2 {
            font-size: 38px;
            margin-bottom: 10px;
        }

        .titulo p {
            color: #8993a6;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 22px;
            max-width: 1200px;
            margin: auto;
        }

        .card {
            padding: 35px 25px;
            border-radius: 20px;
            background: #121827;
            border: 1px solid #273044;
            text-align: center;
            transition: .3s;
        }

        .card:hover {
            transform: translateY(-10px);
            border-color: #5ee7ff;
            box-shadow: 0 15px 35px rgba(0,0,0,.35);
        }

        .card .numero {
            font-size: 45px;
            font-weight: bold;
            color: #5ee7ff;
            margin-bottom: 15px;
        }

        .card p {
            color: #929caf;
            margin-bottom: 25px;
        }

        .card a {
            display: inline-block;
            padding: 11px 22px;
            border-radius: 8px;
            background: #202a40;
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: .3s;
        }

        .card a:hover {
            background: #5ee7ff;
            color: #071019;
        }

        footer {
            text-align: center;
            padding: 25px;
            color: #687286;
            border-top: 1px solid #202637;
        }

        @media (max-width: 800px) {
            .cards {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 500px) {
            .cards {
                grid-template-columns: 1fr;
            }

            header {
                padding: 0 20px;
            }

            nav a {
                margin-left: 10px;
            }
        }
    </style>
</head>

<body>

<header>
    <div class="logo">⚡ BACK END</div>

    <nav>
        <a href="index.php">Início</a>
        <a href="main.php">Main</a>
    </nav>
</header>

<section class="hero">

    <div class="hero-content">

        <div class="tag">PLATAFORMA DE TREINO</div>

        <h1>Aprenda <span>Back End</span></h1>

        <p>
            Um ambiente para praticar programação, PHP,
            banco de dados, SQL, CRUD e desenvolvimento web.
        </p>

        <a href="#turmas" class="btn">Explorar turmas →</a>

    </div>

</section>

<section class="turmas" id="turmas">

    <div class="titulo">
        <h2>Escolha sua turma</h2>
        <p>Acesse o ambiente de treinamento da sua turma.</p>
    </div>

    <div class="cards">

        <div class="card">
            <div class="numero">01A</div>
            <p>Ambiente de treinamento da turma 1A.</p>
            <a href="1a.php">Acessar →</a>
        </div>

        <div class="card">
            <div class="numero">01B</div>
            <p>Ambiente de treinamento da turma 1B.</p>
            <a href="1b.php">Acessar →</a>
        </div>

        <div class="card">
            <div class="numero">02A</div>
            <p>Ambiente de treinamento da turma 2A.</p>
            <a href="2a.php">Acessar →</a>
        </div>

        <div class="card">
            <div class="numero">02B</div>
            <p>Ambiente de treinamento da turma 2B.</p>
            <a href="2b.php">Acessar →</a>
        </div>

    </div>

</section>

<footer>
    Back End Training • 2026
</footer>

</body>
</html>