let elementoColuna = document.getElementById("wrapper");
let toggleButton = document.getElementById("menu-toggle");

toggleButton.onclick = function () {
  elementoColuna.classList.toggle("toggled");
};