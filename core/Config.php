<?php
//Parei no vídeo 69, com 5:15 minutos
namespace Core;
//caso ela esteja definida não acessa esse if
if (!defined('C7E3L8K95')) 
{
    //header("Location: /");
    die("Erro: Página não encontrada! ");
}
//esta classe não pode ser instanciada, somente pode ser herdada
abstract class Config
{

protected function config(): void 
{
    //URL do projeto
    define('URL', 'https://localhost/php-mvc-site/');
    define('URLADB', 'https://localhost/php-mvc-site/adm/');

    define('CONTROLLER', 'Home');
    define('CONTROLLERERRO', 'Erro');

    //Credenciais do banco de dados
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('DBNAME', 'bd_php-mvc-site');
    define('PORT', 3306);

    define('EMAILADM', 'alexsandergalvez123@gmail.com');
          
    

}


}

?>