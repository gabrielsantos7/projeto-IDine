// Para manipular os elementos da sugestão
let titulo = document.getElementById("titulo");
let corpo = document.getElementById("corpo");
let img = document.getElementById("img-sugestion");
// Para manipular os elementos do card ver mais
let divRotate = document.getElementById("div-view-more");
let imgRotate = document.getElementById("img-view-more");
let spanMore = document.getElementById("span-more");
let captionMore = document.getElementById("caption-more");
// Para manipular os elementos da hidden-section
let sectionHidden = document.getElementById("section-hidden");

// atualizar a página com as sugestões apropriadas
function atualizarSugestoes() {
  let data = new Date();
  let hora = data.getHours();

  if (hora >= 4 && hora < 11) {
    titulo.innerText =
      "Acabou de acordar? Que tal começar o dia com um café da manhã delicioso?";
    corpo.innerText =
      "Nossa seleção de pães, bolos e frutas frescas vai fazer você começar o dia com o pé direito. Não perca tempo e escolha agora mesmo seu café da manhã favorito em nosso cardápio.";
    img.setAttribute("src", "../assets/img/components/salgados.jpg");
  } else if (hora >= 11 && hora < 14) {
    titulo.innerText = "Hora do almoço! E aí, já sabe o que pedir?";
    corpo.innerText =
      "Temos diversas opções de pratos quentes, saladas, sanduíches e muito mais para você escolher. Todos os nossos pratos são preparados com ingredientes frescos e selecionados para garantir o melhor sabor. Confira agora mesmo o nosso cardápio de almoço e escolha sua refeição favorita.";
    img.setAttribute("src", "../assets/img/components/almoco.jpeg");
  } else if (hora >= 14 && hora < 19) {
    titulo.innerText = "Chegou a hora daquela pausa merecida pro cafézinho!";
    corpo.innerText =
      "Temos uma variedade de opções de bolos, tortas, salgados e bebidas quentes e frias para acompanhar. Nossos produtos são frescos e preparados com muito carinho para deixar sua tarde ainda mais gostosa. Escolha agora mesmo suas opções favoritas em nosso cardápio.";
    img.setAttribute("src", "../assets/img/components/cafe-da-tarde.png");
  } else {
    titulo.innerText =
      "Nada como um jantar delicioso depois de um dia de trabalho duro.";
    corpo.innerText =
      "Temos diversas opções de pratos quentes, saladas, lanches e muito mais para você escolher. Todos os nossos pratos são preparados com ingredientes frescos e selecionados para garantir o melhor sabor. Confira agora mesmo o nosso cardápio de jantar e escolha sua refeição favorita. Bom apetite!";
    img.setAttribute("src", "../assets/img/components/hamburguer-e-pizza.jpg");
  }
}

divRotate.addEventListener("click", function () {
  if (imgRotate.classList.contains("rotate")) {
    imgRotate.classList.remove("rotate");
    spanMore.innerText = "Mais";
    captionMore.innerText = "Mostrar mais";
    sectionHidden.style.display = "none";
  } else {
    imgRotate.classList.add("rotate");
    spanMore.innerText = "Menos";
    captionMore.innerText = "Mostrar menos";
    sectionHidden.style.display = "block";
  }

});

window.onload = function () {
  atualizarSugestoes();
  setInterval(atualizarSugestoes, 60000); // atualizar a cada 1 minuto
};
