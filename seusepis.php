<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
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
                   <th scope="col">N°do CA</th>
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
                        echo "<td>".$aux["ca"]."</td>";
                        echo "<td> <td> <a class='btn btn-warning' href='editarEpi.php?id=$aux[codigo]' role ='button'> Editar EPI </a> </td>";
                        echo "<td> <a class='btn btn-danger' href='salvarepi.php?id=$aux[codigo]' role='button'> Excluir EPI </a></td>";
                        echo "</tr>";
                    }
                    echo "<tr>"; 
                    echo "<td>  <a class='btn btn-success' href='addepi.php' role ='button'> Adicionar EPI </a> </td>";
                    echo "</tr>";

                    ?>

                </tbody>
            </table>


        </div>  
    
             

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>



    </body>
</html>