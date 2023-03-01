
<?php
/*function chamar_ata($pessoa)
{
  include_once('conexao.php');
 
  $sql = mysqli_query($con, "SELECT * FROM ata") or die(mysqli_error($con));//caso de erro para de funcionar


  while($aux = mysqli_fetch_assoc($sql)) 
  { 
    echo "-----------------------------------------<br />"; 
    echo "Nome:".$aux["nome"]."<br />"; 
    echo "Conteúdo".$aux["conteudo"]."<br />"; 
  }
}

 
?>

<?php
//iniciando a conexão com o banco de dados 
$cx = mysqli_connect("127.0.0.1", "root", "");
 
//selecionando o banco de dados 
$db = mysqli_select_db($cx, "test");
 
//criando a query de consulta à tabela criada 
$sql = mysqli_query($cx, "SELECT * FROM cliente") or die( 
  mysqli_error($cx) //caso haja um erro na consulta 
);
 
//pecorrendo os registros da consulta. 
while($aux = mysqli_fetch_assoc($sql)) { 
  echo "-----------------------------------------<br />"; 
  echo "Nome:".$aux["nome"]."<br />"; 
  echo "Idade:".$aux["idade"]."<br />"; 
}
 
?>


 
         <div class ="ata">
                <form class="formulario" method="post" action="salvaritens.php">
                    <h1 class="title"><i class="icon icon-mail-1"></i> Adicionar Nova Ata</h1>
                            
                     <label class="label">
                                <span>Nome</span>
                                <input type="text" name="nomeata" class="campo" placeholder="Digite seu nome" required=""/>
                            </label>
                            
                            <label class="label">
                                <span>Conteúdo</span>
                                <textarea name="mensagem" class="campo" placeholder="Informe o que ocorreu durante a reunião da CIPA" required=""></textarea>
                            </label>
                            
                            <label class="label"> 
                                
                                <input type="hidden" name="salvarata" value="enviar"> 
                                <button type="submit" class="botao"> Salvar </button>
                            
                            </label>
                 </form>
                               
            </div>

             <div class="epi">
                    <form class="formulario" method="post" action="">
                       <h1 class="title"><i class="icon icon-mail-1"></i> Adicionar Novo EPI</h1>
                        
                        <label class="label">
                            <span>Nome</span>
                            <input type="text" name="nomeepi" class="campo" placeholder="Digite seu nome" required=""/>
                        </label>
                        
                        <label class="label">
                            <span>Informe a validade do EPI</span>
                            <input type="month" class ="campo" name="data"> 
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

            botão de caneta
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height=16' fill='currentColor' class='bi bi-pen-fill' viewBox='0 0 16 16'>
                            <path d='m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z'/>
                                </svg>

  */           