<?php 
 
 require_once('lib/database/Conexao.php');

  class CategoriaConta{
       
      public static function selecionaTodas(){
        $conexao = Conexao::getConexao();
        $SQL     = 'SELECT * FROM categoriaconta order by idCategoriaConta';
        $SQL     = $conexao->prepare($SQL);
        $SQL->execute();

        var_dump($SQL->fetchAll());
      }
  }

?>