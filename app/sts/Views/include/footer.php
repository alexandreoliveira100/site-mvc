<?php
//caso ela esteja definida não acessa esse if
if (!defined('C7E3L8K95')) 
{
    //header("Location: /");
    die("Erro: Página não encontrada! ");
}

if (!empty($this->data['footer'][0])){
    //ler o registro da página home retornando do banco de dados
    //A função extract é utilizada para extrair o array e imprimir através do nome da chave
    extract($this->data['footer'][0]);  
    ?>
    
    <footer>
            <?php echo $footer_desc; ?> <?php echo $footer_link; ?><?php echo $footer_text_link; ?>
        </footer>
    <?php
    }
        else{
        echo "<p style='color: #f00'>Erro: Nenhum rodapé encontrado</p>";    
    }
    ?>

<script src="<?php echo URL; ?>app/sts/assets/js/custom.js"></script>
</body>
</html>