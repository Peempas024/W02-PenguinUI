<?php
$pageTitle = $pageTitle ?? 'Peemapas | Personal Website';
$currentPage = $currentPage ?? '';
?>
<!DOCTYPE html>
<html lang="th" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#020617">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        [x-cloak] { display: none !important; }
        body { background: #020617; }
    </style>
</head>
<body class="min-h-screen bg-slate-950 font-sans text-slate-100 antialiased selection:bg-cyan-400 selection:text-slate-950 flex flex-col">
