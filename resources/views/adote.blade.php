<!DOCTYPE html>
<html lang="en">
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
        
        <link rel="stylesheet" href="style/style.css" type="text/css"/>
    
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
    
</body>
</html>