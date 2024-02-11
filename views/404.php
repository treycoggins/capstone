<?php require("views/partials/_head.php") ?>

<body class="bg-slate-200 font-sans w-full flex flex-col justify-center items-center">
    <header class="bg-primary-dark border-b-2 border-secondary-dark  m-8 text-primary-dark h-min w-screen flex-0">
        <div class="flex pt-4 justify-between">
            <div class="m-auto text-secondary-dark">
                <a href="/">
                    <img src="../public/img/logo.png" alt="BitBuggy Logo" class="block" />
                </a>
            </div>
        </div>
    </header>

    <main class="text-center w-screen flex-1">
        <a href="/">
            <h1 class="text-primary font-bold inline">The page you requested was not found.</h1>
            <p>Please return to the home page.
                <i data-feather='arrow-right' class="size-4 inline"></i>
                <i data-feather="home" class="size-4 inline"></i>
            </p>
        </a>
    </main>
    <footer class="grid grid-cols-2 bg-primary-dark border-t-2 text-secondary-dark border-secondary-dark flex-0 text-lg w-screen py-6">
        <div class="m-2 flex flex-col h-full justify-around items-center"></div>
    </footer>
    <script>
        feather.replace();
    </script>
    <script src=" ../public/js/home.js">
    </script>
</body>

</html>