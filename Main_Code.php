<?php
    $action = "inserir";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de músicas</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" >
</head>
<body>

    <?php  require_once "menu.php"; ?>

	<br>
    <center><h1><font face="Impact">Seja bem-vindo ao cadastro de músicos</font></h1></center>
    <center><h2><font face="Monotype Corsiva">Aqui será possível cadastrar seu perfil musical!</font></h2></center>

    <form method="POST" action="salvarCadastro.php?<?php echo $action; ?>">
        <br><br>
		<center><label for="txtNome"><h3><font face="Monotype Corsiva">Informe seu nome artístico:</font><h3></label></center>
        <center><input type="text" name="txtNome" required /></center>
		
		<br>

		<center><label for="txtInstrumento"><h3><font face="Monotype Corsiva">Informe o instrumento musical:</font><h3></label></center>
        <center><input type="text" name="txtInstrumento" required /></center>
		
		<br>
		
		<center><label for="txtMusica"><h3><font face="Monotype Corsiva">Informe a sua Música:</font><h3></label></center>
        <center><input type="text" name="txtMusica" required /></center>
        <br>
        <center><input type="submit" value="Salvar" /></center>
        <center><input type="reset" value="Limpar" /></center>
		<br>
    </form>

    <hr>

    <center><table id="tbl_categorias"></center>
	
        <br><br><center><h1><font face="Impact">Tabela:</font></h1></center><br>
		
		<tr>
            <th>Nome</th>
            <th>Instrumento</th>
			<th>Música</th>
        </tr>

        <?php
            include_once 'clsConexao.php';
            $query = "SELECT * FROM Main_Code";
            $result = Conexao::consultar( $query );

            while( $cat = mysqli_fetch_array($result)){
                echo '<tr>'; 
                echo '    <td>'.$cat['Nome'].'</td>';
                echo '    <td>'.$cat['Instrumento'].'</td>';
				echo '    <td>'.$cat['Música'].'</td>';
                echo '</tr>';
            }
        ?>
        
    </table>
 
</body>
</html>