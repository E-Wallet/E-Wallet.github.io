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
        <title>E-Wallet - Dados Financeiros</title>
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
            </nav>

            <!-- Topo do site -->
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
            <!-- Menu para Desktops -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="menu">
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

            <!-- Corpo do site -->  
            <div class="container">  
                <br>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Dados Pessoais</li>
                        <li class="breadcrumb-item" aria-current="page"><b>Dados Financeiros</b></li>
                        <li class="breadcrumb-item active">Confirmação</li>
                    </ol>
                </nav>
                <h1 id="destaques_tit"><font face="Eras ITC">Cadastro - Dados Financeiros</font></h1>
                <br>
                <form action="Confirmacao.php">
                    <div class="renda">
                        <h1 class="rend-tit"> <font face="Eras ITC">Renda</font> </h1>
                        <div class="form-row">
                            <div class="form-group col-sm-2">
                                <label for="inputEmail4">Salário(Fixo Mensal)</label>
                                <input type="" class="form-control" id="inputEmail4" placeholder="R$" required="required">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputPassword4">Extras</label>
                                <input type="password" class="form-control" id="inputPassword4" placeholder="R$" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="despesas">
                        <h1 class="despesas_tit"><font face="Eras ITC">Despesas</font></h1>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="inputCity">Luz</label>
                                <input type="text" class="form-control" id="inputCity" placeholder="R$" required="required">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputAddress">Água:</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="R$" required="required">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputAddress">Internet:</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="R$" required="required">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputAddress">Mercado:</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="R$" required="required">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="inputAddress">Outras Despesas:</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="Parcela Carro" required="required">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputAddress"> &nbsp;</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="R$" required="required">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="inputAddress">&nbsp;</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="Faculdade" required="required">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputAddress"> &nbsp;</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="R$" required="required">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="inputAddress">&nbsp;</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="Mensalidade Curso" required="required">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputAddress"> &nbsp;</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="R$" required="required">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Continuar</button>
                </form>
                <br>
            </div>  
        </main>

        <!-- Rodapé do site -->
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