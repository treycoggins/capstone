<?php require("views/partials/_head.php") ?>

<body class="bg-slate-200 font-sans w-full h-screen flex flex-col justify-center items-center">
    <header class="bg-primary border-b-4 border-secondary-dark text-primary-dark w-screen">
        <div class="flex p-6 justify-between">
            <div class="m-auto text-secondary-dark">
                <a href="/">
                    <img src="../public/img/logo.png" alt="BitBuggy Logo" class="h-32 w-40" />
                </a>
            </div>
        </div>
    </header>

    <main class="flex justify-center items-center text-center w-screen grow">
        <a href="/">
            <p class="text-9xl text-slate-500">404</p>
            <h1 class="text-primary font-bold inline">The page you requested was not found.</h1>
            <p class="text-primary">Please return to the home page.
                <i data-feather='arrow-right' class="size-4 inline"></i>
                <i data-feather="home" class="size-4 inline"></i>
            </p>
        </a>
    </main>
    <footer class="bg-primary border-t-4 border-secondary-dark text-lg w-screen py-6">
        <div class="m-2 flex flex-col h-full justify-around items-center"></div>
    </footer>
    <script>
        feather.replace();
    </script>
    <script src=" ../public/js/index.js">
    </script>
</body>

</html>