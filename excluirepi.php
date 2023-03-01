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
            <table class="table table-hover">
              <thead>
                 <th>Seus EPIs</th>
                <tr>
                  <th scope="col">Código de EPI</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Data de Validade</th>
                  <th scope="col">Quantidade</th>
                </tr>
              </thead>
              <tbody>

                <?php
                    include_once('conexao.php');
 
                    $sql = mysqli_query($con, "SELECT * FROM epi WHERE login_user = '$_SESSION[user]' ") or die(mysqli_error($con));//caso de erro para de funcionar

                    while($aux = mysqli_fetch_assoc($sql)) 
                    { 
                        echo "<tr>";
                        echo "<td>".$aux["codigo"]."</td>";
                        echo "<td>".$aux["nome"]."</td>"; 
                        echo "<td>".$aux["datav"]."</td>";
                        echo "<td>".$aux["qtd"]."</td>"; 

                        echo "</tr>";
                    }

                    ?>

                </tbody>
            </table>
        </div>  

         <div>
                    <form class="formulario" method="post" action="">
                       <h1 class="title"><i class="icon icon-mail-1"></i>  Excluir EPI</h1>
                        
                         <label class="label">
                            <span>Código</span>
                            <input type="text" name="codepi" class="campo" placeholder="Digite o código do seu EPI" required=""/>
                        </label>

                        <label class="label">
                            <span>Nome</span>
                            <input type="text" name="nomeepi" class="campo" placeholder="Digite seu nome" required=""/>
                        </label>
                        
                        <label class="label">
                            <span>Informe a validade do EPI</span>
                            <input type="date" class ="campo" name="data"> 
                        </label>
                        
                        <label class="label">
                            <span>Informe a Quantidade</span>
                             <input type="text"class="campo" name="qtd" placeholder="Quantidade">
                        </label>
                        <label class="label">
                            
                            <input type="hidden" name="salvarepi" value="enviar"> 
                            <button type="submit" class="botao"> Salvar </button>
                        
                        </label>
                    </form>
                           
            </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    </body>
</html>