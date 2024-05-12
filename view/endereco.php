<div class="container-fluid px-4">
  <div class="row g-3 my-2 bg-white p-5 rounded">

    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Endereços</button>
        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Novo Endereço</button>
        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Editar Endereço</button>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <table id="example" class="table" style="width:100%">
          <thead>
            <tr>
              <th>ID Endereço</th>
              <th>Endereço</th>
              <th>Cidade</th>
              <th>Bairro</th>
              <th>UF</th>
              <th>Ativo</th>
            </tr>
          </thead>
          <tbody></tbody>
        </table>
      </div>
      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        <form action="" method="POST">
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
                <textarea name="observacao" id=""></textarea>
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
      <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
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

<script src="assets/js/jquery-3.7.1.min.js"></script>
<script src="assets/js/datatables.min.js"></script>
<script src="assets/js/script.js"></script>
<script>
  new DataTable('#example');

  function envioDados (formData, complementoUrl) {
    $.ajax({
      url: baseUrl + complementoUrl,
      method: 'POST',
      data: formData,
      success: function(response) {
        console.log(response);
      },
      error: function(xhr, status, error) {
        console.error(status, error);
      }
    });
  }
  
  $('.btnForm').on('click', function() {
    let formData = $(this).closest('form').serialize();
    let complementoUrl = '/enderecoCreate';
    let result = envioDados(formData, complementoUrl);
  });
</script>