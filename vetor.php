<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <title>Vetores</title>
</head>
<body>
<header>
        <h1>Marcelo Pires Vieira</h1>
        <p>Mais conhecido pelo seu nome artístico Belo, aqui você encontrará tudo sobre esse belo cantor</p>
    </header>
    <nav>
        <a href="index.html">Home</a>
        <a href="fale.html">Newsletter</a>
        <a href="vetor.html">Vetores</a>
        <a href="curiosidades.html">Curiosidades</a>
    </nav>
    <main>
    <h2>Exercicio</h2>
    <!--Faça um algoritimo que preencha um array com o nome de 6 pessoas, em seguida preencha mais dois arrays, um para a idade (18 a 30 aleatório) e outro para o peso (de 50 a 100 alatório) dessas pessoas, calcule e mostre:-->
        <?php
            $nomes =array ("Amanda", "Julio", "Ana", "Pedro", "Maria", "Joao");
            for($i = 0; $i <= 5; $i++){
                $idades[$i] = rand(18,30);
                $pesos[$i] = rand(50,100);
                echo "$nomes[$i] tem $idades[$i] anos e pesa $pesos[$i] Kg. <br>";
            }
        ?>
    </main>
    <footer>
        <p>Site criado por Matheus C., Patrick P. e Rafael K.</a></p>
    </footer>
</body>
</html>