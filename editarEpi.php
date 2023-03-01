 <html>
    <head>
        <meta charset="UTF-8">
        <title> Essa é a sua área de trabalho </title>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
          <link rel="stylesheet" type="text/css" href="assets/css/pgtrabalho.css">
    </head>
    <body>
         <?php
           include "menu.php";   
        ?>

         <?php 
            if (!empty($_GET['id'])) 
            {
                include_once('conexao.php');
                $id=$_GET['id'];
                $sql="SELECT * FROM epi WHERE codigo =$id";
                $res = mysqli_query($con, $sql);

                if(mysqli_num_rows($res)>0)
                {
                    while($aux = mysqli_fetch_assoc($res)) 
                    { 
                        
                       
                        $nome=$aux["nome"];  
                        $qtd=$aux["qtd"];
                        $datav=$aux["datav"];
                       
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
                    <form class="formulario" method="post" action="salvarepi.php">
                       <h1 class="title"><i class="icon icon-mail-1"></i> Editar EPI</h1>
                        
                        <label class="label">
                            <span>Nome</span>
                            <input type="text" name="nomeepi" class="campo" value ="<?php echo $nome ?>"/>
                        </label>
 
                        <label class="label">
                            <span>Informe a validade do EPI</span>
                            <input type="date" class ="campo" name="data"  value ="<?php echo $datav ?>"> 
                        </label>
                        
                        <label class="label">
                            <span>Informe a Quantidade</span>
                             <input type="text"class="campo" name="qtd"  value ="<?php echo $qtd ?>">
                        </label>

                        <label class="label">
                            
                             <input type="hidden" name="id" value="<?php echo $id?>">
                            <button type="submit" class="botao" name="editarepi"> Salvar </button>
                        
                        </label>
                    </form> 
                           
            </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    </body>
</html>
