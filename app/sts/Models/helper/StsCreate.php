<?php
namespace Sts\Models\helper;
use PDOException;
//Redirecionar ou para o processamento quando o usuário não acessar o arquivo index.php
if (!defined('C7E3L8K95')) 
{
    header("Location:/");
    die("Erro: Página não encontrada! ");
}
class StsCreate extends StsConn 
{
    private string $table;
    private array $data;
    private string|null $result = null; 
    private object $insert;
    private string $query;
    private object $conn;

    function getResult(): string|null 
    {
        return $this->result;
    }

    //por padrão instancio este método através da model StsContato, depois esse método executa toda a instrução, chama
    // o método $this->exeReplaceValues(); para substituir.
    public function exeCreate(string $table, array $data): void
    {
        $this->table = $table;               
        $this->data = $data;
        $this->exeReplaceValues();

    }
    //Este método substitui os valores name e email de um array para uma string
    private function exeReplaceValues(): void 
    {
        //quero separar o valor pela vírgula, utilizo array_keys porque so quero as chaves do atributo $this->data, porque 
        //o $data é que tem o array, tudo isso atribuo a variável $coluns, porque o nome das chaves é o mesmo nome da coluna
        //no banco de dados
        $coluns = implode(',', array_keys($this->data)); 
        $values = ':'. implode(', :', array_keys($this->data)); 
        $this->query = "INSERT INTO {$this->table} ($coluns) VALUES ($values)";
        $this->exeInstruction();
    }

        private function exeInstruction(): void
        {
            $this->connection();
            try 
            {
                $this->insert->execute($this->data);
                $this->result = $this->conn->lastInsertId(); //voltar aqui
            } 
            catch (PDOException $err)  
            {
                $this->result = null; 
            }

        }

        private function connection(): void
        {
            $this->conn = $this->connectDb();
            $this->insert = $this->conn->prepare($this->query); 
        }
}


?>










