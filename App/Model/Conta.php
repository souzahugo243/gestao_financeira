<?php 

namespace App\Model;

    class Conta{
     
     private   $idConta, $idCategoriaConta;   
     private   $descricaoConta;   
     private   $data_registro;   
     private   $data_pagamento;

     public function getIdConta(){
         return $this->idConta;
     }
     public function setIdConta($idConta){
         $this->idConta = $idConta;
     }
     
     public function getIdCategoriaConta(){
         return $this->idCategoriaConta;
     }
     public function setIdCategoriaConta($idCategoriaConta){
         $this->idCategoriaConta = $idCategoriaConta;
     }

     public function getDescricaoConta(){
         return $this->descricaoConta;
     } 
     public function setDescricaoConta($descricaoConta){
         $this->descricaoConta = $descricaoConta;
     }

     public function getDataRegistro(){
         return $this->data_registro;
     }
     public function setDataRegistro($data_registro){
         $this->data_registro = $data_registro;
     }
     
     public function getDataPagamento(){
        return $this->data_pagamento;
     }
     public function setDataPagamento($data_pagamento){
         $this->data_pagamento = $data_pagamento;
     }

    }


?>