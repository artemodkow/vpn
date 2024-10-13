<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="noindex">
    <title>Личный кабинет</title>
    <meta property="og:title" content="Личный кабинет">
    <meta property="og:description" content="">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('img2/preview.png') }}">
    <meta property="og:locale" content="ru_RU">
    <link rel="stylesheet" href="{{ asset('/dist/main.css') }}">
    <link rel="stylesheet" href="{{ asset('/dist/lk.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicons/favicon16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicons/favicon32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/favicons/favicon96.png') }}">
    <link rel="icon" type="image/png" sizes="120x120" href="{{ asset('img/favicons/favicon120.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('img/favicons/favicon192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicons/apple-touch-icon-180.png') }}">
</head>
<body>
