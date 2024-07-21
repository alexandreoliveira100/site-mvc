<?php
//caso ela esteja definida não acessa esse if
if (!defined('C7E3L8K95')) 
{
    //header("Location: /");
    die("Erro: Página não encontrada! ");
}
?>
   
     <section class="about">
        
     <div class="max-width">    
     <h2 class="title">Portfólio</h2>
    
<?php
 
//Acessa o IF quando encoontrar algum registro no banco de dados
if (!empty($this->data['about-company'])) 
{
foreach ($this->data['about-company'] as $about_company) 
{
    extract($about_company);   
    ?>
<div class="about-content" style="justify-content: center"> 
    <div class="text"><?php echo $title; ?></div>
    <p><?php echo $description; ?></p>
</div>
<?php
}
}
else{
    echo "<p style='color: #f00;'>Erro: Nenhum registro encontrado</p>";
}
?>
