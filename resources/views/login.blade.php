<!DOCTYPE html>
<html lang="pt-Br">
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

        <main class="container">
            <div class="row">
                <div class="col-md-12 mt-70">
                    <h2 class="text-warning">Login</h2>
                    <form id="loginAluno" action="javascript:alert('sucesso!');">
                        <div class="form-group">
                          <label for="inputUsuario">Usuário</label>
                          <input type="text" class="form-control" id="inputUsuario" 
                          placeholder="Digite seu Usuario" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                          <label for="inputSenha">Senha</label>
                          <input type="password" class="form-control" id="inputSenha"
                          placeholder="Digite Sua Senha" autocomplete="off" required>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg btn-block">Entrar</button>
                      </form>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <a href="#">Esqueci minha senha</a>
                    <div id="mensagem" class="mt-2" role="alert"></div>
                </div>
            </div>
        </main>

        <!--Footer é o rodapé da pagina-->
    <footer class="footer bg-dark fixed-bottom">
        <div class="container text-center pt-2">
            <span class="text-white font-italic"> Todos os direitos reservados </span>
        </div>
    </footer>
    <script src="script.js"></script>
    @endsection  
    </body>
</html>