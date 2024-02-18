<?php require("views/partials/_head.php") ?>
</head>

<body class="bg-slate-200 font-sans w-full h-screen flex flex-col justify-center items-center">
    <?php require("partials/_header.php") ?>

    <main class="flex justify-center items-center text-center w-screen grow">
        <a href="/">
            <p class="text-7xl text-slate-500">Your In!</p>
            <h1 class="text-primary text-2xl font-bold">Wasn't that easy?</h1>
            <p class="text-primary">Continue to browse our products...</p>
            <a href="/product" class="bg-secondary-dark text-primary p-3 border-none m-4 rounded-mdd">Continue</a>
        </a>
    </main>
    <?php require("partials/footer"); ?>