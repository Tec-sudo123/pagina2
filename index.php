<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($title); ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            color: #333;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        header {
            text-align: center;
            padding: 20px;
            background-color: #4CAF50;
            color: #fff;
            border-radius: 5px;
        }
        img {
            max-width: 100%;
            height: auto;
            border: 2px solid #4CAF50;
            border-radius: 5px;
        }
        h1 {
            margin-top: 0;
        }
        p {
            line-height: 1.6;
            margin: 10px 0;
        }
        footer {
            text-align: center;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border-radius: 5px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<?php
// Definindo variáveis para o site
$title = "Meu Site PHP";
$headerText = "Bem-vindo ao Meu Site PHP";
$paragraph1 = "Este é um exemplo de uma página simples criada com PHP. A página inclui uma imagem e alguns textos formatados com CSS.";
$paragraph2 = "O PHP é uma linguagem de script do lado do servidor que permite criar páginas web dinâmicas. Com PHP, você pode gerar conteúdo HTML dinamicamente e interagir com bancos de dados.";
$imageUrl = "https://via.placeholder.com/800x400"; // URL da imagem de exemplo
?>

<div class="container">
    <header>
        <h1><?php echo htmlspecialchars($headerText); ?></h1>
    </header>

    <main>
        <img src="<?php echo htmlspecialchars($imageUrl); ?>" alt="Imagem Exemplo">
        <p><?php echo htmlspecialchars($paragraph1); ?></p>
        <p><?php echo htmlspecialchars($paragraph2); ?></p>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Meu Site PHP. Todos os direitos reservados.</p>
    </footer>
</div>

</body>
</html>
