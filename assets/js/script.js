let elementoColuna = document.getElementById("wrapper");
let toggleButton = document.getElementById("menu-toggle");

toggleButton.onclick = function () {
  elementoColuna.classList.toggle("toggled");
};

let pathName = window.location.pathname.replace(window.location.pathname, '/dashboardGestao')
let baseUrl = window.location.origin + pathName