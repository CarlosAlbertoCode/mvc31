<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php
    include "cabecalho.php";
    ?>
</head>

<body>
    
    <form name="formOpcoes" action="" method="post">
        <div class="container-fluid">
            <div class="row" style="margin-top: 5px;">

                <div class="col-sm-2">
                    <h1>Opções:</h1>
                </div>
                <div class="col-sm-2">
                    <input type="submit" formaction="estudante_cadastrar.php" value="Cadastrar Estudante" class="btn btn-primary" name="btCadastrar">
                </div>

                <div class="col-sm-2">
                    <input type="submit" formaction="estudante_listar.php" value="Listar Estudantes" class="btn btn-primary" name="btListar">
                </div>
            </div>

        </div>
        

            

    </form>


</body>

</html>