let count = 1;
document.getElementById("radio1");

setInterval(function () {
  nextBloco();
}, 3000);

function nextBloco() {
  count++;
  if (count > 5) {
    count = 1;
  }

  document.getElementById("radio" + count).checked = true;
}