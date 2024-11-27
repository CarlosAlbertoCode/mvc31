<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php 
  include "cabecalho.php";
?>
</head>
<body>
<form name="formCadastrar" action="../controle/estudante_salvar.php" method="post">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Estudante - Cadastrar</h2>
                        <div class="form-group">
                            <label>CPF</label>
                            <input type="text" class="form-control" required="" placeholder="CPF do estudante" name="txtCPF">
                        </div>
                        
                           <div class="form-group">
                            <label>Nome</label>
                            <input type="text" class="form-control" required="" placeholder="Nome completo" name="txtNome">
                        </div>
                        
                            <div class="form-group">
                            <label>Curso</label>
                            <input type="text" class="form-control"  placeholder="Curso" name="txtCurso">
                        </div>

                        
                            <div class="form-group">
                            <label>Idade</label>
                            <input type="text" class="form-control"  placeholder="Idade" name="txtIdade">
                        </div>


                        <div class="form-group" style="margin-top: 5px;">
                            
                            <input type="submit" value="Cadastrar" class="btn btn-primary" name="btCadastrar"  >
                        </div>

                    </div>
                </div>
            </div>
        </form>

    
</body>
</html>