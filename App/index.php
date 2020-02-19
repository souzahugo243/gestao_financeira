<?php
use App\Model\Conta;
use App\Model\ContaDAO;

use App\Model\Categoria;
use App\Model\CategoriaDAO;

require_once("../vendor/autoload.php");

$conta = new Conta();
//$conta->setIdCategoriaConta(1);
$conta->setIdConta(2);
$conta->setDescricaoConta('Pagamento de Gás');
//$conta->setDataPagamento('20/02/2020');

$contaDAO = new ContaDAO();
//$contaDAO->create($conta);

$contaDAO->update($conta);  
  
?>