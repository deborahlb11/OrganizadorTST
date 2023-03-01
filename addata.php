<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/pgtrabalho.css">
	
</head>
<body>
     <?php
           include "menu.php";   
    ?>   
  
                     <form class="formulario" method="post" action="salvarata.php">
                    <h1 class="title"><i class="icon icon-mail-1"></i> Adicionar Ata</h1>
                            <label class="label">
                                <span>Ano de Gestão</span> 
                                <input type="text" name="gestao" class="campo" placeholder="Informe o ano de gestão" />
                            </label>

                            <label class="label">
                                <span>Data da reunião</span> 
                                <input type="date" name="dtreu" class="campo" placeholder="" />
                            </label>


                            <label class="label">
                                <span>Nome do Presidente(a)</span> 
                                <input type="text" name="npresidente" class="campo" placeholder="Informe o nome do presidente" />
                            </label>
                            
                            <label class="label">
                                <span>Nome do Vice-Presidente(a)</span> 
                                <input type="text" name="nvpresidente" class="campo" placeholder="Informe o nome do vice-presidente" />
                            </label>

                            <label class="label">
                                <span>Nome do secretário(a)</span> 
                                <input type="text" name="nomesec" class="campo"  placeholder="Informe o nome do secretário" />
                            </label>


                            <label class="label">
                                <span>Título</span> 
                                <input type="text" name="nomeata" class="campo"  placeholder="Informe o título da Ata" />
                            </label>

                            <label class="label">
                                <span>Horário de inicio</span>
                                 <input type="time" name="hrinicio" class="campo" placeholder="" />
                            </label>
                            
                            <label class="label">
                                <span>Horário de Término</span>
                                 <input type="time" name="hrfinal" class="campo" placeholder="" />
                            </label>


                            <label class="label">
                                <span>Conteúdo</span>
                                 <input type="text" name="conteudo" class="campo" placeholder="Informe o que ocorreu durante a reunião" />
                            </label>

                            <label class="label">
                                <span>Arquivo de Assinaturas </span>
                                 <input type="file" name="assinaturas" class="campo" placeholder="" />
                            </label>



                            <label class="label"> 
                                 <input type="hidden" name="user" value="<?php echo $_SESSION['user']?>">
                                <button type="submit" class="botao" name="addata"> Salvar </button> 
                            
                            </label>
                 </form>
                               
            </div>
	
		 </div>

		 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>

