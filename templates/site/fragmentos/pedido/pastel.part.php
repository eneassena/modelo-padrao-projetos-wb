<!-- adicionar pastel no carrinho de sessao -->
<div class="row" id="div_pastel" style="display: flex;">
  <div class="col-sm col-md table-responsive">

    <!-- messagem do carrinho após adicionar (1)um item -->
    <?php if (isset($messagem_pastel) && !empty($messagem_pastel)) : ?>
      <div class="alert alert-success" role="alert">
        <?php echo "<h5 class='text-center'>$messagem_pastel</h5>"; ?>
      </div>
    <?php endif; ?>

    <table class="table table-hover">
      <thead class="bg-warning table-dark">
        <tr class="text-center">
          <th scope="col">Nome</th>
          <th scope="col">Ingrediente</th>
          <th scope="col">Preço</th>
          <th scope="col" colspan="2">Carrinho</th>
        </tr>
      </thead>
      <tbody>
        <?php if (isset($cardapios) && count($cardapios) != 0) : ?>
          <?php foreach ($cardapios as $cardapio) : ?>
            <tr>
              <td><?= $cardapio->saborDoPastel; ?></td>
              <td><?= $cardapio->ingrediente_card; ?></td>
              <td><?= $cardapio->valorUnitario; ?></td>
              <td>
                <a class='text-success' href="<?= url('pedido/add-pastel') . "/" . $cardapio->idCardapioPastel ?>">
                  Adicionar
                </a>
              </td>
              <td>
                <a class="text-danger" href="<?= url('pedido/remove-pastel') . "/" . $cardapio->idCardapioPastel ?>">
                  Excluir
                </a>
              </td>
            </tr>
          <?php endforeach ?>
        <?php endif ?>
      </tbody>
    </table>
  </div>
</div>