<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->e($title) ?></title>
    <link rel="stylesheet" href="<?= PATH_STATICS . '/css/stylesheet.css' ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="<?= PATH_STATICS ?>/css/stylesheet.css">
  </head>
  <body>

  <?php if($this->section('sidebar')){ ?>
    <?= $this->section('sidebar') ?>
  <?php } else {  $this->section('sidebar'); }?>

    <!-- Body Dinamico -->
    <main>
      <?= $this->section('content'); ?>
    </main>


    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="<?= PATH_STATICS ?>/js/main.js"></script>
    <?= $this->section('script'); ?>
  </body>
</html>