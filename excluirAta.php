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
          <div>
            <table class="table table-hover">
              <thead>
                 <th>Suas Atas</th>
                <tr>
                  <th scope="col">Código da Ata</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Conteúdo</th>
                </tr>
              </thead>
              <tbody>

                <?php
                    include_once('conexao.php');
 
                    $sql = mysqli_query($con, "SELECT * FROM ata WHERE login_user = '$_SESSION[user]' ") or die(mysqli_error($con));//caso de erro para de funcionar

                    while($aux = mysqli_fetch_assoc($sql)) 
                    { 
                        echo "<tr>";
                        echo "<td>".$aux["id_ata"]."</td>";
                        echo "<td>".$aux["nome"]."</td>"; 
                        echo "<td>".$aux["conteudo"]."</td>"; 
                        echo "</tr>";
                    }
                    
                ?>
                
              </tbody>
            </table>
                        
         </div>
        
        <div>
                <form class="formulario" method="post" action="salvaritens.php">
                    <h1 class="title"><i class="icon icon-mail-1"></i> Excluir  Ata</h1>
                     
                     <label class="label">
                                <span>Digite o código da ATA</span>
                                <input type="text" name="codata" class="campo" placeholder="Digite o código da Ata" required=""/>
                            </label>

                     <label class="label">
                                <span>Nome</span> 
                                <input type="text" name="nomeata" class="campo" placeholder="Digite seu nome" required=""/>
                            </label>
                            
                            <label class="label">
                                <span>Conteúdo</span>
                                <textarea name="mensagem" class="campo" placeholder="Informe o que ocorreu durante a reunião da CIPA" required=""></textarea>
                            </label>
                            
                            <label class="label"> 
                                
                                <input type="hidden" name="salvarata" value="enviar"> <!--add no banco de dados -->
                                <button type="submit" class="botao"> Salvar </button> 
                            
                            </label>
                 </form>
                               
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
                
            </script>



    </body>
</html>
