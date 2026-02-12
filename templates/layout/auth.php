<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Login</title>

    <?php echo $this->Html->css(['default/style.bundle', 'default/plugins.bundle']) ?>
    <?php echo $this->Html->script(['jquery', 'default/scripts.bundle', 'default/plugins.bundle']) ?>

</head>

<body id="kt_body" class="app-blank">

<div class="d-flex flex-column flex-root">
    <?php echo $this->fetch('content') ?>
</div>

</body>
</html>
