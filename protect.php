<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])) {
?>

<style>
    .error-message {
        font-family: Arial, sans-serif;
        color: red;
        border: 1px solid red;
        padding: 10px;
        max-width: 400px;
        margin: 50px auto;
        text-align: center;
        border-radius: 5px;
    }

    .error-message a {
        display: inline-block;
        margin-top: 10px;
        color: #fff;
        background-color: red;
        padding: 5px 15px;
        text-decoration: none;
        border-radius: 3px;
    }

    .error-message a:hover {
        background-color: darkred;
    }
</style>

<div class="error-message">
    Você não pode acessar esta página porque não está logado.
    <p><a href="indox.php">Entrar</a></p>
</div>

<?php
    die();
}
?>

