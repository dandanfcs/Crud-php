<?php
require_once('conexao.php');
 $id = $_GET['id'];
 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $idade = $_POST['idade'];
 $cidade = $_POST['cidade'];

 $obj= new db();
 $link = $obj->conecta_mysql();

 

  $sql="UPDATE clientes SET nome='$nome', email='$email', idade='$idade', cidade='$cidade' WHERE id=$id";

   if( $insercao = mysqli_query($link, $sql) ){
       header('Location:lista_de_clientes.php');
   }
   else{
       echo "erroooo!";
   }


?>