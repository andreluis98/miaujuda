<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--CDN CSS BootStrap 4-->
        <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" 
        crossorigin="anonymous">
        <!--CDN CSS Icons BootStrap -->
        <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
        <!--Bundle JS BootStrap 4-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>
        

    
        <title>Miaujuda</title>
    </head>
    <body>
    @extends('templates.template')
    @section('content')

    <h1> Bem vindo </h1>
    <h2></h2><br />

    <form action="Script_do_Formulario.php" method="post">

        <!-- DADOS PESSOAIS-->
        <fieldset>
            <legend>Dados Pessoais</legend>
            <table cellspacing="10">
                <tr>
                    <td>
                        <label for="nome">Nome: </label>
                    </td>
                    <td align="left">
                        <input type="text" name="email">
                    </td>
                    <td>
                        <label for="sobrenome">Sobrenome: </label>
                    </td>
                    <td align="left">
                        <input type="text" name="sobrenome">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Nascimento: </label>
                    </td>
                    <td align="left">
                        <input type="text" name="dia" size="2" maxlength="2" value="dd">
                        <input type="text" name="mes" size="2" maxlength="2" value="mm">
                        <input type="text" name="ano" size="4" maxlength="4" value="aaaa">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="rg">RG: </label>
                    </td>
                    <td align="left">
                        <input type="text" name="rg" size="13" maxlength="13">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>CPF:</label>
                    </td>
                    <td align="left">
                        <input type="text" name="cpf" size="9" maxlength="9"> - <input type="text" name="cpf2" size="2"
                            maxlength="2">
                    </td>
                </tr>
            </table>
        </fieldset>

        <br />
        <!-- ENDEREÇO -->
        <fieldset>
            <legend>Dados de Endereço</legend>
            <table cellspacing="10">

                <tr>
                    <td>
                        <label for="rua">Rua:</label>
                    </td>
                    <td align="left">
                        <input type="text" name="rua">
                    </td>
                    <td>
                        <label for="numero">Numero:</label>
                    </td>
                    <td align="left">
                        <input type="text" name="numero" size="4">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="bairro">Bairro: </label>
                    </td>
                    <td align="left">
                        <input type="text" name="bairro">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="estado">Estado:</label>
                    </td>
                    <td align="left">
                        <select name="estado">
                            <option value="ac">Acre</option>
                            <option value="al">Alagoas</option>
                            <option value="am">Amazonas</option>
                            <option value="ap">Amapá</option>
                            <option value="ba">Bahia</option>
                            <option value="ce">Ceará</option>
                            <option value="df">Distrito Federal</option>
                            <option value="es">Espírito Santo</option>
                            <option value="go">Goiás</option>
                            <option value="ma">Maranhão</option>
                            <option value="mt">Mato Grosso</option>
                            <option value="ms">Mato Grosso do Sul</option>
                            <option value="mg">Minas Gerais</option>
                            <option value="pa">Pará</option>
                            <option value="pb">Paraíba</option>
                            <option value="pr">Paraná</option>
                            <option value="pe">Pernambuco</option>
                            <option value="pi">Piauí</option>
                            <option value="rj">Rio de Janeiro</option>
                            <option value="rn">Rio Grande do Norte</option>
                            <option value="ro">Rondônia</option>
                            <option value="rs">Rio Grande do Sul</option>
                            <option value="rr">Roraima</option>
                            <option value="sc">Santa Catarina</option>
                            <option value="se">Sergipe</option>
                            <option value="sp">São Paulo</option>
                            <option value="to">Tocantins</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="cidade">Cidade: </label>
                    </td>
                    <td align="left">
                        <input type="text" name="cidade">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="cep">CEP: </label>
                    </td>
                    <td align="left">
                        <input type="text" name="cep" size="5" maxlength="5"> - <input type="text" name="cep2" size="3"
                            maxlength="3">
                    </td>
                </tr>
            </table>
        </fieldset>
        <br />

        <!-- DADOS DE LOGIN -->
        <fieldset>
            <legend>Dados de login</legend>
            <table cellspacing="10">
                <tr>
                    <td>
                        <label for="email">E-mail: </label>
                    </td>
                    <td align="left">
                        <input type="text" name="email">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="imagem">Imagem de perfil:</label>
                    </td>
                    <td>
                        <input type="file" name="imagem">

                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="login">Login de usuário: </label>
                    </td>
                    <td align="left">
                        <input type="text" name="login">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="pass">Senha: </label>
                    </td>
                    <td align="left">
                        <input type="password" name="pass">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="passconfirm">Confirme a senha: </label>
                    </td>
                    <td align="left">
                        <input type="password" name="passconfirm">
                    </td>
                </tr>
            </table>
        </fieldset>
        <br />
        <input type="submit">
        <input type="reset" value="Limpar">
    </form>


    <!--Footer é o rodapé da pagina-->
    <!-- <footer class="footer bg-dark fixed-bottom">
        <div class="container text-center pt-2">
            <span class="text-white font-italic"> Todos os direitos reservados </span>
        </div>
    </footer>
    <script src="script.js"></script>
-->

@endsection

</body>

</html>