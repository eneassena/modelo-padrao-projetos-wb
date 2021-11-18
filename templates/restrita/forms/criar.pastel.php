  <div class="row justify-content-center" id="div_add_pastel" style="display:none">

    <!-- formulario para adicionar novos pasteís -->
    <div class="col-sm-6">

      <h1 class="h1 text-center mt-5 mb-3">Adicionar Pastel</h1>
      <form class="pt-3" action="?pag=area_restrita/add_pastel" method="POST" id="form_pedido_cliente_on" autocomplete='off'>

        <div class="form-row">

          <div class="form-group col-sm-12 col-md-12">
            <label>Pastel Sabor</label>
            <input type="text" class="form-control" name="pSabor" id="pSabor" placeholder="pastel sabor" required />
          </div>
        </div>

        <div class="form-row">

          <div class="form-group col-sm-12 col-md-12">
            <label>Ingrediente do Pastel</label>
            <input class="form-control" type="text" name="iIngred" id="iIngred" placeholder="ingrediente 1, ingrediente 2, ingrediente 3 ..." required />
          </div>

        </div>

        <div class="form-row">

          <div class="form-group col-sm-12 col-md-12">
            <label>Valor Unidade</label>
            <input type="text" class="form-control positive" name="sValor" id="sValor" placeholder="0,00" required maxlength="5" />
          </div>

        </div>

        <div class="form-row">
          <div class="col-sm-12 col-md-12">
            <input class="btn btn-danger float-right" type="submit" name="btn_pedido" value="Adicionar Pastel" />
          </div>
        </div>
      </form>
    </div>

  </div>