<?php
    require __DIR__.'/lpu.php';
    include 'components/header.php';

    $lpu = [
        'id' => '',
        'full_name' => '',
        'address' => '',
        'phone' => '',
        'hid' => '',
    ];

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $lpu = createLpu($_POST);
        header("Location: index.php");
    }
    
    include '_form.php';
?>