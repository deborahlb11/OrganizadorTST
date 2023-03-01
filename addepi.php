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

         <div>
                    <form class="formulario" method="post" action="salvarepi.php">
                       <h1 class="title"><i class="icon icon-mail-1"></i> Adicionar Novo EPI</h1>
                        
                        <label class="label">
                            <span>Nome</span>
                            <input type="text" name="nomeepi" class="campo" placeholder="Digite seu nome" required=""/>
                        </label>
                        
                        <label class="label">
                            <span>Informe a validade do EPI</span>
                            <input type="date" class ="campo" name="data"  placeholder=""> 
                        </label>
                        
                        <label class="label">
                            <span>Informe a Quantidade</span>
                             <input type="text"class="campo" name="qtd" placeholder="Quantidade">
                        </label>

                          <label class="label">
                            <span>Informe o CA do EPI </span>
                             <input type="text"class="campo" name="ca" placeholder="Informe o CA">
                        </label>

                          
                        <label class="label">

                            <input type="hidden"  name="user" value="<?php echo $_SESSION['user']?>"> 
                            <button type="submit" name="salvarepi" class="botao"> Salvar </button>
                        
                        </label>
                    </form>
                           
            </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    </body>
</html>
