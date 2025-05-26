<?php
session_start();
include_once('config.php');

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    header('Location: index.php');
    exit();
}
$logado = $_SESSION['email'];

$sql = "SELECT * FROM produtos ORDER BY id DESC";

$result = $conexao->query($sql);

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
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>
                    <th class="acao" scope="col"><button type='button' class='btn-del ' onclick='window.location.href="productsinsert.php"'>
                            <ion-icon name="add"></ion-icon>
                        </button></th>

                </tr>
            </thead>
            <tbody>
                <?php
                while ($product_data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $product_data['id'] . "</td>";
                    echo "<td>" . $product_data['nome'] . "</td>";
                    echo "<td>" . $product_data['preco'] . "</td>";
                    echo "<td>
                            <button type='button' class='btn-edit product' onclick='window.location.href=\"productsinsert.php?id=$product_data[id]\";'>
                                <ion-icon name='pencil'></ion-icon>
                            </button>
                            <button type='button' class='btn-del' onclick='window.location.href=\"deleteproduct.php?id=$product_data[id]\";'>
                                <ion-icon name='trash'></ion-icon>
                            </button>
                        </td>";
                }
                ?>
            </tbody>
        </table>
    </div>



    <script src="script/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>