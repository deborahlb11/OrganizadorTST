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
           session_start();    
    ?>
<nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="inicial.php">Suas Atas</a> 
                <a class="navbar-brand" href="seusepis.php">Seus EPIs</a> 
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     
                    <li class="nav-item">

                        <a class="nav-link" href="https://www.gov.br/trabalho-e-previdencia/pt-br/composicao/orgaos-especificos/secretaria-de-trabalho/inspecao/seguranca-e-saude-no-trabalho/ctpp-nrs/normas-regulamentadoras-nrs">Consultar Normas</a>
                    </li>

                     <li class="nav-item">
                        <a class="nav-link" href="http://caepi.mte.gov.br/internet/ConsultaCAInternet.aspx">Consultar as CA</a>
                    </li>
                    
        
                </ul>
                <div class="d-flex" role="search">
                <label class ="me-3">Olá, <?php echo $_SESSION['user'];?> </label>
                <a href="sair.php">Sair</a>
                    </div>
                </div>
            </div>
        </nav>
</body>
</html>