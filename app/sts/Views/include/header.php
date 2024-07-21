<?php
//caso ela esteja definida não acessa esse if
if (!defined('C7E3L8K95')) 
{
    //header("Location: /");
    die("Erro: Página não encontrada! ");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Aceitar caracteres especiais-->
    <meta charset="UTF-8">
    <!--Este código identifica o tamanho da tela do usuário: -->  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="shortcut icon" href="<?php echo URL; ?>app/sts/assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="<?php echo URL; ?>app/sts/assets/css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
       <!-- arquivos do bootstrap: -->    
    
    <!-- Coloca o título na aba do navegador -->
    <title>Página Alexandre</title>
</head>
<body>