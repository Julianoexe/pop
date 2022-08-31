<?php
    require 'inc/conectar.php';
    require_once 'inc/header.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrícula Academia</title>
</head>
<body>
<form method="post" action="Action/inserir.php" align="center" name="form">
        <fieldset>
            <legend>Informações Pessoais</legend>

            <p>
                Nome:
                <input type="text" id="nome" name="nome" size="50" maxlength="50"   required placeholder="informe seu nome completo!">
            </p>

            <p>
                Sobrenome :
                <input type="text" id="sobrenome" name="sobrenome" placeholder="insira o seu Sobrenome" size="50" maxlength="60" required >
            </p>

            <p>
                Data de Nascimento :
                <input type="date" id="nasc" name="nasc" required >
            </p>

            <p>
                CPF :
                <input type="tel" id="cpf" name="cpf" placeholder="insira seu CPF!" size="50" maxlength="14" required>
            </p>

            <p>
                Senha :
                <input type="password" id="senha" name="senha" placeholder="insira sua senha" size="50" maxlength="45" required>
            </p>

            <p>
                Genero :
                <input type="radio" id="genero" name="genero" value="Masculino"/> Masculino 
                <input type="radio" id="genero" name="genero" value="Feminino"/> Feminino 
            </p>

            <p>
                Altura :
                <input type="text" id="altura" name="altura" placeholder="insira a sua Altura" size="50" maxlength="3" required>
            </p>

            <p>
                Peso :
                <input type="text" id="peso" name="peso" placeholder="insira o seu Peso" size="50" maxlength="3" required>
            </p>

            <p>
                Atestado :
                <input type="text" id="Atestado" name="atestado" placeholder= "Tem Atestado?" size="50" maxlength="3" required>
            </p>

            <p>
                E-mail:
                <input type="email" id="email" name="email" placeholder="insira um e-mail válido!" size="50" maxlength="30" required>
            </p>

            <p>
                Telefone :
                <input type="tel" id="telefone" name="telefone" placeholder="insira um número válido!" size="50" maxlength="20" required>
            </p>

        </fieldset>
        
        <fieldset>
            <legend>Opções</legend>
            <input type="submit" name="enviar" value="Enviar">  
            <input type="reset" name="limpar" value="Limpar">
        </fieldset>
    </form>
    </fieldset>
<?php 
    require_once 'inc/footer.php';    
?>
</body>
</html>