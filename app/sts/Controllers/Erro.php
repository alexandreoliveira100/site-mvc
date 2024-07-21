<?php
namespace Sts\Controllers;
//caso ela esteja definida não acessa esse if
if (!defined('C7E3L8K95')) 
{
    //header("Location: /");
    die("Erro: Página não encontrada! ");
}
class Erro
{
/** @var array |string|null $dados recebe os dados que devem ser enviados para a View */
private array | string | null $data; 
/**
 * Instancia a classe responsável em carregar a View
 *
 * @return void
 */
public function index()
{
 
 $this->data = null; 
 $loadView = new \Core\ConfigView("sts/Views/erro/erro", $this->data);
 $loadView->loadView(); 
}
}
?>