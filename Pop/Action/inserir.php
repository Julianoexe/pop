<?php
  require_once '../inc/conectar.php';

  $nome = ($_POST['nome']);
  $sobrenome = ($_POST['sobrenome']);
  $senha = ($_POST['senha']);
  $dt_nasc = ($_POST['nasc']);
  $cpf = ($_POST['cpf']);
  $genero = ($_POST['genero']);
  $altura = ($_POST['altura']);
  $peso = ($_POST['peso']);
  $atestado = ($_POST['atestado']); 
  $email = ($_POST['email']);
  $telefone = ($_POST['telefone']);
  

    {
        $sql =" INSERT INTO info (sobrenome,genero,altura,peso,atestado)
        VALUES ('$sobrenome','$genero','$altura','$peso','$atestado')";
    }
        if (mysqli_query($conn,$sql)){
            echo "inserido com sucesso";
            header("location: ../confirm.php");
        } else {
            header("location: ../confirm.php");
        }
    
?>