<?php
require_once("Core/Core.php");
require_once("Controller/HomeController.php");
require_once("Controller/ErroController.php");

require_once("Model/Categoria.php");

require_once("../vendor/autoload.php");

$template = file_get_contents('Template/estrutura.html');

ob_start();
$core = new Core;

$core->start($_GET);
$saida = ob_get_contents();

ob_end_clean();

$template_ok = str_replace('{{area_dinamica}}', $saida, $template);
echo $template_ok;

  
?>