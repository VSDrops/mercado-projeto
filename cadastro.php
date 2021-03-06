<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Normalize CSS-->
    <link rel="stylesheet" href="css/normalize.css" type="text/css">

    <!--Custom Style-->
    <link rel="stylesheet" href="css/style.css" type="text/css">

    
    <title>NOSE - Web Mercado!</title>


      <link rel="icon" href="img/mini-logo-2.png"> <!-- Exibe o Logotipo junto com o titulo-->
	  
  </head>

  <body>

    <header><!--Navbar-->
        <nav class="navbar navbar-expand-md navbar-light fixed-top navbar-transparente"><!--a navbar se expande quando atingir o break md e fica fixa no topo-->
            <div class="container">

                <a href="index.html" class="navbar-brand"><!--Logotipo-->
                    <img src="img/logo-navbar.png" width="142">
                </a>

                <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
                    <i class="fas fa-bars text-white"></i>
                </button>

                <div class="collapse navbar-collapse" id="nav-principal">

                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a href="index.html" class="nav-link">Home</a>
                        </li>

                        <li class="nav-item">
                            <a href="index.html#localizacao" class="nav-link">Localização</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="index.html#contatos" class="nav-link">Contatos</a>
                        </li>

                        <li class="nav-item">
                            <a href="produtotabelas.html" class="nav-link">Produtos</a>
                        </li>
                        
                        <li class="nav-item divisor"></li>

                        <li class="nav-item">
                            <a href="formcadped.html" class="btn btn-outline-info">Cadastre-se</a>
                        </li>

                        <li class="nav-item mx-2">
                            <a href="login.html" class="btn btn-outline-success">Entrar</a>
                        </li>

                    </ul>

                </div>

          </div>
        </nav>
    </header><!--Navbar-->

    <main id="main">
        
        <section>
            
            <div class="container mb-5"><!--Container formulario-->

                <div class="row justify-content-center">
                    
                    <div class="col-sm-12 col-md-10 col-lg-8">

                        <form action="registro.php" method="POST"><!--Inicio Formulario responsivo-->
                            <fieldset class="cadastro-cliente fundo-form">
                                <legend>Cadastro de Cliente</legend>

                                <div class="form-row">

                                    <div class="form-group col-sm-4">
                                        <label for="nome">Nome:</label>
                                        <input class="form-control" id="nome" name="nome" type="text" placeholder="João da Silva Santos"  autofocus maxlength="50"><!--maxlenght define o tamanho maximo de caracteres-->    
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="data">Data de Nascimento:</label>
                                        <input class="form-control" id="data" type="date" name="data" size="8" maxlength="8" >
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="cpf">CPF:</label>
                                        <input class="form-control"  type="text" size="11" maxlength="11" placeholder="123.356.789-10 " name="cpf">
                                    </div>

                                

                                    <div class="form-group col-sm-4">
                                        <label for="sex">Sexo:</label>
                                        <input  type="radio" name="sexo" value="Masculino">Masc
                                        <input  type="radio" name="sexo" value="Feminino">Fem
                                    </div>

                                    <div class="form-group col-sm-4">

                                        <label for="email">Email:</label>
                                        <input class="form-control" type="email" name="email" placeholder="123deoliveira4@hotmail.com" >

                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="cel">Cel:</label>
                                        <input class="form-control" type="text" placeholder="91234-5678" size="11" maxlength="11" name="cell" >
                                    </div>

                                </div>
                                <legend>Endereço para entrega</legend>
                                
                                <div class="form-row">
                                    
                                    <div class="form-group col-sm-6">
                                        <label for="rua">Logradouro:</label>
                                        <input class="form-control" type="text" maxlength="50" placeholder="Rua da Consolação" name="logradouro" >
                                    </div>

                                    <div class="form-group col-sm-2">
                                        <label for="numero">Numero:</label>
                                        <input class="form-control" type="number" name="numero"  max="10000" maxlength="10000" placeholder="105" >
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="bairro">Bairro:</label>
                                        <input class="form-control" type="text" maxlength="50" placeholder="Bela-Vista" name="bairro" >
                                    </div>

                                    <div class="form-group col-sm-5">
                                        <label for="cidade">Cidade:</label>
                                        <input class="form-control" type="text" maxlength="50" placeholder="São Paulo" name="cidade" >
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="estados">Estado:</label>
                                        <select class="form-control" name="estado" >
                                        <option name="estado" value="Acre">Acre (AC)</option>
                                        <option name="estado" value="Alagoas">Alagoas (AL)</option>
                                        <option name="estado" value="Amapa">Amapá (AP)</option>
                                        <option name="estado" value="Amazonas">Amazonas (AM)</option>
                                        <option name="estado" value="Bahia">Bahia (BA)</option>
                                        <option name="estado" value="Ceara">Ceará (CE)</option>
                                        <option name="estado" value="Distrito Federal">Distrito Federal (DF)</option>
                                        <option name="estado" value="Espirito Santo">Espírito Santo (ES)</option>
                                        <option name="estado" value="Goias">Goiás (GO)</option>
                                        <option name="estado" value="Maranhao">Maranhão (MA)</option>
                                        <option name="estado" value="Mato Grosso">Mato Grosso (MT)</option>
                                        <option name="estado" value="Mato Grosso do Sul">Mato Grosso do Sul (MS)</option>
                                        <option name="estado" value="Minas Gerais">Minas Gerais (MG)</option>
                                        <option name="estado" value="Para">Pará (PA)</option>
                                        <option name="estado" value="Paraiba">Paraíba (PB)</option>
                                        <option name="estado" value="Parana">Paraná (PR)</option>
                                        <option name="estado" value="Pernambuco">Pernambuco (PE)</option>
                                        <option name="estado" value="Piaui">Piauí (PI)</option>
                                        <option name="estado" value="Rio de Janeiro">Rio de Janeiro (RJ)</option>
                                        <option name="estado" value="Rio Grande do Norte">Rio Grande do Norte (RN)</option>
                                        <option name="estado" value="Rio Grande do Sul">Rio Grande do Sul (RS)</option>
                                        <option name="estado" value="Rondonia">Rondônia (RO)</option>
                                        <option name="estado" value="Roraima">Roraima (RR)</option>
                                        <option name="estado" value="Santa Catarina">Santa Catarina (SC)</option>
                                        <option name="estado" value="Sao Paulo">São Paulo (SP)</option>
                                        <option name="estado" value="Sergipe">Sergipe (SE)</option>
                                        <option name="estado" value="Tocantins">Tocantins (TO)</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-sm-3">
                                        <label for="cep">CEP:</label>
                                        <input class="form-control" type="number" placeholder="01314-001" size="8" maxlength="8" name="cep">
                                    </div>

                                </div>

                                <button type="submit" class="btn btn-outline-success col-12"  >Cadastrar</button>
                                
                            </fieldset>
                        </form><!--Fim formulario-->

                    </div>

                </div>

            </div><!--/fim formulario-->
        
        </section>

    </main>

    <footer id="rodape"><!--Rodapé-->
        <div class="container">
            <div class="row">
              <div class="col-4">
  
                  <div class="d-flex">
                      <a href="index.html"><img src="img/logo-navbar.png" width="100"></a>
                  </div>
              </div>
  
              <div class="col-md-4 d-none d-md-block">
                
                  <ul class="navbar-nav ml-5">
                      <li><a href="index.html">Home</a></li>
                      <li><a href="index.html#localizacao">Localização</a></li>
                      <li><a href="produtotabelas.html">Produtos</a></li>
                      <li><a href="formcadped.html">Contatos</a></li>      
                  </ul>
              </div>
  
              <div class="col-4">
                  
                  
                  <div class="d-flex mt-2">
  
                      <h5 class="ttexto">Siga o NOSE nas redes-sociais:</h5>
                      
                      <a href="" class="btn btn-outline-light ml-2">
                        <i class="fab fa-facebook fa-lg"></i>
                      </a>
        
                      <a href="" class="btn btn-outline-light ml-2">
                        <i class="fab fa-twitter fa-lg"></i>
                      </a>
        
                      <a href="" class="btn btn-outline-light ml-2">
                        <i class="fab fa-youtube fa-lg"></i>
                      </a>
        
                      <a href="https://api.whatsapp.com/send?phone=5511966356000" class="btn btn-outline-light ml-2">
                          <i class="fab fa-whatsapp"></i>
                      </a>
        
                </div>
              </div>
              
          </div>
        </div>
  </footer><!--/Rodapé-->
  
  
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="js/pagescript.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<!--<script src="../Projeto-WebMercado-main/js/cadastro.js">-->
  </body>
</html>