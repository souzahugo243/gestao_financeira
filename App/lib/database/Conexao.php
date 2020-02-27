<?php
   
   abstract class Conexao{
      private static $conexao;

      public static function getConexao(){
          if(self::$conexao == null){
          self::$conexao = new PDO('mysql: host=localhost; dbname=gestao_financeira;', 'root', '');
        }
          return self::$conexao;
      }
   }

?>