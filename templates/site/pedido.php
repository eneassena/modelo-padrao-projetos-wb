<?php $this->layout('_theme', ['title' => $title]); ?>

<!-- corpo da pagina pedido  -->

<?php if (isset($message) && !empty($message)) : ?>
  <div class="alert alert-info mt-5">
    <span class="text-center p-0 m-0"><?= $message ?></span>
  </div>
<?php endif ?>

<div class="container">

  <div class="row my-5">

    <div class="col-sm-3 col-md-3 p-3">
      <span class="text-dark ">Tempo de Entraga 15 - 60 minutos</span>
    </div>

    <div class="col-sm-3 col-md-3 p-3">
      <span class="text-dark">Taxa de Entraga 2 - 15</span>
    </div>

    <div class="col-sm-3 col-md-3 p-3">
      <span class="text-dark">Forma de Entrega</span>
      <span>Delivery ou Retirada</span>
    </div>

    <div class="col-sm-3 col-md-3 p-3">
      <span class="text-dark">Funcionamento 17H a 23H</span>
    </div>

  </div> <!-- fim do container 1-->
  <div class="row justify-content-end">
    <span style="text-shadow: 3px 3px 10px rgba(0,0,0,0.7)" class="mx-3 text-muted">Aberta de Segunda a Domingo, exceto Quarta e Quinta.</span>
  </div>
  <hr class="border">

  <!-- -------------------------------------------------------------------------------------- -->

  <div class="row justify-content-center">
    <!-- lista de informações -->
    <div class="col-sm-3 col-md-3 col-lg-3">
      <ul class="list-group">
        <li class="list-group-item text-dark border" id="liPastel">Pastel</li>
        <li class="list-group-item text-dark border" id="liBebida">Bebidas</li>
        <li class="list-group-item text-dark border" id="liDados_cliente">Dados do Cliente</li>
      </ul>
    </div>


    <!-- conteudo de formularios -->
    <div class="col-sm-9">

      <?php $this->insert('site/fragmentos/pedido/bairros.entrega.part', ['localizacao' => $localizacao]) ?>

      <?php $this->insert('site/fragmentos/pedido/carrinho.part', [
        'cardapios' => $cardapios, 'bebidas' => $bebidas, 'message' => $message
      ]) ?>

      <?php $this->insert('site/fragmentos/pedido/pastel.part', ['cardapios' => $cardapios])  ?>

      <?php $this->insert('site/fragmentos/pedido/bebida.part', ['bebidas' => $bebidas])  ?>


      <!-- formulario dados do cliente -->
      <?php $this->insert('site/fragmentos/pedido/dados.cliente.part', ['cliente_logado' => $cliente_logado]) ?>

    </div>
  </div>

</div>

</div>