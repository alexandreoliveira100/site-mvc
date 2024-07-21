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
class StsFooter 
{
    /** @var array|null $data recebe os registros do banco de dados */
    private array|null $data;
    
    /**
     * Criar o array com dados da página home 
     * @return array|null   Retorna informações para página home
     */
    public function index(): array | null 
    {                   
        $viewFooter = new \Sts\Models\helper\StsRead;
        
        $viewFooter->fullRead("SELECT footer_desc, footer_text_link, footer_link FROM 
        sts_footers WHERE id=:id LIMIT :limit", "id=1&limit=1");        
        $this->data = $viewFooter->getResult();  
        
        
        return $this->data;
    }

}

?>