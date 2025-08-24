<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Lanzaro' ?></title>
    
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/layout.css') ?>">
    <?php if(strpos(current_url(), 'dashboard') !== false): ?>
        <link rel="stylesheet" href="<?= base_url('assets/css/dashboard.css') ?>">
    <?php endif; ?>
    <?php if(strpos(current_url(), 'home') !== false): ?>
        <link rel="stylesheet" href="<?= base_url('assets/css/home.css') ?>">
    <?php endif; ?>

    <!-- Font Awesome para íconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="<?= strpos(current_url(), 'dashboard') !== false ? 'dashboard-body' : 'layout-grid' ?>">
