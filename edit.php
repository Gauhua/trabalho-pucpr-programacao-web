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

    if(!empty($_GET['id']))
    {
        include_once('config.php');

        $id= $_GET['id'];

        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        { 
            while($user_data = mysqli_fetch_assoc($result))
            {
                $name = $user_data['name'];
                $email = $user_data['email'];
                $password = $user_data['password'];
                $url = $user_data['url'];
            }
        }
        else
        {
            header('Location: system.php');
            exit();
        }
    }
    else
    {
        header('Location: system.php');
        exit();
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
            <a href="indexlogged.php">Início</a>
            <a href="aboutlogged.php">Sobre</a>
            <a href="system.php">Usuários</a>
            <a href="products.php">Produtos</a>
            <button type='button' class="btnLogin-popup" onclick="window.location.href='logout.php';">Sair</button>
        </nav>
    </header>
    <div class="form-box register">
            <h2>Editar</h2>
            <form action="saveedit.php" method="POST">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="name" value="<?php echo $name?>" required>
                    <label>Nome completo</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="email" value="<?php echo $email?>" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password" value="<?php echo $password?>" required>
                    <label>Senha</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="link"></ion-icon></span>
                    <input type="text" name="url" value="<?php echo $url?>" required>
                    <label>URL de troca</label>
                </div>
                <input type="hidden" name="id" value="<?php echo $id?>">
                <button type="submit" name="update" id="update" class="btn">Editar</button>
            </form>
        </div>



    <script src="script/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>