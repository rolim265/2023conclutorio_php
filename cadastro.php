<?php
include('conexao.php');

$showForm = true;
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"] ?? null;
    $senha = $_POST["senha"] ?? null;
    $confirmar_senha = $_POST["confirmar_senha"] ?? null;

    if (empty($email) || empty($senha) || empty($confirmar_senha)) {
        $message = "<div class='alert alert-error'>Todos os campos são obrigatórios!</div>";
    } elseif ($senha !== $confirmar_senha) {
        $message = "<div class='alert alert-error'>As senhas não coincidem!</div>";
    } else {
        $email = $conn->real_escape_string($email);
        // $senha = $conn->real_escape_string($senha);
        $senha = password_hash($senha, PASSWORD_DEFAULT);
        $sql = "INSERT INTO cadastros (email, senha) VALUES ('$email', '$senha')";

        if ($conn->query($sql) === TRUE) {
            $message = "<div class='alert alert-success'>Cadastro realizado com sucesso! <a href='indox.php'>Voltar ao início</a></div>";
            $showForm = false;
        } else {
            $message = "<div class='alert alert-error'>Erro ao inserir dados: " . $conn->error . "</div>";
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dre.css">
    <title>Cadastro</title>
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

    <?php
    if (!empty($message)) {
        echo $message;
    }

    if ($showForm):
        ?>
        <div class="center-wrapper">
        <div class="form-container">
            <form action="cadastro.php" method="post" class="registration-form">
                <div class="input-group">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="input-group">
                    <label for="senha">Senha:</label>
                    <input maxlength="16" type="password" id="senha" name="senha" required>
                </div>

                <div class="input-group">
                    <label for="confirmar_senha">Confirmar Senha:</label>
                    <input type="password" id="confirmar_senha" name="confirmar_senha" required>
                </div>

                <div class="submit-group">
                    <input type="submit" value="Cadastrar">
                </div>
            </form>
        </div>
        </div>
    <?php endif; ?>
    <footer class="site-footer">
        <p>© 2023 Todos os direitos reservados. ΣΛƧYΛᄃΣƧƧ .</p>
    </footer>

</body>

</html>