<?php
require_once "../inc/conectar.php";

// ********** read ***********
session_start();
$sql = "SELECT * FROM info";
$resultado = mysqli_query($conn, $sql);

// Executa laço para ler todosos registros da tabela selecionada
while ($dados = mysqli_fetch_array($resultado)) {

?>
    <tbody>
        <!-- Preenche a tabela com os dados do registro -->
        <tr>
            <td><?php echo $dados['sobrenome'] ?></td>
            <td><?php echo $dados['genero'] ?></td>
            <td><?php echo $dados['altura'] ?></td>
            <td><?php echo $dados['peso'] ?></td>
            <td><?php echo $dados['atestado'] ?></td>

            <!-- Botão editar -->
            <td><a class="btn btn-secondary btn-sm" href="alterar.php?id=<?php echo $dados['idNome']?>" role="button" style="margin:2%;">Editar</a>
            
            <!-- Botão apagar -->
            <a class="btn btn-secondary btn-sm btn-danger" role="button" href="excluir.php?id=<?php echo $dados['idNome'];?>" style="margin:2%;">Apagar</a></td>
        </tr>


    </tbody>
<?php }?>