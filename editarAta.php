<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Essa é sua área de trabalho</title>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="assets/css/pgtrabalho.css">
    </head>
    <body>
         <?php
           include "menu.php";   
        ?>

        <?php 
            if (!empty($_GET['id'])) // Código que faz aparecer os itens no formulário
            {
                include_once('conexao.php');
                $id=$_GET['id'];
                $sql="SELECT * FROM ata WHERE id_ata =$id";
                $res = mysqli_query($con, $sql);

                if(mysqli_num_rows($res)>0)
                {
                    while($aux = mysqli_fetch_assoc($res)) 
                    { 
                        
                       
                        $nome=$aux["nome"]; 
                        $conteudo=$aux["conteudo"]; 
                        $gestao=$aux["gestao"];
                        $nomepre=$aux["npresidente"];
                       $nomevpre=$aux["nvpresidente"];
                       $nomes=$aux["nsecretario"];
                       
                    } 
                }

               else 
                {
                    header('location:inicial.php');
                }

            }

            else 
                {
                    header('location:inicial.php');
                }
            


        ?>

        <div>


                <form class="formulario" method="post" action="salvarata.php">
                    <h1 class="title"><i class="icon icon-mail-1"></i> Editar  Ata</h1>
                            <label class="label">
                                <span>Ano de Gestão</span> 
                                <input type="text" name="gestao" class="campo" value ="<?php echo $gestao ?>"/>
                            </label>

                            <label class="label">
                                <span>Nome do Presidente(a)</span> 
                                <input type="text" name="npresidente" class="campo"  value ="<?php echo $nomepre ?>"/>
                            </label>
                            
                            <label class="label">
                                <span>Nome do Vice-Presidente(a)</span> 
                                <input type="text" name="nvpresidente" class="campo"  value ="<?php echo $nomevpre ?>"/>
                            </label>

                            <label class="label">
                                <span>Nome do secretário(a)</span> 
                                <input type="text" name="nomes" class="campo"  value ="<?php echo $nomes ?>"/>
                            </label>

                            <label class="label">
                                <span>Título da Ata </span> 
                                <input type="text" name="nome" class="campo" value ="<?php echo $nome?>" />
                            </label>

                            
                            <label class="label">
                                <span>Conteúdo</span>
                                 <input type="text" name="conteudo" class="campo" value ="<?php echo $conteudo ?>" />
                            </label>
                            

                            <label class="label"> 
                                <input type="hidden" name="id" value="<?php echo $id?>">
                                <button type="submit" class="botao" name="salvarata"> Salvar </button> 
                            
                            </label>
                 </form>
                               
            </div>

            
            

  			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
  				
  			</script>



    </body>
</html>



