<?php
    require_once '../services/data/supermercados.php';
    require_once '../services/data/restaurantes.php';
    require_once '../services/data/comidas.php';
    require_once '../services/data/produtos.php';
    require_once '../util/util.php'
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
            <a href="historia.php">
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
        <section id="section-container">
            <div id="detalhamento-container">
    <?php
        // * Verifica se foram passados o nome do array e seu índice
        if (isset($_GET['array']) && isset($_GET['i'])) {
            $arrayName = $_GET['array'];
            $index = $_GET['i'];

            /* 
               * Verifica se o array com o nome fornecido existe
               * O $$ se refere ao nome da variável, e não a seu valor
               * Logo, estou verificando se existe uma variável criada com o nome passado na URL 
            */
            if (isset($$arrayName)) {
                // * Se existir, atribui seu nome à variável array
                $array = $$arrayName;

                // * Verifica se o índice existe no array
                if (isset($array[$index])) {
                    $item = $array[$index];
                    $chaves = array_keys($item);
                    $valores = array_values($item);

                    /* 
                     * Percorre todas os elementos realizando as formatações necessárias
                     * O & permite que os próprios elementos do array sejam alterados durante a iteração
                    */
                    foreach ($chaves as &$chave) {                       
                        $chave = formatarChave($chave);
                    }
    ?>
            <div id="group-img">
                <img src="<?=$valores[5]?>" alt="<?=$valores[0]?>" id="img-produto">
                <h2 class="nome-principal"><?=$valores[0]?></h2>
            </div>
                
            <div class="group-txt">
                <div class="column-1">
                    <p><?=$chaves[1]?> : <?=isPreco($chaves[1], $valores[1])?></p>
                    <p><?=$chaves[2]?> : <?=$valores[2]?></p>
                    <p><?=$chaves[3]?> : <?=$valores[3]?></p>
                    <p><?=$chaves[4]?> : <?=$valores[4]?></p>
                </div>
            </div>
            <a href="produtos.php" id="btn-voltar">Voltar</a>
            </div>
            <?php
                } else {
                    echo "<h2 class='nome-principal'>Índice inválido para o array '$arrayName'.</h2>";
                }
            } else {
                echo "<h2 class='nome-principal'>O array não existe.</h2>";
            }
        } else {
            header("location: produtos.php");
            die;
        }
        ?>
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

</body>
</html>