<!DOCTYPE html>
<html lang= "pt-br">
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>formulario de contato </title>
    </head>
    <body>
        <h1> usando o metodo POST</h1>
        <p>Preencha os dados abaixo para enviar sua mensagem.</p>

        <form action="processa_dados.php" method="POST">
            <table border="1" width="400">
                <tr>
                    <td><label for="CampoNome">Nome:</label></td>
                    <td><input type="text" name="nome_usuario" size="30" required></td>
                </tr>
                <tr>
                    <td><label for="Email">E-mail:</label></td>
                    <td><input type="email" name="email_usuario" size="30" required></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <button>enviar dados</button>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>