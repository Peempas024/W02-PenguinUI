<?php
$pageTitle = 'Assignments | Peemapas';
$currentPage = 'assign';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
$assignments = [
    ['status' => 'In Progress', 'tone' => 'warning', 'date' => '12 พ.ย.', 'title' => 'Web Application Design', 'description' => 'ออกแบบ UI/UX สำหรับระบบจัดการงานวิชาการ โดยใช้ Tailwind CSS v4', 'subject' => 'Web Development', 'action' => 'ดูรายละเอียด'],
    ['status' => 'Completed', 'tone' => 'success', 'date' => '5 พ.ย.', 'title' => 'Database Architecture', 'description' => 'ออกแบบ ER Diagram และ Normalization ฐานข้อมูลระบบร้านค้า', 'subject' => 'Database System', 'action' => 'ส่งแล้ว'],
    ['status' => 'Pending', 'tone' => 'danger', 'date' => '20 พ.ย.', 'title' => 'API Integration Test', 'description' => 'เชื่อมต่อ RESTful API ด้วย PHP cURL และจัดการ JSON response', 'subject' => 'Backend Programming', 'action' => 'เริ่มทำ'],
];
$badgeClasses = ['warning' => 'border-amber-400/20 bg-amber-400/10 text-amber-300', 'success' => 'border-emerald-400/20 bg-emerald-400/10 text-emerald-300', 'danger' => 'border-rose-400/20 bg-rose-400/10 text-rose-300'];
?>
<main class="mx-auto w-full max-w-6xl flex-1 px-5 py-12 sm:px-6 sm:py-16">
    <div class="mb-10">
        <span class="mb-4 inline-flex items-center gap-2 rounded-full border border-cyan-400/20 bg-cyan-400/10 px-3 py-1.5 text-xs font-semibold uppercase tracking-widest text-cyan-300"><span class="h-2 w-2 animate-pulse rounded-full bg-cyan-300"></span>Task Dashboard</span>
        <h1 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">Assignments <span class="text-cyan-300">Overview</span></h1>
        <p class="mt-2 text-sm text-slate-400 sm:text-base">รายการภารกิจและโปรเจกต์ที่ต้องดำเนินการ</p>
    </div>

    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3">
        <?php foreach ($assignments as $task): ?>
            <article class="group flex flex-col justify-between rounded-2xl border border-white/10 bg-slate-900/80 p-6 shadow-xl shadow-black/10 transition duration-300 hover:-translate-y-1 hover:border-cyan-400/30 hover:shadow-cyan-950/20">
                <div>
                    <div class="mb-5 flex items-center justify-between gap-3">
                        <span class="inline-flex rounded-full border px-3 py-1 text-xs font-semibold <?= $badgeClasses[$task['tone']] ?>"><?= htmlspecialchars($task['status']) ?></span>
                        <span class="text-xs text-slate-400">กำหนดส่ง: <?= htmlspecialchars($task['date']) ?></span>
                    </div>
                    <h2 class="text-xl font-bold text-white transition group-hover:text-cyan-300"><?= htmlspecialchars($task['title']) ?></h2>
                    <p class="mt-3 text-sm leading-7 text-slate-400"><?= htmlspecialchars($task['description']) ?></p>
                </div>
                <div class="mt-7 flex items-center justify-between gap-3 border-t border-white/10 pt-5">
                    <span class="text-xs font-medium text-slate-400">วิชา: <?= htmlspecialchars($task['subject']) ?></span>
                    <button type="button" class="shrink-0 rounded-lg px-3.5 py-2 text-xs font-semibold transition <?= $task['tone'] === 'success' ? 'bg-white/5 text-slate-300 hover:bg-white/10' : 'bg-cyan-400 text-slate-950 hover:bg-cyan-300' ?>"><?= htmlspecialchars($task['action']) ?></button>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
