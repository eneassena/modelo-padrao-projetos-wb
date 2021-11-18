<?php $this->layout("_theme", ['title' => $title ]); ?>

<?= '';//exibe_message_controller(isset($message) ? $message : []); ?>

<?php $this->section('content') ?>

<!-- pagina home -->
<div class="row-col-12 bg-warning">

  <div>
    <img src="<?= assets('image/Originals/home.jpeg') ?>" alt="imagem-cesta-de-pastéis" title="imagem-cesta-de-pastéis" width="100%">
  </div>

</div>


<?php $this->insert('cliente/fragmentos/home/home.cards.part') ?>

<?php $this->start('script') ?>
<!-- <script>
  $(function() {
    console.log(50)
  });
</script> -->
<?php $this->stop() ?>