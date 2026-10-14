<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HivePanel - Modern Open Source Game Server Management</title>

    <meta
        name="description"
        content="HivePanel is a modern, open source game server management panel for deploying, managing and scaling game servers across your own infrastructure."
    >

    <meta
        name="keywords"
        content="HivePanel, game server panel, game server management, open source game server panel, Minecraft server panel, server hosting panel, Docker game servers, self hosted game server panel"
    >

    <meta name="author" content="HivePanel">
    <meta name="application-name" content="HivePanel">
    <meta name="generator" content="HivePanel">
    <meta name="referrer" content="strict-origin-when-cross-origin">

    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="googlebot" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

    <meta name="theme-color" content="#090909">
    <meta name="color-scheme" content="dark">

    <link rel="canonical" href="https://hivepanel.dev/">

    <link rel="alternate" hreflang="en" href="https://hivepanel.dev/">
    <link rel="alternate" hreflang="x-default" href="https://hivepanel.dev/">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="HivePanel">
    <meta property="og:title" content="HivePanel - Modern Open Source Game Server Management">
    <meta
        property="og:description"
        content="Deploy, manage and scale game servers across your own infrastructure with HivePanel, a modern open source game server management platform."
    >
    <meta property="og:url" content="https://hivepanel.dev/">
    <meta property="og:image" content="https://hivepanel.dev/assets/imgs/social-preview.png">
    <meta property="og:image:secure_url" content="https://hivepanel.dev/assets/imgs/social-preview.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="HivePanel open source game server management panel">
    <meta property="og:locale" content="en_GB">

    <!-- Twitter / X -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="HivePanel - Modern Open Source Game Server Management">
    <meta
        name="twitter:description"
        content="Deploy, manage and scale game servers across your own infrastructure with HivePanel."
    >
    <meta name="twitter:image" content="https://hivepanel.dev/assets/imgs/social-preview.png">
    <meta name="twitter:image:alt" content="HivePanel open source game server management panel">

    <!-- Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/imgs/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/imgs/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/imgs/favicon-16x16.png">
    <link rel="shortcut icon" href="/assets/imgs/favicon.ico">
    <link rel="manifest" href="/assets/imgs/site.webmanifest">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300;400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Chakra Petch"', 'sans-serif'],
                    },
                    boxShadow: {
                        'orange-glow': '0 0 80px rgba(249, 115, 22, 0.12)',
                    },
                },
            },
        }
    </script>

    <!-- Structured Data -->
    <script type="application/ld+json">
        <?= json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'SoftwareApplication',
            'name' => 'HivePanel',
            'url' => 'https://hivepanel.dev/',
            'applicationCategory' => 'DeveloperApplication',
            'operatingSystem' => 'Linux',
            'description' => 'HivePanel is a modern, open source game server management panel for deploying, managing and scaling game servers across your own infrastructure.',
            'image' => 'https://hivepanel.dev/assets/imgs/social-preview.png',
            'softwareHelp' => [
                '@type' => 'WebPage',
                'url' => 'https://github.com/HiveDevelopment',
            ],
            'sameAs' => [
                'https://github.com/HiveDevelopment',
            ],
            'offers' => [
                '@type' => 'Offer',
                'price' => '0',
                'priceCurrency' => 'GBP',
            ],
        ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
    </script>

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            background: #090909;
        }

        ::selection {
            background: rgba(249, 115, 22, 0.35);
            color: white;
        }

        .hive-grid {
            background-image:
                linear-gradient(rgba(255, 255, 255, 0.025) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.025) 1px, transparent 1px);
            background-size: 48px 48px;
        }

        .hex-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='72' height='62' viewBox='0 0 72 62' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='%23f59e0b' stroke-width='1'%3E%3Cpath d='M18 1l17 10v20L18 41 1 31V11z'/%3E%3Cpath d='M54 1l17 10v20L54 41 37 31V11z'/%3E%3Cpath d='M36 31l17 10v20L36 71 19 61V41z'/%3E%3C/g%3E%3C/svg%3E");
        }

        .feature-card::before {
            content: "";
            position: absolute;
            inset: 0;
            opacity: 0;
            background: radial-gradient(
                600px circle at var(--mouse-x, 50%) var(--mouse-y, 50%),
                rgba(249, 115, 22, 0.09),
                transparent 40%
            );
            transition: opacity 0.25s ease;
            pointer-events: none;
        }

        .feature-card:hover::before {
            opacity: 1;
        }

        .reveal {
            opacity: 0;
            transform: translateY(24px);
            transition:
                opacity 0.7s ease,
                transform 0.7s ease;
        }

        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .hero-preview {
            animation: previewFloat 7s ease-in-out infinite;
        }

        @keyframes previewFloat {
            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-8px);
            }
        }

        .status-pulse::before {
            content: "";
            position: absolute;
            inset: -4px;
            border-radius: 9999px;
            background: rgba(34, 197, 94, 0.25);
            animation: statusPulse 2s infinite;
        }

        @keyframes statusPulse {
            0% {
                transform: scale(0.8);
                opacity: 1;
            }

            100% {
                transform: scale(2);
                opacity: 0;
            }
        }
    </style>
</head>

<body class="bg-[#090909] text-white antialiased">

<?php
$images = [
    [
        'src' => '/assets/imgs/gallery/server-index.png',
        'title' => 'Cell Overview',
        'description' => 'Monitor and control your running game server from one place.',
    ],
    [
        'src' => '/assets/imgs/gallery/server-files.png',
        'title' => 'File Manager',
        'description' => 'Manage your Cell files directly from the browser.',
    ],
    [
        'src' => '/assets/imgs/gallery/server-players.png',
        'title' => 'Player Management',
        'description' => 'View and manage connected players without reaching for the console.',
    ],
    [
        'src' => '/assets/imgs/gallery/server-schedules.png',
        'title' => 'Schedules',
        'description' => 'Automate recurring commands, restarts and maintenance tasks.',
    ],
    [
        'src' => '/assets/imgs/gallery/server-importer.png',
        'title' => 'Server Importer',
        'description' => 'Bring existing game servers into HivePanel with less manual work.',
    ],
    [
        'src' => '/assets/imgs/gallery/server-backups.png',
        'title' => 'Backups',
        'description' => 'Create and manage Cell backups without leaving the panel.',
    ],
];

$features = [
    [
        'icon' => 'server',
        'title' => 'Built for game servers',
        'description' => 'HivePanel is designed around running and managing game servers from the start, rather than adapting a generic infrastructure dashboard.',
    ],
    [
        'icon' => 'box',
        'title' => 'Isolated Cells',
        'description' => 'Every Cell runs independently with enforced resource limits, keeping workloads separated from one another.',
    ],
    [
        'icon' => 'nodes',
        'title' => 'Scale with Nodes',
        'description' => 'Add additional machines as your infrastructure grows while continuing to manage everything from one Panel.',
    ],
    [
        'icon' => 'zap',
        'title' => 'Fast by design',
        'description' => 'A responsive interface focused on the tasks server owners and infrastructure administrators actually perform.',
    ],
    [
        'icon' => 'import',
        'title' => 'Simple migrations',
        'description' => 'Bring existing servers into HivePanel without manually rebuilding every configuration from scratch.',
    ],
    [
        'icon' => 'code',
        'title' => 'Open source',
        'description' => 'Inspect it, contribute to it, extend it and deploy it on infrastructure you control.',
    ],
];

$combs = [
    [
        'name' => 'Minecraft Paper',
        'runtime' => 'Java',
        'tag' => 'Minecraft',
    ],
    [
        'name' => 'Minecraft Vanilla',
        'runtime' => 'Java',
        'tag' => 'Minecraft',
    ],
    [
        'name' => 'Velocity',
        'runtime' => 'Java',
        'tag' => 'Proxy',
    ],
    [
        'name' => 'Minecraft Forge',
        'runtime' => 'Java',
        'tag' => 'Modded',
    ],
];

function icon(string $name): string
{
    $icons = [
        'server' => '
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                <rect x="3" y="4" width="18" height="6" rx="2"/>
                <rect x="3" y="14" width="18" height="6" rx="2"/>
                <path d="M7 7h.01M7 17h.01M11 7h2M11 17h2"/>
            </svg>
        ',
        'box' => '
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                <path d="m21 8-9 5-9-5 9-5 9 5Z"/>
                <path d="m3 8 9 5 9-5"/>
                <path d="M3 8v8l9 5 9-5V8"/>
                <path d="M12 13v8"/>
            </svg>
        ',
        'nodes' => '
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                <rect x="3" y="3" width="7" height="7" rx="2"/>
                <rect x="14" y="14" width="7" height="7" rx="2"/>
                <path d="M10 6.5h4a3 3 0 0 1 3 3V14"/>
                <path d="m14 11 3 3 3-3"/>
            </svg>
        ',
        'cell' => '
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                <path d="m12 2 8.5 5v10L12 22l-8.5-5V7L12 2Z"/>
                <path d="m8.5 10 3.5-2 3.5 2v4L12 16l-3.5-2v-4Z"/>
            </svg>
        ',
        'worker' => '
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                <path d="M4 17h16"/>
                <path d="M6 17v-5a6 6 0 0 1 12 0v5"/>
                <path d="M9 6.8V4h6v2.8"/>
                <path d="M12 8v4"/>
            </svg>
        ',
        'comb' => '
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                <path d="m8 3 4 2.3v4.6L8 12.2 4 9.9V5.3L8 3Z"/>
                <path d="m16 3 4 2.3v4.6l-4 2.3-4-2.3V5.3L16 3Z"/>
                <path d="m12 10 4 2.3v4.6L12 19.2l-4-2.3v-4.6L12 10Z"/>
            </svg>
        ',
        'zap' => '
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                <path d="M13 2 4 14h7l-1 8 9-12h-7l1-8Z"/>
            </svg>
        ',
        'import' => '
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                <path d="M12 3v12"/>
                <path d="m7 10 5 5 5-5"/>
                <path d="M5 21h14"/>
            </svg>
        ',
        'code' => '
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                <path d="m8 9-4 3 4 3"/>
                <path d="m16 9 4 3-4 3"/>
                <path d="m14 5-4 14"/>
            </svg>
        ',
        'check' => '
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="m5 12 4 4L19 6"/>
            </svg>
        ',
        'github' => '
            <svg viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 .7a12 12 0 0 0-3.8 23.4c.6.1.8-.3.8-.6v-2.3c-3.3.7-4-1.4-4-1.4-.5-1.4-1.3-1.8-1.3-1.8-1.1-.7.1-.7.1-.7 1.2.1 1.8 1.2 1.8 1.2 1.1 1.8 2.8 1.3 3.5 1 .1-.8.4-1.3.8-1.6-2.6-.3-5.4-1.3-5.4-5.9 0-1.3.5-2.4 1.2-3.2-.1-.3-.5-1.5.1-3.2 0 0 1-.3 3.3 1.2a11.5 11.5 0 0 1 6 0c2.3-1.5 3.3-1.2 3.3-1.2.6 1.7.2 2.9.1 3.2.8.8 1.2 1.9 1.2 3.2 0 4.6-2.8 5.6-5.4 5.9.4.4.8 1.1.8 2.2v3.3c0 .3.2.7.8.6A12 12 0 0 0 12 .7Z"/>
            </svg>
        ',
        'discord' => '
            <svg viewBox="0 0 24 24" fill="currentColor">
                <path d="M19.5 5.3A17 17 0 0 0 15.4 4l-.5 1a15.4 15.4 0 0 0-5.8 0l-.5-1a17 17 0 0 0-4.1 1.3C1.9 9.1 1.2 12.8 1.6 16.4a16.7 16.7 0 0 0 5.1 2.5L8 17.2a10.7 10.7 0 0 1-1.6-.8l.4-.3a12.1 12.1 0 0 0 10.4 0l.4.3a10.7 10.7 0 0 1-1.6.8l1.3 1.7a16.7 16.7 0 0 0 5.1-2.5c.5-4.2-.8-7.9-2.9-11.1ZM8.5 14.2c-1 0-1.8-.9-1.8-2s.8-2 1.8-2 1.8.9 1.8 2-.8 2-1.8 2Zm7 0c-1 0-1.8-.9-1.8-2s.8-2 1.8-2 1.8.9 1.8 2-.8 2-1.8 2Z"/>
            </svg>
        ',
    ];

    return $icons[$name] ?? '';
}
?>

<div class="relative overflow-hidden">
    <div class="pointer-events-none fixed inset-0 z-0">
        <div class="hive-grid absolute inset-0 opacity-40"></div>
        <div class="hex-pattern absolute inset-0 opacity-[0.018]"></div>

        <div class="absolute -top-64 left-1/2 h-[700px] w-[900px] -translate-x-1/2 rounded-full bg-orange-500/[0.08] blur-[130px]"></div>
        <div class="absolute left-[-250px] top-[800px] h-[600px] w-[600px] rounded-full bg-orange-600/[0.035] blur-[150px]"></div>
        <div class="absolute right-[-250px] top-[1900px] h-[600px] w-[600px] rounded-full bg-amber-500/[0.035] blur-[150px]"></div>
    </div>

    <header class="fixed inset-x-0 top-0 z-40 border-b border-white/[0.06] bg-[#090909]/75 backdrop-blur-xl">
        <div class="mx-auto flex h-20 max-w-7xl items-center justify-between px-6 lg:px-8">
            <a href="#" class="flex items-center">
                <img
                    src="/assets/imgs/HivePanelLogo.png"
                    alt="HivePanel"
                    class="h-11 w-auto"
                >
            </a>

            <nav class="hidden items-center gap-8 md:flex">
                <a href="#features" class="text-sm font-medium text-zinc-400 transition hover:text-white">
                    Features
                </a>

                <a href="#preview" class="text-sm font-medium text-zinc-400 transition hover:text-white">
                    Preview
                </a>

                <a href="#architecture" class="text-sm font-medium text-zinc-400 transition hover:text-white">
                    Architecture
                </a>

                <a href="#combs" class="text-sm font-medium text-zinc-400 transition hover:text-white">
                    Combs
                </a>

                <a href="#opensource" class="text-sm font-medium text-zinc-400 transition hover:text-white">
                    Open Source
                </a>
            </nav>

            <div class="flex items-center gap-3">
                <a
                    href="https://github.com/HiveDevelopment"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="hidden rounded-lg px-4 py-2 text-sm font-semibold text-zinc-300 transition hover:bg-white/[0.05] hover:text-white sm:block"
                >
                    GitHub
                </a>

                <a
                    href="/r/discord"
                    class="rounded-lg bg-orange-500 px-4 py-2.5 text-sm font-bold text-black transition hover:bg-orange-400"
                >
                    Join Discord
                </a>
            </div>
        </div>
    </header>

    <main class="relative z-10">
        <section class="relative px-6 pb-24 pt-40 md:pb-32 md:pt-48">
            <div class="mx-auto max-w-7xl">
                <div class="mx-auto max-w-5xl text-center">
                    <div class="mb-7 inline-flex items-center gap-2 rounded-full border border-orange-400/20 bg-orange-400/[0.06] px-4 py-2 text-xs font-semibold uppercase tracking-[0.18em] text-orange-300">
                        <span class="relative flex h-2 w-2">
                            <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-orange-400 opacity-75"></span>
                            <span class="relative inline-flex h-2 w-2 rounded-full bg-orange-400"></span>
                        </span>

                        In active development
                    </div>

                    <h1 class="text-5xl font-bold leading-[1.02] tracking-[-0.045em] text-white sm:text-6xl md:text-7xl lg:text-[88px]">
                        Game server management,
                        <span class="text-orange-400">rebuilt.</span>
                    </h1>

                    <p class="mx-auto mt-8 max-w-3xl text-base leading-8 text-zinc-400 sm:text-lg md:text-xl md:leading-9">
                        HivePanel is a modern, open source platform for deploying, managing and scaling game servers without the clutter.
                    </p>

                    <div class="mt-10 flex flex-col items-center justify-center gap-3 sm:flex-row">
                        <a
                            href="/r/discord"
                            class="group flex w-full items-center justify-center gap-2 rounded-xl bg-orange-500 px-6 py-3.5 text-sm font-bold text-black transition hover:bg-orange-400 sm:w-auto"
                        >
                            Join the community

                            <svg
                                class="h-4 w-4 transition group-hover:translate-x-1"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path d="M5 12h14"/>
                                <path d="m13 6 6 6-6 6"/>
                            </svg>
                        </a>

                        <a
                            href="https://github.com/HiveDevelopment"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="flex w-full items-center justify-center gap-2 rounded-xl border border-white/10 bg-white/[0.035] px-6 py-3.5 text-sm font-bold text-white transition hover:border-white/20 hover:bg-white/[0.07] sm:w-auto"
                        >
                            <span class="h-4 w-4">
                                <?= icon('github') ?>
                            </span>

                            View on GitHub
                        </a>
                    </div>
                </div>

                <div class="hero-preview relative mx-auto mt-20 max-w-6xl">
                    <div class="absolute -inset-20 -z-10 bg-orange-500/[0.08] blur-[100px]"></div>

                    <div class="rounded-[24px] border border-white/10 bg-[#101010] p-2 shadow-2xl shadow-black/60">
                        <div class="overflow-hidden rounded-[18px] border border-white/[0.06] bg-[#0c0c0c]">
                            <div class="flex h-11 items-center border-b border-white/[0.06] bg-[#121212] px-4">
                                <div class="flex gap-1.5">
                                    <span class="h-2.5 w-2.5 rounded-full bg-red-400/70"></span>
                                    <span class="h-2.5 w-2.5 rounded-full bg-yellow-400/70"></span>
                                    <span class="h-2.5 w-2.5 rounded-full bg-green-400/70"></span>
                                </div>

                                <div class="mx-auto flex items-center gap-2 rounded-md border border-white/[0.04] bg-black/20 px-4 py-1 text-[11px] text-zinc-600">
                                    panel.hivepanel.dev
                                </div>

                                <div class="w-[42px]"></div>
                            </div>

                            <button
                                type="button"
                                onclick="openLightbox('/assets/imgs/gallery/server-index.png')"
                                class="group block w-full"
                            >
                                <img
                                    src="/assets/imgs/gallery/server-index.png"
                                    alt="HivePanel Cell dashboard"
                                    class="w-full opacity-90 transition duration-500 group-hover:scale-[1.005] group-hover:opacity-100"
                                >
                            </button>
                        </div>
                    </div>

                    <div class="absolute -bottom-7 left-6 hidden rounded-xl border border-white/10 bg-[#111]/95 px-4 py-3 shadow-xl backdrop-blur-xl md:flex md:items-center md:gap-3">
                        <span class="status-pulse relative h-2 w-2 rounded-full bg-green-400"></span>

                        <div>
                            <p class="text-xs font-semibold text-white">
                                Cell online
                            </p>

                            <p class="mt-0.5 text-[10px] text-zinc-500">
                                Worker connected
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="border-y border-white/[0.06] bg-white/[0.015] px-6 py-8">
            <div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-6 text-center lg:flex-row lg:text-left">
                <div>
                    <p class="text-sm font-semibold text-white">
                        Your infrastructure. Your servers. Your panel.
                    </p>

                    <p class="mt-1 text-sm text-zinc-500">
                        Built to be self-hosted, extensible and yours to control.
                    </p>
                </div>

                <div class="flex flex-wrap justify-center gap-x-8 gap-y-3 text-xs font-semibold uppercase tracking-[0.15em] text-zinc-500">
                    <span>Open Source</span>
                    <span>Isolated Cells</span>
                    <span>Multi-Node</span>
                    <span>Self Hosted</span>
                </div>
            </div>
        </section>

        <section id="features" class="px-6 py-28 md:py-36">
            <div class="mx-auto max-w-7xl">
                <div class="reveal max-w-3xl">
                    <p class="mb-4 text-xs font-bold uppercase tracking-[0.28em] text-orange-400">
                        Why HivePanel
                    </p>

                    <h2 class="text-4xl font-bold tracking-tight text-white md:text-5xl">
                        Everything you need.
                        <span class="text-zinc-600">Nothing you don't.</span>
                    </h2>

                    <p class="mt-6 max-w-2xl text-base leading-8 text-zinc-400">
                        HivePanel focuses on making everyday game server administration straightforward while still giving infrastructure operators the control they need.
                    </p>
                </div>

                <div class="mt-16 grid gap-4 md:grid-cols-2 lg:grid-cols-3">
                    <?php foreach ($features as $feature): ?>
                        <div class="feature-card reveal relative overflow-hidden rounded-2xl border border-white/[0.07] bg-white/[0.025] p-7 transition duration-300 hover:-translate-y-1 hover:border-orange-400/20 hover:bg-white/[0.04]">
                            <div class="mb-6 flex h-11 w-11 items-center justify-center rounded-xl border border-orange-400/20 bg-orange-400/[0.08] text-orange-400">
                                <span class="h-5 w-5">
                                    <?= icon($feature['icon']) ?>
                                </span>
                            </div>

                            <h3 class="text-lg font-bold text-white">
                                <?= htmlspecialchars($feature['title']) ?>
                            </h3>

                            <p class="mt-3 text-sm leading-7 text-zinc-500">
                                <?= htmlspecialchars($feature['description']) ?>
                            </p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="preview" class="px-6 py-24 md:py-32">
            <div class="mx-auto max-w-7xl">
                <div class="reveal mx-auto max-w-3xl text-center">
                    <p class="mb-4 text-xs font-bold uppercase tracking-[0.28em] text-orange-400">
                        Cell management
                    </p>

                    <h2 class="text-4xl font-bold tracking-tight text-white md:text-5xl">
                        Everything around your server, in one place.
                    </h2>

                    <p class="mx-auto mt-6 max-w-2xl text-base leading-8 text-zinc-400">
                        A Cell is your running game server. HivePanel brings its console, files, players, schedules, backups and configuration together into one focused interface.
                    </p>
                </div>

                <div class="mt-16 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
                    <?php foreach ($images as $image): ?>
                        <button
                            type="button"
                            onclick="openLightbox('<?= htmlspecialchars($image['src']) ?>')"
                            class="group reveal overflow-hidden rounded-2xl border border-white/[0.07] bg-[#101010] text-left transition duration-300 hover:-translate-y-1 hover:border-orange-400/30"
                        >
                            <div class="overflow-hidden border-b border-white/[0.06]">
                                <img
                                    src="<?= htmlspecialchars($image['src']) ?>"
                                    alt="<?= htmlspecialchars($image['title']) ?>"
                                    class="aspect-[16/9] w-full object-cover object-top opacity-80 transition duration-500 group-hover:scale-[1.025] group-hover:opacity-100"
                                >
                            </div>

                            <div class="p-5">
                                <div class="flex items-center justify-between gap-3">
                                    <h3 class="font-bold text-white">
                                        <?= htmlspecialchars($image['title']) ?>
                                    </h3>

                                    <svg
                                        class="h-4 w-4 text-zinc-600 transition group-hover:translate-x-0.5 group-hover:text-orange-400"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                    >
                                        <path d="M5 12h14"/>
                                        <path d="m13 6 6 6-6 6"/>
                                    </svg>
                                </div>

                                <p class="mt-2 text-sm leading-6 text-zinc-500">
                                    <?= htmlspecialchars($image['description']) ?>
                                </p>
                            </div>
                        </button>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="architecture" class="px-6 py-28 md:py-36">
            <div class="mx-auto max-w-7xl">
                <div class="grid items-center gap-16 lg:grid-cols-[0.85fr_1.15fr]">
                    <div class="reveal">
                        <p class="mb-4 text-xs font-bold uppercase tracking-[0.28em] text-orange-400">
                            Meet the hive
                        </p>

                        <h2 class="text-4xl font-bold tracking-tight md:text-5xl">
                            One Panel.
                            <br>
                            <span class="text-zinc-600">As many Nodes as you need.</span>
                        </h2>

                        <p class="mt-6 text-base leading-8 text-zinc-400">
                            Panel is the central control plane. Nodes provide the machines that run your game servers, while Worker connects each Node back to Panel and manages the Cells running on it.
                        </p>

                        <div class="mt-10 space-y-5">
                            <div class="flex items-start gap-4">
                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-orange-400/20 bg-orange-400/[0.07] text-orange-400">
                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                        <path d="M4 4h16v16H4z"/>
                                        <path d="M9 9h6v6H9z"/>
                                    </svg>
                                </div>

                                <div>
                                    <p class="font-bold text-white">
                                        Panel
                                    </p>

                                    <p class="mt-1 text-sm leading-6 text-zinc-500">
                                        The central interface for managing users, infrastructure, Combs and Cells.
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-white/10 bg-white/[0.035] text-zinc-300">
                                    <span class="h-5 w-5">
                                        <?= icon('server') ?>
                                    </span>
                                </div>

                                <div>
                                    <p class="font-bold text-white">
                                        Node
                                    </p>

                                    <p class="mt-1 text-sm leading-6 text-zinc-500">
                                        A physical machine or VM providing compute capacity to HivePanel.
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-white/10 bg-white/[0.035] text-zinc-300">
                                    <span class="h-5 w-5">
                                        <?= icon('worker') ?>
                                    </span>
                                </div>

                                <div>
                                    <p class="font-bold text-white">
                                        Worker
                                    </p>

                                    <p class="mt-1 text-sm leading-6 text-zinc-500">
                                        Runs on each Node and carries out instructions sent by Panel.
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-white/10 bg-white/[0.035] text-zinc-300">
                                    <span class="h-5 w-5">
                                        <?= icon('cell') ?>
                                    </span>
                                </div>

                                <div>
                                    <p class="font-bold text-white">
                                        Cell
                                    </p>

                                    <p class="mt-1 text-sm leading-6 text-zinc-500">
                                        A running game server instance created and managed by HivePanel.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="reveal relative">
                        <div class="absolute inset-0 bg-orange-500/[0.05] blur-[100px]"></div>

                        <div class="relative rounded-3xl border border-white/[0.08] bg-[#101010]/95 p-5 md:p-8">
                            <div class="flex items-center justify-between border-b border-white/[0.06] pb-6">
                                <div>
                                    <p class="text-xs font-semibold uppercase tracking-[0.2em] text-zinc-600">
                                        Infrastructure
                                    </p>

                                    <p class="mt-1 font-bold text-white">
                                        HivePanel
                                    </p>
                                </div>

                                <div class="rounded-full border border-green-400/15 bg-green-400/[0.06] px-3 py-1.5 text-xs font-semibold text-green-400">
                                    Operational
                                </div>
                            </div>

                            <div class="mt-8 flex justify-center">
                                <div class="relative min-w-[180px] rounded-2xl border border-orange-400/30 bg-orange-400/[0.07] px-8 py-5 text-center shadow-orange-glow">
                                    <div class="mx-auto mb-3 flex h-10 w-10 items-center justify-center rounded-xl bg-orange-400 text-black">
                                        <svg
                                            class="h-5 w-5"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                        >
                                            <path d="M4 4h16v16H4z"/>
                                            <path d="M9 9h6v6H9z"/>
                                        </svg>
                                    </div>

                                    <p class="text-sm font-bold text-white">
                                        Panel
                                    </p>

                                    <p class="mt-1 text-[11px] text-zinc-500">
                                        Control Plane
                                    </p>
                                </div>
                            </div>

                            <div class="mx-auto h-12 w-px bg-gradient-to-b from-orange-400/60 to-white/10"></div>

                            <div class="relative grid gap-4 md:grid-cols-2">
                                <div class="rounded-2xl border border-white/[0.08] bg-white/[0.025] p-5">
                                    <div class="flex items-center justify-between gap-4">
                                        <div class="flex items-center gap-3">
                                            <div class="flex h-9 w-9 items-center justify-center rounded-lg border border-white/[0.08] bg-white/[0.04] text-zinc-400">
                                                <span class="h-4 w-4">
                                                    <?= icon('server') ?>
                                                </span>
                                            </div>

                                            <div>
                                                <p class="text-sm font-bold text-white">
                                                    Node EU-01
                                                </p>

                                                <p class="text-[10px] text-zinc-600">
                                                    London
                                                </p>
                                            </div>
                                        </div>

                                        <span class="h-2 w-2 rounded-full bg-green-400"></span>
                                    </div>

                                    <div class="mt-4 flex items-center gap-2 rounded-lg border border-white/[0.06] bg-black/20 px-3 py-2.5">
                                        <span class="h-4 w-4 text-orange-400">
                                            <?= icon('worker') ?>
                                        </span>

                                        <span class="text-xs font-semibold text-zinc-400">
                                            Worker
                                        </span>

                                        <span class="ml-auto text-[9px] uppercase tracking-wider text-green-400">
                                            Connected
                                        </span>
                                    </div>

                                    <div class="mt-4 grid grid-cols-2 gap-2">
                                        <div class="rounded-xl border border-orange-400/10 bg-orange-400/[0.035] p-3">
                                            <div class="flex items-center gap-2">
                                                <span class="h-4 w-4 text-orange-400">
                                                    <?= icon('cell') ?>
                                                </span>

                                                <span class="text-[10px] font-bold uppercase tracking-wider text-orange-300">
                                                    Cell
                                                </span>
                                            </div>

                                            <p class="mt-3 text-xs font-bold text-white">
                                                Survival
                                            </p>

                                            <p class="mt-1 text-[9px] text-zinc-600">
                                                Paper
                                            </p>
                                        </div>

                                        <div class="rounded-xl border border-orange-400/10 bg-orange-400/[0.035] p-3">
                                            <div class="flex items-center gap-2">
                                                <span class="h-4 w-4 text-orange-400">
                                                    <?= icon('cell') ?>
                                                </span>

                                                <span class="text-[10px] font-bold uppercase tracking-wider text-orange-300">
                                                    Cell
                                                </span>
                                            </div>

                                            <p class="mt-3 text-xs font-bold text-white">
                                                Proxy
                                            </p>

                                            <p class="mt-1 text-[9px] text-zinc-600">
                                                Velocity
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="rounded-2xl border border-white/[0.08] bg-white/[0.025] p-5">
                                    <div class="flex items-center justify-between gap-4">
                                        <div class="flex items-center gap-3">
                                            <div class="flex h-9 w-9 items-center justify-center rounded-lg border border-white/[0.08] bg-white/[0.04] text-zinc-400">
                                                <span class="h-4 w-4">
                                                    <?= icon('server') ?>
                                                </span>
                                            </div>

                                            <div>
                                                <p class="text-sm font-bold text-white">
                                                    Node EU-02
                                                </p>

                                                <p class="text-[10px] text-zinc-600">
                                                    Frankfurt
                                                </p>
                                            </div>
                                        </div>

                                        <span class="h-2 w-2 rounded-full bg-green-400"></span>
                                    </div>

                                    <div class="mt-4 flex items-center gap-2 rounded-lg border border-white/[0.06] bg-black/20 px-3 py-2.5">
                                        <span class="h-4 w-4 text-orange-400">
                                            <?= icon('worker') ?>
                                        </span>

                                        <span class="text-xs font-semibold text-zinc-400">
                                            Worker
                                        </span>

                                        <span class="ml-auto text-[9px] uppercase tracking-wider text-green-400">
                                            Connected
                                        </span>
                                    </div>

                                    <div class="mt-4 grid grid-cols-2 gap-2">
                                        <div class="rounded-xl border border-orange-400/10 bg-orange-400/[0.035] p-3">
                                            <div class="flex items-center gap-2">
                                                <span class="h-4 w-4 text-orange-400">
                                                    <?= icon('cell') ?>
                                                </span>

                                                <span class="text-[10px] font-bold uppercase tracking-wider text-orange-300">
                                                    Cell
                                                </span>
                                            </div>

                                            <p class="mt-3 text-xs font-bold text-white">
                                                Modded
                                            </p>

                                            <p class="mt-1 text-[9px] text-zinc-600">
                                                Forge
                                            </p>
                                        </div>

                                        <div class="rounded-xl border border-orange-400/10 bg-orange-400/[0.035] p-3">
                                            <div class="flex items-center gap-2">
                                                <span class="h-4 w-4 text-orange-400">
                                                    <?= icon('cell') ?>
                                                </span>

                                                <span class="text-[10px] font-bold uppercase tracking-wider text-orange-300">
                                                    Cell
                                                </span>
                                            </div>

                                            <p class="mt-3 text-xs font-bold text-white">
                                                Vanilla
                                            </p>

                                            <p class="mt-1 text-[9px] text-zinc-600">
                                                Minecraft
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 rounded-xl border border-dashed border-white/[0.08] p-4 text-center">
                                <p class="text-xs text-zinc-600">
                                    Add another Node whenever you need more capacity
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="combs" class="border-y border-white/[0.06] bg-white/[0.012] px-6 py-28 md:py-36">
            <div class="mx-auto max-w-7xl">
                <div class="grid gap-16 lg:grid-cols-[0.85fr_1.15fr] lg:items-center">
                    <div class="reveal">
                        <p class="mb-4 text-xs font-bold uppercase tracking-[0.28em] text-orange-400">
                            Combs
                        </p>

                        <h2 class="text-4xl font-bold tracking-tight md:text-5xl">
                            Define it once.
                            <br>
                            <span class="text-zinc-600">Deploy it anywhere.</span>
                        </h2>

                        <p class="mt-6 text-base leading-8 text-zinc-400">
                            Combs tell HivePanel how a particular type of game server should be installed and started. They bundle the runtime, installation process, variables and startup configuration needed to create a Cell.
                        </p>

                        <div class="mt-8 space-y-4">
                            <div class="flex items-center gap-3 text-sm text-zinc-400">
                                <div class="flex h-6 w-6 items-center justify-center rounded-full bg-orange-400/10 text-orange-400">
                                    <span class="h-3.5 w-3.5">
                                        <?= icon('check') ?>
                                    </span>
                                </div>

                                Runtime and image configuration
                            </div>

                            <div class="flex items-center gap-3 text-sm text-zinc-400">
                                <div class="flex h-6 w-6 items-center justify-center rounded-full bg-orange-400/10 text-orange-400">
                                    <span class="h-3.5 w-3.5">
                                        <?= icon('check') ?>
                                    </span>
                                </div>

                                Installation instructions
                            </div>

                            <div class="flex items-center gap-3 text-sm text-zinc-400">
                                <div class="flex h-6 w-6 items-center justify-center rounded-full bg-orange-400/10 text-orange-400">
                                    <span class="h-3.5 w-3.5">
                                        <?= icon('check') ?>
                                    </span>
                                </div>

                                Startup commands and variables
                            </div>

                            <div class="flex items-center gap-3 text-sm text-zinc-400">
                                <div class="flex h-6 w-6 items-center justify-center rounded-full bg-orange-400/10 text-orange-400">
                                    <span class="h-3.5 w-3.5">
                                        <?= icon('check') ?>
                                    </span>
                                </div>

                                Reusable across Nodes
                            </div>
                        </div>
                    </div>

                    <div class="reveal">
                        <div class="relative overflow-hidden rounded-3xl border border-white/[0.08] bg-[#101010] p-5 md:p-7">
                            <div class="hex-pattern absolute inset-0 opacity-[0.02]"></div>

                            <div class="relative">
                                <div class="mb-5 flex items-center justify-between">
                                    <div>
                                        <p class="text-xs font-semibold uppercase tracking-[0.2em] text-zinc-600">
                                            Comb Library
                                        </p>

                                        <p class="mt-1 font-bold text-white">
                                            Available definitions
                                        </p>
                                    </div>

                                    <div class="flex h-10 w-10 items-center justify-center rounded-xl border border-orange-400/20 bg-orange-400/[0.07] text-orange-400">
                                        <span class="h-5 w-5">
                                            <?= icon('comb') ?>
                                        </span>
                                    </div>
                                </div>

                                <div class="grid gap-3 sm:grid-cols-2">
                                    <?php foreach ($combs as $comb): ?>
                                        <div class="group rounded-2xl border border-white/[0.07] bg-white/[0.025] p-5 transition hover:border-orange-400/20 hover:bg-white/[0.04]">
                                            <div class="flex items-start justify-between gap-4">
                                                <div class="flex h-10 w-10 items-center justify-center rounded-xl border border-orange-400/15 bg-orange-400/[0.06] text-orange-400">
                                                    <span class="h-5 w-5">
                                                        <?= icon('comb') ?>
                                                    </span>
                                                </div>

                                                <span class="rounded-md border border-white/[0.06] bg-white/[0.03] px-2 py-1 text-[9px] font-bold uppercase tracking-wider text-zinc-500">
                                                    <?= htmlspecialchars($comb['tag']) ?>
                                                </span>
                                            </div>

                                            <h3 class="mt-5 text-sm font-bold text-white">
                                                <?= htmlspecialchars($comb['name']) ?>
                                            </h3>

                                            <div class="mt-4 flex items-center justify-between border-t border-white/[0.05] pt-3">
                                                <span class="text-[10px] uppercase tracking-wider text-zinc-600">
                                                    Runtime
                                                </span>

                                                <span class="text-xs font-semibold text-zinc-400">
                                                    <?= htmlspecialchars($comb['runtime']) ?>
                                                </span>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                                <div class="mt-4 flex items-center justify-center gap-3 rounded-xl border border-dashed border-orange-400/15 bg-orange-400/[0.025] px-4 py-4">
                                    <span class="h-4 w-4 text-orange-400">
                                        <?= icon('comb') ?>
                                    </span>

                                    <p class="text-xs text-zinc-500">
                                        Community and custom Combs can extend HivePanel further
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="reveal mt-20">
                    <div class="mx-auto max-w-5xl">
                        <p class="mb-8 text-center text-xs font-bold uppercase tracking-[0.25em] text-zinc-600">
                            From definition to running server
                        </p>

                        <div class="grid gap-3 md:grid-cols-[1fr_auto_1fr_auto_1fr] md:items-center">
                            <div class="rounded-2xl border border-orange-400/20 bg-orange-400/[0.05] p-6 text-center">
                                <div class="mx-auto flex h-11 w-11 items-center justify-center rounded-xl bg-orange-400/10 text-orange-400">
                                    <span class="h-5 w-5">
                                        <?= icon('comb') ?>
                                    </span>
                                </div>

                                <p class="mt-4 font-bold text-white">
                                    Comb
                                </p>

                                <p class="mt-2 text-xs leading-5 text-zinc-500">
                                    Defines how the game server is built
                                </p>
                            </div>

                            <div class="hidden text-zinc-700 md:block">
                                <svg class="h-5 w-8" viewBox="0 0 32 20" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path d="M2 10h26"/>
                                    <path d="m22 4 6 6-6 6"/>
                                </svg>
                            </div>

                            <div class="rounded-2xl border border-white/[0.08] bg-white/[0.025] p-6 text-center">
                                <div class="mx-auto flex h-11 w-11 items-center justify-center rounded-xl bg-white/[0.05] text-zinc-400">
                                    <span class="h-5 w-5">
                                        <?= icon('worker') ?>
                                    </span>
                                </div>

                                <p class="mt-4 font-bold text-white">
                                    Worker
                                </p>

                                <p class="mt-2 text-xs leading-5 text-zinc-500">
                                    Installs and starts the instance on a Node
                                </p>
                            </div>

                            <div class="hidden text-zinc-700 md:block">
                                <svg class="h-5 w-8" viewBox="0 0 32 20" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path d="M2 10h26"/>
                                    <path d="m22 4 6 6-6 6"/>
                                </svg>
                            </div>

                            <div class="rounded-2xl border border-orange-400/20 bg-orange-400/[0.05] p-6 text-center">
                                <div class="mx-auto flex h-11 w-11 items-center justify-center rounded-xl bg-orange-400/10 text-orange-400">
                                    <span class="h-5 w-5">
                                        <?= icon('cell') ?>
                                    </span>
                                </div>

                                <p class="mt-4 font-bold text-white">
                                    Cell
                                </p>

                                <p class="mt-2 text-xs leading-5 text-zinc-500">
                                    Your running game server
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="px-6 py-28 md:py-36">
            <div class="mx-auto max-w-7xl">
                <div class="reveal max-w-3xl">
                    <p class="mb-4 text-xs font-bold uppercase tracking-[0.28em] text-orange-400">
                        Less busywork
                    </p>

                    <h2 class="text-4xl font-bold tracking-tight md:text-5xl">
                        From Comb to Cell in a few steps.
                    </h2>

                    <p class="mt-6 max-w-2xl text-base leading-8 text-zinc-400">
                        Common operations shouldn't require ten different screens, SSH sessions and handwritten notes.
                    </p>
                </div>

                <div class="mt-16 grid gap-px overflow-hidden rounded-2xl border border-white/[0.07] bg-white/[0.07] lg:grid-cols-4">
                    <div class="reveal bg-[#0d0d0d] p-7">
                        <span class="text-sm font-bold text-orange-400">
                            01
                        </span>

                        <h3 class="mt-8 text-lg font-bold">
                            Choose a Comb
                        </h3>

                        <p class="mt-3 text-sm leading-7 text-zinc-500">
                            Select the server definition you want to deploy.
                        </p>
                    </div>

                    <div class="reveal bg-[#0d0d0d] p-7">
                        <span class="text-sm font-bold text-orange-400">
                            02
                        </span>

                        <h3 class="mt-8 text-lg font-bold">
                            Configure
                        </h3>

                        <p class="mt-3 text-sm leading-7 text-zinc-500">
                            Choose a Node, assign resources and configure the Cell's variables.
                        </p>
                    </div>

                    <div class="reveal bg-[#0d0d0d] p-7">
                        <span class="text-sm font-bold text-orange-400">
                            03
                        </span>

                        <h3 class="mt-8 text-lg font-bold">
                            Deploy
                        </h3>

                        <p class="mt-3 text-sm leading-7 text-zinc-500">
                            Worker prepares the environment and installs the game server automatically.
                        </p>
                    </div>

                    <div class="reveal bg-[#0d0d0d] p-7">
                        <span class="text-sm font-bold text-orange-400">
                            04
                        </span>

                        <h3 class="mt-8 text-lg font-bold">
                            Manage
                        </h3>

                        <p class="mt-3 text-sm leading-7 text-zinc-500">
                            Your Cell is ready to control through HivePanel.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="opensource" class="px-6 py-20 md:py-28">
            <div class="mx-auto max-w-7xl">
                <div class="reveal relative overflow-hidden rounded-[32px] border border-orange-400/15 bg-[#10100f] px-7 py-14 md:px-14 md:py-16 lg:px-20">
                    <div class="hex-pattern absolute inset-0 opacity-[0.035]"></div>
                    <div class="absolute -right-32 -top-32 h-96 w-96 rounded-full bg-orange-500/10 blur-[100px]"></div>

                    <div class="relative grid items-center gap-12 lg:grid-cols-[1fr_auto]">
                        <div class="max-w-3xl">
                            <div class="mb-6 flex h-12 w-12 items-center justify-center rounded-xl border border-orange-400/20 bg-orange-400/10 text-orange-400">
                                <span class="h-6 w-6">
                                    <?= icon('github') ?>
                                </span>
                            </div>

                            <p class="mb-3 text-xs font-bold uppercase tracking-[0.28em] text-orange-400">
                                Open source
                            </p>

                            <h2 class="text-3xl font-bold tracking-tight md:text-5xl">
                                Built in the open.
                                <span class="text-zinc-600">Built to be yours.</span>
                            </h2>

                            <p class="mt-6 max-w-2xl text-base leading-8 text-zinc-400">
                                HivePanel is being developed as an open source project. Follow development, report issues, contribute improvements or deploy it on infrastructure you control.
                            </p>
                        </div>

                        <div class="flex flex-col gap-3 sm:flex-row lg:flex-col">
                            <a
                                href="https://github.com/HiveDevelopment"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="flex items-center justify-center gap-2 rounded-xl bg-white px-6 py-3.5 text-sm font-bold text-black transition hover:bg-zinc-200"
                            >
                                <span class="h-4 w-4">
                                    <?= icon('github') ?>
                                </span>

                                Explore GitHub
                            </a>

                            <a
                                href="/r/discord"
                                class="flex items-center justify-center gap-2 rounded-xl border border-white/10 bg-white/[0.04] px-6 py-3.5 text-sm font-bold text-white transition hover:bg-white/[0.08]"
                            >
                                <span class="h-4 w-4">
                                    <?= icon('discord') ?>
                                </span>

                                Join Discord
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="px-6 pb-32 pt-20">
            <div class="reveal mx-auto max-w-4xl text-center">
                <p class="mb-5 text-xs font-bold uppercase tracking-[0.3em] text-orange-400">
                    Follow the build
                </p>

                <h2 class="text-4xl font-bold tracking-tight text-white md:text-6xl">
                    HivePanel is just getting started.
                </h2>

                <p class="mx-auto mt-6 max-w-2xl text-base leading-8 text-zinc-400">
                    Development is moving quickly. Join the community to follow progress, test new releases and help shape where HivePanel goes next.
                </p>

                <div class="mt-9 flex flex-col justify-center gap-3 sm:flex-row">
                    <a
                        href="/r/discord"
                        class="rounded-xl bg-orange-500 px-7 py-3.5 text-sm font-bold text-black transition hover:bg-orange-400"
                    >
                        Join Discord
                    </a>

                    <a
                        href="https://github.com/HiveDevelopment"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="rounded-xl border border-white/10 bg-white/[0.03] px-7 py-3.5 text-sm font-bold transition hover:bg-white/[0.07]"
                    >
                        View development
                    </a>
                </div>
            </div>
        </section>
    </main>

    <footer class="relative z-10 border-t border-white/[0.06] px-6">
        <div class="mx-auto flex max-w-7xl flex-col justify-between gap-8 py-10 md:flex-row md:items-center">
            <div>
                <img
                    src="/assets/imgs/HivePanelLogo.png"
                    alt="HivePanel"
                    class="h-9 w-auto"
                >

                <p class="mt-3 max-w-md text-xs leading-6 text-zinc-600">
                    Modern open source game server management.
                </p>
            </div>

            <div class="flex flex-wrap gap-x-7 gap-y-3 text-xs font-medium text-zinc-500">
                <a href="#features" class="transition hover:text-white">
                    Features
                </a>

                <a href="#preview" class="transition hover:text-white">
                    Preview
                </a>

                <a href="#architecture" class="transition hover:text-white">
                    Architecture
                </a>

                <a href="#combs" class="transition hover:text-white">
                    Combs
                </a>

                <a
                    href="https://github.com/HiveDevelopment"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="transition hover:text-white"
                >
                    GitHub
                </a>

                <a href="/r/discord" class="transition hover:text-white">
                    Discord
                </a>
            </div>

            <p class="text-xs text-zinc-700">
                © <?= date('Y') ?> HivePanel
            </p>
        </div>
    </footer>
</div>

<div
    id="lightbox"
    class="fixed inset-0 z-50 hidden items-center justify-center bg-black/90 px-4 backdrop-blur-md sm:px-8"
    onclick="closeLightbox()"
>
    <button
        type="button"
        class="absolute right-5 top-5 z-10 flex h-10 w-10 items-center justify-center rounded-xl border border-white/10 bg-white/[0.07] text-zinc-300 transition hover:bg-white/[0.12] hover:text-white"
        onclick="closeLightbox()"
        aria-label="Close preview"
    >
        <svg
            class="h-5 w-5"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
        >
            <path d="M18 6 6 18M6 6l12 12"/>
        </svg>
    </button>

    <img
        id="lightboxImage"
        src=""
        alt="HivePanel preview enlarged"
        class="max-h-[88vh] max-w-[95vw] rounded-2xl border border-white/10 object-contain shadow-2xl shadow-black"
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

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                revealObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.12,
    });

    document.querySelectorAll('.reveal').forEach((element) => {
        revealObserver.observe(element);
    });

    document.querySelectorAll('.feature-card').forEach((card) => {
        card.addEventListener('mousemove', (event) => {
            const rect = card.getBoundingClientRect();

            card.style.setProperty('--mouse-x', `${event.clientX - rect.left}px`);
            card.style.setProperty('--mouse-y', `${event.clientY - rect.top}px`);
        });
    });
</script>

</body>
</html>