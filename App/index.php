<?php
use App\Model\Conta;
use App\Model\ContaDAO;

use App\Model\Categoria;
use App\Model\CategoriaDAO;

require_once("../vendor/autoload.php");

  $conta = new Conta();
 
  $conta->setDescricaoConta('Pagamento de Energia mês de Fevereiro.');    
  $data_pagamento = date('dd-mm-YYYY', 27/02/2020);  
  
  $conta->setIdCategoriaConta(6);
  $conta->setDataPagamento($data_pagamento);

  
  $contaDAO = new ContaDAO();

  $contaDAO->create($conta);

  
  
?>