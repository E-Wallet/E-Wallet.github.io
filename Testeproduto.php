<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

        <!-- FontAwesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

        <!-- E-Wallet CSS -->
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <title>E-Wallet - Produto 1</title>
        <link rel="icon" href="Imagens/favicon.ico" type="image/x-icon" />
        
        <script src="http://arquivos.weblibras.com.br/auto/wl-min.js"></script>
        <script>
            var wl = new WebLibras();
        </script>
    </head>
    <body>
        <header>
            <!-- Menu Smartphones -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="menu_mobile">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="Index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Comofunciona.php">Como Funciona</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Empresas.php">Empresas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Sobre.php">Sobre</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- -------------------------------------- -->
            <div class="container">
                <div class="row">
                    <div id="div_logo" class="col-sm-3">
                        <img class="logo" src="Imagens/Logo4.png" alt="">
                        <center><img class="logo_min" src="Imagens/Logo4.png" alt=""></center>
                    </div>
                    <div id="div_search" class="col-sm-7">
                        <form id="form_search" action="#">
                            <div class="input-group mb-3" id="search">
                                <input type="text" class="form-control" placeholder="O que está procurando?" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">Pesquisar</button>
                                </div>
                            </div>
                        </form>    
                    </div>
                    <div id="div_dados" class="col-sm-2">
                        <center>
                            <div class="dados">
                                <div class="dropdown">
                                    <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-user fa-lg"></i>&nbsp;Minha Conta
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="Login.php">Olá Visitante!</a>
                                        <a class="dropdown-item" href="Login.php">Meus Dados</a>
                                        <a class="dropdown-item" href="Login.php">Meu Gerenciamento</a>
                                    </div>
                                </div>
                            </div>
                        </center>    
                    </div>
                </div>    
            </div>
        </header>

        <main>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #e3f2fd;" id="menu">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="container">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="Index.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            &nbsp;
                            &nbsp;
                            <li class="nav-item">
                                <a class="nav-link" href="Comofunciona.php">Como funciona?</a>
                            </li>
                            &nbsp;
                            &nbsp;
                            <li class="nav-item">
                                <a class="nav-link" href="Empresas.php">Empresas</a>
                            </li>
                            &nbsp;
                            &nbsp;
                            <li class="nav-item">
                                <a class="nav-link" href="Sobre.php">Sobre</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3" id="categorias">
                        <div class="categorias_inner">
                            <h1 id="titulo_cat"><font face="Eras ITC">Categorias</font></h1>
                            <ul class="nav flex-column" id="lista">
                                <li class="nav-item">
                                    <a class="nav-link active" href="Automoveis.php">Automóveis</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="Viagens.php">Viagens</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="Imoveis.php">Imóveis</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="Eletrodomesticos.php">Elétrodomesticos</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-9" id="destaques">
                        <h1 id="destaques_tit"><font face="Eras ITC">Marca - Produto 1 - Ano</font></h1>
                        <br>
                        <div class="produto">
                            <div class="row">
                                <div class="col-sm-6">
                                    <img class="produto1" src="Imagens/Testeproduto.png" alt="">
                                </div>
                                <div class="col-sm-6">
                                    <p>Lorem ipsum sollicitudin orci magna ut diam enim, amet habitasse
                                        auctor suspendisse egestas molestie sed elit, quis tristique morbi 
                                        quisque donec ligula. tempor nisl lorem curae suscipit urna rhoncus 
                                        aliquam aptent luctus sit aliquam elementum viverra dui accumsan quam, 
                                        platea tempor cubilia sapien.</p>
                                <button type="submit" class="btn btn-primary">Realizar Cálculo</button>
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                <button type="submit" class="btn btn-secondary">Adicionar ao Gerenciamento</button>
                                </div>         
                            </div>    
                            <br>
                            Compre o produto pelo site da loja:
                            <div class="row">
                                <div class="col-sm-12">
                                    <img class="loja" src="Imagens/Testeproduto.png" alt="">
                                </div>  
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer >
            <center> E-WALLET © Todos os direitos reservados. 2018 </center> 
        </footer>

        <!-- JavaScript (Opcional) -->
        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </body>
</html>