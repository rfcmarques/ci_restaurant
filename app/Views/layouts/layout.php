<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CIGBurger</title>

    <link rel="shortcut icon" href="<?= base_url('assets/images/logo.png') ?>" type="image/png">

    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/bootstrap.min.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
</head>

<body>
    <?= $this->include('layouts/nav') ?>

    <?= $this->renderSection('content') ?>

    <?= $this->include('layouts/footer') ?>

    <script src="<?= base_url('assets/bootstrap/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>