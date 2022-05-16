<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">

    <title>Template</title>
</head>
<body>

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

@yield('content')
 <!--Footer é o rodapé da pagina-->
    <footer class="footer bg-dark">
        <div class="container text-center pt-2">
            <span class="text-white font-italic"> Todos os direitos reservados  © 2022</span>
        </div>
    </footer>

</body>
</html>