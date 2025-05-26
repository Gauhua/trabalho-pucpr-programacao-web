<?php
    session_start();

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('Location: index.php');
        exit();
    }
    $logado = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS STORE</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h2 class="logo">CS STORE</h2>
        <nav class="navigation">
            <a href="indexlogged.php">Início</a>
            <a href="aboutlogged.php">Sobre</a>
            <a href="system.php">Usuários</a>
            <a href="products.php">Produtos</a>
            <button type='button' class="btnLogin-popup" onclick="window.location.href='logout.php';">Sair</button>
        </nav>
    </header>
   <!-- Vitrine -->
   <section class="vitrine">
        <h2>Produtos em Destaque</h2>
        <div class="vitrine-container">
            <div class="produto">
                <img src="img/1.png" alt="Luvas">
                <p>Luvas Esportivas</p>
                <p>R$ 150,00</p>
            </div>
            <div class="produto">
                <img src="img/2.png" alt="Rifle">
                <p>Rifle Artístico</p>
                <p>R$ 450,00</p>
            </div>
            <div class="produto">
                <img src="img/3.png" alt="Faca 1">
                <p>Faca Borboleta</p>
                <p>R$ 300,00</p>
            </div>
            <div class="produto">
                <img src="img/4.png" alt="Faca 2">
                <p>Faca Militar</p>
                <p>R$ 250,00</p>
            </div>
            <div class="produto">
                <img src="img/5.png" alt="Faca 3">
                <p>Faca de Combate</p>
                <p>R$ 500,00</p>
            </div>
        </div>
    </section>


    <script src="script/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>