<?php 


  
  class HomeController{

       public function index()
       {        
          CategoriaConta::selecionaTodas();        
       }

  }

?>