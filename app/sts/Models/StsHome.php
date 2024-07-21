<?php
namespace Sts\Models;
//caso ela esteja definida não acessa esse if
if (!defined('C7E3L8K95')) 
{
    header("Location:/");
    die("Erro: Página não encontrada! ");
}
/**
 * Models responsávael em buscar os dados da página home
 * @author Alexandre <alexsandergalvez123@gmail.com>
 */
class StsHome 
{
    /** @var array|null $data recebe os registros do banco de dados */
    private array|null $data;
    
    /**
     * Criar o array com dados da página home 
     * @return array|null   Retorna informações para página home
     */
    public function index(): array | null 
    {                   
        $viewHomeTop = new \Sts\Models\helper\StsRead;
        //$viewHome->exeRead("sts_homes_tops", "WHERE id =:id LIMIT :limit", "id=1&limit=1");

        //O erro foi gerando quando foram excluídas as tabelas do banco :
        //#2 C:\xampp\htdocs\php-mvc-site\app\sts\Models\StsHome.php(26): Sts\Models\helper\StsRead->fullRead('SELECT id, titl...', 'id=1&limit=1')
        $viewHomeTop->fullRead("SELECT id, title_one_top, title_two_top, title_tree_top, link_btn_top, txt_btn_top, image_top FROM 
        sts_homes_tops WHERE id=:id LIMIT :limit", "id=1&limit=1");        
        $this->data['top']= $viewHomeTop->getResult();  
        
        //
        $viewHomeServ = new \Sts\Models\helper\StsRead;
        //O erro foi gerando quando foram excluídas as tabelas do banco :
        //#2 C:\xampp\htdocs\php-mvc-site\app\sts\Models\StsHome.php(26): Sts\Models\helper\StsRead->fullRead('SELECT id, titl...', 'id=1&limit=1')
        $viewHomeServ->fullRead("SELECT id, serv_title, serv_title_one, serv_desc_one, serv_title_two, serv_desc_two,
         serv_title_tree, serv_desc_tree, serv_title_for, serv_desc_for, serv_title_five, serv_desc_five, serv_title_six, serv_desc_six FROM sts_homes_services WHERE id=:id LIMIT :limit", "id=1&limit=1");        
        $this->data['serv']= $viewHomeServ->getResult();     
        
        //
        $viewHomePrem = new \Sts\Models\helper\StsRead;
        //O erro foi gerando quando foram excluídas as tabelas do banco :
        //#2 C:\xampp\htdocs\php-mvc-site\app\sts\Models\StsHome.php(26): Sts\Models\helper\StsRead->fullRead('SELECT id, titl...', 'id=1&limit=1')
        $viewHomePrem->fullRead("SELECT prem_title, prem_subtitle, prem_desc, prem_btn_text, prem_btn_link, prem_image FROM sts_homes_premiums WHERE id=:id LIMIT :limit", "id=1&limit=1");        
        $this->data['prem']= $viewHomePrem->getResult(); 
        
        return $this->data;
    }

}

?>