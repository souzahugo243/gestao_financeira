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
  }

?>