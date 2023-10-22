<?php $this->layout("_theme", ['title' => $title ]); ?>

<?php $this->section('content'); ?>
<!-- pagina home -->
<div class="row-col-12">
  <article>Page Main</article>
</div>

<?php $this->start('script'); ?>
<script>
  
  console.log(50)
 
</script>
<?php $this->stop(); ?>