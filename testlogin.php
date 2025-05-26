
<?php
    session_start();

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password']))
    {
        include_once('config.php');
        $email = $_POST['email'];
        $password = $_POST['password'];

        // print_r('Email'. $email);
        // print_r('Senha'. $password);

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and password = '$password'";
        $result = $conexao->query($sql);
        
        if(mysqli_num_rows($result) <1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['password']);
            header('Location: index.php');
        }
        else 
        {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header('Location: system.php');
            exit();
        }
    }

    else
    {
        header('Location: index.php');
        exit();
    }

?>