<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HivePanel - Coming Soon</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="apple-touch-icon" sizes="180x180" href="assets/imgs/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/imgs/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/imgs/favicon-16x16.png">
    <link rel="manifest" href="assets/imgs/site.webmanifest">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Chakra Petch"', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>

<body class="min-h-screen bg-[#090909] text-white">
    <main class="relative min-h-screen overflow-hidden px-6">
        <div class="absolute inset-0 opacity-[0.08]"
             style="background-image: url('data:image/svg+xml,%3Csvg width=%2272%22 height=%2262%22 viewBox=%220 0 72 62%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cg fill=%22none%22 stroke=%22%23f59e0b%22 stroke-width=%221%22%3E%3Cpath d=%22M18 1l17 10v20L18 41 1 31V11z%22/%3E%3Cpath d=%22M54 1l17 10v20L54 41 37 31V11z%22/%3E%3Cpath d=%22M36 31l17 10v20L36 71 19 61V41z%22/%3E%3C/g%3E%3C/svg%3E');">
        </div>

        <div class="absolute -top-40 left-1/2 h-[500px] w-[500px] -translate-x-1/2 rounded-full bg-orange-500/10 blur-3xl"></div>

        <section class="relative z-10 mx-auto flex min-h-screen max-w-5xl flex-col items-center justify-center text-center">
            <div class="my-8 flex items-center gap-3">
                <img src="/assets/imgs/HivePanelLogo.png" alt="HivePanel Logo" class="h-16">
            </div>

            <p class="mb-5 text-sm font-semibold uppercase tracking-[0.35em] text-orange-400/80">
                Open source game server panel
            </p>

            <h1 class="max-w-4xl text-5xl font-black tracking-tight text-white md:text-7xl">
                A cleaner way to manage your game servers.
            </h1>

            <p class="mt-6 max-w-2xl text-base leading-8 text-zinc-400 md:text-lg">
                HivePanel is coming soon, being built with a simple goal: fast, clean, and open source game server management. Join our Discord to stay up to date with the latest news and updates.
            </p>

            <div class="mt-10 flex flex-col gap-3 sm:flex-row">
                <a href="/r/discord"
                   class="rounded-lg bg-orange-500 px-6 py-3 text-sm font-bold text-black transition hover:bg-orange-400">
                    Join Discord
                </a>

                <a href="https://github.com/HiveOSSoftware"
                   class="rounded-lg border border-white/10 bg-white/[0.03] px-6 py-3 text-sm font-bold text-white transition hover:border-orange-400/50 hover:bg-orange-400/10">
                    View GitHub
                </a>
            </div>

            <div class="mt-16 w-full max-w-5xl">
                <p class="mb-5 text-sm font-semibold uppercase tracking-[0.3em] text-orange-400/70">
                    Preview
                </p>

                <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    <?php
                        $images = [
                            '/assets/imgs/gallery/server-index.png',
                            '/assets/imgs/gallery/server-files.png',
                            '/assets/imgs/gallery/server-players.png',
                            '/assets/imgs/gallery/server-schedules.png',
                            '/assets/imgs/gallery/server-importer.png',
                            '/assets/imgs/gallery/server-backups.png',
                        ];
                    ?>

                    <?php foreach ($images as $image): ?>
                        <button
                            type="button"
                            onclick="openLightbox('<?= $image ?>')"
                            class="group overflow-hidden rounded-xl border border-white/10 bg-white/[0.03] p-1 transition hover:border-orange-400/50"
                        >
                            <img
                                src="<?= $image ?>"
                                alt="HivePanel preview"
                                class="h-48 w-full rounded-lg object-cover opacity-80 transition group-hover:scale-[1.03] group-hover:opacity-100"
                            >
                        </button>
                    <?php endforeach; ?>
                </div>
            </div>

            <div
                id="lightbox"
                class="fixed inset-0 z-50 hidden items-center justify-center bg-black/85 px-6 backdrop-blur-sm"
                onclick="closeLightbox()"
            >
                <button
                    type="button"
                    class="absolute right-6 top-6 rounded-lg border border-white/10 bg-white/10 px-3 py-2 text-sm font-bold text-white hover:bg-white/20"
                    onclick="closeLightbox()"
                >
                    Close
                </button>

                <img
                    id="lightboxImage"
                    src=""
                    alt="HivePanel preview enlarged"
                    class="max-h-[85vh] max-w-6xl rounded-xl border border-white/10 object-contain shadow-2xl"
                    onclick="event.stopPropagation()"
                >
            </div>

            <script>
                function openLightbox(src) {
                    const lightbox = document.getElementById('lightbox');
                    const image = document.getElementById('lightboxImage');

                    image.src = src;
                    lightbox.classList.remove('hidden');
                    lightbox.classList.add('flex');
                    document.body.classList.add('overflow-hidden');
                }

                function closeLightbox() {
                    const lightbox = document.getElementById('lightbox');
                    const image = document.getElementById('lightboxImage');

                    lightbox.classList.add('hidden');
                    lightbox.classList.remove('flex');
                    image.src = '';
                    document.body.classList.remove('overflow-hidden');
                }

                document.addEventListener('keydown', function (event) {
                    if (event.key === 'Escape') {
                        closeLightbox();
                    }
                });
            </script>

            <p class="mt-14 text-xs text-zinc-600 mb-8">
                © <?= date('Y') ?> HivePanel
            </p>
        </section>
    </main>
</body>
</html>