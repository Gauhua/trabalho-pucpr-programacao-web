<?php
    $nome = "";
    $preco = 0;
    $insertproduct = "insert";

    if(!empty($_GET['id']))
    {
        include_once('config.php');

        $id= $_GET['id'];

        $sqlSelect = "SELECT * FROM produtos WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        { 
            while($product_data = mysqli_fetch_assoc($result))
            {
                $id = $product_data['id'];
                $nome = $product_data['nome'];
                $preco = $product_data['preco'];
                $insertproduct = "submit";
                
            }
        }
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
            <form action="saveproduct.php" method="POST">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="nome" value="<?php echo $nome?>" required>
                    <label>Produto</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="number" name="preco" value="<?php echo $preco?>" required>
                    <label>Preço</label>
                </div>
                <input type="hidden" name="id" value="<?php echo $id?>">
                <button type="submit" name="<?php echo $insertproduct; ?>" id="<?php echo $insertproduct; ?>" class="btn">Adicionar</button>
            </form>
        </div>



    <script src="script/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>