<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Iron PDF in C++' ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>">
</head>
<body class="no-scrollbar">

    <!-- Navbar Component -->
    <?= $this->include('components/navbar') ?>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Bootstrap JS -->
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- Custom JS -->
    <script src="<?= base_url('assets/js/custom.js') ?>"></script>
    
</body>
</html>