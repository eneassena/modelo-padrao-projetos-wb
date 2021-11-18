 <?php $this->layout("admin/_theme", ['title' => $title])  ?>

 <!-- add bebidas -->
<div class="row justify-content-center">
    <div class="col-md-11 mt-5">

    <!-- Exibindo formulário para adicionar novas bebidas -->
    <div class="btn-group ml-3" role="group" aria-label="Exemplo básico">
      <a id="button_ativa_pastel" class="btn btn-warning">Adicionar Pastéis</a>
    </div>

    <!-- mostra os pastéis já cadastro -->      
    <div class="row "style="display:flex;" id="table_pastel" >

      <div class="col-12 mt-5">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title mt-3 mb-2">Pastéis</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0" style="height: 300px;">
            
            <table class="table table-head-fixed text-nowrap">
              <thead>
                  <tr class="text-center">
                  <th scope="col"></th>
                  <th scope="col">Sabor</th>
                  <th scope="col">Ingrediente</th>                  
                  <th scope="col">Valor Unitário</th>
                  <th scope="col" colspan="2" >Acoes</th>
                </tr>
              </thead>
              <tbody>
                <?php if (isset($pastels) && count($pastels) > 0) :  foreach ($pastels as $field => $value) : ?>
                      <tr class="text-center">
                        <td><?= '';?></td>
                        <td><?= $value->nome_card ?></td>
                        <td><?= empty($value->ingrediente_card) ? '...' : $value->ingrediente_card ?></td>                        
                        <td><?= $value->valor_unidade_card ?></td>                        
                        <td>
                            <a href="#" class="btn btn-outline-warning">Editar</a>
                            <a href="#" class="btn btn-outline-danger">Remover</a>
                        </td>
                      </tr>
                    <?php endforeach; else : ?>
                    
                      
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
    
    <!-- Formul�rio de cadastro de novos pasteis -->
    <div class="row justify-content-center" id="form_pastel" style="display:none">


        <!-- formulario para adicionar novos pasteís -->
        <div class="col-sm-12">

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

  </div>
</div>
 
 
 <!-- JavaScript -->
 <?php $this->start('script')?>
   <script>   
    $(function(){
        /* obtem o botao que clicado quando o usuario quer consultar ou adicionar uma bebida */
        const btnActive = document.querySelector("#button_ativa_pastel");
        /* obtem o objeto html com o formulario */
        const form_pastel = document.querySelector("#form_pastel");
        const table_pastel = document.querySelector("#table_pastel");
        btnActive.addEventListener("click", mudaContent);
        
        function mudaContent(event) {
            event.preventDefault();
            btnActive.style.fontWeight = 700;
            
            if(table_pastel.style.display === 'flex' && 
                    form_pastel.style.display === 'none') {
                table_pastel.style.display = 'none';
                form_pastel.style.display = 'flex';
                btnActive.innerHTML = 'Consultar Pastéis';
            } else if(table_pastel.style.display === 'none' && 
                    form_pastel.style.display === 'flex') {
                table_pastel.style.display = 'flex';
                form_pastel.style.display = 'none';
                btnActive.innerHTML = 'Adicionar Pastéis';
            }
        }
     });
   </script>
 
 <?php $this->end()?>
 