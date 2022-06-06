<?php

    $url = $_SERVER['REQUEST_URI'];
    include 'pages/menu.php';
    include 'pages/head.php';
    include 'acoes.php';

    if ($url === '/') {
    home();
    } elseif ($url === '/login') {
    login();
    } elseif ($url === '/cadastro') {
    cadastro();
    } else {
    notFound();
    }

    match($url === /login) {
        '/' => home();
        '/login' => login();
        'cadastro' => cadastro()
    }

