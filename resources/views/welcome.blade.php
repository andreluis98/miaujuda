<!DOCTYPE html>
<html lang="pt-BR">
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
    <!--Main é o corpo da pagina-->
    <main>
        <div class="d-flex align-items-center text-center text-white bg-imagem">
            <div class="container-fluid">
                <p>Ajude a Salvar uma vida</p>
            </div>
        </div>
        <section class="container ">
            <div class="row mt-4 md-4">
                <div class="col-md-12 shadow p-3 mb-5 bg-white rounded ">
                    <h2 class="text-warning">Conheça-nos</h2>
                </div>
            </div>
        </section>
        <section class="container">
            <div class="row">
                <div class="col-md-4 shadow p-3 mb-5 bg-white rounded">
                    <div class="card" style="width: 18rem;">
                        <img src="https://files.metropoles.com/stories/7-mitos-e-verdades-sobre-o-vira-lata-o-queridinho-dos-brasileiros/assets/3.jpeg"
                         class="card-img-top" alt="Cachorro e Gato">
                        <div class="card-body">
                          <h5 class="card-title text-warning">Ajude uma vida</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Vero nisi eveniet, illo et quaerat aperiam, fugit illum aut
                                                    quia soluta voluptas? Facere iure ducimus rem accusamus qui 
                                                    magni quibusdam quae.</p>
                          <a href="#" class="btn btn-primary">Saiba-mais</a>
                        </div>
                      </div>
                </div>
                <div class="col-md-4 shadow p-3 mb-5 bg-white rounded">
                    <div class="card" style="width: 18rem;">
                        <img src="https://www.amoviralata.com/wp-content/uploads/2021/06/presente-dia-dos-namorados-540x360.jpg"
                        class="card-img-top" alt="Cachorro e Gato com Coração de pelucia">
                        <div class="card-body">
                          <h5 class="card-title text-warning">Doe Amor</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet consectetur 
                              adipisicing elit. Animi eius minus veniam tempore? Dicta minima,
                               iusto quis sequi tempora ratione qui cum voluptas ipsam animi 
                               reprehenderit, pariatur magni ipsa dolorem.</p>
                          <a href="#" class="btn btn-primary">Saiba-mais</a>
                        </div>
                      </div>
                </div>
                <div class="col-md-4 shadow p-3 mb-5 bg-white rounded">
                    <div class="card" style="width: 18rem;">
                        <img src="https://historiahoje.com/wp-content/uploads/2014/05/cachorro-e-gato1.jpg" 
                        class="card-img-top" alt="Gato e Cachorro">
                        <div class="card-body">
                          <h5 class="card-title text-warning">Adote uma Vida, Adote um Carinho</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing
                               elit. Laboriosam omnis illum ducimus molestiae possimus
                                voluptatibus aliquid accusamus, inventore cupiditate fuga
                                 tempora enim. Quod,
                               deserunt consectetur mollitia possimus voluptas beatae eos!</p>
                          <a href="#" class="btn btn-primary">Saiba-mais</a>
                        </div>
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 shadow p-3 mb-5 bg-white rounded">
                    <div class="card" style="width: 18rem;">
                        <img src="IMG-20210824-WA0019.svg"
                         class="card-img-top" alt="Logo Miaujuda">
                        <div class="card-body">
                          <h5 class="card-title text-warning">Objetivo da Miaujuda</h5>
                          <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing
                               elit. Sunt maiores officiis repudiandae magni officia quia
                                molestiae qui aspernatur illum illo pariatur ut,
                               quidem enim voluptatum ipsum et nesciunt, laborum omnis?</p>
                          <a href="#" class="btn btn-primary">Saiba-mais</a>
                        </div>
                      </div>
                </div>
                <div class="col-md-4 shadow p-3 mb-5 bg-white rounded">
                    <div class="card" style="width: 18rem;">
                        <img src="IMG-20210824-WA0019.svg" 
                        class="card-img-top" alt="Logo Miaujuda">
                        <div class="card-body">
                          <h5 class="card-title text-warning">Sobre nós</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet consectetur, 
                                                adipisicing elit. Nisi sed sunt quod eveniet, 
                                                aut minus libero nemo doloribus rem debitis sint in blanditiis
                                                molestias delectus. Quidem rerum dicta optio voluptatem?</p>
                          <a href="#" class="btn btn-primary">Saiba-mais</a>
                        </div>
                      </div>
                </div>
                <div class="col-md-4 shadow p-3 mb-5 bg-white rounded">
                    <div class="card" style="width: 18rem;">
                        <img src="IMG-20210824-WA0019.svg" 
                        class="card-img-top" alt="Logo Miaujuda">
                        <div class="card-body">
                          <h5 class="card-title text-warning">Conheça nossas Ongs parceiras</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                               Repellendus quia amet maxime, laborum minus, id, mollitia ab 
                               possimus aspernatur cumque temporibus cum exercitationem debitis!
                                Labore, illo! Dolorem, maiores. Sapiente, hic?</p>
                          <a href="#" class="btn btn-primary">Saiba-mais</a>
                        </div>
                      </div>
                </div>
            </div>
        </section>
    </main>
    <!--Footer é o rodapé da pagina-->
    <footer class="footer bg-dark">
        <div class="container text-center pt-2">
            <span class="text-white font-italic"> Todos os direitos reservados </span>
        </div>
    </footer>
</body>
</html>