<?php 
 
 require_once('lib/database/Conexao.php');

  class Categoria{
      
    public static function selecionaTodas(){
           
        $conexao = Conexao::getConexao();
        
        $SQL = 'SELECT * FROM categoriaconta';

        $SQL = $conexao->prepare($SQL);
        $SQL->execute();

        $resultado = array();
        while($row = $SQL->fetchObject('Categoria')){
          $resultado[] = $row;
        };
        
        if(!$resultado){
          throw new Exception("Não foi localizado Nenhum Registro para Categoria");          
        }

        return $resultado;
        
      }

      public static function selecionaPorID($idCategoriaConta){
        $conexao = Conexao::getConexao();

        $SQL = 'SELECT idCategoriaConta
                ,      descricao 
                  FROM categoriaconta
                 WHERE idCategoriaConta = :idCategoriaConta ';
        
        $SQL = $conexao->prepare($SQL);
        $SQL->bindParam(':idCategoriaConta', $idCategoriaConta, PDO::PARAM_INT);
        $SQL->execute();

        $resultado = $SQL->fetchObject('Categoria');

        if (!$resultado){
          throw new Exception('Não foi encontrado nenhuma categoria correspondente!');          
        }else{
          
          while($row = $SQL->fetchObject('Categoria')){
              $resultado[] = $row;
              
          }
        }

        return $resultado;

      }
      
     public static function inserirCategoria($dadosPOST){
        
       if (empty($dadosPOST['descricaoCategoria'])){
         
         throw new Exception('Preencha todos os campos');
         return false;
         
       }

        $conexao = Conexao::getConexao();
        
        $SQL = 'INSERT INTO 
             categoriaConta(
                            descricao
                           )
                     VALUES(
                            :descricao
                            ) ';
        $SQL = $conexao->prepare($SQL);
        $SQL->bindParam(':descricao', $dadosPOST['descricaoCategoria'], PDO::PARAM_STR);
        $resultado = $SQL->execute();
        
        if ($resultado == 0){
          throw new Exception("Não foi possivel inserir Categoria, verifique!");
          return false;          
        }

        return true;
     } 

     public static function alterarCategoria($dadosPOST){
       $conexao = Conexao::getConexao();
                     
       $SQL = 'UPDATE categoriaconta 
                  SET descricao = :descricao 
                WHERE idCategoriaConta = :idCategoria ';
       
       $SQL = $conexao->prepare($SQL);
       $SQL->bindParam(':descricao',   $dadosPOST['descricaoCategoria'], PDO::PARAM_STR);
       $SQL->bindParam(':idCategoria', $dadosPOST['codigoCategoria'],    PDO::PARAM_INT);
       $resultado = $SQL->execute();
       
       if ($resultado == 0){
          throw new Exception('Não foi Possível Alterar a Categoria, Ocorreu algum erro, verifique');                   
       }
       else{
         return true;
       }
     }
  }

?>