<?php
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $url = $_POST['url'];

        $sqlUpdate = "UPDATE usuarios SET name='$name', email='$email', password='$password', url='$url' 
        WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);
    }
    header('Location: system.php');
    exit();
?>