<?php 

 class CategoriaController{
    
    public function Index(){
        try {
            $colecaocategorias = Categoria::selecionaTodas();     
  
            $loader = new \Twig\Loader\FilesystemLoader('View');
            $twig = new \Twig\Environment($loader);
            $template = $twig->load('categoria.html');
  
            $parametros = array();
            $parametros['categorias'] = $colecaocategorias;
  
            $conteudo = $template->render($parametros);
            echo $conteudo;         
  
          } catch (Exception  $E) {
            echo 'Ocorreu o erro do tipo: ' . $E->getMessage();
          }
     }
     
     public function Insert(){                           
       try {
        Categoria::inserirCategoria($_POST);

        header('Location: http://localhost/gestao_financeira/App/?pagina=Categoria');
        
       } catch (Exception $E) {
         //Tratando Exceção.
       }
     }
 }

?>