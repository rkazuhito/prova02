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
        <?php
            $nome=$_POST['nome'];
            $email=$_POST['email'];
            $cel=$_POST['cel'];
            $hora=$_POST['hora'];
            $data=$_POST['data'];
            $password=$_POST['password']
            $musica=$_POST['musica']
            $sexo=$_POST['sexo']
            $estado=$_POST['estado']
            $mensagem=$_POST['msg']
             <textarea name="msg" id="" cols="50" rows="10"></textarea>
             <br>
             Nivel de contentamento: 0<input type="range" name="contente" min="1" max="100">100
             <br>
             <input style="display: block; margin: auto; font-size: 1.2em;" type="submit" name="botao" value="ENVIAR">
        ?>
    </main>
    <footer>
        <p>Site criado por Matheus C., Patrick P. e Rafael K.</a></p>
    </footer>
</body>
</html>