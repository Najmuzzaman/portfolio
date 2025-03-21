<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MD. Najmuzzaman - Portfolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100 text-gray-900 p-5">
    <div class="max-w-4xl mx-auto">
        <!-- Header Section -->
        <header class="text-center py-10">
            <h1 class="text-4xl font-bold">MD. Najmuzzaman</h1>
            <p class="text-lg text-gray-600">Technical Director at CLICK</p>
        </header>

        <!-- About Section -->
        <section class="my-10">
            <h2 class="text-2xl font-semibold">About Me</h2>
            <p class="mt-2 text-gray-700">
                Experienced in ERP development with a specialization in Payroll Modules.
                Skilled in .NET, C#, React, TypeScript, and database management.
            </p>
        </section>

        <!-- Skills Section -->
        <section class="my-10">
            <h2 class="text-2xl font-semibold">Skills</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-3">
                <?php
                $skills = ["C#", "React", "TypeScript", ".NET 8", "SQL", "ERP Development", "TailwindCSS"];
                foreach ($skills as $skill) {
                    echo "<div class='bg-gray-200 rounded-md p-2 text-center'>$skill</div>";
                }
                ?>
            </div>
        </section>

        <!-- Projects Section -->
        <section class="my-10">
            <h2 class="text-2xl font-semibold">Projects</h2>
            <ul class="mt-3 list-disc pl-5 text-gray-700">
                <?php
                $projects = [
                    "BACBD Website" => "https://www.bacbd.org",
                    "DNMC Website" => "https://www.dnmc.edu.bd",
                    "CIC Group" => "https://www.cicgroup.co"
                ];
                foreach ($projects as $name => $url) {
                    echo "<li><a href='$url' class='text-blue-500' target='_blank' rel='noopener noreferrer'>$name</a></li>";
                }
                ?>
            </ul>
        </section>

        <!-- Contact Section -->
        <section class="my-10 text-center">
            <h2 class="text-2xl font-semibold">Contact</h2>
            <div class="flex justify-center gap-6 mt-4">
                <a href="mailto:najmuzzaman@clickerp.com.bd" class="text-gray-700 text-2xl">📧</a>
                <a href="https://github.com/yourgithub" class="text-gray-700 text-2xl" target="_blank" rel="noopener noreferrer">🐙</a>
                <a href="https://linkedin.com/in/yourlinkedin" class="text-gray-700 text-2xl" target="_blank" rel="noopener noreferrer">🔗</a>
            </div>
        </section>
    </div>
</body>
</html>
