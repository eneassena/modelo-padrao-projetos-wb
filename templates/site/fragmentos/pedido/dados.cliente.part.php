<!-- formulario dados do cliente -->
<div class="row justify-content-center" id="div_dados_cliente" style="display: none;">
  <div class="col-sm-12 col-md-10">

    <!-- <h1 class="text-center mb-5">Informações do Cliente</h1> -->
    <?php if (valida_pastels()) : ?>

      <!-- condição responsavel por exibir em tela o formulario para o cliente -->
      <form class="pt-3" action="<?= url('pedido/caixa') ?>" method="POST" id="form_pedido_cliente_off" autocomplete='off' onsubmit="return validate_pedido();">

        <div class="form-row">
          <div class="form-group col-sm-6 col-md-5">
            <label>Seu Nome</label><span class="text-danger"> *</span>
            <input type="text" class="form-control" name="cNome" id="nome" value="<?= field_valido(isset($cliente_logado->nome_cli) ? $cliente_logado->nome_cli : '') ?>" placeholder="Nome do Cliente" <?= field_valido($cliente_logado->nome_cli) ? 'disabled' : 'required'; ?> />
          </div>

          <div class="form-group col-sm-6 col-md-5">
            <label>Celular</label><span class="text-danger"> *</span>
            <input class="form-control" type="text" name="cCelular" id="xCelular" value="<?= field_valido(isset($cliente_logado->telefone) ? $cliente_logado->telefone : '') ?>" placeholder="ex: (00) 00000-0000" <?= field_valido($cliente_logado->telefone) ? 'disabled' : 'required'; ?> />
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-sm-6 col-md-5">
            <label>Bairro</label>
            <input class="form-control" type="text" name="cBairro" id="xBairro" value="<?= field_valido(isset($cliente_logado->bairro) ? $cliente_logado->bairro : '') ?>" placeholder="Entre seu bairro" <?= field_valido($cliente_logado->bairro) ? 'disabled' : 'required'; ?> />
          </div>

          <div class="form-group col-sm-6 col-md-5">
            <label>Número º</label>
            <input type="number" class="form-control" name="cNumero" id="xNumero" value="<?= field_valido(isset($cliente_logado->numero) ? $cliente_logado->numero : ''); ?>" placeholder="Entre N°" <?= field_valido($cliente_logado->numero) ? 'disabled' : 'required'; ?> />
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-sm-6 col-md-5">
            <label>Complemento</label>
            <input type="text" class="form-control" name="cComp" id="xComp" value="<?= field_valido(isset($cliente_logado->complemento) ? $cliente_logado->complemento : ''); ?>" placeholder="ex: av, travessa, proxima a praça" <?= field_valido($cliente_logado->complemento) ? 'disabled' : 'required'; ?> />
          </div>

          <div class="form-group col-sm-6 col-md-5">
            <label for="inputEst">Forma de pagamento <span class="text-danger"> *</span></label>
            <select id="inputEst" name="sel_forma_pagamento" class="form-control" <?= !true ? 'diabled' : 'required' ?>>
              <option selected value="">Escolha</option>
              <option value="Dinheiro">Dinheiro</option>
              <option value="Cartao">Cartão</option>
            </select>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-sm-12">
            <label>Escolha a forma de entrega do pedido</label>
          </div>

          <div class="form-check col-sm-2 ml-4">
            <input class="form-check-input" type="radio" name="forma_entrega" id="exampleRadios1" value="Retirada" <?= true ? 'checked required' : '' ?> />
            <label class="form-check-label" for="exampleRadios1">Retirada </label>
          </div>

          <div class="form-check col-sm-2 ml-4">
            <input class="form-check-input" type="radio" name="forma_entrega" id="exampleRadios2" value="Entrega" <?= true ? 'required' : '' ?> />
            <label class="form-check-label" for="exampleRadios2">Entrega</label>
          </div>
        </div>
        <div class="form-row">
          <div class="col-sm-12 col-md-10 ">
            <!-- name="btn_pedido"  -->
            <input class="btn btn-danger float-right" type="submit" value="Finalizar Pedido" />
          </div>
        </div>
      </form>

    <?php else : ?>
      <div class="alert alert-info" role="alert">
        <p class="text-center pt-2">
          Escolha um lanche para enviar seu pedido! <span class="text-danger"> *</span>
        </p>
      </div>
    <?php endif ?>

    <div class="alert alert-info my-3">É importante que antes de enviar seus pedido verificar no ícone do carrinho se os items adicionados estão correto, caso a quantidade de items adicionados não esteja como pediu você pode remover-lo clicando no link <span class="text-danger " style="text-decoration: underline;">Excluir</span> no menu ao seu lado esquerdo "Pastel" ou "Bebidas".</div>

  </div>