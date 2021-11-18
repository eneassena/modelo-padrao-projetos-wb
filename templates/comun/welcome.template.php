 <?php $this->layout("_theme", ['title' => $title]); ?>
 <!-- formulario exibição dos pedidos feito -->
 <div class="container-fluid">


   <div class="row justify-content-center">
     <div class="col-sm-12 col-md-10 mt-5 table-responsive ">
       <h3 class="h3 text-center">Pedidos Enviados</h3>
       <table class="table table-hover">

         <?php if (isset($messagem_pedido_invalido) && !empty($messagem_pedido_invalido)) : ?>
           <div class="alert alert-success" role="alert">

             <h5 class="text-center"><?= $messagem_pedido_invalido; ?></h5>


           </div>
         <?php endif; ?>
         <thead class="bg-warning table-dark">
           <tr class="text-left">
             <th>#</th>
             <th scope="col">Nome</th> <!-- table: cliente.nome -->
             <th scope="col">Situação</th><!-- table: pedido.situacao -->
             <th scope="col">Forma Entrega</th>
             <!--table: pedido.forma_entrega -->
             <th scope="col">Sub-Total</th><!-- table: pedido.valor_total -->
             <th scope="col">Taxa Entrega</th><!-- table: pedido.taxa_entrega -->
             <th scope="col">Valor Total</th><!-- table: pedido.valor_total + pedido.taxa_entrega-->

             <?php if (isset($_SESSION['cliente'])) : ?>

               <th class="text-center" scope="col" colspan="2">Meu Pedido</th>

             <?php elseif (isset($_SESSION['cliente_comun'])) : ?>

               <th class="text-center" scope="col" colspan="2">Meu Pedido</th>

             <?php endif ?>

           </tr>
         </thead>

         <tbody class="text-left">

           <?php if (isset($messagem_pedido)) : ?>
             <h5 class="h5 text-muted ml-2"><?php echo $messagem_pedido; ?></h5>
           <?php endif ?>

           <?php if (isset($registro_pedido)) : ?>
             <?php foreach ($registro_pedido as $field => $value) : ?>

               <tr>
                 <td>
                   <?php if (user_load() == $value->codigo_cliente) : ?>
                     <a class="text-primary" href="<?= url("pedido/detalhes/{$value->codigo_cliente}") ?>">
                       #Ver Mais
                     </a>
                   <?php else : ?>
                     #Ver Mais
                   <?php endif ?>
                 </td>
                 <td> <?= $value->nome_cli; ?> </td>
                 <td> <?= $value->situacao; ?> </td>
                 <td> <?= $value->forma_entrega;  ?> </td>
                 <td> R$ <?= formata_precos((string)$value->subtotal); ?> </td>
                 <td> R$ <?= formata_precos((string)$value->taxa_entrega); ?> </td>
                 <td> R$ <?= formata_precos((string)$value->total); ?> </td>
               </tr>

             <?php endforeach ?>

           <?php else : ?>

             <tr>
               <td colspan="10" class="text-center"><strong>Não há pedido No Momento!</strong></td>
             </tr>

           <?php endif ?>

         </tbody>

       </table>

       <div class="mt-5 pt-5 text-muted text-center">
         <span>
           <i>Pastelaria do Gaucho</i>: Caro cliente se a forma de entrega do seu pedido for "Entrega", seu pedido
           ficará em analise
           pela pastelaria que retorná o valor da "taxa de entrega", para que o valor final seja calculado
           corretamente, a pastelaria agradece sua atenção.
         </span>
       </div>
     </div>
   </div>
 </div>