<?php

include('protect.php');

?>

<?php
$host = 'localhost';
$db = 'logins_feira';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int) $e->getCode());
}

$query = "SELECT nome, lugar, img, decricao FROM meus_locais"; // Adicionando a coluna "descricao"
$locais = $pdo->query($query)->fetchAll();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Locais</title>
    <link rel="stylesheet" href="css/stre.css">
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

    <div class="alert-box">
    <p><strong>Aviso Importante:</strong></p>
    <p>Gostaria de informar a todos interessados que, recentemente, buscamos informações sobre um mapa de acessibilidade em Ribeirão Pires. Após consulta junto à Prefeitura do município, fomos informados de que, no momento, eles não dispõem de nenhum documento ou material do tipo. Desta forma, ressaltamos a importância da verificação direta em locais de interesse para aqueles que necessitam de recursos ou informações sobre acessibilidade, e continuamos na esperança de que futuramente haja iniciativas que visem a criação de materiais e recursos que auxiliem a população neste aspecto tão fundamental.</p>
    </div>


    <div class="container">
    <?php foreach ($locais as $local): ?>
        <div class="item">
            <h3>
                <?= $local['nome'] ?>
            </h3>
            <p>
                <?= $local['decricao'] ?> <!-- Adicionando a descrição aqui -->
            </p>
            <img src="<?= $local['img'] ?>" alt="<?= $local['nome'] ?>">
            <a target="_blank" href="<?= $local['lugar'] ?>" class="btn">Visitar</a> 
        </div>
    <?php endforeach; ?>
</div>
    <a href="logout.php">Sair</a>
    <footer class="site-footer">
        <p>© 2023 Todos os direitos reservados. ΣΛƧYΛᄃΣƧƧ .</p>
    </footer>
</body>

</html>