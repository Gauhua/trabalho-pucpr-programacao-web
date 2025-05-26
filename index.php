<?php
    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $url = $_POST['url'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(name, email, password, url) VALUES ('$name','$email','$password', '$url')");
    }
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
            <a href="index.php">Início</a>
            <a href="about.php">Sobre</a>
            <a href="system.php">Usuários</a>
            <a href="products.php">Produtos</a>
            <button type='button' class="btnLogin-popup">Entrar</button>
        </nav>
    </header>
    <div class="wrapper">
        <span class="icon-close">
            <ion-icon name="close"></ion-icon>
        </span>
        <div class="form-box login">
            <h2>Entrar</h2>
            <form action="testlogin.php" method="POST">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password" required>
                    <label>Senha</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Lembre-se de mim</label>
                    <a href="#">Esqueceu sua senha?</a>
                </div>
                <button type="submit" name="submit" class="btn">Entrar</button>
                <div class="login-register">
                    <p>Não possui uma conta?<a href="#" 
                    class="register-link"> Registrar</a></p>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <h2>Registrar</h2>
            <form action="index.php" method="POST">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="name" required>
                    <label>Nome completo</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password" required>
                    <label>Senha</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="link"></ion-icon></span>
                    <input type="text" name="url" required>
                    <label>URL de troca</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox" required>Eu concordo com os termos de uso</label>
                </div>
                <button type="submit" name="submit" class="btn">Registrar</button>
                <div class="login-register">
                    <p>Já possui uma conta?<a href="#" 
                    class="login-link"> Entrar</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="script/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
