<html>
<head>
    <meta charset-"UTF-8">
    <title>Aula01</title>
</head>
<body>
    <table>
        <tr>
            <form name="frmFormulario" method="post" action="resposta.php">
            <tr>
            <td>Nome<br><input type="text" name="txtNome" value="" size="50" maxlength="50"></td>
            </tr>
            <tr>
            <td>Idade<br><input type="text" name="txtIdade" value="" size="50" maxlength="50"></td>
            </tr>
            <tr>
            <td>Telefone<br><input type="text" name="txtTelefone" value="" size="50" maxlength="50"></td>
            </tr>
            <tr>
            <td>E-mail<br><input type="text" name="txtEmail" value="" size="50" maxlength="50"></td>
            </tr>
            <tr>
            <td><input type="button" name="Confirmar" value="Confirmar" onClick="submit();"></td>
            </tr>
            </form>
	</tr>
    </table>
</body>
</html>

<?php
echo "<br>".$_POST['txtNome'];
echo "<br>".$_POST['txtIdade'];
echo "<br>".$_POST['txtTelefone'];
echo "<br>".$_POST['txtEmail'];

?>
