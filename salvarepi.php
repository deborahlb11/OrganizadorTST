<?php

include_once('conexao.php');

if(isset($_POST['editarepi']))
{
     $id= $_POST['id'];
     $nome=$_POST['nomeepi']; 
     $data=$_POST['data']; 
     $qtd=$_POST['qtd'];
     
                       

     $sql= "UPDATE epi SET nome='$nome',datav='$data',qtd ='$qtd' WHERE codigo='$id';";

     $res = mysqli_query($con, $sql);

    header('Location:seusepis.php');    

}

else if(isset($_POST['salvarepi']))
{
	 $user=$_POST['user'];
     $nome=$_POST['nomeepi']; 
     $data=$_POST['data']; 
     $qtd=$_POST['qtd'];
     $ca=$_POST['ca'];
     

$sql = "INSERT INTO epi (nome, datav,qtd, login_user, ca) VALUES ('$nome','$data','$qtd','$user','$ca');";


	 $res = mysqli_query($con, $sql);

      header('Location:seusepis.php');  

}
 
 

	
 else if(!empty($_GET['id']))
 {
     $id = $_GET['id'];

     $sqlcons = mysqli_query($con, "SELECT * FROM epi WHERE codigo = '$id' ") or die(mysqli_error($con));//caso de erro para de funcionar

      if($sqlcons->num_rows > 0)
      {
        $sqldelete = "DELETE FROM epi WHERE codigo ='$id';";

        $res = mysqli_query($con, $sqldelete);
      }
        

    header('Location:seusepis.php');    

 }


  
?>

