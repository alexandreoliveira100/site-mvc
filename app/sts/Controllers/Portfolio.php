<?php
namespace Sts\Controllers;

//caso ela esteja definida não acessa esse if
if (!defined('C7E3L8K95')) 
{
    //header("Location: /");
    die("Erro: Página não encontrada! ");
}

class Portfolio
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
 $aboutCompany = new \Sts\Models\StsPortfolio();
 $this->data['about-company'] = $aboutCompany->index();
 
 $footer = new \Sts\Models\StsFooter(); 
 $this->data['footer'] = $footer->index(); 
 
 $loadView = new \Core\ConfigView("sts/Views/portfolio/portfolio", $this->data);
 //$loadView = new \Core\ConfigView("sts/Views/SobreEmpresa/SobreEmpresa", $this->data);
 $loadView->loadView(); 
 

}

}
?>