<?php $this->layout("admin/index", ['title' => $title]) ?>
<?php if (isset($message) && strlen($message) != 0) : ?>
  <div class="alert alert-info">
    <span> <?= $message ?></span>
  </div>
<?php endif ?>
<div class="container">
  <div class="row-col-12 justify-content-center ">
    <h1 class="h1 mt-5 text-center">Painel Administrador</h1>
  </div>
  <div class="row justify-content-center ">
    <div class="col-sm-6" style="margin-top: 100px;">
        <form action="<?= url('area-restrita/login-validate') ?>" method="post" onsubmit="return is_valid()" autocomplete='off'>

        <div class="form-row justify-content-center">
          <div class="form-group col-sm-6">
            <label for="admLogin">UsuÃ¡rio</label>
            <input type="text" class="form-control" name="adLogin" id="area_restrita_admLogin" placeholder="Login administrador" />
          </div>
        </div>

        <div class="form-row justify-content-center">
          <div class="form-group col-sm-6">
            <label for="adcPass">Password</label>
            <input type="password" class="form-control" name="adPass" id="area_restrita_adcPass" placeholder="Senha administrador" />
          </div>
        </div>

        <div class=" form-row justify-content-center">
          <div class="form-group col-sm-6">
              <input type="submit" id="area_restrita_btn_submit_form_login"  value="Logar" class="float-right btn btn-danger">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- codigos javaScript de validação do formulário de login do admin -->
<?php $this->start('script')?>
    <script>
        const input_login = document.getElementById("area_restrita_admLogin");
        const input_senha = document.getElementById("area_restrita_adcPass");
        const input_submit = document.getElementById("area_restrita_btn_submit_form_login");
        function is_valid(){
            // verificação de os campos foram preenchidos
            if(input_login.value.length===0 || input_senha.value.length===0){
                console.log("preencha os campos corretamente para realizar login");
                return false;
            }
            // validação do campo login
            if(input_login.value.length <= 2){
                console.log("preencha os campos corretamente para realizar login");
                return false;
            }
            // validação do campo senha
            if(input_senha.value.length <= 5){
                console.log("preencha os campos corretamente para realizar login");
                return false;
            }
            // se tudo tiver seguindo as regras de login sera liberado para fazer o login
            return true;
        }
    </script>
<?php $this->end()?>













