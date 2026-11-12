<?php
$pageTitle = 'Home | Peemapas';
$currentPage = 'home';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>
<main class="mx-auto flex w-full max-w-6xl flex-1 items-center px-5 py-16 sm:px-6 sm:py-24">
    <section class="mx-auto w-full max-w-3xl">
        <div class="relative overflow-hidden rounded-3xl border border-cyan-400/20 bg-slate-900/80 p-8 text-center shadow-2xl shadow-cyan-950/20 sm:p-14">
            <div class="pointer-events-none absolute -right-20 -top-24 h-64 w-64 rounded-full bg-cyan-400/10 blur-3xl"></div>
            <div class="pointer-events-none absolute -bottom-24 -left-20 h-64 w-64 rounded-full bg-blue-500/10 blur-3xl"></div>
            <div class="relative">
                <span class="mb-6 inline-flex items-center gap-2 rounded-full border border-cyan-400/20 bg-cyan-400/10 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-cyan-300">
                    <span class="h-2 w-2 animate-pulse rounded-full bg-cyan-300"></span>Hello!
                </span>
                <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-6xl">My name is<br><span class="text-cyan-300">Peemapas Satranon</span></h1>
                <p class="mx-auto mt-6 max-w-xl text-base leading-8 text-slate-300 sm:text-lg">This is my personal website. You can find my assignments and personal biography here. Feel free to explore and check out my work!</p>
                <div class="mt-9 flex flex-wrap justify-center gap-3">
                    <a href="assign.php" class="inline-flex items-center gap-2 rounded-xl bg-cyan-400 px-6 py-3 text-sm font-bold text-slate-950 shadow-lg shadow-cyan-950/30 transition hover:-translate-y-0.5 hover:bg-cyan-300 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-cyan-300">Assignments <span aria-hidden="true">→</span></a>
                    <a href="bio.php" class="inline-flex items-center gap-2 rounded-xl border border-white/15 bg-white/5 px-6 py-3 text-sm font-semibold text-white transition hover:-translate-y-0.5 hover:bg-white/10 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">View Bio <span aria-hidden="true">→</span></a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
