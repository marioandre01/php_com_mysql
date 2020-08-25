
<?php 
    //acessa o arquivo conexao.php para se conectar ao banco de dados. Faz isso uma vez
    require_once("../../conexao/conexao.php") 
?>

    
<?php
    //passo 3 - Abrir consulta ao banco de dados
    $consulta_categorias = "SELECT nomeproduto";
    $consulta_categorias .= " FROM produtos";
    //$consulta_categorias .= " WHERE categoriaID > 2";

    $categorias = mysqli_query($conecta, $consulta_categorias);

    if(!$categorias){
        die("Falha na consulta ao banco.");
    }


?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        <ul>       
        <?php
            // Passo 4 - Listagem dos dados
            while($registro = mysqli_fetch_assoc($categorias)){
        ?>
                <?php 
                    // ver dados da cnsulta sql
                    //print_r($registro); 
                    //echo "<br>";
                ?>
            
                <li><?php echo $registro["nomeproduto"] ?></li>
                
                
        <?php    
            }
        ?>
        </ul>
        
        
        <?php
            //liberar dados da memoria
            // liberar memoria da consulta mysql no servidor
            mysqli_free_result($categorias);
        ?>
        
    </body>
</html>

<?php
// Fechando a conexão no bando de dados
  mysqli_close($conecta);  
?>