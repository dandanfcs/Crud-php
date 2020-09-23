<?php 
include_once "includes/header.php";

session_start();
require_once "conexao.php";

 $obj= new db();
 $link= $obj->conecta_mysql();
 // Listando todos os usuários registrados na tabela clientes
 $sql = "SELECT * FROM clientes";
  //Armazendo o retorno da query na variavel resultado
 $resultado = mysqli_query($link, $sql);

?>

     <div class="row"> 
      <div class="col s12 m8 push-m3">
                  
             <h5 class="light">Lista de Clientes</h5>   
            <table class="striped">
            <thead><tr> <!--Abertura da linha do cabeçalho da tabela-->
            <th>Nome</th> <th>Email</th> <th>Idade </th>
            <th>Cidade</th><th>Editar</th> <th>Apagar</th>
            </tr></thead>

                     <!-- Array retornando a linha da tabela clientes-->
            <tbody>  <?php while( $linha = mysqli_fetch_array($resultado) ) { ?>
               <tr>
               <td> <?= $linha['nome']; ?> </td>
                   <td> <?= $linha['email']; ?> </td>
                   <td> <?= $linha['idade']; ?> </td>
                   <td> <?= $linha['cidade']; ?> </td>
                      
                      <td><a href="edit.php?id=<?= $linha['id'];?>" class="btn-floating orange">
                         <i class="material-icons">edit</i></a> <!--Icone de Editar-->
                      </td>
                      <td><a href="delete.php?id=<?= $linha['id'];?>" class="btn-floating red"> 
                           <i class="material-icons">delete</i></a> <!--Icone de Apagar-->
                      </td>
                </tr>  <!--Fim da linha da tabela-->
                      <?php  }?>
            </tbody>
         </table> <br> <br>
                <a class="btn" href="index.php">Cadastrar Cliente</a> 
      </div>
  
  </div>


<?php
include_once "includes/footer.php";
?>