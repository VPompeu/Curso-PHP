<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
        
    <main>
        <?php 
            $nome = $_GET["nome"];
            $sobrenome = $_GET["sobrenome"];
            $idade = $_GET["idade"];
            $cpf = $_GET["cpf"];

            echo"<p><strong><center>Dados</center></strong>";
            echo"<p>Nome: $nome $sobrenome";
            echo"<p>Idade: $idade";
            echo"<p>CPF: $cpf";
        ?>
        <p><a href="javascript:history.go(-1)"><button>Voltar</button></a></p>
    </main>
</body>
</html>