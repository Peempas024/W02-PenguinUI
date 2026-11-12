<?php
$currentPage = $currentPage ?? '';
$navItems = [
    'home' => ['label' => 'Home', 'href' => 'index.php'],
    'assign' => ['label' => 'Assignments', 'href' => 'assign.php'],
    'bio' => ['label' => 'Bio', 'href' => 'bio.php'],
];
?>
<header class="sticky top-0 z-50 border-b border-white/10 bg-slate-950/85 backdrop-blur-xl" x-data="{ menuOpen: false }">
    <div class="mx-auto flex max-w-6xl items-center justify-between px-5 py-4 sm:px-6">
        <a href="index.php" class="flex items-center gap-2 text-lg font-bold tracking-tight text-white transition hover:text-cyan-300">
            <span class="h-3 w-3 rounded-full bg-cyan-400 shadow-[0_0_12px_#22d3ee]"></span>
            Peemapas<span class="text-cyan-300">.</span>
        </a>

        <nav class="hidden items-center gap-2 md:flex" aria-label="Main navigation">
            <?php foreach ($navItems as $key => $item): ?>
                <a href="<?= $item['href'] ?>"
                   class="rounded-full border px-4 py-2 text-sm font-medium transition <?= $currentPage === $key ? 'border-cyan-400/30 bg-cyan-400/10 text-cyan-300' : 'border-transparent text-slate-300 hover:border-white/10 hover:bg-white/5 hover:text-white' ?>"
                   <?= $currentPage === $key ? 'aria-current="page"' : '' ?>>
                    <?= $item['label'] ?>
                </a>
            <?php endforeach; ?>
        </nav>

        <button type="button" @click="menuOpen = !menuOpen" class="inline-flex items-center justify-center rounded-xl border border-white/10 bg-white/5 p-2 text-slate-200 transition hover:bg-white/10 md:hidden" :aria-expanded="menuOpen.toString()" aria-label="Toggle navigation">
            <svg x-show="!menuOpen" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            <svg x-cloak x-show="menuOpen" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
    </div>

    <nav x-cloak x-show="menuOpen" x-transition class="border-t border-white/10 bg-slate-950 px-5 py-3 md:hidden" aria-label="Mobile navigation">
        <div class="mx-auto flex max-w-6xl flex-col gap-1">
            <?php foreach ($navItems as $key => $item): ?>
                <a href="<?= $item['href'] ?>" class="rounded-xl px-4 py-3 text-sm font-medium transition <?= $currentPage === $key ? 'bg-cyan-400/10 text-cyan-300' : 'text-slate-300 hover:bg-white/5 hover:text-white' ?>" <?= $currentPage === $key ? 'aria-current="page"' : '' ?>>
                    <?= $item['label'] ?>
                </a>
            <?php endforeach; ?>
        </div>
    </nav>
</header>
