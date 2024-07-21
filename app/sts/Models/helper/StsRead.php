<?php

namespace Sts\Models\helper;
if (!defined('C7E3L8K95')) 
{
    header("Location:/");
    die("Erro: Página não encontrada! ");
}

use PDO;

/**
 * helper responsávael em buscar os registros no banco de dados
 * @author Alexandre <alexsandergalvez123@gmail.com>
 */
 class StsRead extends StsConn
{
    private string $select;
    private array $values = [];
    private array | null $result = [];
    private object $query;
    private object $conn;

function getResult(): array|null 
{
    return $this->result;

}

public function exeRead(string $table, string|null $terms = null, string|null $parseString = null)  
{    
    if (!empty($parseString)) 
    {
    parse_str($parseString, $this->values);
    var_dump($this->values);  
    }
    $this->select = "SELECT * FROM {$table} {$terms}";    
    $this->exeInstruction();
}

public function fullRead(string $query, string|null $parseString = null)
{
    $this->select = $query;    
    if (!empty($parseString)) 
    {
    parse_str($parseString, $this->values);    
    echo "<br>";
    echo "<br>";
    
}
    //O erro foi gerando quando foram excluídas as tabelas do banco
    //#1 C:\xampp\htdocs\php-mvc-site\app\sts\Models\helper\StsRead.php(65): Sts\Models\helper\StsRead->exeInstruction() 
    $this->exeInstruction();
}

private function exeInstruction()
{
    $this->connection();    
    try 
    {
        $this->exeParameter();    
        //O erro foi gerando quando foram excluídas as tabelas do banco  
        //Erro: #0 C:\xampp\htdocs\php-mvc-site\app\sts\Models\helper\StsRead.php(59): PDOStatement->execute()   
        //Stack trace: #0 C:\xampp\htdocs\php-mvc-site\app\sts\Models\helper\StsRead.php(59): PDOStatement->execute()                           
        $this->query->execute(); //#7 {main} thrown in C:\xampp\htdocs\php-mvc-site\app\sts\Models\helper\StsRead.php on line 65        
        $this->result = $this->query->fetchAll();
    } 
    catch (PDOException $err) 
    {
        
        $this->result = null;
    }
}

private function connection()
{
    $this->conn = $this->connectDb();
    $this->query = $this->conn->prepare($this->select); 
    //Este método serve para definir os modos como os dados serão obetidos do banco de dados
    $this->query->setFetchMode(PDO::FETCH_ASSOC); //Aqui é um array associativo
}

private function exeParameter()
{
if ($this->values) 
{    
    foreach ($this->values as $link => $value) {        
        if (($link == 'limit') or ($link == 'offset') or ($link == 'id')) 
        {
            $value = (int) $value;
        }
        $this->query->bindValue(":{$link}", $value, (is_int($value) ? PDO::PARAM_INT: PDO::PARAM_STR));
    }
}

}



}
