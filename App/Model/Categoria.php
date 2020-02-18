<?php 
  
   namespace App\Model;

   class Categoria{
       private $idCategoriaConta;
       private $descricao;

       public function getidCategoriaConta(){
           return $this->idCategoriaConta;
       }
       public function setIdCategoria($idCategoriaConta){
           $this->idCategoriaConta = $idCategoriaConta;
       }

       public function getDescricao(){
           return $this->descricao;
       }
       public function setDescricao($descricao){
           $this->descricao = $descricao;
       }
   }
 
?>