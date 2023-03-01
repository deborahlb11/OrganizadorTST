<?php

include_once('conexao.php');

$nomeata= filter_var($_REQUEST['nomeata'], FILTER_SANITIZE_STRING);
$conteudo = filter_var($_REQUEST['conteudo'], FILTER_SANITIZE_STRING);
$user= $_SESSION['user'];

$sql="INSERT INTO ata ('login_user', 'nome', 'conteudo') VALUES ('$user','$nomeata','$conteudo')";
$res = mysqli_query($con, $sql);


if(mysqli_num_rows($res)==1)
{
   echo "Essa ata já existe";
    
}
else 
{
    echo "Adicionado com sucesso";
}

?>

<?php

include_once('conexao.php');

$nomeepi= filter_var($_REQUEST['nomeepi'], FILTER_SANITIZE_STRING);
$data = $_REQUEST['data'];
$user= $_SESSION['user'];
$qtd = filter_var($_REQUEST['qtd'], FILTER_SANITIZE_STRING);

$sql="INSERT INTO ata ('login_user', 'nome', 'conteudo') VALUES ('$user','$nomeata','$conteudo')";
$res = mysqli_query($con, $sql);

 echo "Adicionado com sucesso";


?>


