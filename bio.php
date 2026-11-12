<?php
$pageTitle = 'Bio | Peemapas';
$currentPage = 'bio';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>
<main class="mx-auto w-full max-w-4xl flex-1 space-y-6 px-5 py-12 sm:px-6 sm:py-16">
    <section class="rounded-3xl border border-cyan-400/20 bg-slate-900/80 p-8 shadow-2xl shadow-cyan-950/10 sm:p-10">
        <div class="flex flex-col items-center gap-7 sm:flex-row">
             <div class="relative shrink-0">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYivORdcbWpWFHC9Lutw6y0FwI6xV2W4ZPGr7PII4g0tvUQIJZrVcYVSY&s=10" alt="Peemapas Satranon" class="h-32 w-32 rounded-full object-cover">
            </div>
            <div class="text-center sm:text-left">
                <span class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-3 py-1.5 text-xs font-semibold tracking-wide text-slate-300"><span class="h-2 w-2 rounded-full bg-cyan-300"></span>Personal Biography</span>
                <h1 class="mt-3 text-3xl font-extrabold tracking-tight text-white sm:text-4xl">Peemapas Satranon</h1>
                <p class="mt-2 text-lg font-semibold text-cyan-300">Web Developer &amp; UI/UX Designer</p>
                <p class="mt-3 max-w-xl text-sm leading-7 text-slate-400">มุ่งมั่นพัฒนาเว็บไซต์และแอปพลิเคชันที่มีประสิทธิภาพ ใช้งานง่าย และตอบโจทย์ผู้ใช้งานด้วยเทคโนโลยีทันสมัย</p>
            </div>
        </div>
    </section>

    <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
        <section class="rounded-2xl border border-white/10 bg-slate-900/80 p-6 shadow-xl">
            <div class="mb-5 flex items-center gap-3">
                <div class="rounded-xl bg-cyan-400/10 p-3 text-cyan-300"><svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zM12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0112 20.055a11.952 11.952 0 01-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg></div>
                <h2 class="text-xl font-bold text-white">ประวัติการศึกษา</h2>
            </div>
            <div class="border-l-2 border-cyan-400/30 pl-4">
                <span class="text-xs font-semibold text-cyan-300">ปัจจุบัน</span>
                <h3 class="mt-1 text-base font-semibold text-white">ปริญญาตรี - เทคโนโลยีสารสนเทศ</h3>
                <p class="mt-1 text-sm leading-6 text-slate-400">มหาวิทยาลัยเทคโนโลยี / คณะวิทยาศาสตร์และเทคโนโลยี</p>
            </div>
        </section>

        <section class="rounded-2xl border border-white/10 bg-slate-900/80 p-6 shadow-xl">
            <div class="mb-5 flex items-center gap-3">
                <div class="rounded-xl bg-cyan-400/10 p-3 text-cyan-300"><svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg></div>
                <h2 class="text-xl font-bold text-white">ทักษะและความเชี่ยวชาญ</h2>
            </div>
            <div class="flex flex-wrap gap-2">
                <?php foreach (['Tailwind CSS v4', 'HTML5 / CSS3', 'JavaScript', 'PHP', 'MySQL', 'Git / GitHub'] as $skill): ?>
                    <span class="rounded-lg border border-cyan-400/15 bg-slate-950 px-3 py-2 text-xs font-medium text-cyan-200"><?= htmlspecialchars($skill) ?></span>
                <?php endforeach; ?>
            </div>
        </section>
    </div>

    <section class="flex flex-col items-center justify-between gap-5 rounded-2xl border border-white/10 bg-slate-900/80 p-6 shadow-xl sm:flex-row">
        <div>
            <h2 class="text-lg font-bold text-white">สนใจร่วมงานหรือติดต่อ?</h2>
            <p class="mt-1 text-sm text-slate-400">สามารถดูรายการภารกิจเพิ่มเติมได้ที่หน้า Assignments</p>
        </div>
        <a href="assign.php" class="inline-flex shrink-0 items-center gap-2 rounded-xl bg-cyan-400 px-5 py-3 text-sm font-bold text-slate-950 transition hover:bg-cyan-300">ดูงานที่มอบหมาย <span aria-hidden="true">→</span></a>
    </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
