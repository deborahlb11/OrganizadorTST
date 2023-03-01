<?php

include_once('conexao.php');


if(isset($_POST['salvarata']))
{
	 $id= $_POST['id'];
     $nome=$_POST['nome']; 
     $conteudo=$_POST['conteudo']; 
     $gestao=$_POST['gestao'];
     $nomepre=$_POST['npresidente'];
     $nomevpre=$_POST['nvpresidente'];
     $nomes=$_POST['nomes'];
                       

     $sql= "UPDATE ata SET nome='$nome',conteudo='$conteudo',gestao ='$gestao', npresidente='$nomepre',nvpresidente='$nomevpre',nsecretario='$nomes' WHERE id_ata='$id';";

	 $res = mysqli_query($con, $sql);

    header('Location:inicial.php');    

}
 
 else if (isset($_POST['addata'])) 
 {
     $user=$_POST['user'];
     $nome=$_POST['nomeata']; 
     $conteudo=$_POST['conteudo']; 
     $gestao=$_POST['gestao'];
     $nomepre=$_POST['npresidente'];
     $nomevpre=$_POST['nvpresidente'];
     $nomes=$_POST['nomesec'];
     $dtreu=$_POST['dtreu'];
     $hrinicio=$_POST['hrinicio'];
     $hrfinal=$_POST['hrfinal'];
     $arq=$_POST['assinaturar'];

      $sql = "INSERT INTO ata ( login_user, nome, gestao, dtreuniao, npresidente, nvpresidente, hrinicio,hrfinal,nsecretario, conteudo) VALUES ('$user','$nome','$gestao','$dtreu','$nomepre','$nomevpre', '$hrinicio','$hrfinal','$nomes','$conteudo');";


     $res = mysqli_query($con, $sql);


      header('Location:inicial.php');   

}
 else  if(!empty($_GET['id']))
 {
     $id = $_GET['id'];

     $sqlcons = mysqli_query($con, "SELECT * FROM ata WHERE id_ata = '$id' ") or die(mysqli_error($con));//caso de erro para de funcionar

      if($sqlcons->num_rows > 0)
      {
        $sqldelete = "DELETE FROM ata WHERE id_ata ='$id';";

        $res = mysqli_query($con, $sqldelete);
      }
        

    header('Location:inicial.php');    

 }
 
  
?>


