<?php
include_once "includes/header.php";
 require_once('conexao.php');
 $id = $_GET['id'];

 $obj= new db();
 $link = $obj->conecta_mysql();

 $sql = "SELECT * FROM clientes WHERE id = '$id' ";

 $resultado = mysqli_query($link, $sql);
 $linha = mysqli_fetch_array($resultado);

 //  $linha['nome'];
?>

<section> 

<div class="row">
   <div class="col s12 m6 push-m3">
     <h5 class="light">Cadastro de Clientes</h5>

     <form action="edit_user.php?id=<?= $linha['id'];?>" method="POST" class="form">
            <!-- CAMPO NOME -->
         <div class="input-field col s12">
            <input type="text" name="nome" id="nome" value="<?=$linha['nome'];?>"  > 
            <label for="nome">Nome</label> 
         </div> 
           <!-- CAMPO EMAIL-->
          <div class="input-field col s12">
            <input type="text" name="email" id="email" value="<?=$linha['email'];?>">
            <label for="email">E-mail</label> 
          </div>
              <!-- CAMPO IDADE-->
          <div class="input-field col s12">
            <input type="number" name="idade" id="idade" value="<?=$linha['idade'];?>">
            <label for="idade">Idade</label> 
          </div>
               <!-- CAMPO CIDADE-->
         <div class="input-field col s12">
            <input type="text" name="cidade" id="cidade" value="<?=$linha['cidade'];?>">
            <label for="cidade">Cidade</label> 
         </div>   
             <!-- BOTAO DE SUBMIT -->
        <input type="submit" class="btn" value="Editar"> 
         <a href="lista_de_clientes.php" class="btn-floating blue">
          <i class="material-icons blue  push-m3"> replay</i>
         </a>
       
     </form>

  </div>


 </div>

</section>



<?php include_once "includes/footer.php"; ?>

