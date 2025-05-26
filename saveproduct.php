<?php
    include_once('config.php');
    if(isset($_POST['submit']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        
        $result = mysqli_query($conexao, "UPDATE produtos SET nome='$nome', preco='$preco' WHERE id='$id'");
    }
    if(isset($_POST['insert']))
    {
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        
        $result = mysqli_query($conexao, "INSERT INTO produtos(nome, preco) VALUES ('$nome','$preco')");
    }

    header('Location: products.php');
    exit();
?>