const form = document.getElementById("form");
const username = document.getElementById("username");
const address = document.getElementById("address");
const password = document.getElementById("password");
const telephone = document.getElementById("telephone");

const h2 = document.getElementById("h2");
const message = document.getElementById("message");

form.addEventListener("submit", (e) => {
  e.preventDefault();
  checkInputs();
});

function checkInputs() {
  const usernameValue = username.value;
  const addressValue = address.value;
  const passwordValue = password.value;
  const telephoneValue = telephone.value;

  if (usernameValue === "") {
    setErrorFor(username, "O nome de usuário é obrigatório.");
  } else if(usernameValue.length < 7) {
    setErrorFor(username, "O nome de usuário deve ter 7 caracteres.");
  }else{
    setSucessFor(username);
  }

  if (addressValue === "") {
    setErrorFor(address, "O endereço é obrigatório.");
  } else {
    setSucessFor(address);
  }

  if (passwordValue === "") {
    setErrorFor(password, "A senha é obrigatória.");
  } else if (passwordValue.length < 7) {
    setErrorFor(password, "A senha precisa ter no mínimo 7 caracteres.");
  } else {
    strongPassword(passwordValue);
  }
  // (77) 99999-9999
  if (telephoneValue === "") {
    setErrorFor(telephone, "o endereço de telefone é obrigatório.");
  } else if (telephoneValue.length !== 14) {
    setErrorFor(telephone, "Coloque um número válido.(77) 99999-9999");
  } else {
    setSucessFor(telephone);
  }

  const formControls = form.querySelectorAll(".form-control"); // Seleciona todos os form-controls

  const formIsValid = [...formControls].every((formControl) => {
    // Transforma a variável form-controls em um array para usar o método every
    return formControl.className === "form-control sucess"; // Verifica se cada elemento possui a classe sucess
  });

  if (formIsValid) {
    form.style.display = "none";
    h2.innerText = "Conta criada com sucesso!";
    message.style.display = "block";
  }
}

function setErrorFor(input, message) {
  const formControl = input.parentElement; // Mostra quem é o elemento pai
  const small = formControl.querySelector("small");

  small.innerText = message;
  formControl.className = "form-control error";
}

function setSucessFor(input) {
  const formControl = input.parentElement;
  formControl.className = "form-control sucess"; // Adiciona a classe sucesso alterando o atributo className
}

function strongPassword(passwordValue) {
  var capitals = /[A-Z]/;
  var numbers = /[0-9]/;
  var specialCharacters = /[!|@|#|$|%|^|&|*|(|)|-|_]/;

  let haveCapitals = false,
    haveNumbers = false,
    haveSpecialCharacters = false;

  if (capitals.test(passwordValue)) {
    haveCapitals = true;
  } else {
    setErrorFor(password, "Insira maiúsculas, números e símbolos.");
  }

  if (numbers.test(passwordValue)) {
    haveNumbers = true;
  } else {
    setErrorFor(password, "Insira maiúsculas, números e símbolos.");
  }

  if (specialCharacters.test(passwordValue)) {
    haveSpecialCharacters = true;
  } else {
    setErrorFor(password, "Insira maiúsculas, números e símbolos.");
  }

  if (haveCapitals && haveNumbers && haveSpecialCharacters) {
    setSucessFor(password);
  }
}
