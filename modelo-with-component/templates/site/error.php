<?php $this->layout("_theme", ['title' => $title]); ?>


<?php $this->section('content'); ?>
<div class="alert alert-danger">
  <h2>Oooooops erro <?= $status ?></h2>
  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur doloremque, explicabo reprehenderit aliquam perspiciatis hic.</p>
</div>

<?php $this->start('sidebar'); ?>

<p class="text-center my-3">
  <a title="Voltar ao inicio" class=" btn btn-outline-danger" href="<?= url(); ?>">Voltar ao Inicio</a>
</p>

<?php $this->end(); ?>