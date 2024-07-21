<?php
//caso ela esteja definida não acessa esse if
if (!defined('C7E3L8K95')){
    //header("Location: /");
    die("Erro: Página não encontrada! ");
}
//echo "<h1>Página incial</h1>";
//var_dump($this->data[0]);

//echo "ID: {$this->data['id']}<br>";

if (!empty($this->data['home']['top'][0])){
    extract($this->data['home']['top'][0]);    
    //este comando é simples do que o comando de cima, porém tem o mesmo resultado do que echo "ID: {$this->data['id']}<br>";
?>

<section class="top" style="background: linear-gradient(to right, var(--main-color) 25%, rgba(255, 255, 255, 0)), url('<?php echo URL; ?>app/sts/assets/images/home_top/<?php echo $image_top; ?>') no-repeat center; background-size: cover; background-attachment: fixed;">
        <div class="max-width">
            <div class="top-content">
                <div class="text-1"><?php echo $title_one_top; ?></div>
                <div class="text-2"><?php echo $title_two_top; ?></div>
                <div class="text-3"><?php echo $title_tree_top; ?></div>
                <a href="<?php echo $link_btn_top ?>"><?php echo $txt_btn_top; ?></a>
            </div>
        </div>
    </section>    
<?php
 
}
else{
    echo "<p style='color: #f00'>Erro: Nenhum conteúdo do topo encontrado</p>";    
}

if (!empty($this->data['home']['serv'][0])){
    extract($this->data['home']['serv'][0]);
    ?>
    
    <section class="services">
        <div class="max-width">
            <h2 class="title"><?php echo $serv_title;?></h2>                   
            <div class="serv-content"> 

                <!-- primeiro card da primeira imagem dos 6 quadrados -->           
                <div class="card">                    
                <i class="fas fa-database" style="font-size:48px;color:green"></i>
                    <div class="box">                                    
                        <div class="text">
                            <?php echo $serv_title_one;?>
                        </div>                                               
                        <p><?php //a variávem vem da tabela sts_homes_services
                            echo $serv_desc_one;                                                    
                            ?>. 
                        </p>
                    </div>
                </div>
                
                <div class="card">
                <i class="fas fa-graduation-cap"  style="font-size:48px;color:green"></i>
                    <div class="box">                        
                        <div class="text"><?php echo $serv_title_two;?></div>
                        <p><?php echo $serv_desc_two;?>. </p>
                    </div>
                </div>

                <div class="card">
                  <i class="fas fa-dog" style="font-size:48px;color:green"></i>
                    <div class="box">                       
                        <div class="text"><?php echo $serv_title_tree;?></div>
                        <p><?php echo $serv_desc_tree;?>. </p>
                    </div>
                </div>

                <!-- 4º card --> 
                <div class="card" style="margin-top: 10px;">
                    <!-- ícone de um martelo --> 
                <i class="fas fa-hammer" style="font-size:48px;color:green"></i>
                    <div class="box">                       
                        <div class="text"><?php echo $serv_title_for;?></div>
                        <p><?php echo $serv_desc_for;?>. </p>
                    </div>
                </div>

                 <!-- 5º card --> 
                <div class="card" style="margin-top: 10px;">
                    <!-- ícone de chat -->                  
                <i class="far fa-comments" style="font-size:48px;color:green"></i>
                    <div class="box">                       
                        <div class="text"><?php echo $serv_title_five;?></div>
                        <p><?php echo $serv_desc_five;?>. </p>
                    </div>
                </div>
                 <!-- 6º card --> 
                <div class="card" style="margin-top: 10px;">
                <i class=" fas fa-church" style="font-size:48px;color:green"></i>
                    <div class="box">
                        <!-- o campo serv_icon_tree da tabela sts_homes_services terá que ser retirado do select-->                         
                        <div class="text"><?php echo $serv_title_six;?></div>
                        <p><?php echo $serv_desc_six;?>. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
}

else{
        echo "<p style='color: #f00'>Erro: Nenhum serviço encontrado</p>";    
} 

?>


