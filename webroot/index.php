<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alex Poliak | Portfolio</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(120deg, #22223b 0%, #4a4e69 100%);
            min-height: 100vh;
        }
        .glass {
            background: rgba(40, 40, 60, 0.75);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.25);
            backdrop-filter: blur(6px);
            border-radius: 24px;
            border: 1px solid rgba(255,255,255,0.15);
        }
        .card-hover {
            transition: transform 0.25s cubic-bezier(.4,2,.6,1), box-shadow 0.2s;
        }
        .card-hover:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 16px 32px 0 rgba(80, 200, 255, 0.18);
            border-color: #4ea8de;
        }
        .accent {
            color: #4ea8de;
        }
    </style>
</head>
<body class="text-gray-100 antialiased">

<div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-full md:w-80 p-6 flex flex-col glass md:fixed md:inset-y-0 md:left-0 md:justify-between z-10">
        <div>
            <div class="flex items-center mb-6">
                <img src="https://avatars.githubusercontent.com/u/108365576?v=4" alt="Alex Poliak" class="w-20 h-20 rounded-full border-2 border-[#4ea8de] shadow-lg">
                <div class="ml-4">
                    <h1 class="text-2xl font-bold accent">Alex Poliak</h1>
                    <span class="text-gray-400 text-sm">Programátor & Tvorca webov</span>
                </div>
            </div>
            <div class="mb-5">
                <h2 class="text-lg font-semibold accent mb-2">Kontakt</h2>
                <a href="mailto:alex.poliak@example.com" class="block text-gray-300 hover:accent transition mb-1">alex.poliak@example.com</a>
                <a href="https://github.com/Apoliak7777" target="_blank" class="block text-gray-300 hover:accent transition">github.com/Apoliak7777</a>
            </div>
            <div>
                <h2 class="text-lg font-semibold accent mb-2">Zručnosti</h2>
                <div class="flex flex-wrap gap-2 text-sm">
                    <span class="bg-[#4ea8de]/20 text-[#4ea8de] px-2 py-1 rounded">PHP</span>
                    <span class="bg-[#4ea8de]/20 text-[#4ea8de] px-2 py-1 rounded">JS</span>
                    <span class="bg-[#4ea8de]/20 text-[#4ea8de] px-2 py-1 rounded">Python</span>
                    <span class="bg-[#4ea8de]/20 text-[#4ea8de] px-2 py-1 rounded">HTML/CSS</span>
                    <span class="bg-[#4ea8de]/20 text-[#4ea8de] px-2 py-1 rounded">SQL</span>
                    <span class="bg-[#4ea8de]/20 text-[#4ea8de] px-2 py-1 rounded">Linux</span>
                    <span class="bg-[#4ea8de]/20 text-[#4ea8de] px-2 py-1 rounded">Docker</span>
                </div>
            </div>
        </div>
        <footer class="mt-8 text-xs text-gray-500 text-center">
            &copy; <?php echo date('Y'); ?> Alex Poliak
        </footer>
    </aside>
    
    <!-- Content -->
    <main class="flex-1 md:ml-96 p-6 md:p-16">
        <!-- Úvod -->
        <section class="mb-10">
            <h2 class="text-3xl font-bold mb-3 accent">Vitaj na mojom portfóliu</h2>
            <p class="text-gray-300 text-lg max-w-2xl">
                Som vývojár, ktorý spája čistý kód, estetiku a efektívnosť. Zameriavam sa na webové aplikácie, automatizáciu a open-source projekty.
            </p>
        </section>
        
        <!-- Projekty -->
        <section>
            <h2 class="text-2xl font-semibold accent mb-6">Moje Projekty</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $projects = [
                    [
                        "name" => "Hosting Website",
                        "desc" => "Web hosting platforma s automatizovaným systémom objednávok, bezpečnosťou a moderným UI.",
                        "link" => "https://github.com/Apoliak7777/Hosting_Website",
                        "tags" => ["PHP", "Tailwind", "MySQL"]
                    ],
                    [
                        "name" => "MAINTENANCE",
                        "desc" => "Systém na správu a plánovanie údržby serverov s API a notifikáciami.",
                        "link" => "https://github.com/Apoliak7777/MAINTENANCE",
                        "tags" => ["PHP", "API", "SQL"]
                    ],
                    [
                        "name" => "Lorelei-bot",
                        "desc" => "Inteligentný Discord bot pre správu serverov, automatizácie a zábavu.",
                        "link" => "https://github.com/Apoliak7777/Lorelei-bot",
                        "tags" => ["Python", "Discord.py", "Docker"]
                    ],
                    [
                        "name" => "Apoliak-Portfolio",
                        "desc" => "Moja staršia portfólio stránka – statický web s dôrazom na čisté UI.",
                        "link" => "https://github.com/Apoliak7777/Apoliak-Portfolio",
                        "tags" => ["HTML", "CSS", "JS"]
                    ],
                ];
                foreach ($projects as $p) {
                    echo '<div class="glass p-6 card-hover flex flex-col">';
                    echo '<h3 class="text-xl font-bold mb-2 accent">'.$p['name'].'</h3>';
                    echo '<p class="mb-4 text-gray-200 flex-1">'.$p['desc'].'</p>';
                    echo '<div class="flex gap-2 mb-4 flex-wrap">';
                    foreach ($p['tags'] as $tag) {
                        echo '<span class="bg-[#4ea8de]/30 text-[#4ea8de] text-xs px-2 py-1 rounded">'.$tag.'</span>';
                    }
                    echo '</div>';
                    echo '<a href="'.$p['link'].'" target="_blank" class="mt-auto text-sm accent hover:underline">Zdrojový kód &rarr;</a>';
                    echo '</div>';
                }
                ?>
            </div>
        </section>
    </main>
</div>

</body>
</html>