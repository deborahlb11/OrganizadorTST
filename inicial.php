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
       
        <!-- Essa parte é das atas -->
       <div>
            <table class="table table-hover">
              <thead>
                 <th>Suas Atas</th>
                <tr>
                  <th scope="col">Código da Ata no sistema</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Ano de gestão</th>
                  <th scope="col">Data da reunião</th>
                  <th scope="col">Presidente</th>
                  <th scope="col">Vice-Presidente</th>
                  <th scope="col">Secretário</th>
                  <th scope="col">Horário de Inicio</th>
                  <th scope="col">Horário de Termino</th>
                  <th scope="col">Conteúdo</th>
                  <th scope="col">Arquivos de assinaturas</th>
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
                        echo "<td>".$aux["gestao"]."</td>"; 
                        echo "<td>".$aux["dtreuniao"]."</td>"; 
                        echo "<td>".$aux["npresidente"]."</td>"; 
                        echo "<td>".$aux["nvpresidente"]."</td>"; 
                        echo "<td>".$aux["nsecretario"]."</td>"; 
                        echo "<td>".$aux["hrinicio"]."</td>";
                        echo "<td>".$aux["hrfinal"]."</td>";  
                        echo "<td>".$aux["conteudo"]."</td>";  
                        echo "<td> <td> <a class='btn btn-warning' href='editarAta.php?id=$aux[id_ata]' role ='button'> Editar Ata </a> </td>";

                        echo "<td> <a class='btn btn-danger' href='salvarata.php?id=$aux[id_ata]' role='button'>Excluir Ata </a></td>"; 

                        echo "</tr>";
                    }
                    echo "<tr>"; 
                    echo "<td>  <a class='btn btn-success' href='addata.php' role ='button'> Adicionar Ata </a> </td>";
                    echo "<tr>";
                  ;
                
                ?>
                
              </tbody>
            </table>
                        
         </div>

      

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>



    </body>
</html>
