<?php
include_once 'Cadastro_model.php';


$nome=$_POST['name'];
$sobrenome=$_POST['lastname'];
$sexo=$_POST['sexo'];
$erro=FALSE;
if(strlen($nome<2)||!isset($nome)){
    echo 'erro no nome';
    return  $erro=TRUE;
}
if (!$erro){
   


 $data = array(
           "nome" => $nome,
           "sobrenome" => $sobrenome,
           "sexo" => (int) $sexo,
        );

    $model = new Cadastro_Model('pessoa');
    $model->insert_cadastro($data);
}

?>

