<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Pages
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['style', '../lib/bootstrap/css/bootstrap.min', '../lib/font-awesome/css/font-awesome']) ?>

    <?= $this->Html->script(['../lib/jquery/jquery.min', '../lib/bootstrap/js/bootstrap.min', 'common-scripts']) ?>

    <?= $this->fetch('css'); ?>
    <?= $this->fetch('script'); ?>


</head>

<?= $this->fetch('content') ?>
<?= $this->Flash->render() ?>


</html>