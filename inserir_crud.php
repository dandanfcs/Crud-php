<?php
require_once('conexao.php');

 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $idade = $_POST['idade'];
 $cidade = $_POST['cidade'];

 $obj= new db();
 $link = $obj->conecta_mysql();

 

  $sql="INSERT INTO clientes (nome, email, idade, cidade) VALUES ('$nome','$email', '$idade', '$cidade')";

   if( $insercao = mysqli_query($link, $sql) ){
       echo "inseriu";
   }
   else{
       echo "erroooo!";
   }


?>