<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="text-end p-2">
        <button id="themeToggle" class="btn btn-primary">🌙 Modo Oscuro</button>
    </div>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const themeToggle = document.getElementById("themeToggle");

            // Modo oscuro por defecto
            let currentTheme = localStorage.getItem("theme") || "dark";

            document.documentElement.setAttribute("data-bs-theme", currentTheme);
            updateButtonText(currentTheme);

            themeToggle.addEventListener("click", function() {
                let newTheme = document.documentElement.getAttribute("data-bs-theme") === "light" ? "dark" :
                    "light";

                document.documentElement.setAttribute("data-bs-theme", newTheme);
                localStorage.setItem("theme", newTheme);

                updateButtonText(newTheme);
            });

            function updateButtonText(theme) {
                themeToggle.textContent = theme === "dark" ? "☀️ Modo Claro" : "🌙 Modo Oscuro";
            }
        });
    </script>

</body>

</html>
