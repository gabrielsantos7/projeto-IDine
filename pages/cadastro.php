<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta</title>

    <link rel="stylesheet" href="../assets/css/cadastro.css">
    <link rel="stylesheet" href="../assets/css/header-and-footer.css">
    <!-- Este link é para conseguir os ícones com a tag i (ícone do instagram, whatsapp, etc.) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header id="topo">
        <h1 id="h1-sumir">IDine - Serviço de entrega</h1>
            <a href="historia.html">
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
        <section id="section-container">
            <div class="container">
                <div class="header">
                    <h2 id="h2">Criar uma conta</h2>
                </div>

                <form id="form" class="form">
                    <div class="form-control">
                        <label for="username">Nome de usuário</label>
                        <input
                            type="text"
                            id="username"
                            placeholder="Digite seu nome de usuário..."
                        />
                        <i class="fas fa-exclamation-circle"></i>
                        <i class="fas fa-check-circle"></i>
                        <small>Mensagem de erro</small>
                    </div>

                    <div class="form-control">
                        <label for="address">Endereço</label>
                        <input type="text" id="address" placeholder="Digite seu Endereço.." />
                        <i class="fas fa-exclamation-circle"></i>
                        <i class="fas fa-check-circle"></i>
                        <small>Mensagem de erro</small>
                    </div>

                    <div class="form-control">
                        <label for="password">Senha</label>
                        <input
                            type="password"
                            id="password"
                            placeholder="Digite sua senha..."
                        />
                        <i class="fas fa-exclamation-circle"></i>
                        <i class="fas fa-check-circle"></i>
                        <small>Mensagem de erro</small>
                    </div>

                    <div class="form-control">
                        <label for="telephone">Telefone</label>
                        <input
                            type="text"
                            id="telephone"
                            placeholder="Digite seu número..."
                        />
                        <i class="fas fa-exclamation-circle"></i>
                        <i class="fas fa-check-circle"></i>
                        <small>Mensagem de erro</small>
                    </div>

                    <button type="submit" id="button">ENVIAR</button>
                </form>

                <div id="message">
                    <img src="../assets/img/components/loading.gif" alt="sucessful" id="load-gif"/>
                    <a href="index.php" id="btn-voltar">Voltar para página principal</a>
                </div>
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

    <script src="https://kit.fontawesome.com/bf55e3f711.js" crossorigin="anonymous"></script>
    <script src="../assets/js/form.js"></script>
</body>
</html>