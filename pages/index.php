<?php
    require_once '../services/data/supermercados.php';
    require_once '../services/data/restaurantes.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDine-Home</title>
    <!-- 
        ? Como combinado, utilizaremos dois arquivos CSS diferentes:
        * O primeiro deve ser o CSS da sua própria página (por exemplo, para a página produtos, tem o produtos.css)
        * O segundo é o CSS do header e do footer, que é reutilizável em todo o projeto (todas as páginas terão o mesmo cabeçalho e rodapé, portanto, não há  anecessidade de criar cada um deles em cada arquivo CSS).
    -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/header-and-footer.css">
    <!-- Este link é para conseguir os ícones com a tag i (ícone do instagram, whatsapp, etc.) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<!-- 
    Todo o conteúdo, dividido em articles, será colocado dentro da tag main, que representa o bloco do conteúdo principal da página. O main fica entre o header e o footer. 
-->
<body>
    <header id="topo">
        <h1 id="h1-sumir">IDine - Serviço de entrega</h1>
            <a href="index.php">
                <img src="../assets/img/icons/logo-branca.png" alt="Logo da IDine" id="img-logo">
            </a>
            <nav id="menu">
                <ul class="nav-list">
                    <li><a href="index.php" class="link-nav">Home</a></li>
                    <li><a href="produtos.php" class="link-nav">Refeições e Produtos</a></li>
                    <li><a href="produtos.php" class="link-nav">Restaurantes e Supermercados</a></li>
                    <li><a href="historia.php" class="link-nav">Sobre Nós</a></li>
                </ul>
            </nav>

            <a href="cadastro.php">
                <div class="btn-branco">Cadastrar</div>
            </a>
    </header>

    <main>
        <!-- Coloque o seu conteúdo aqui -->
        <section id="section-pesquisa" class="section">
            <div id="group-section">
                <h2>Comida boa e entrega rápida? É no IDine!</h2>
                <p class="subtitle">Experimente novos sabores. Receba no conforto de sua casa.</p>
                <div class="search-group">
                    <img src="../assets/img/icons/fork.png" alt="garfo e colher" id="icon-input">
                    <form action="produtos.php" method="post">
                        <input type="search" name="busca-comida" id="busca-comida" placeholder="o que você quer comer hoje?">
                        <button type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </section>

        <section id="section-sugestion">
            <img src="../assets/img/components/cafe-da-tarde.png" alt="café da tarde" id="img-sugestion" />
            <div class="title-subtitle">
              <h2 id="titulo"></h2>
              <p id="corpo"></p>
            </div>
            <a href="#" id="btn-sugestions">ver sugestões</a>
        </section>

        <section id="section-cards">
            <a href="#">
              <div class="card hamburguer">
                <div class="img"><span class="title">Restaurante</span></div>
      
                <div class="content">
                  <span class="view">Ver Opções</span>
                </div>
              </div>
            </a>
      
            <a href="#">
              <div class="card cart">
                <div class="img"><span class="title">Supermercado</span></div>
      
                <div class="content">
                  <span class="view">Ver Lojas</span>
                </div>
              </div>
            </a>
      
            <div class="card more" id="div-view-more">
              <div class="img" id="img-view-more"></div>
              <span class="title" id="span-more">Mais</span>
      
              <div class="content">
                <span class="view" id="caption-more">Mostrar mais</span>
              </div>
            </div>
        </section>

        <section id="section-hidden">
            <div class="hidden-container">
                <div class="hidden-card" id="bebidas">
                  <div class="hidden-img">
                   
                  </div>
                  <span>Bebidas</span>
                </div>
    
                <div class="hidden-card" id="farmacia">
                  <div class="hidden-img">
                   
                  </div>
                  <span>Farmácia</span>
                </div>
              
                <div class="hidden-card" id="pet-shop">
                  <div class="hidden-img">
                   
                  </div>
                  <span>Pet-Shop</span>
                </div>
            </div>
        </section>
        
        <section class="section-estabelecimentos">
            <div class="estabelecimentos-container">
                <div class="txt-restaurantes">
                    <h3 class="h3-estabelecimentos">Os melhores <br>Restaurantes</h3>
                </div>
                <?php
                    foreach ($restaurantes as $i => $restaurante) {
                ?>
                    <a href="detalhamento.php?i=<?=$i?>&array=restaurantes">
                    <div class="estabelecimento">
                        <img src="<?=$restaurante["imagem"]?>" alt="<?=$restaurante["nome"]?>">
                    </div>
                </a>
                <?php
                        if($i >= 3){
                            break;
                        }
                    }
                ?>

                <a href="produtos.php" title="Ver mais na Página Restaurantes">
                    <figure>
                        <img src="../assets/img/icons/more.png" alt="ver mais" class="btn-mais">
                        <figcaption class="fig-ver-mais">Ver tudo</figcaption>
                    </figure>
                    
                </a>
            </div>

        </section>

        <section class="section-estabelecimentos">

            <div class="estabelecimentos-container">
                <div class="txt-supermercados">
                    <h3 class="h3-estabelecimentos">Os melhores <br>Supermercados</h3>
                </div>
                <?php
                    foreach ($supermercados as $i => $supermercado) {
                ?>
                    <a href="detalhamento.php?i=<?=$i?>&array=supermercados">
                    <div class="estabelecimento">
                        <img src="<?=$supermercado["imagem"]?>" alt="<?=$supermercado["nome"]?>">
                    </div>
                </a>
                <?php
                        if($i >= 3){
                            break;
                        }
                    }
                ?>
                <a href="produtos.php" title="Ver mais na Página Supermercados">
                    <figure>
                        <img src="../assets/img/icons/more.png" alt="ver mais" class="btn-mais">
                        <figcaption class="fig-ver-mais">Ver tudo</figcaption>
                    </figure>
                </a>
            </div>

        </section>

    </main>

    <footer>
        <div id="footer_content">
            <div id="footer_contacts">
                <figure>
                    <img src="../assets/img/icons/logo-vermelho.png" alt="Logo da IDine" id="footer-logo">
                    <figcaption>Sabor e praticidade <br>na palma da mão.</figcaption>
                </figure>
                <div id="footer_social_media">
                    <a href="#" class="footer-link" id="whatsapp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>

                    <a href="#" class="footer-link" id="instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="#" class="footer-link" id="facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>

                    <a href="#" class="footer-link" id="twitter">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                </div>
            </div>
            
            <div class="footer-list">
                <h3>IDine</h3>
                <address>
                    Travessa dos Negócios,  nº 311 <br>
                    Claudinópolis/BR <br> CEP 06.450-902
                </address>
            </div>

            <ul class="footer-list">
                <li>
                    <h3>Parceiros</h3>
                </li>
                <li>
                    <a href="https://www.nobelpack.com.br/" target="_blank" class="footer-link">NobelPack</a>
                </li>
                <li>
                    <a href="https://www.ambev.com.br/" target="_blank" class="footer-link" >Ambev</a>
                </li>
                <li>
                    <a href="https://indrive.com/pt/city/" target="_blank" class="footer-link">InDrive</a>
                </li>
            </ul>

            <div id="footer_subscribe">
                <h3>Se inscreva</h3>

                <p>
                    Digite seu e-mail para receber atualizações diárias sobre promoções, eventos, etc.
                </p>

                <div id="input_group">
                    <input type="email" id="email" placeholder="seu e-mail...">
                    <button id="btn-email">
                        <i class="fa-regular fa-envelope"></i>
                    </button>
                </div>
                <p id="txt-email"></p> 
            </div>
        </div>

        <div id="footer_copyright">
            &#169 2023 todos os direitos reservados
        </div>
    </footer>

    <script src="../assets/js/script.js"></script>
</body>
</html>