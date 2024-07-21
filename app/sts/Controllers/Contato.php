<?php
namespace Sts\Controllers;
//caso ela esteja definida não acessa esse if
if (!defined('C7E3L8K95')) 
{
    //header("Location: /");
    die("Erro: Página não encontrada! ");
}
/**
 * Controller da página Contato
 * http://localhost/php-mvc-site/app/sts/Controllers/Contato.php
 */
class Contato
{
/** @var array |string|null $dados recebe os dados que devem ser enviados para a View */
 private array | string | null $data = null; 

 /** @var array|null $data recebe os dados que devem ser enviados para a View*/   
 private array|string|null $dataForm;

/**
 * Instancia a classe responsável em carregar a View
 *
 * @return void
 */
public function index()
{
 //$connection = new \Sts\Models\helper\StsConn();

    
 $this->dataForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
 if (!empty($this->dataForm['AddContMsg']))
    {
        //
        unset($this->dataForm['AddContMsg']);  
        //
        $createContactMsg = new \Sts\Models\StsContato();
        if($createContactMsg->create($this->dataForm))
        {
            //echo "Cadastrado!<br>";           
        }
        else
        {
            //n controller ou na model nunca dê echo, para imprimir, sempre imprimir na view
            echo "<br>";
            //echo "Não cadastrado!<br>";            
            $this->data['form'] = $this->dataForm; //esse dataFormserá enviado para a view, e o configView é encarregado de carregar a view

        }
    }
    $contentContact = new \Sts\Models\StsContentContact(); 
    $this->data['content'] = $contentContact->index(); 
   
    $footer = new \Sts\Models\StsFooter(); 
    $this->data['footer'] = $footer->index(); 

    $loadView = new \Core\ConfigView("sts/Views/contato/contato", $this->data);
    $loadView->loadView();
}
}
?> 