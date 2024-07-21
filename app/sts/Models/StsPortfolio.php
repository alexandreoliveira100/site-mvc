<?php
namespace Sts\Models;
//caso ela esteja definida não acessa esse if
if (!defined('C7E3L8K95')) 
{
    header("Location:/");
    die("Erro: Página não encontrada! ");
}
/**Istancia a classe genérica no helper responsável em buscar os registros no banco de dados.
 * Possui a query responsável em buscar os registros no banco de dados
 * Models responsávael em buscar os dados da página SobreEmpresa
 * @author Alexandre <alexsandergalvez123@gmail.com>
 */
class StsPortfolio 
{
    /** @var array|null   $data recebe os registros do banco de dados */
    private array|null $data;   
    /**
     * Criar o array com dados da página home 
     * @return array Retorna informações para página home
     */
    public function index(): array|null  
    {        
               
        $viewSobreEmpresa = new \Sts\Models\helper\StsRead;        
        $viewSobreEmpresa->fullRead("SELECT id, title, description FROM 
        sts_abouts_companies WHERE sts_situation_id=:sts_situation_id ORDER BY id DESC LIMIT :limit", "sts_situation_id=1&limit=10");        
        $this->data = $viewSobreEmpresa->getResult();   
               
        return $this->data;
        
    }

}

?>