<?php

session_start(); //iniciar a sessão
ob_start(); //caso tenha a necessidade de fazer o redirecionamento, se colocar uma hospedagem compartilhada, o redirecionamento
//pode não funcionar, por isso utilizamos para limpar o buffer de saída, eliminando os dados do buffer de saída, e não apresenta
//erro quando fizer o redirecionamento

//Constante que defini que o usuário está acessando páginas internas através da página "index.php".
define('C7E3L8K95', true);

//Carrega o composer
require './vendor/autoload.php';     
  
//Instancia a classe ConfigController, responsável em tratar a URL

$url = new Core\ConfigController();

//instancia o método para  carregar a página/controller

////O erro foi gerando quando foram excluídas as tabelas do banco :
//#6 C:\xampp\htdocs\php-mvc-site\index.php(22): Core\ConfigController->loadPage()
$url->loadPage();
