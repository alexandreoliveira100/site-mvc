    <?php

//caso ela esteja definida não acessa esse if
if (!defined('C7E3L8K95')) 
{
    //header("Location: /");
    die("Erro: Página não encontrada! ");
}

if (isset($this->data['form']))  
{
 $valueForm = $this->data['form']; 
 extract($valueForm);
}

if (!empty($this->data['content'][0])){
    //ler o registro da página home retornando do banco de dados
    //A função extract é utilizada para extrair o array e imprimir através do nome da chave
    extract($this->data['content'][0]);  
    
    }else{
        echo "<p style='color: #f00'>Erro: Nenhum informação de contato encontrado</p>";    
    }
?>

<section class="contact">
        <div class="max-width">
            <h2 class="title">
            <?php if(isset($title_contact)){
                echo $title_contact;
            }             
            ?>    
            </h2>
            <div class="contact-content">
                <div class="column left">
                                 
                    <div class="icons"> <!--Parei por aqui -->
                        <div class="row" style="padding-left: 6px;"><!--Parei por aqui -->                       
                         <!-- aqui abaixo é o código do ícone do WHATSAP-->
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="green" class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                        </svg> 
                        <!--Parei por aqui -->
                            </i><!--Parei por aqui -->
                            <div class="info" style="margin: 20px"><!--Parei por aqui -->
                                <div class="head"><!--Parei por aqui -->   
                                </div>
                                <div class="sub-title">
                                <?php if(isset($desc_contact)){
                                echo $desc_contact;
                                }?>  
                                </div>
                            </div>
                        </div>
                         <div class="row"  style="margin: 5px">
                            <i class="fa-solid fa-location-dot" style="color: red"></i>
                            <div class="info">
                                <div class="head" >
                                    Enderço
                                </div>
                                <div class="sub-title">
                                    Rua Dalton Arruda
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fa-solid fa-envelope"></i>
                            <div class="info">
                                <div class="head">
                                    E-mail
                                </div>
                                <div class="sub-title">
                                   alexsandergalvez123@gmail.com 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column right">
                    <div class="text">
                        Mensagem de Contato
                    </div>
                    <form action="" method="post"><!--Locao de inicínio do formulario-->
                        <?php 
                        if (isset($_SESSION['msg'])) 
                        { echo $_SESSION['msg'];
                        unset($_SESSION['msg']); //não deve imprimir novamente, então destrua essa variável global
                        }?>    
                    <div class="fields">
                            <div class="field name">
                            <?php //O código verifica se a variável $value_name tem valor 
                             $value_name = "";
                            if(isset($name)){
                            $value_name = $name;
                            }?>
                                <input name="name" type="text" id="name" placeholder="Nome completo"  value="<?php echo $value_name;?>" required>
                            </div>
                            <div class="field email">
                            <?php 
                            $value_email = "";
                            if(isset($email)){
                            $value_email = $email;         
                            }?>
                                <input type="email" name="email" id="email" placeholder="Seu melhor e-mail" value="<?php echo $value_email; ?>" required>
                            </div>
                        </div>

                        <div class="field">
                             
                        <?php 
                        $value_subject = "";
                        if(isset($subject)){
                        $value_subject = $subject;         
                            }
                        ?>
                            <input  name="subject" type="text" id="subject" placeholder="Assunto da mensagem" value="<?php echo $value_subject; ?>" required>
                        </div>

                        <div class="field textarea">
                        <?php
                        $value_content = "";
                        if(isset($content)){
                        $value_content = $content;
                        }?>
                            <textarea textarea name="content" rows="6" cols="50" placeholder="Conteudo da mensagem" required><?php echo $value_content; ?></textarea>
                            
                        </div>

                        <div class="button-area">
                            <button  name="AddContMsg" value="Enviar" type="submit">Enviar</button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php 

