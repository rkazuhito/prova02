<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <title>Fale Conosco</title>
</head>
<body>
    <header>
        <h1>Marcelo Pires Vieira</h1>
        <p>Mais conhecido pelo seu nome artístico Belo, aqui você encontrará tudo sobre esse belo cantor</p>
    </header>
    <nav>
        <a href="index.html">Home</a>
        <a href="fale.html">Fale Conosco</a>
        <a href="vetor.html">Vetores</a>
        <a href="curiosidades.html">Curiosidades</a>
    </nav>
    <main>
        <h2>Aqui está sua mensagem:</h2>
        <?php
            $nome=$_POST['nome'];
            $email=$_POST['email'];
            $cel=$_POST['cel'];
            $hora=$_POST['hora'];
            $data=$_POST['data'];
            $password=$_POST['password'];
            $musica=$_POST['musica'];
            $sexo=$_POST['sexo'];
            $estado=$_POST['estado'];
            $cidade=$_POST['cidade;']
            $mensagem=$_POST['msg'];
            $contente=$_POST['contente'];
            echo "Mensagem enviada por: $nome , de $cidade no estado $estado , as $hora do dia $data <br>";
            echo $mensagem. "<br>";

        ?>
    </main>
    <footer>
        <p>Site criado por Matheus C., Patrick P. e Rafael K.</a></p>
    </footer>
</body>
</html>