<?php
namespace Sts\Controllers;
//caso ela esteja definida não acessa esse if
if (!defined('C7E3L8K95')) 
{
    //header("Location: /");
    die("Erro: Página não encontrada! ");
}
/**
 * Controller da página Home
 * @author Alexandre <alexsandergalvez123@gmail.com>
 */
class Home 
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
 //$connection = new \Sts\Models\helper\StsConn(); a classe abstrata não pode ser instanciada
 $home = new \Sts\Models\StsHome(); 

 //O erro foi gerando quando foram excluídas as tabelas do banco :
 //#3 C:\xampp\htdocs\php-mvc-site\app\sts\Controllers\Home.php(26): Sts\Models\StsHome->index() 
 $this->data['home'] = $home->index(); 

 $footer = new \Sts\Models\StsFooter(); 
 $this->data['footer'] = $footer->index(); 

 //var_dump($this->data);

 //var_dump($this->data); 
 $loadView = new \Core\ConfigView("sts/Views/home/home", $this->data);
 $loadView->loadView();
}
}
?>