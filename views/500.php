<?php require "partials/_head.php" ?>

<body class="bg-slate-200 font-sans w-full h-screen flex flex-col justify-center items-center">
    <?php require "partials/_header.php" ?>
    <?php require "partials/_nav.php" ?>

    <main class="flex justify-center items-center text-center w-screen grow">
        <a href="/">
            <p class="text-9xl text-slate-500">500</p>
            <h1 class="font-bold inline">We are experiencing problems fulfilling your request...</h1>
            <p>The site's administrators have been informed.</p>
            <p class="">Please return to the home page.
                <i data-feather='arrow-right' class="size-4 inline"></i>
                <i data-feather="home" class="size-4 inline"></i>
            </p>
        </a>
    </main>
    <?php require "partials/_footer.php" ?>