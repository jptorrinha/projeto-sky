<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="js/plugins/swiper/swiper.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Assista Filmes e Séries em Qualquer Lugar | SKY Play</title>
  </head>
  <body>

    <header>
      <div class="container">
        <div class="header">
          <div class="row">
            <div class="col-6 col-md-2">
              <h1 class="logo-brand">
                <a href="index.html" class="logo"></a>
              </h1>
            </div>
            <div class="col-6 col-md-10 ">
              <div class="m-menu">
                <i class="fas fa-bars"></i>
              </div>
              <div class="complement">
                <div class="row">
                  <div class="col-md-6">
                    <div class="nav-acessibility">
                      <ul>
                        <li>
                          <a href="#">
                            <i class="fas fa-adjust"></i>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fas fa-minus"></i>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fas fa-plus"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="nav-acount">
                      <ul>
                        <li>
                          <a href="#">
                            <i class="fas fa-user"></i>  Entrar
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <nav>
      <div class="menu-categorias">
        <div class="container-fluid">
          <div class="row">
            <div class="col-4 item-menu active">
              <span class="item">Filmes</span>
            </div>
            <div class="col-4 item-menu">
              <span class="item">Séries</span>
            </div>
            <div class="col-4 item-menu">
              <span class="item">Canais</span>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <main>
      <div class="carrossel-highlight">
        <div class="swiper-container highlight">
          <div class="swiper-wrapper" id="highlight"></div>
          <!-- Add Pagination -->
          <div class="swiper-pagination"></div>
          <!-- Add Arrows -->
          <div class="swiper-button swiper-button-next">
            <i class="fas fa-arrow-right"></i>
          </div> 
          <div class="swiper-button swiper-button-prev">
            <i class="fas fa-arrow-left"></i>
          </div>
        </div>
      </div>

      <div class="carrossel-portrait">
        <h3 id="title-portrait"></h3>
        <div class="swiper-container portrait">
          <div class="swiper-wrapper" id="portrait"></div>
          <!-- Add Arrows -->
          <div class="swiper-button swiper-button-next swiper-button-next-portrait">
            <i class="fas fa-chevron-right"></i>
          </div> 
          <div class="swiper-button swiper-button-prev swiper-button-prev-portrait">
            <i class="fas fa-chevron-left"></i>
          </div>
        </div>
      </div>
    </main>

    <footer>
      <div class="header-footer">
        <div class="container">
          <div class="row">
            <div class="col-4 col-md-6">
              <div class="logo-footer">
                <img src="imagens/sky-light-default.svg" alt="">
              </div>
            </div>
            <div class="col-8 col-md-6">
              <div class="social-footer">
                <a class="sky_icon" href="http://www.facebook.com/pages/SKY-Brasil/85873897214?ref=ts" target="_blank" title="Facebook Sky">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a class="sky_icon" href="http://twitter.com/skybrasil" target="_blank" title="Twitter Sky">
                  <i class="fab fa-twitter"></i>
                <a class="sky_icon" href="http://www.youtube.com/user/skyhdtv" target="_blank" title="YouTube Sky">
                  <i class="fab fa-youtube"></i>
                </a>
                <a class="sky_icon" href="http://instagram.com/skybrasil" target="_blank" title="Instagram Sky">
                  <i class="fab fa-instagram"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="middle-footer">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-12 col-xl-6">
              <a href="#">
                <div class="minha-sky">
                  <div class="icon-minha-sky">
                    <img src="imagens/minha-sky.svg" alt="">
                  </div>
                  <div class="text-minha-sky">Baixe no seu celular o app Minha SKY e divirta-se.</div>
                </div>
              </a>

              <div class="icons-store-app">
                <div class="icon-store apple">
                  <a href="#"></a>
                </div>
                <div class="icon-store google">
                  <a href="#"></a>
                </div>
              </div>

            </div>
            <div class="col-12 col-md-6 col-xl-3">
              <h3>Sobre</h3>
              <ul class="menu-footer-vertical">
                <li>
                  <a href="#">Nossa história</a>
                </li>
                <li>
                  <a href="#">Imprensa</a>
                </li>
                <li>
                  <a href="#">Prêmios conquistados</a>
                </li>
                <li>
                  <a href="#">Credenciamento</a>
                </li>
                <li>
                  <a href="#">Trabalhe com a gente</a>
                </li>
                <li>
                  <a href="#">Promoção</a>
                </li>
              </ul>

              <h3>Ajuda</h3>
              <ul class="menu-footer-vertical">
                <li>
                  <a href="#">Central de ajuda</a>
                </li>
                <li>
                  <a href="#">Manuais</a>
                </li>
              </ul>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
              <h3>Nossas responsabilidades</h3>
              <ul class="menu-footer-vertical">
                <li>
                  <a href="#">Conselho aos usuários</a>
                </li>
                <li>
                  <a href="#">Pesquisa Anatel</a>
                </li>
                <li>
                  <a href="#">Relatórios de transparência</a>
                </li>
                <li>
                  <a href="#">Responsabilidade Social</a>
                </li>
                <li>
                  <a href="#">Acessibilidade</a>
                </li>
              </ul>
              <h3><a href="#">SKY Empresas</a></h3>
            </div>
          </div>
        </div>
      </div>

      <div class="menu-institucional">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <a href="index.php">Início</a> | <a href="https://www.sky.com.br/politica-de-privacidade">Política de Privacidade</a> | <a href="https://www.sky.com.br/contratos">Contratos gerais</a> | <a href="https://www.sky.com.br/sky-pre-pago/documentos-juridicos">Contratos Pré-pago</a> | <a href="https://www.sky.com.br/minha-sky/cancelar-assinatura">Cancelamento</a> | <a href="https://www.sky.com.br/ouvidoria">Ouvidoria</a> | <a href="https://www.sky.com.br/minha-sky/consumidor">Consumidor.gov</a>
            </div>
          </div>
        </div>
      </div>

      <div class="copy-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <p>® Todos os direitos reservados 2020. Todas as marcas SKY e qualquer propriedade intelectual inserida nelas são de propriedade da SKY Internacional AG e usadas pela SKY Serviços de Banda Larga LTDA. mediante licença.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- plugins JavaScript -->
    <script src="js/plugins/swiper/swiper.min.js"></script>
    <!-- internal JavaScript -->
    <script src="js/app.js"></script>
  </body>
</html>