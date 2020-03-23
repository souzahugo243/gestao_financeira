<?php 

 class CategoriaController{
    
  // Renderizando dados na Principal da Categoria  
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
     
     // Chamando Tela para Inserir Categoria
     public function Inserir(){
       $loader   = new \Twig\Loader\FilesystemLoader('View');
       $twig     = new \Twig\Environment($loader);
       $template = $twig->load('operacaocategoria.html');

       $parametros = array();

       $parametros['metodoOperacao'] = 'Insert';

       $conteudo   = $template->render($parametros);
       echo $conteudo;
     }

    //  Inserindo Informações Categoria
     public function Insert(){                           
       try {
        Categoria::inserirCategoria($_POST);

        header('Location: http://localhost/gestao_financeira/App/?pagina=Categoria');
        
       } catch (Exception $E) {
         echo 'Ocorreu o Seguinte Erro: ' . $E->getMessage();         
       }
     }
     
    //  Enviando Dados para o Proximo Formulario de Operacao.
     public function Change($paramId){
       
      $loader   = new \Twig\Loader\FilesystemLoader('View');
      $twig     = new \Twig\Environment($loader);
      $template = $twig->load('operacaocategoria.html');

      $post     = Categoria::selecionaPorID($paramId);
            
      $parametros = array();
      // Action FORM
      $parametros['metodoOperacao']   = 'Update';

      // Enviando e Preparando Dados para Update
      $parametros['idCategoriaConta'] = $post->idCategoriaConta;
      $parametros['descricao']        = $post->descricao;

      $conteudo = $template->render($parametros);
      echo $conteudo;
      
     }
 
     public function Update(){
       try {
       
        Categoria::alterarCategoria($_POST);
 
        header('Location: http://localhost/gestao_financeira/App/?pagina=Categoria');

       } catch (Exception $E) {
         echo 'Ocorreu o Seguinte Erro: ' . $E->getMessage();
       }
     }
 
 
     }

     
?>