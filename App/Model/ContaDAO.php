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
                                        :idCategoriaConta,
                                        :descricaoConta,                                        
                                        :data_pagamento)';

            $stmt = Conexao::getConn()->prepare($SQL);
            $stmt->bindParam(':idCategoriaConta', $conta->getIdCategoriaConta());
            $stmt->bindParam(':descricaoConta',   $conta->getDescricaoConta());
            $stmt->bindParam(':data_pagamento',   $conta->getDataPagamento());        
            $stmt->execute(); 
            
            echo 'Conta Inserida com Sucesso!';

        } catch (Exception $E) {
            echo $E->getMessage();
        }

     }
     public function read(){
         
     }
     
     public function update(Conta $conta){
        try {
            $SQL = 'UPDATE conta 
                       SET idCategoriaConta = :idCategoriaConta, 
                           descricaoConta   = :descricaoConta, 
                           data_pagamento   = :data_pagamento 
                    WHERE  idConta          = :idConta ';

            $stmt = Conexao::getConn()->prepare($SQL);          
            $stmt->bindParam(':idCategoriaConta', $conta->getIdCategoriaConta());
            $stmt->bindParam(':descricaoConta',   $conta->getDescricaoConta());
            $stmt->bindParam(':data_pagamento',   $conta->getDataPagamento());
            $stmt->bindParam(':idConta',          $conta->getIdConta());
            $stmt->execute();

            echo 'Conta Atualizada com Sucesso';


        } catch (Exception $E) {
            echo $E->getMessage();
        }
     }  

     public function delete($id){

     }   
 }

 ?>