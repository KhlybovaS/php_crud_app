<?php
    require __DIR__.'/lpu.php';

    if (!isset($_GET['id'])){
        echo 'Not found';
        exit;
    }

    $lpuId = $_GET['id'];
    $lpu = getLpuById($lpuId);
    if (!$lpu) {
        echo 'Not found';
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        updateLpu($_POST, $lpuId);
        header('Location: index.php');
    }

    include 'components/header.php';    
    include '_form.php';
    include 'components/footer.php';
?>