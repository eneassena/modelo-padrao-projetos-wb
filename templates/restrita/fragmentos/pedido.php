

 

<div class="wrapper">

<div class="col-12 mt-5">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title mt-3 mb-2">Pedidos Enviados</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0" style="height: 350px;">
      <table class="table table-head-fixed text-nowrap">
        <thead>
          <tr>
            <th scope="col">Cliente</th>
            <th scope="col">Situação</th>
            <th scope="col">Forma Entrega</th>
            <th scope="col">Forma Pagamento</th>
            <th scope="col">Sub-Total</th>
            <th scope="col">Taxa Entrega</th>
            <th scope="col">Valor Total</th>
            <th scope="col">Edição Pedido</th>
          </tr>
        </thead>
        <tbody>
          <?php if (isset($pedidos) && count($pedidos) > 0) : ?>
              <?php foreach ($pedidos as $field => $value) : ?>
                <tr>
                  <td><?= $value->nome_cli;  ?> </td>
                  <td><?= $value->situacao;  ?> </td>
                  <td><?= $value->forma_entrega;  ?> </td>
                  <td><?= $value->forma_pagamento;  ?> </td>
                  <td>R$ <?= number_format($value->subtotal, 2, ",", ".");  ?> </td>
                  <td>R$ <?= number_format($value->taxa_entrega, 2, ",", ".");  ?> </td>
                  <td> R$ <?= number_format($value->total, 2, ",", ".");  ?> </td> 
                  <td>
                    <a href="#" class="btn btn-primary mr-2">Editar</a>
                    <a href="#" class="btn btn-danger ml-1">Apagar</a>
                  </td>
                </tr>

              <?php endforeach ?>
            <?php else : ?>
              <tr>
                <td colspan="9" class="text-muted text-center"><strong>Não há pedido No
                    Momento!</strong></td>
              </tr>

            <?php endif ?>
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>



</div>
