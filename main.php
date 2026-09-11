<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main - Back End</title>

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
            padding: 22px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #0e1422;
            border-bottom: 1px solid #293246;
        }

        header h1 {
            color: #7b8cff;
        }

        nav a {
            color: #ddd;
            text-decoration: none;
            margin-left: 25px;
            font-weight: bold;
        }

        nav a:hover {
            color: #7b8cff;
        }

        .hero {
            text-align: center;
            padding: 90px 20px 70px;
            background: linear-gradient(180deg, #111a31, #080b14);
        }

        .hero h2 {
            font-size: 60px;
            margin-bottom: 20px;
        }

        .hero h2 span {
            color: #7b8cff;
        }

        .hero p {
            color: #9ba5b8;
            font-size: 18px;
        }

        .content {
            max-width: 1100px;
            margin: auto;
            padding: 60px 25px;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }

        .box {
            padding: 35px;
            border-radius: 18px;
            background: #111827;
            border: 1px solid #283247;
            transition: .3s;
        }

        .box:hover {
            transform: translateY(-7px);
            border-color: #7b8cff;
        }

        .icon {
            font-size: 35px;
            margin-bottom: 20px;
        }

        .box h3 {
            color: #7b8cff;
            margin-bottom: 12px;
            font-size: 24px;
        }

        .box p {
            color: #929caf;
            line-height: 1.6;
        }

        .voltar {
            display: block;
            width: fit-content;
            margin: 10px auto 70px;
            padding: 14px 28px;
            background: #7b8cff;
            color: white;
            text-decoration: none;
            border-radius: 9px;
            font-weight: bold;
        }

        footer {
            text-align: center;
            padding: 25px;
            color: #687286;
            border-top: 1px solid #202637;
        }

        @media (max-width: 700px) {
            .content {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

<header>
    <h1>⚡ BACK END</h1>

    <nav>
        <a href="index.php">Início</a>
    </nav>
</header>

<section class="hero">

    <h2>Área <span>Principal</span></h2>

    <p>
        Conteúdos e ferramentas para o treinamento de Back End.
    </p>

</section>

<section class="content">

    <div class="box">
        <div class="icon">🐘</div>
        <h3>PHP</h3>
        <p>
            Aprenda lógica de programação e desenvolvimento
            de aplicações utilizando PHP.
        </p>
    </div>

    <div class="box">
        <div class="icon">🗄️</div>
        <h3>Banco de Dados</h3>
        <p>
            Aprenda a organizar, armazenar e consultar
            informações.
        </p>
    </div>

    <div class="box">
        <div class="icon">⌨️</div>
        <h3>SQL</h3>
        <p>
            Pratique comandos para consultar e manipular
            bancos de dados.
        </p>
    </div>

    <div class="box">
        <div class="icon">🔧</div>
        <h3>CRUD</h3>
        <p>
            Trabalhe com criação, leitura, atualização
            e exclusão de registros.
        </p>
    </div>

</section>

<a class="voltar" href="index.php">← Voltar ao início</a>

<footer>
    Back End Training • 2026
</footer>

</body>
</html>