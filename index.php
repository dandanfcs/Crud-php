<?php 
include_once "includes/header.php";
?>

  <section> 

     <div class="row">
        <div class="col s12 m4 push-m3">
          <h5 class="light">Cadastro de Clientes</h5>

          <form action="inserir_crud.php" method="POST">
                 <!-- CAMPO NOME -->
              <div class="input-field col s12">
                 <input type="text" name="nome" id="nome"> 
                 <label for="nome">Nome</label> 
              </div> 
                <!-- CAMPO EMAIL-->
               <div class="input-field col s12">
                 <input type="text" name="email" id="email">
                 <label for="email">E-mail</label> 
               </div>
                   <!-- CAMPO IDADE-->
               <div class="input-field col s12">
                 <input type="number" name="idade" id="idade">
                 <label for="idade">Idade</label> 
               </div>
                    <!-- CAMPO CIDADE-->
              <div class="input-field col s12">
                 <input type="text" name="cidade" id="cidade">
                 <label for="cidade">Cidade</label> 
              </div>   
                  <!-- BOTAO DE SUBMIT -->
             <input type="submit" class="btn" value="Registrar"> 
             <a href="lista_de_clientes.php" class="btn blue"> Lista de Clientes</a>
          </form>

       </div>
    
    
      </div>

  </section>





<?php
include_once "includes/footer.php";
?>