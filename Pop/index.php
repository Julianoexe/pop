<?php
    include 'inc/conectar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
</head>
<body>
    <div class="container">
        <h1> Bem Vindo a Pop Academy!</h1>

        <a href="form.php">
            <button> Inscreva-se para Obter o Material Completo!</button>
        </a>

    </div>

    <?php
        require_once 'inc/footer.php';
    ?>
</body>
</html>