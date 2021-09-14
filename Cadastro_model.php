<?php
include_once 'Model.php';
class Cadastro_Model extends Model
{

    protected $_table = 'pessoa';
    protected $_pkey = 'cod_p';

    public function insert_cadastro($data)
    {
        try
        {
         $pessoa = array(
        "nome" => $data['nome'],
        "sobrenome" => $data['sobrenome'],
        "sexo" => (int) $data['sexo'],
        );
         $p=new Model($this->_table);
         $p->insert_db($pessoa);
            return true;
        } catch (Exception $e)
        {
            throw new Exception($e);
        }
    }

   
}