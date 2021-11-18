 <div class="row justify-content-center" id="form_bebida" style="display:none">


   <!-- formulario para adicionar novos pasteís -->
   <div class="col-sm-6">

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