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
        
    <style>
            <style>
        /*Redefinir padroes d ecores do nav do bootstrap*/
.active{
    background-color: #007bff;
}

.nav-link, .dropdown-item{
    color: white !important;
}
.nav-link:hover:not(.active), .dropdown-item:hover{
    background-color: #7952b3;
    color: white !important;
}

.bg-imagem{
    /* para manter a responsividade do viewport */
    height: 48vw;
    background-image: url(https://caes101.files.wordpress.com/2012/09/cao-gato.jpg);
    /* Cover define que a imagem de fundo será ajustada para cobrir a área do container*/
    background-repeat: no-repeat;
    background-size: cover;
}

.bg-imagem p{
    text-shadow: 4px 4px 8px black;
    /* para manter a responsividade utilizamos o viewport*/
    font-size: 4vw;
}

.bg-imagem-doe{
    /* para manter a responsividade do viewport */
    height: 48vw;
    background-image: url(https://www.diariodepernambuco.com.br/static/app/noticia_127983242361/2020/04/17/825933/20200417104610761816i.jpg);
    /* Cover define que a imagem de fundo será ajustada para cobrir a área do container*/
    background-repeat: no-repeat;
    background-size: cover;
}

.bg-imagem-doe p{
    text-shadow: 4px 4px 8px black;
    /* para manter a responsividade utilizamos o viewport*/
    font-size: 4vw;
}
.bg-imagem-doe h1{
    text-shadow: 4px 4px 8px black;
    /* para manter a responsividade utilizamos o viewport*/
    font-size: 2vw;
}

.mt-70{
    margin-top: 70px;

}

/* EStilo Agenda */
#agenda th {
    font-size: 1.5vw;

}

#agenda td{
    height: 100px;
    width: 14.29%;
}

#agenda td.bg-info{
    color: white;
}

footer{
    height: 50px;

}
    </style>
    </style>
    
        <title>Miaujuda</title>
    </head>
    <body>
        <!-- Header é o Cabeçalho da pagina parte de cima (menu)-->
        <header>
        <nav class="navbar bg-dark navbar-expand-sm navbar-dark fixed-top">
            <!--Logo-->
            <img class="logo" src="" alt="Miaujuda">
             <!--Menu hambuguer-->
            <button class="navbar-toggler" data-toggle="collapse"
            data-target="#navegacao">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--Itens do menu-->
            <div class="collapse navbar-collapse" id="navegacao">
                <ul class="navbar-nav ml-auto mr-5">
                    <li class="nav-item">
                        <a href="welcome.blade.php" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="doe.blade.php" class="nav-link ">Doe Amor</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            Ongs</a>
                        <div class="dropdown-menu bg-dark">
                            <a target="_blank" href="https://br.cellep.com" 
                            class="dropdown-item"><i class="bi bi-file-earmark-person mr-1"></i>Cellep</a>
                            <a target="_blank" href="https://estacaohack.fb.com" 
                            class="dropdown-item"><i class="bi bi-facebook mr-1"></i>Estação Hack</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="login.blade.php" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="cadastro.blade.php" class="nav-link">Cadastre-se</a>
                    </li>
                    <li class="nav-item">
                        <a href="adote.blade.php" class="nav-link">Adote</a>
                    </li>
    
                </ul>
            </div> 
        </nav>
        </header>

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
    </body>
</html>