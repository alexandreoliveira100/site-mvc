<?php
namespace Core;

//caso ela esteja definida não acessa esse if
if (!defined('C7E3L8K95')) 
{
    //header("Location: /");
    die("Erro: Página não encontrada! ");
}
/**
 * Esta classe recebe a URL e manipula a mesma
 * Carrega a CONTROLLLER
 * @author Alexandre <alexsandergalvez123@gmail.com>
 */
class ConfigController extends Config
{
       
    /** @var string recebe a URL do .htaccess */
    private string $url;
    /** @var array recebe a URL covertida para array */
    private array $urlArray;
    private string $urlController;
    //private string $urlParameter;
    private string $urlSlugController; 
    private array $format; 
    /** @var string $class recebe a class
     */
    private string $classLoad;
    /**
     * Recebe a URL do .htaccess
     * valida a URL
     */
    public function __construct()
    {        
        $this->config();
        if (!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))) 
        {
            $this->url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);         
            $this->clearUrl();           

            //a barra / indica qual o caractere que deve separar ou seja por ele mesmo, mas poderia ser colocado outro no lugar do barra
            $this->urlArray = explode("/", $this->url);
            
            if (isset($this->urlArray[0])) {                
                $this->urlController = $this->slugController($this->urlArray[0]);
            }
            else
            {
                 $this->urlController =  $this->slugController("Home");
            }
        }
        else
        {           
            $this->urlController = $this->slugController("Home");
        }           
    }

    /**
     * Método privado não pode ser instanciado fora da classe
     * Limpara a URL, eliminando as TAGS, o espaços em branco, retirando a barra no final da URL 
     * e retira os caracteres especiais
     * @return void
     */
    private function clearUrl(): void
    {
        //elimina as tags
        $this->url = strip_tags($this->url);

        //elimina os espaços em branco
        $this->url = trim($this->url);

        //elimina a barra no final da url
        $this->url = rtrim($this->url, "/");

        //elimina os caracteres
        $this->format['a'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]?;:.,\\\'<>°ºª ';
        $this->format['b'] = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr-------------------------------------------------------------------------------------------------';
        
        //var_dump($this->format);
        $this->url = strtr(utf8_decode($this->url), utf8_decode($this->format['a']), $this->format['b']);
    }

    /**
     * Converte o valor obtido da URL "sobre-empresa" e converte no formato da classe "SobreEmpresa".
     * Utiliza as funções para converter tudo para minúsculo, converte o traço para espaço, converte cada letra
     * da primeira palavra para maiúsculo e retira os espaços em branco
     * @param string $slugController nome da classe
     * @return string Retorna a Controller "sobre-empresa" convertida para o nome da classe "SobreEmpresa"
     */
    private function slugController($slugController): string 
    {
        //converte para minúsculo
        $this->urlSlugController = strtolower($slugController);

        //converter o traco para espaco em branco
        $this->urlSlugController = str_replace("-", " ", $this->urlSlugController);
        
        //Converter a primeira letra de cada palavra em maiúscula
        $this->urlSlugController = ucwords($this->urlSlugController);

        //Retirar espaco em branco
        $this->urlSlugController = str_replace(" ", "", $this->urlSlugController);

        return $this->urlSlugController;
    }
    /**
     * Carrega as Controllers
     * Instancia as classes da Controller e carrega o metodo index
     * @return void
     */
    public function loadPage(): void 
    {       
    
    $this->classLoad = "\\Sts\\Controllers\\".$this->urlController;

    if (class_exists($this->classLoad)) 
    {
        //O erro foi gerando quando foram excluídas as tabelas do banco :
        //#5 C:\xampp\htdocs\php-mvc-site\core\ConfigController.php(109): Core\ConfigController->loadClass()
        $this->loadClass();
    }
    else
    {
        $this->urlController = $this->slugController(CONTROLLERERRO); 
        $this->loadPage();
    }    

}
/**
 * Verificar se o método existe, existindo o método carregue a página;
 *não existindo o metodo, para o carregamento e apresent a mensagem de erro
 * @return void
 */
private function loadClass(): void 
{
    $classPage = new $this->classLoad();       
    if (method_exists($classPage, "index")) 
    {
        //O erro foi gerando quando foram excluídas as tabelas do banco :
        //#4 C:\xampp\htdocs\php-mvc-site\core\ConfigController.php(129): Sts\Controllers\Home->index() 
        $classPage->index();    
    }
    else
    {
        die("Erro: Por favor tente novamente, caso o problema persista, entre  em contato com o administrador". EMAILADM); 
    }
    
}
   
}


