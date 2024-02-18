<?php require("views/partials/_head.php") ?>

<body class="bg-slate-200 text-primary font-sans w-full h-screen flex flex-col justify-center items-center">
  <header class="bg-primary border-b-4 border-secondary-dark w-screen">
    <div class="flex p-6 justify-between">
      <div class="m-auto text-secondary-dark">
        <a href="/">
          <img src="../public/img/logo.png" alt="BitBuggy Logo" class="h-32 w-40" />
        </a>
      </div>
    </div>
  </header>
  <main class="grow flex items-center">
    <section id="" class="text-center">
      <h1 class="text-6xl">Under Construction</h1>
      <i data-feather="alert-triangle" class="w-40 h-auto m-auto grow"></i>
      <h2 class="text-lg text-center">Come back later to see our updated website!</h2>
      <a href="/">
        <p class="text-primary">Please return to the home page.
          <i data-feather="home" class="size-10 inline"></i>
        </p>
      </a>
    </section>
  </main>

  <footer class="bg-primary border-t-4 border-secondary-dark text-lg w-screen py-6">
    <div class="m-2"></div>
  </footer>
  <script>
    feather.replace();
  </script>
  <script src=" ../public/js/index.js">
  </script>
</body>

</html>