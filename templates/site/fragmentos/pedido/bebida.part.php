<!-- adicionar bebidas ao carrinho -->
<div class="row" id="div_bebidas" style="display: none;">
  <div class="col-sm col-md mt-1 table-responsive">
    <table class="table table-hover">
      <thead class="bg-warning table-dark">
        <tr class="text-left">
          <th>#</th>
          <th scope="col">Tipo Bebida</th>
          <th scope="col">Preço</th>
          <th class="text-center" scope="col" colspan="2">Carrinho</th>
        </tr>
      </thead>
      <tbody class="text-left">
        <?php if (isset($bebidas) && count($bebidas) != 0) : ?>
            <?php foreach ($bebidas as $bebida) : ?>
              <tr>
                <td></td>
                <td>
                  <?= $bebida->tipoDaBebida; ?> <?= $bebida->quantidadeEmMl; ?>
                </td>
                <td><?= $bebida->valorUnidade; ?></td>
                <td class="text-center">
                  <a class='text-success' href="<?= url('pedido/add-bebida') . "/" . $bebida->idBebida ?>">
                    Adicionar
                  </a>
                </td>
                <td class="text-center">
                  <a class="text-danger" href="<?= url('pedido/remove-bebida') . "/" . $bebida->idBebida ?>">
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