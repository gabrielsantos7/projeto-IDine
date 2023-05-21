# Projeto-IDine🍔🛵

Projeto final da primeira unidade na disciplina de Programação Web II, ministrada pelo professor [Thiago Miranda](https://github.com/mirandathiago "Github do professor Thiago"). Fizemos um conjunto de páginas que simula uma plataforma de delivery de alimentos, semelhante ao iFood.

## Descrição 📝

O projeto consiste na construção de um site para empresa do ramo de delivery de alimentos, inspirada no iFood. O objetivo principal do projeto é exibir os produtos utilizando PHP por meio de arrays multidimensionais e associativos, assim como a construção de uma página mais detalhada sobre cada produto.

# Organização de pastas e arquivos📂

Segue abaixo a estruturação de pastas, com o objetivo de facilitar a organização do projeto e sua manutenção. Logo, é muito importante saber sobre a organização para **não sair colocando arquivos no lugar errado.** A seguir está uma explicação sobre cada pasta principal e suas subpastas. Caso tenham alguma dúvida, me procurem antes de fazer qualquer modificação.

```markdown
projeto-idine/
│
├── assets/
│   ├── css/
│   │   ├── style.css  				⚙️ CSS principal do projeto
│   │   ├── header-and-footer.css  		⚙️ CSS reutilizável para o cabeçalho e rodapé
│   │   ├── produtos.css  			⚙️ CSS específico da página de produtos
│   │   ├── historia.css  			⚙️ CSS específico da página de história
│   │   ├── cadastro.css  			⚙️ CSS específico da página de cadastro
│   │   └── produto.css  			⚙️ CSS específico da página 4
│   ├── js/
│   │   ├── script.js  				⚙️ JavaScript principal do projeto
│   │   └── produtos.js   			⚙️ JavaScript específico da página de produtos
│   └── img/
│       ├── icons/   				🖼️ Pasta para ícones e logos
│       ├── products/     			🖼️ Pasta para imagens dos produtos
│       └── components/   			🖼️ Pasta para os componentes estáticos do site
│
├── pages/
│   ├── index.php     				📄 Página principal do projeto
│   ├── produtos.php     			📄 Página de exibição dos produtos
│   ├── historia.php     			📄 Página sobre a história da empresa
│   ├── cadastro.php     			📄 Página de cadastro
│   └── produto.php     			📄 Página de exibição individual de um produto
│
├── services/
│   └── data/
│       ├── produtos.php  			🗃️ Array associativo de produtos
│       ├── comidas.php 			🗃️ Array associativo de comidas
│       ├── supermercados.php  			🗃️ Array associativo de supermercados
│       └── restaurantes.php  			🗃️ Array associativo de restaurantes
│
├── util/
│   └── utils.php     				🔧 Funções utilitárias do projeto
│
└── README.md         				📖 Arquivo de documentação do projeto
```

## 📁 assets

A pasta `assets` contém os arquivos estáticos do projeto, como imagens, arquivos CSS e JavaScript e fontes. São todos os arquivos adicionais que a página precisa para funcionar corretamente. Estes são agrupados em subpastas, de acordo com seu tipo:

### 📁 css

Arquivos CSS utilizados pelo projeto, divididos por página, e um arquivo principal (`style.css`) que reúne estilos compartilhados.

### 📁 js

Arquivos JavaScript utilizados pelo projeto, divididos por página, e um arquivo principal (`script.js`) que reúne funções compartilhadas.

### 📁 img

Imagens utilizadas pelo projeto, divididas por tipo: ícones e logos na pasta `icons/`, imagens de produtos na pasta `products/`, e outros componentes na pasta `components/`.

## pages📄

A pasta `pages` contém as páginas do projeto, separadas em arquivos PHP ou HTML.

## util🛠️

A pasta `util` contém funções utilitárias do projeto, se necessário.

## Como Executar o Projeto ▶️

Para executar o projeto iDine, siga as instruções abaixo:

1. Faça o download dos arquivos do projeto para o seu computador.
2. Configure um ambiente de desenvolvimento PHP, como o XAMPP ou WAMP, para executar o projeto localmente.
3. Mova os arquivos do projeto para o diretório apropriado do servidor web local.
4. Inicie o servidor web local e acesse o projeto através do seu navegador, utilizando o endereço local correspondente.

## Licença 📜

Este projeto está licenciado sob a [Licença MIT](https://opensource.org/licenses/MIT). Consulte o link para obter mais informações.
