<html>
    <head>
        <meta charset="UTF-8">
        <title> Essa é a sua área de trabalho</title>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
          <link rel="stylesheet" type="text/css" href="assets/css/pgtrabalho.css">
    </head>
    <body>
        <?php
           session_start();    
        ?>

        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                 <a class="navbar-brand" href="inicial.php">Painel de trabalho</a> 
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.gov.br/trabalho-e-previdencia/pt-br/composicao/orgaos-especificos/secretaria-de-trabalho/inspecao/seguranca-e-saude-no-trabalho/ctpp-nrs/normas-regulamentadoras-nrs">Consultar Normas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="suasAtas.php">Suas Atas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="seusEpis.php">Seus EPIs</a>
                    </li>
        
                </ul>
                <div class="d-flex" role="search">
                <label class ="me-3">Olá, <?php echo $_SESSION['user'];?> </label>
                <a href="sair.php">Sair</a>
                    </div>
                </div>
            </div>
        </nav>

        <div>
        	<table class="table table-hover">

			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Nome</th>
			      <th scope="col">Conteúdo</th>
			      <th scope="col">Editar</th>
			      <th scope="col">Excluir</th>
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
  						echo "<td> <a class='btn btn-primary' href='#'> <svg xmlns='http://www.w3.org/2000/svg' width='16' height=16' fill='currentColor' class='bi bi-pen-fill' viewBox='0 0 16 16'>
  							<path d='m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z'/>
								</svg> 
							 </td>";

  						echo "</tr>";
					}
 					

 					/*include_once('conexao.php');
 
					$sql = mysqli_query($con, "SELECT * FROM ata") or die(mysqli_error($con));//caso de erro para de funcionar
 

					while($aux = mysqli_fetch_assoc($sql)) 
					{ 
 						echo "<tr>";
 						echo "<td>".$aux["id_ata"]."</td>";
 						echo "<td>".$aux["nome"]."</td>"; 
  						echo "<td>".$aux["conteudo"]."</td>"; 
					}

			  		while ($dados=mysqli_fetch_assoc($res)) 
			  		{
			  			
			  			echo "<td>".$dados['id_ata']."</td>";
			  		} */


			  	?>
			    
			  </tbody>
			</table>
			        	
		 </div>
    


    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    </body>
</html>