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
    <link rel="stylesheet" href="../assets/css/header-and-footer.css">
    <link rel="stylesheet" href="../assets/css/produtos.css">
    <!-- Este link é para conseguir os ícones com a tag i (ícone do instagram, whatsapp, etc.) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<!-- 
    Todo o conteúdo, dividido em articles, será colocado dentro da tag main, que representa o bloco do conteúdo principal da página. O main fica entre o header e o footer. 
-->
<body>
    <header id="topo">
        <h1 id="h1-sumir">IDine - Serviço de entrega</h1>
            <a href="index.html">
                <img src="../assets/img/icons/logo-branca.png" alt="Logo da IDine" id="img-logo">
            </a>
            <nav id="menu">
                <ul class="nav-list">
                    <li><a href="produtos.php" class="link-nav">Refeições e Produtos</a></li>
                    <li><a href="produtos.php" class="link-nav">Restaurantes e Supermercados</a></li>
                    <li><a href="historia.php" class="link-nav">Sobre Nós</a></li>
                </ul>
            </nav>

            <a href="cadastro.html">
                <div class="btn-branco">Cadastrar</div>
            </a>
    </header>

    <main>
        <!-- Coloque o seu conteúdo aqui -->
        <section id="section-comentario" class="section">
            <div id="group-section">
                <h2 id="text-comentario">Comentários</h2>
                <hr class="linha-personalizada">
                <div class="coment-group">
                    <img src="../assets/img/components/user-cometario.png" alt="Foto de Usuário" id="ft-usuario">
                    <h4>@thiago_m</h4>
                    <img src="../assets/img/components/star_icon.png" alt="Estrelas" id="icon-estrela">
                    <p id="text-avaliacao">5.0</p>
                </div>
                    <p id="text-coment">"Acabei de ter uma experiência incrível no restaurante Caseirino que conheci aqui na plataforma. Não posso deixar de compartilhar o quanto estou impressionado com a qualidade da comida e o serviço impecável que recebi. O restaurante tem um ambiente acolhedor e elegante, perfeito para um jantar romântico ou uma celebração especial. 🗿🍷”</p>
                
            </div>
        </section>

        <section class="section-estabelecimentos">
            <div class="estabelecimentos-container">
                <div class="txt-restaurantes">
                    <h3 class="h3-estabelecimentos">Restaurantes</h3>
                </div>
                <div class="blocos">
                    <div class="estabelecimento">
                        
                    </div>
                    <div class="estabelecimento">
                        
                    </div>
                    <div class="estabelecimento">
                        
                    </div>
                    <div class="estabelecimento">
                    
                    </div>
                </div>

                <a href="#">
                    <img src="../assets/img/icons/right-arrow.png" alt="ver mais">
                </a>
            </div>

        </section>

        <section class="section-estabelecimentos">
            <div class="estabelecimentos-container">
                <div class="txt-supermercados">
                    <h3 class="h3-estabelecimentos">Supermercados</h3>
                </div>
                <div class="blocos">
                    <div class="estabelecimento">
                        
                    </div>
                    <div class="estabelecimento">
                        
                    </div>
                    <div class="estabelecimento">
                        
                    </div>
                    <div class="estabelecimento">
                    
                    </div>
                </div>

                <a href="#">
                    <img src="../assets/img/icons/right-arrow.png" alt="ver mais">
                </a>
            </div>

        </section>
        
        <section class="section-anuncio">
            <div class="img-anuncio">
                <img src="../assets/img/components/anuncio01.jpg" alt="Imagem do anuncio" id="anuncio01">
                <img src="../assets/img/components/anuncio02.jpeg" alt="Imagem do anuncio" id="anuncio02">
            </div>
        </section>

        <section class="section-estabelecimentos">
            <div class="estabelecimentos-container">
                <div class="txt-refeicoes">
                    <h3 class="h3-estabelecimentos">Refeições</h3>
                </div>
                <div class="blocos">
                    <div class="estabelecimento">
                        
                    </div>
                    <div class="estabelecimento">
                        
                    </div>
                    <div class="estabelecimento">
                        
                    </div>
                    <div class="estabelecimento">
                        
                    </div>
                </div>
                <a href="#">
                    <img src="../assets/img/icons/right-arrow.png" alt="ver mais">
                </a>
            </div>

        </section>

        <section class="section-estabelecimentos">
            <div class="estabelecimentos-container">
                <div class="txt-produtos">
                    <h3 class="h3-estabelecimentos">Produtos</h3>
                </div>
                <div class="blocos">
                    <div class="estabelecimento">
                        
                    </div>
                    <div class="estabelecimento">
                        
                    </div>
                    <div class="estabelecimento">
                        
                    </div>
                    <div class="estabelecimento">
                        
                    </div>
        </div>
                <a href="#">
                    <img src="../assets/img/icons/right-arrow.png" alt="ver mais">
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