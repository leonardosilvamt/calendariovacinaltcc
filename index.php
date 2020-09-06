<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="estilo-mobile.css">
    <link rel="icon" type="imagem/png" href="img/ze-gotinha-2.png" />
    <title>Calendário Vacinal</title>
</head>
<body>
    <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container menu">
                    <a class="navbar-brand 	d-block d-sm-none" href="#">Menu</a>
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Página inicial <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" href="duvida.html">Dúvidas</a>
                        </li>
                        <li lass="nav-item active">
                            <a class="nav-link active" href="sobre-nos.html">Sobre nós</a>
                        </li>
                    </ul>
                    </div>
                </div>   
            </nav> 

               <!-- 
            <div class="container">
                <div class="row">
                    <div class="col">
                      <img src="img/ze-gotinha-phone.png" alt="SmarthPhone">
                    </div>
                    <div class="col-6">
                      <p id="text-baixar-app" class="text-center">BAIXE AGORA NOSSO APLICATIVO PARA ANDROID</p>
                    </div>
                    <div class="col">
                      <img src="img/android.png" alt="Android">
                    </div>
                  </div>
            </div>
            -->
    </header>

    <section class="container">
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="cardOne">
                    <h2 id="h2-card-1" class="mb-0" onclick="adicionaDropup('h2-card-1')">
                        <button class="btn text-primary btn-block text-left dropdown-toggle" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            CRIANÇA
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="cardOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <!--INFO. CRIANCA-->
                        <div class="container">
                            <div id="info" class="row border border-primary p-3">
                                <p>Criança</p>
                                <p>É muito importante que os adultos mantenham suas vacinas em dia. Além de se proteger, a vacina também evita a transmissão para outras pessoas que não podem ser vacinadas. Imunizados, familiares podem oferecer proteção indireta a bebês que ainda não estão na idade indicada para receber algumas vacinas, além de outras pessoas que não estão protegidas. Veja lista de vacinas disponibilizadas a adultos de 20 a 59 anos:</p>
                            </div>
                            <?php
                                $conexao = mysqli_connect("localhost", "root", "123","calendariovacinal" ) or die ("Erro na conexão com banco de dados");
                                $string_sql = "SELECT * FROM crianca";
                                $result = mysqli_query($conexao, $string_sql);
                                $quanti = mysqli_num_rows($result);

                                while($reg = $result->fetch_array()){
                                    echo '<div class="row d-block border border-primary p-3">';
                                        echo '<h6 id="idade">'.$reg['idade'].'</h6>';
                                            echo "<ul>";
                                                echo $reg['vacina'];    
                                            echo "</ul>";
                                    echo '</div>';
                                }
                            ?>                      
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="card">
                <div class="card-header" id="cardTwo">
                    <h2 id="h2-card-2" class="mb-0" onclick="adicionaDropup('h2-card-2')">
                        <button class="btn text-primary btn-block text-left dropdown-toggle" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            ADOLESCENTE
                        </button>
                    </h2>
                </div>

                <div id="collapseTwo" class="collapse" aria-labelledby="cardTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <!--INFO. ADOLECENTE-->
                        <div class="container">
                            <div id="info" class="row border border-primary p-3">
                                <p>Adolescente</p>
                                <p>A caderneta de vacinação deve ser frequentemente atualizada. Algumas vacinas só são administradas na adolescência. Outras precisam de reforço nessa faixa etária. Além disso, doses atrasadas também podem ser colocadas em dia. Veja as vacinas recomendadas a adolescentes:</p>
                            </div>
                            <?php
                                //$conexao = mysqli_connect("localhost", "root", "123","calendariovacinal" ) or die ("Erro na conexão com banco de dados");
                                $string_sql = "SELECT * FROM adolescente";
                                $result = mysqli_query($conexao, $string_sql);
                                $quanti = mysqli_num_rows($result);

                                while($reg = $result->fetch_array()){
                                    echo '<div class="row d-block border border-primary p-3">';
                                        echo '<h6 id="idade">'.$reg['idade'].'</h6>';
                                            echo "<ul>";
                                                echo $reg['vacina'];    
                                            echo "</ul>";
                                    echo '</div>';
                                }
                            ?>                      
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="cardTwo">
                    <h2 id="h2-card-3" class="mb-0" onclick="adicionaDropup('h2-card-3')">
                        <button class="btn text-primary btn-block text-left dropdown-toggle" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            ADULTO
                        </button>
                    </h2>
                </div>

                <div id="collapseThree" class="collapse" aria-labelledby="cardTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <!--INFO. ADOLECENTE-->
                        <div class="container">
                            <div id="info" class="row border border-primary p-3">
                                <p>Adulto</p>
                                <p>É muito importante que os adultos mantenham suas vacinas em dia. Além de se proteger, a vacina também evita a transmissão para outras pessoas que não podem ser vacinadas. Imunizados, familiares podem oferecer proteção indireta a bebês que ainda não estão na idade indicada para receber algumas vacinas, além de outras pessoas que não estão protegidas. Veja lista de vacinas disponibilizadas a adultos de 20 a 59 anos:</p>
                            </div>
                            <?php
                                //$conexao = mysqli_connect("localhost", "root", "123","calendariovacinal" ) or die ("Erro na conexão com banco de dados");
                                $string_sql = "SELECT * FROM adulto";
                                $result = mysqli_query($conexao, $string_sql);
                                $quanti = mysqli_num_rows($result);

                                while($reg = $result->fetch_array()){
                                    echo '<div class="row d-block border border-primary p-3">';
                                        echo '<h6 id="idade">'.$reg['idade'].'</h6>';
                                            echo "<ul>";
                                                echo $reg['vacina'];    
                                            echo "</ul>";
                                    echo '</div>';
                                }
                            ?>                      
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="cardFour">
                    <h2 id="h2-card-4" class="mb-0" onclick="adicionaDropup('h2-card-4')">
                        <button class="btn text-primary btn-block text-left dropdown-toggle" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            IDOSO
                        </button>
                    </h2>
                </div>

                <div id="collapseFour" class="collapse" aria-labelledby="cardFour" data-parent="#accordionExample">
                    <div class="card-body">
                        <!--INFO. IDOSO-->
                        <div class="container">
                            <div id="info" class="row d-block border border-primary p-3">    
                                    <p>Idoso</p>
                                    <p>São quatro as vacinas disponíveis para pessoas com 60 anos ou mais, além da vacina anual contra a gripe:</p>  
                            </div>
                            <?php
                                //$conexao = mysqli_connect("localhost", "root", "123","calendariovacinal" ) or die ("Erro na conexão com banco de dados");
                                $string_sql = "SELECT * FROM idoso";
                                $result = mysqli_query($conexao, $string_sql);
                                $quanti = mysqli_num_rows($result);

                                while($reg = $result->fetch_array()){
                                    echo '<div class="row d-block border border-primary p-3">';
                                        echo '<h6 id="idade">'.$reg['idade'].'</h6>';
                                            echo "<ul>";
                                                echo $reg['vacina'];    
                                            echo "</ul>";
                                    echo '</div>';
                                }
                            ?>                      
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="cardFour">
                    <h2 id="h2-card-5" class="mb-0" onclick="adicionaDropup('h2-card-5')">
                        <button class="btn text-primary btn-block text-left dropdown-toggle" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            GESTANTE
                        </button>
                    </h2>
                </div>

                <div id="collapseFive" class="collapse" aria-labelledby="cardFive" data-parent="#accordionExample">
                    <div class="card-body">
                        <!--INFO. GESTANTE-->
                        <div class="container">
                            <div id="info" class="row d-block border border-primary p-3">    
                                    <p>Gestante</p>
                                    <p>A vacina para mulheres grávidas é essencial para prevenir doenças para si e para o bebê. Veja as vacinas indicadas para gestantes.</p>  
                            </div>
                            <?php
                                //$conexao = mysqli_connect("localhost", "root", "123","calendariovacinal" ) or die ("Erro na conexão com banco de dados");
                                $string_sql = "SELECT * FROM gestante";
                                $result = mysqli_query($conexao, $string_sql);
                                $quanti = mysqli_num_rows($result);

                                while($reg = $result->fetch_array()){
                                    echo '<div class="row d-block border border-primary p-3">';
                                        echo '<h6 id="idade">'.$reg['idade'].'</h6>';
                                            echo "<ul>";
                                                echo $reg['vacina'];    
                                            echo "</ul>";
                                    echo '</div>';
                                }
                            ?>                      
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </section>

    <footer class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <img id=""class="img-fluid mt-2"src="img/ze-gotinha-2.png" alt="Zé Gotinha"> 
                </div>
                <div class="col-sm">
                    <div id="itens-footer">
                        <p><a href="sobre-nos.html">Sobre nós</a>   </p>
                        <p><a href="duvida.html">Duvidas</a>   </p>
                    </div>
                </div>

                <div class="col-sm">
                    <div id="itens-footer">
                        <p><a href="#"> Página incial </a></p>   
                        <p><a href="#"></a> Baixe nosso aplicativo</a></p>
                    </div>    
                </div>
            </div>
            <h7 class="text-center pb-1 d-block text-white">Copyright © 2020 - Todos os direitos reservados</h7>
            
            <a id="by" class="text-center d-block" href="https://www.instagram.com/leonardosilvamt">developed by @leonardosilvamt</a>
           
        </div>
    </footer>
    
    
    
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="script.js"></script>

    <!--VLIBRAS-->
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
          <div class="vw-plugin-top-wrapper"></div>
        </div>
      </div>
      <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
      <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
      </script>
</body>
</html>