    <?php
    //apagar
    
    require_once "../inc/header.php"; // header
    require_once "../inc/conectar.php";

    $id = mysqli_escape_string($conn, $_GET['idNome']);
    $sql = "SELECT * FROM info WHERE idNome = '$id' ";
    $resultado = mysqli_query($conn,$sql);
    $dados = mysqli_fetch_array($resultado);
    ?>  
    <body>
        <br>
        <div class="container">
            <h1 style="text-align: center;"> Você tem certeza que quer apagar?</h1>
            <br>
            <table class="table">
                <thead class="thead-dark">
                    <!-- tabela head-->
                    <tr>
                        <th scope="col">Sobrenome</th>
                        <th scope="col">Genero</th>
                        <th scope="col">Altura</th>
                        <th scope="col">Peso</th>
                        <th scope="col">Atestado</th>
                    </tr>
                </thead>
    <tbody>
    <tr>
    <td><?php echo $dados['sobrenome']; ?></td>
    <td><?php echo $dados['genero'] ?></td>
    <td><?php echo $dados['altura'] ?></td>
    <td><?php echo $dados['peso'] ?></td>
    <td><?php echo $dados['atestado'] ?></td>
    </tr>
    </tbody>
    </table>

    <!-- cadastro botao-->
    <form action="excluir.php" method="post">
    <input type="hidden">
    <button class="btn btn-danger btn-lg active" role="button" aria-pressed="true" type="submit" value="<?php echo $id;?>" name="id">Sim, quero deletar</button>

    <a href="../index.php" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Não , não quero deletar</a>
    </form>
    <?php require_once "../inc/footer.php"; ?>
    <!-- footer-->

