<?php 

  class HomeController{

       public function index()
       {        
        try {         
          $loader = new \Twig\Loader\FilesystemLoader('View');
          $twig = new \Twig\Environment($loader);
          $template = $twig->load('home.html');

          $conteudo = $template->render();
          echo $conteudo;         

        } catch (Exception  $E) {
          echo 'Ocorreu o erro do tipo: ' . $E->getMessage();
        }
       }

  }

?>