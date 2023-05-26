<?php
    require_once '../services/data/supermercados.php';
    require_once '../services/data/restaurantes.php';
    require_once '../services/data/comidas.php';
    require_once '../services/data/produtos.php';
    /*
    //Caso o índice i não tenha tenha sido passado pelo method GET execute...
    if (!isset($_GET["i"])) {
        // redideriona para index.php
        header("location: index.php");
        die; // mato a aplicação
    }

    $i = $_GET["i"];
    if (isset($funcionarios[$i])) {
        $f = $funcionarios[$i];
        
    }
    
    //echo "<pre>";
    //print_r($f);
    //echo "</pre>";
    //die; 

    <img src="../assets/img/products/coke.png" alt="Coke" class="img">
                    <div id="column1">
                        <h2 class="h2-card">Coca-cola</h2>
                        <p class="p-card">Preço: R$ 3,50</p>
                        <p class="p-card">Categoria: Bebida</p>
                        <p class="p-card">Marca: Coca-Cola</p>
                    </div>
                    <div id="column2">
                        <p class="p-card">Descrição: Uma bebida mundialmente famosa, reconhecida pelo seu sabor refrescante.</p>
                    </div>
    */

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhamento</title>

    <link rel="stylesheet" href="../assets/css/detalhamento.css">
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
        <section id="section-container">
            <div id="detalhamento-container">
                <div id="group-img">
                    <img src="../assets/img/products/coke.png" alt="coke" id="img-produto">
                    <h2>Coca-Cola</h2>
                </div>
                
                <div class="group-txt">
                    <div class="column-1">
                        <p>Preço: 4.99</p>
                        <p>Categoria: Bebida</p>
                        <p>Marca: Coca-Cola</p>
                    </div>
                    <div class="column-2">
                        <p>Descrição: Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore sed ex dolore, amet nam aspernatur eum nulla corporis sit omnis magnam odit? Fugiat rem iste iure vel ab exercitationem iusto!</p>
                    </div>
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

    <script src="../assets/js/script.js"></script>
</body>
</html>