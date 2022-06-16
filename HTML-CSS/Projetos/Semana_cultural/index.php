<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="shortcut icon" href="_imagens/favicon.ico" type="image/x-icon">
    <title>Entre para o sorteio</title>
</head>
<body>
    <footer>
        <p>
            ATENÇÃO: Esse site está disponível temporariamente.
        </p>
    </footer>
    <header>
        <img src="_imagens/Logo.jpeg" alt="Logo" width="200px">
        <h1>Semana cultural.</h1>
    </header>
    <nav>
        <a href="index.html">Entrar</a>
        <a href="horarios.html">Horários</a>
        <a href="creditos.html">Créditos</a>
    </nav>    
    <main>
        <h2>A semana da arte moderna e sua herança.</h2>
        <form action="pross.php" method="POST">
            insira o seu nome.*<br>
            <input type="text" name="nome" class="campo" maxlength="40" required autofocus>
            <input type="submit" value="Enviar" id="btn">
        </form>
        <br>
        <p id="sen">
            Haverá um sorteio na sala, por tanto coloque o seu nome no campo acima se quiser participar.
        </p>
    </main>
</body>
</html>
