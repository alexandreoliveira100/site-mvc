<?php
namespace Sts\Models;
//caso ela esteja definida não acessa esse if
if (!defined('C7E3L8K95')) 
{
    header("Location:/");
    die("Erro: Página não encontrada! ");
}
/**
 * Models responsávael em cadastrar no banco de dados
 * @author Alexandre <alexsandergalvez123@gmail.com>
 */
class StsContato 
{
   private array $data;
   public function create(array $data): bool
   {
    $this->data = $data;
    $this->data['created'] = date("Y-m-d H:i:s");
    //var_dump($this->data);

    $createContactMsg = new \Sts\Models\helper\StsCreate();
    $createContactMsg->exeCreate("sts_contacts_msgs", $this->data); 

    
    if ($createContactMsg->getResult()) 
    {
         //var_dump($createContactMsg->getResult());
        $_SESSION['msg'] = "<p class='alert-suceess'>Mensaem enviada com sucesso</p>";
        return true;     
    
    }
    else
    {
        $_SESSION['msg'] = "<p class='alert-danger'>Mensaem não enviada com sucesso</p>";
        return false;
    }
       
    
   }
}

?>