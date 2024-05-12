<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="assets/css/styles.css" />
  <title>ISM - Dashboard</title>
</head>

<body>
  <div class="d-flex" id="wrapper">
    <div class="" id="sidebar-wrapper">
      <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
        <i class="fas fa-monument me-2"></i> ISM 
      </div>
      <div class="list-group list-group-flush my-3">
        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active">
          <i class="fas fa-map me-2"></i> Endereço
        </a>
       <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">
          <i class="fas fa-power-off me-2"></i> Sair
        </a>
      </div>
    </div>
    
    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
        <div class="d-flex align-items-center">
          <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
          <h2 class="fs-2 m-0">Nome da Tela</h2>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user me-2"></i>Usuário
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Perfil</a></li>
                <li><a class="dropdown-item" href="#">Sair</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid px-4">
        <div class="row g-3 my-2 bg-white p-5 rounded">
          <form action="">
            <div class="row">
              <div class="col-md-1 col-sm-12">
                <label for="cep" class="form-label">Cep</label>
                <input type="text" name="cep" class="form-control cepSearch">
              </div>
              <div class="col-md-2 col-sm-12">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" name="endereco" class="form-control">
              </div>
              <div class="col-md-2 col-sm-12">
                <label for="cidade" class="form-label">Cidade</label>
                <input type="text" name="cidade" class="form-control">
              </div>
              <div class="col-md-2 col-sm-12">
                <label for="bairro" class="form-label">Bairro</label>
                <input type="text" name="bairro" class="form-control">
              </div>
              <div class="col-md-1 col-sm-12">
                <label for="uf" class="form-label">UF</label>
                <input type="text" name="uf" class="form-control">
              </div>
              <div class="col-md-1 col-sm-12">
                <label for="inputCity" class="form-label">Ativo</label>
                <select name="ativo" class="form-select">
                  <option value="S">Sim</option>
                  <option value="N">Não</option>
                </select>
              </div>
              <div class="col">
                <button type="button" class="btn btn-primary btnForm">Cadastrar</button>
              </div>
            </div>
          </form>
         </div>
      </div>
    </div>
  </div>
  </div>

  <script src="assets/js/jquery-3.7.1.min.js"></script>
  <script src="assets/js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
  </script>
</body>
</html>