<?php $this->layout("admin/_theme", ['title' => $title]) ?>
 
<!-- add bebidas -->
<div class="row justify-content-center">
    <div class="col-md-11 mt-5">

    <!-- Exibindo formulário para adicionar novas bebidas -->
    <div class="btn-group ml-3" role="group" aria-label="Exemplo básico">
      <a id="button_ativa_bebida" class="btn btn-warning"><strong>Adicionar Bebida</strong></a>
    </div>

    <!-- mostra os pastéis já cadastro -->      
    <div class="row "style="display:flex;" id="table_bebida" >

      <div class="col-12 mt-5">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title mt-3 mb-2">Bebidas</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0" style="height: 300px;">
            
            <table class="table table-head-fixed text-nowrap">
              <thead>
                  <tr class="text-center">
                  <th scope="col">#</th>
                  <th scope="col">Tipo de bebida</th>
                  <th scope="col">Fruto</th>
                  <th scope="col">Quantidade(ML)</th>
                  <th scope="col">Preço</th> 
                  <th scope="col">Acoes</th> 
                </tr>
              </thead>
              <tbody>
                <?php if (isset($bebidas) && count($bebidas) > 0) : ?>
                    <?php foreach ($bebidas as $field => $value) : ?>
                      <tr class="text-center">
                        <td></td>
                        <td> <?= $value->tipo_bebida ?> </td>
                        <td> <?= $value->fruto ?> </td>
                        <td> <?= $value->quantidade_ml  ?> </td> 
                        <td> R$ <?= number_format($value->valor_unidade, 2, ",", ".");  ?> </td>
                        <td>
                            <a href="#" class="btn btn-outline-warning">Editar</a>
                            <a href="#" class="btn btn-outline-danger">Remover</a>
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
    
    <div class="row justify-content-center" id="form_bebida" style="display:none">


        <!-- formulario para adicionar novos pasteís -->
        <div class="col-sm-12">

          <h1 class="h1 text-center mt-5 mb-3">Adicionar Bebida</h1>
          <form class="pt-3" action="?pag=area_restrita/add_bebidas" method="POST" id="form_pedido_add_bebida" autocomplete='off'>

            <div class="form-row">

              <div class="form-group col-sm-12 col-md-12">
                <label>Tipo da Bebida</label>
                <input type="text" class="form-control" required name="tBebida" id="tBebida" placeholder="ex: água, suco, refrigerante, ceveja" />
              </div>
            </div>
            <div class="form-row">

              <div class="form-group col-sm-12 col-md-12">
                <label>Sabor (opcional)</label>
                <input type="text" class="form-control" name="cxSabor" id="cxSabor" placeholder="especifico para sucos" />
              </div>

            </div>
            <div class="form-row">

              <div class="form-group col-sm-12 col-md-12">
                <label>Fruta (opcional)</label>
                <input class="form-control" type="text" name="inFruta" id="inFruta" placeholder="especifico para sucos" />
              </div>

            </div>
            <div class="form-row">

              <div class="form-group col-sm-12 col-md-12">
                <label>Quantidade em ML</label>
                <input type="text" class="form-control" name="inQtd" id="inQtd" required placeholder="ex: 1L, 500ML, 350ML, 2L" />
              </div>

            </div>
            <div class="form-row">

              <div class="form-group col-sm-12 col-md-12">
                <label>Valor Unidade</label>
                <input type="text" class="form-control positive" name="inValorUnidade" id="inValorUnidade" required placeholder="0,00" maxlength="5" />
              </div>

            </div>


            <div class="form-row">
              <div class="col-sm-12 col-md-12">
                <input class="btn btn-danger float-right" type="submit" name="btn_pedido" value="Adicionar Bebida" />
              </div>
            </div>
          </form>

        </div>
    </div>

  </div>
</div>