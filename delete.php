<?php
    require __DIR__.'/lpu.php';
    include 'components/header.php';

    if (!isset($_GET['id'])){
        echo 'Not found';
        exit;
    }

    $lpuId = $_GET['id'];

    deleteLpu($lpuId);
    header('Location: index.php');

    include 'components/footer.php';
?>