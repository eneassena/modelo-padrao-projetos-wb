<div class="row justify-content-end pr-3 py-3">

 

  <!-- Button trigger modal -->
  <a class="pr-3 pb-3" data-toggle="modal" data-target="#exampleModal">
    <i class="fa fa-cart-plus text-danger" style="font-size:48px;"></i>
  </a>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Carrinho De Pedido</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <!-- modal exibindo informações do pastel que vem do carrinho pastel -->
          <h1 class="h6">Meus Pastéis</h1>
          <table class="table table-sm">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nome Pastel</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Preço</th>
                <th scope="col">SubTotal</th>
              </tr>
            </thead>

            <tbody>
              <?php if (valida_exibicao(isset($cardapios) ? $cardapios : []) && valida_exibicao(isset($_SESSION['pastel']) ? $_SESSION['pastel'] : [])) : ?>
                <?php foreach ($_SESSION['pastel'] as $idcarrinho => $valoresCar) : ?>
                  <?php foreach ($cardapios as $idcardapio => $valoresTab) : ?>
                    <?php if ($idcarrinho == $valoresTab->id_cardapio_card) : ?>

                      <tr>
                        <td>#</td>
                        <td><?= $valoresTab->nome_card ?></td>
                        <td><?= $valoresCar ?></td>
                        <td><?= formata_precos($valoresTab->valor_unidade_card) ?></td>
                        <td><?= formata_precos(calcular_total_item($valoresCar, $valoresTab->valor_unidade_card)) ?></td>
                      </tr>
                    <?php endif ?>
                  <?php endforeach ?>
                <?php endforeach ?>
              <?php else : ?>
                <tr>
                  <td colspan="5" class="text-center mt-3">
                    <?php echo "ainda n�o h� pastel no carrinho"; ?>
                  </td>
                </tr>
              <?php endif ?>

            </tbody>
          </table> <!-- fim da tabela de exibição dos dados do pastel -->
          <!-- ------------------------------------------------------ -->

          <!-- informação abaixo é as informações das bebidas -->
          <h1 class="mt-5 h6">Minhas Bebida</h1>
          <table class="table table-sm">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nome Bebida</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Preço</th>
                <th scope="col">SubTotal</th>
              </tr>
            </thead>
            <tbody>

              <?php if (valida_exibicao(isset($bebidas) ? $bebidas : []) && valida_exibicao(isset($_SESSION['bebida']) ? $_SESSION['bebida'] : [])) : ?>
                <?php foreach ($_SESSION['bebida'] as $idcarrinho => $valoresCar) : ?>
                  <?php foreach ($bebidas as $idbebida => $valoresTab) : ?>
                    <?php if ($idcarrinho == $valoresTab->id_bebida) : ?>
                      <tr>
                        <td>#</td>
                        <td><?= "$valoresTab->tipo_bebida | $valoresTab->quantidade_ml" ?></td>
                        <td><?= $valoresCar ?></td>
                        <td><?= formata_precos($valoresTab->valor_unidade) ?></td>
                        <td><?= formata_precos(calcular_total_item($valoresCar, $valoresTab->valor_unidade)) ?></td>
                      </tr>
                    <?php endif ?>
                  <?php endforeach ?>
                <?php endforeach ?>
              <?php else : ?>
                <tr>
                  <td colspan="5" class="text-center mt-3">
                    <?= "ainda não há bebida no carrinho"; ?>
                  </td>
                </tr>
              <?php endif ?>
            </tbody>
          </table>
        </div>
        <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button> </div>

      </div>
    </div>
  </div> <!-- finalização do modal -->
</div>