<?php require_once "../inc/header.php"; // header 
require_once "../inc/conectar.php";

if (isset($_GET['idNome'])) {
    $id = mysqli_escape_string($conn , $_GET['idNome']) ;
    $sql = "SELECT * FROM info WHERE idNome = '$id' ";
    $resultado = mysqli_query($conn, $sql);
    $dados = mysqli_fetch_array($resultado);
    
}
?>
<body>
    <br>
    <div class="container">
        <h1 style="text-align: center;">Editar Cliente</h1>
        <br>

        <form action="exibir.php" method="post"><!-- formulario -->
            <input type="hidden"  value="<?php echo $id;?>" name="form">

            <div class="form-group">
                <!-- input nome-->
                <label class="col-md-2 control-label" for="sobrenome">Sobrenome<h11>*</h11></label>
                <div class="col-md-8">
                    <input id="sobrenome" name="sobrenome" placeholder="Qual o sobrenome?" class="form-control input-md" required="" type="text" value="<?php echo $dados['sobrenome']?>">
                </div>
            </div>

            <div class="form-group">
                <!-- input sobrenome-->
                <label class="col-md-2 control-label" for="genero"> Genero <h11>*</h11></label>
                <div class="col-md-8">
                    <input id="genero" name="genero" placeholder="Qual o Genero?" class="form-control input-md" required="" type="text" value="<?php echo $dados['genero']?>">
                </div>
            </div>

            <div class="form-group">
                <!-- input email-->
                <label class="col-md-2 control-label" for="altura">Altura<h11>*</h11></label>
                <div class="col-md-5">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input id="altura" name="altura" class="form-control" placeholder="Insira a Altura" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?php echo $dados['altura']?>">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <!-- input email-->
                <label class="col-md-2 control-label" for="peso"> Peso<h11>*</h11></label>
                <div class="col-md-5">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input id="peso" name="peso" class="form-control" placeholder="Insira a Altura" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?php echo $dados['peso']?>">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <!-- input email-->
                <label class="col-md-2 control-label" for="atestado"> Atestado <h11>*</h11></label>
                <div class="col-md-5">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input id="atestado" name="atestado" class="form-control" placeholder="Insira a Altura" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?php echo $dados['atestado']?>">
                    </div>
                </div>
            </div>

</body>

<?php require_once "../inc/footer.php"; ?>