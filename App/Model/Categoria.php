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
      
     public static function inserirCategoria($dadosPOST){
        
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
  }

?>