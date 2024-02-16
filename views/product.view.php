<?php require('partials/_head.php'); ?>

<body class="bg-bg-light text-primary font-sans relative">
  <header class="bg-primary border-b-2 border-secondary-dark h-min laptop:w-full flex flex-wrap pt-4 justify-between">
    <div class="mt-4 mx-4 text-secondary-dark tablet:grow">
      <a href="/">
        <img class="h-auto shrink-0 w-16 ms-5" src="../public/img/logo.png" alt="BitBuggy Logo" />
      </a>
    </div>
    <form class="py-3 flex w-10/12 justify-end items-center grow mx-4 order-3 tablet:order-2 tablet:w-1/3 tablet:grow-0" action="/products" method="GET">
      <input class="rounded-md p-2 w-full" type="text" name="header-search-field" placeholder="Search products">
      <button type="submit" class="relative">
        <i class="size-6 text-slate-800 absolute top-[-14px] right-[10px]" data-feather="search"></i>
      </button>
    </form>
    <div id="hamburger" class="flex flex-col p-6 cursor-pointer tablet:order-2">
      <div class="bar h-1 w-9 bg-primary-dark m-1 rounded-md"></div>
      <div class="bar h-1 w-9 bg-primary-dark m-1 rounded-md"></div>
      <div class="bar h-1 w-9 bg-primary-dark m-1 rounded-md"></div>
    </div>
  </header>
  
  <?php require("partials/_nav.php") ?>

  <main class="relative">
    <section class="relative m-6">
      <img src="../public/img/blushes.jpg" alt="product image" class="w-screen h-auto">
      <div class="">
        <h3 class="">Product Name</h3>
        <p class="text-xs m-6">Description: Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum provident in, harum quaerat corporis, dicta saepe dolores consequatur velit tenetur amet, recusandae unde eos reprehenderit!</p>
        <p>Price</p>
      </div>
    </section>

    <section class="mt-12 bg-secondary-dark w-full">
      <h2 class="text-5xl font-display ps-4 py-6 my-12">Buy Again</h2>
      <div class="flex flex-col mb-10">
        <div class="border-primary-dark border-2 p-20 mx-20 my-4 h-full w-auto rounded-md">
          <p>Insert Item Here</p>
        </div>
      </div>
    </section>
  </main>


  <?php require('partials/_footer.php'); ?>


  <script>
    feather.replace();
  </script>
  <script src="../public/js/index.js"></script>
  <script src="../public/js/buttons.js"></script>
</body>

</html>