<?php

/**
 * 
 */
class Model
{

    private $_query;

  
    private static $_dbh = null;
    private $_host = null;
    private $_port = null;
    private $_username = null;
    private $_password = null;
    private $_database = null;
    private $_resultado = null;
    private $_table=null;

    public function __construct($table = null, $pkey = null)
    {
        if ($this->setIniConfig())
        {
            $this->connect();
            if (isset($table) && is_string($table))
                $this->_table = $table;
            if (isset($pkey) && is_string($pkey))
                $this->_pkey = $pkey;
            
        }
    }

    private function connect()
    {
        //new dBug(self::$_dbh);
        if (self::$_dbh == null || !is_resource(self::$_dbh))
        {
           try
           {
               
                self::$_dbh = mysqli_connect("$this->_host", $this->_username, $this->_password, $this->_database);
               // printf("Success... %s\n", self::$_dbh->host_info);
            } catch (Exception $e)
            {
                echo $e->getMessage();
            }
        }
    }

    public function setIniConfig()
    {
        $ini_config = array(
            'db' => array(
                'host' => 'localhost',
                'port' => '3306',
                'username' => 'root',
                'password' => '',
                'database' => 'webii'
            )
        );
        if (!$ini_config)
            return false;
        $this->_host = $ini_config['db']['host'];
        $this->_port = $ini_config['db']['port'];
        $this->_username = $ini_config['db']['username'];
        $this->_password = $ini_config['db']['password'];
        $this->_database = $ini_config['db']['database'];

        return true;
    }
    
    public function insert_db(array $values){
       
        $numValues = count($values);
        $sql = "INSERT INTO $this->_table (";
        
        $i = 0;
        foreach ($values as $field => $value)
        {
            $sql .= "$field";
            if (++$i != $numValues)
                $sql .= ", ";
        }
        $sql .= ") VALUES (";

        $i = 0;
        foreach ($values as $field => $value)
        {
            if ($value == '' && $value !== 0)
                $sql .= "NULL";
            else
            if (is_string($value))
                $sql .= "'$value'";
            else
            {
                $value = $value;
                $sql .= "$value";
            }
            if (++$i != $numValues)
                $sql .= ", ";
        }
        $sql .= ")";
        
        return $this->exec($sql);
    
    }
     public function exec($sql)
    {
        
	$this->_resultado = mysqli_query(self::$_dbh, $sql);

        if ($this->_resultado === false){

       
            ?> 
            <script>
                alert("Erro")
            </script>

<?php
         }else {
             echo "<div>
                Cadastro efetuado com Sucesso!
             
             </div>";
         }
         
        $this->apagaQuery();

        return;
    }
    
     public function apagaQuery()
    {
        $this->_query = null;
    }
}

  ?>
