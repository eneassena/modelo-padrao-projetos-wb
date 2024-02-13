<?php $this->layout("_theme", ['title' => $title ]); ?>

<?php $this->section('content'); ?>
<!-- pagina home -->
<div class="row-col-12">
    <article>Page Main</article>
    <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam est dolore perferendis eos facere quidem aliquid
        sunt atque deserunt numquam beatae quam dignissimos voluptatem, facilis assumenda molestiae ducimus sed nobis?
    </p>
</div>

<?php $this->start('script'); ?>
<script>
console.log(50)
</script>
<?php $this->stop(); ?>