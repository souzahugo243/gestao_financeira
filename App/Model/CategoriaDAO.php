<?php 

   namespace App\Model;

use Exception;
use PDO;

class CategoriaDAO{
       public function create(Categoria $categoria){
           try {
                    $SQL = 'INSERT INTO categoriaconta(
                                                      descricao
                                                      )
                                 VALUES               (
                                                      :descricao
                                                      )'; 
        $teste = $categoria->getDescricao();
        $stmt = Conexao::getConn()->prepare($SQL);
        $stmt->bindParam(':descricao', $teste);
        $stmt->execute();
        
        echo 'Categoria Inserida com Sucesso!';

           } catch (Exception $E) {
               echo $E->getMessage(); 
           }
       }
   } 
?>