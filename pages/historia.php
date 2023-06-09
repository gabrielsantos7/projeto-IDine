<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre nós</title>
    
    <link rel="stylesheet" href="../assets/css/historia.css">
    <link rel="stylesheet" href="../assets/css/header-and-footer.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header id="topo">
        <h1 id="h1-sumir">IDine - Serviço de entrega</h1>
            <a href="index.php">
                <img src="../assets/img/icons/logo-branca.png" alt="Logo da IDine" id="img-logo">
            </a>
            <nav id="menu">
                <ul class="nav-list">
                    <li><a href="index.php" class="link-nav">Home</a></li>
                    <li><a href="produtos.php#div-refeicoes" class="link-nav">Refeições e Produtos</a></li>
                    <li><a href="produtos.php#div-restaurantes" class="link-nav">Restaurantes e Supermercados</a></li>
                    <li><a href="historia.php" class="link-nav">Sobre Nós</a></li>
                </ul>
            </nav>

            <a href="cadastro.php">
                <div class="btn-branco">Cadastrar</div>
            </a>
    </header>

    <main>

        <section>
            <div class="frase1">        
                <p id="fp1">Aqui, a comida é mais do que apenas uma refeição.</p>
                <img src="../assets/img/sobre/burguer.png" id="burguer"> 
            </div>
        </section>

        <section>
            <div class="frase2">  
            <img src="../assets/img/sobre/familia.png" id="familia">      
                <p>Cada refeição é uma oportunidade de criar momentos especiais.</p>
                 
            </div>
        </section>

        <section>
            <div class="frase3">         
                <p>Pediu? Entregou, estamos comprometidos em superar suas expectativas.</p>
                <img src="../assets/img/sobre/entrega.png" id="entregador">
            </div>
        </section>

        <section id="tela-cinza">
            <p id="historia">O iDine é uma plataforma inovadora que conecta usuários aos melhores restaurantes da cidade. Com uma interface amigável, oferece variedade de opções gastronômicas, avaliações de clientes e a possibilidade de compartilhar experiências. Descubra novos sabores e faça parte de uma comunidade apaixonada pela culinária.</p>
        </section>
        <div class="row">
            <div class="column">
        <a href="https://www.instagram.com/gabriel.santos65/">
            <section id="imagem-aluno1" class="img"><img src="../assets/img/sobre/gabriel.png"></section>
        </a>
          </div>
          <div class="column">
        <a href="https://www.instagram.com/sam.szmr/">
            <section id="imagem-aluno2" class="img"><img src="../assets/img/sobre/sam.png"></section>
        </a>
    </div>
    </div>
    <div class="row">
        <div class="column">
        <a href="https://www.instagram.com/_milaabrito/">
            <section id="imagem-aluno3" class="img"><img src="../assets/img/sobre/lud.png"></section>
        </a>
      </div>
      <div class="column">
        <a href="https://www.instagram.com/clmarqs/">
            <section id="imagem-aluno4" class="img"><img src="../assets/img/sobre/claudio.png"></section>
        </a>
    </div>
    </div>
    
    
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