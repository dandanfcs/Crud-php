<?php

class db{

    private $host = 'localhost';
    private $usuario ='root';
    private $senha = '';
    private $database = 'crud';

    public function conecta_mysql(){
        
        //Criando conexão com BD 
        $conn =  mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);
       
        //Ajustando os caracteres para utf-8 
        mysqli_set_charset($conn, 'utf-8');

        //Verificando se houve erro na conexão com o BD
        if( mysqli_connect_errno() ){
            echo "Erro ao conectar com o Banco de Dados!".mysqli_connect_error();
        }

        return $conn;
    }
}


?>