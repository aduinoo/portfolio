<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Adlina Fiqh | Portfolio</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#f6f1e8] text-[#1d1a16]">
        <main class="min-h-screen">
            <section class="mx-auto max-w-6xl px-6 py-10 lg:px-10 lg:py-16">
                <div class="rounded-[2rem] bg-[#fffaf3] p-8 shadow-[0_20px_80px_rgba(36,28,18,0.12)] ring-1 ring-black/5 lg:p-14">
                    <p class="text-sm font-semibold uppercase tracking-[0.3em] text-[#8b6f47]">Portfolio</p>
                    <div class="mt-6 grid gap-12 lg:grid-cols-[1.3fr_0.7fr] lg:items-end">
                        <div>
                            <h1 class="max-w-3xl text-5xl font-semibold tracking-tight text-balance sm:text-6xl lg:text-7xl">
                                Adlina Fiqh
                            </h1>
                            <p class="mt-6 max-w-2xl text-lg leading-8 text-[#5a5146]">
                                Building clean, fast, and thoughtful web experiences.test
                            </p>
                        </div>
                        <div class="grid gap-4 rounded-3xl bg-[#1d1a16] p-6 text-[#fffaf3]">
                            <div>
                                <p class="text-sm uppercase tracking-[0.25em] text-[#b79b76]">Focus</p>
                                <p class="mt-2 text-2xl font-medium">Web Design & Development</p>
                            </div>
                            <div class="grid grid-cols-2 gap-4 text-sm">
                                <div class="rounded-2xl bg-white/5 p-4">
                                    <p class="text-[#b79b76]">Stack</p>
                                    <p class="mt-1 font-medium">Laravel</p>
                                </div>
                                <div class="rounded-2xl bg-white/5 p-4">
                                    <p class="text-[#b79b76]">Style</p>
                                    <p class="mt-1 font-medium">Minimal</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12 grid gap-6 md:grid-cols-3">
                        <div class="rounded-3xl bg-white p-6 ring-1 ring-black/5">
                            <p class="text-sm uppercase tracking-[0.25em] text-[#8b6f47]">Project</p>
                            <h2 class="mt-3 text-2xl font-semibold">Portfolio Site</h2>
                            <p class="mt-3 text-sm leading-7 text-[#5a5146]">A personal home for work, links, and contact.</p>
                        </div>
                        <div class="rounded-3xl bg-white p-6 ring-1 ring-black/5">
                            <p class="text-sm uppercase tracking-[0.25em] text-[#8b6f47]">Project</p>
                            <h2 class="mt-3 text-2xl font-semibold">Dashboard UI</h2>
                            <p class="mt-3 text-sm leading-7 text-[#5a5146]">Clean interfaces with clear hierarchy and calm motion.</p>
                        </div>
                        <div class="rounded-3xl bg-white p-6 ring-1 ring-black/5">
                            <p class="text-sm uppercase tracking-[0.25em] text-[#8b6f47]">Project</p>
                            <h2 class="mt-3 text-2xl font-semibold">Laravel Builds</h2>
                            <p class="mt-3 text-sm leading-7 text-[#5a5146]">Fast deployment, maintainable code, and simple hosting.</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>
