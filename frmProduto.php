<?php
    include_once 'dao/clsConexao.php';
    include_once 'dao/clsProdutoDAO.php';
    include_once 'model/clsProduto.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de Compras - Cadastrar Produto</title>
    </head>
    <body>
        <?php
            require_once 'menu.php';
        ?>
        
         <h1 align="center">Cadastrar Produto</h1>
        
        <br><br><br>
        
        <form action="controller/salvarProduto.php?inserir" method="POST" 
              enctype="multipart/form-data">
            <label>Nome: </label>
            <input type="text" name="txtNome" required maxlength="100" /> <br><br>
            <label>Preço: </label>
            <input type="text" name="txtPreco" maxlength="30" /> <br><br>
            <label>Quantidade: </label>
            <input type="text" name="txtQuantidade" required /> <br><br>
            
            <br><br>
 
            <input type="submit" value="Salvar" />
            <input type="reset" value="Limpar" />
            
            
        </form>
        
        
    </body>
</html>


