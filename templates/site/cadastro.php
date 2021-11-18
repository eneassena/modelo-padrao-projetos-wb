<?php $this->layout("_theme", ['title' => $title]); ?>




<div class="container">
  <div class="row justify-content-center">
    <h1 class="text-muted text-center my-5">Cadastre-se</h1>

    <div class="col-sm-10 my-3 p-3">
      <form action="<?= url('cliente/cadastro/store') ?>" method="post" id="form_cadastro" autocomplete='off'>

        <div class="form-row">
          <!-- nome -->
          <div class="form-group col-sm-6">
            <label for="">Nome</label>
            <input type="text" class="form-control" name="cdNome" id="xNome" placeholder="Entre nome"  />
          </div>

          <!-- telefone -->
          <div class="form-group col-sm-6">
            <label for="">Telefone</label>
            <input type="text" class="form-control" name="cdPhone" id="xPhone" placeholder="(00) 00000-0000)"  />
          </div>
        </div>

        <div class="form-row mt-3">
          <!-- complemento -->
          <div class="form-group col-sm-4">
            <label for="">complemento</label>
            <input type="text" class="form-control" name="cdComplemento" id="xComplemento" placeholder="Entre complemento"  />
          </div>
          <!-- numero -->
          <div class="form-group col-sm-4">
            <label for="">numero</label>
            <input type="number" class="form-control" name="cdNumero" id="xNumero" placeholder="Entre N°"  />
          </div>
          <!-- bairro -->
          <div class="form-group col-sm-4">
            <label for="">bairro</label>
            <input type="text" class="form-control" name="cdBairro" id="xBairro" placeholder="Entre bairro"  />
          </div>
        </div>

        <div class="form-row mt-3">
          <!-- login -->
          <div class="form-group col-sm-6">
            <label for="">login</label>
            <input type="text" class="form-control" name="cdLogin" id="xLogin" placeholder="Entre usuário"  />
          </div>

          <!-- senha -->
          <div class="form-group col-sm-6">
            <label for="">senha</label>
            <input type="password" class="form-control" name="cdSenha" id="xSenha" placeholder="Entre password"  />
          </div>
        </div>

        <div class="form-row mt-3 justify-content-end">
          <div class="form-group col-sm-6">
            <?php if (isset($message) && strlen($message) != 0) : ?>

              <div class="alert alert-info">
                <p class="text-center pt-3"><strong><?= $message; ?></strong></p>
              </div> 
            <?php endif ?>
            
          </div>
          <div class="form-group col-sm-6">
            <input type="submit" class="float-right btn btn-primary" value="Cadastrar">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>