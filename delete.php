<?php
require_once('conexao.php');
 $id = $_GET['id'];

 $obj= new db();
 $link = $obj->conecta_mysql();

 

  $sql="DELETE FROM clientes WHERE id='$id'";
  echo $sql;

   if(mysqli_query($link, $sql) ){
       header('Location:lista_de_clientes.php');
   }else{
       echo "Erroooo!";
   } 
   

?>