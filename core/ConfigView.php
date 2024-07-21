<?php
//Parei no Vídeo 71, com 17 minutos e 28 segundos
namespace Core;
//caso ela esteja definida não acessa esse if
if (!defined('C7E3L8K95')) 
{
    //header("Location: /");
    die("Erro: Página não encontrada! ");
}

/**
 * Carrega a página da View
 * @author Alexandre <alexsandergalvez123@gmail.com>
 */
class ConfigView
{
    /**
     * Este é um método construtor
     * Recebe o endereço da View e os dados
     * @param string $nameView edereço da View que deve ser carregada
     * @param array | string | null $data Dados que a View deve receber
     */
    public function __construct(private string $nameView, private array | string | null $data) //este pipe e o nullo esta vindo da pagina contato
    {
        
    }

    /**
     * Carregar a View
     * Verificar se o arquivo existe, e carregar caso exista, não existind para o carregamento
     *
     * @return void
     */
    public function loadView(): void 
    {
        if (file_exists('app/' . $this->nameView . '.php')) 
        {
            include 'app/sts/Views/include/header.php';
            include 'app/sts/Views/include/menu.php'; 
            include 'app/' . $this->nameView . '.php';
            include 'app/sts/Views/include/footer.php';
            
        }
        else
        {
            die("Erro: Por favor tente novamente, caso o problema persista, entre  em contato com o administrador");
        }
    }

}

?>