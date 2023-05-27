# Projeto-IDine🍔🛵

Projeto final da primeira unidade na disciplina de Programação Web II, ministrada pelo professor [Thiago Miranda](https://github.com/mirandathiago "Github do professor Thiago"). Fizemos um conjunto de páginas que simula uma plataforma de delivery de alimentos, semelhante ao iFood.

## Descrição 📝

O Projeto-IDine consiste em um site para a empresa de delivery de alimentos IDine, inspirada no iFood. O objetivo principal é exibir os produtos utilizando PHP por meio de arrays multidimensionais e associativos. O site possui as seguintes funcionalidades:

* Permitir o usuário pesquisar na página principal o nome de alguma comida, e informar se há alguma correspondência no array.
* Mostrar um item específico, independentemente do array a que pertence.
* Listar todos os itens dos arrays usando o `foreach`.
* Atualizar a sugestão de refeição na página principal de acordo com o horário.
* Página de cadastro com validação no formulário.

## Organização de pastas e arquivos📂

Segue abaixo a estruturação de pastas, com o objetivo de facilitar a organização do projeto e sua manutenção. Os arquivos já estão organizados por ordem alfabética.

```markdown
projeto-idine/
│
├── assets/
│   ├── css/
│   │   ├── cadastro.css  			⚙️ CSS específico da página de cadastro
│   │   ├── detalhamento.css  			⚙️ CSS específico da página de detalhamento
│   │   ├── header-and-footer.css  		⚙️ CSS reutilizável para o cabeçalho e rodapé
│   │   ├── historia.css  			⚙️ CSS específico da página de história
│   │   ├── produtos.css  			⚙️ CSS específico da página de produtos
│   │   └── style.css  				⚙️ CSS principal do projeto
│   │   
│   ├── img/
│   │   ├── components/   			🖼️ Pasta para os componentes estáticos do site
│   │   ├── icons/   				🖼️ Pasta para ícones e logos
│   │   ├── products/ 				🖼️ Pasta para imagens dos produtos
│   │   └── sobre/    				🖼️ Imagens da página historia.php
│   │  
│   └── js/
│       ├── form.js  				⚙️ JavaScript da página cadastro
│       ├── produtos.js  			⚙️ JavaScript da página produtos
│       └── script.js				⚙️ JavaScript principal do projeto
│
├── pages/
│   ├── cadastro.php     			📄 Página de cadastro
│   ├── detalhamento.php     			📄 Página de exibição individual de um item
│   ├── historia.php     			📄 Página sobre a história da empresa
│   ├── index.php     				📄 Página principal do projeto
│   └── produtos.php     			📄 Página de exibição dos produtos
│
├── services/
│   └── data/
│       ├── comidas.php 				🗃️ Array associativo de comidas
│       ├── produtos.php  				🗃️ Array associativo de produtos
│       ├── restaurantes.php  				🗃️ Array associativo de restaurantes
│       └── supermercados.php  				🗃️ Array associativo de supermercados
│
├── util/
│   └── utils.php     					🔧 Funções utilitárias do projeto
│
└── README.md         					📖 Arquivo de documentação do projeto
```

## Como Executar o Projeto ▶️

Para executar o Projeto-IDine, siga as instruções abaixo:

1. Faça o download dos arquivos do projeto para o seu computador.
2. Configure um ambiente de desenvolvimento PHP, como o XAMPP ou WAMP, para executar o projeto localmente.
3. Mova os arquivos do projeto para o diretório apropriado do servidor web local.
4. Inicie o servidor web local e acesse o projeto através do seu navegador, utilizando o endereço local correspondente.

## Licença 📜

Este projeto está licenciado sob a [Licença MIT](https://opensource.org/licenses/MIT). Consulte o link para obter mais informações.

## Imagem da Página Principal🖼️

![Página Principal](https://i.postimg.cc/CKLr6MK7/IDine-Home.png)
