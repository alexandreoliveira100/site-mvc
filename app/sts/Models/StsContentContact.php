<?php
namespace Sts\Models;
//caso ela esteja definida não acessa esse if
if (!defined('C7E3L8K95')) 
{
    header("Location:/");
    die("Erro: Página não encontrada! ");
}
/**
 * Models responsávael em buscar os dados da página contact
 * @author Alexandre <alexsandergalvez123@gmail.com>
 */
class StsContentContact 
{
    /** @var array|null $data recebe os registros do banco de dados */
    private array|null $data;
    
    /** Insancia a classe genérica no helper responsável em buscar os registro no banco de dados
     * Criar o array com dados da página home 
     * @return array|null   Retorna o registro do banco de dados com informações para a página Contato
     */
    public function index(): array | null 
    {                   
        $viewContentContact = new \Sts\Models\helper\StsRead;
        //O erro foi gerando quando foram excluídas as tabelas do banco :
        //#2 C:\xampp\htdocs\php-mvc-site\app\sts\Models\StsHome.php(26): Sts\Models\helper\StsRead->fullRead('SELECT id, titl...', 'id=1&limit=1')
        $viewContentContact->fullRead("SELECT title_contact, desc_contact, icon_company, title_company, desc_company, icon_adress, title_adress, 
        desc_adress, icon_email, title_email, desc_email, title_form FROM 
        sts_contents_contacts WHERE id=:id LIMIT :limit", "id=1&limit=1");        
        $this->data = $viewContentContact->getResult();     
        

        return $this->data;
    }

}

?>