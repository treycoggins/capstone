<?php
require "partials/_head.php";
?>

<body class="bg-slate-200 font-sans w-full h-screen flex flex-col justify-center items-center">
    <?php require "partials/_header.php" ?>
    <?php require "partials/_nav.php" ?>

    <main class="flex justify-center items-center text-center w-screen grow">
        <a href="/">
            <h1 class="text-5xl laptop:text-9xl text-slate-500">Thank You</h1>
            <p class="font-bold inline">You are now being signed out.</p>
            <p class="">You are being redirected to the home page.
                <i data-feather="home" class="size-4 inline"></i>
            </p>
        </a>
    </main>
    <?php require "partials/_footer.php" ?>