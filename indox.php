<?php
include('conexao1.php');

if (isset($_POST['email']) && isset($_POST['senha'])) {

    if (strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if (strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM cadastros WHERE email = '$email' LIMIT 1";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $usuario = $sql_query->fetch_assoc();

        if ($usuario && password_verify($senha, $usuario['senha'])) {

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");

        } // else {
        //     echo "<div class='error-message'>Falha ao logar! E-mail ou senha incorretos</div>";
        // }

    }

}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>

</head>

<body>
    <header class="fixo">
        <nav class="navbar">
            <img src="img/log.png" alt="Logo da Empresa" class="navbar-logo">

            <ul class="navbar-menu">
                <li><a href="index.html">Início</a></li>
                <li><a href="sobre.html">Sobre</a></li>
                <li><a href="servicos.html">Serviços</a></li>
                <li><a href="Contato.html">Contato</a></li>
            </ul>
        </nav>
    </header>
    <div class="center-wrapper">
        <header class="fixo">
            <!-- ... (código existente) ... -->

            <div class="error-message-container">
                <?php
                if (isset($_POST['email']) && isset($_POST['senha']) && (!$usuario || !password_verify($senha, $usuario['senha']))) {
                    echo "<div class='error-message'>Falha ao logar! E-mail ou senha incorretos</div>";
                }
                ?>
            </div>
        </header>

        <div class="login-container">
            <h1 class="login-title">Acesse sua conta</h1>
            <form action="" method="POST" class="login-form" method="POST">
                <p class="input-field">
                    <label for="email">E-mail</label>
                    <input id="email" type="email" name="email">
                </p>
                <p class="input-field">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha">
                </p>
                <p class="input-field">
                    <button class="login-button" type="submit">Entrar</button>
                </p>
            </form>
        </div>
    </div>
    <footer class="site-footer">
        <p>© 2023 Todos os direitos reservados. ΣΛƧYΛᄃΣƧƧ .</p>
    </footer>
</body>

</html>