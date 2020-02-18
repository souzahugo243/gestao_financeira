<?php 
namespace App\Model;

use Exception;

class ContaDAO {
     public function create(Conta $conta){
        try {
               
                $SQL = 'INSERT INTO 
                                  conta(
                                        idCategoriaConta, 
                                        descricaoConta,                                         
                                        data_pagamento
                                        )        
                            VALUES      (
                                        ?,
                                        ?,                                        
                                        ?)';

            $stmt = Conexao::getConn()->prepare($SQL);
            $stmt->bindValue(1, $conta->getIdCategoriaConta());
            $stmt->bindValue(2, $conta->getDescricaoConta());       
            $stmt->bindValue(3, $conta->getDataPagamento());
            $stmt->execute(); 
            
            echo 'Conta Inserida com Sucesso!';

        } catch (Exception $E) {
            echo $E->getMessage();
        }

     }
     public function read(){
         
     }
     public function update(Conta $conta){

     }   
     public function delete($id){

     }   
 }

 ?>