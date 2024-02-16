<?php require('partials/_head.php'); ?>

<body class="bg-bg-light text-primary font-sans relative">
  <div id="overlay" class="overlay-hidden absolute top-0 left-0 h-screen w-screen"></div>
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
    <section class="m-4">
      <h1 class="text-4xl font-display text-secondary-dark text-center m-4">Welcome to BitBuggy</h1>
      <a href="/product" class="text-3xl">Browse All Products</a>
      <p class="text-xl">or</p>
      <p class="text-2xl">Select from:</p>
    </section>

    <section class="relative">
      <div class="grid gap-x-4 gap-y-10 grid-cols-2 grid-rows-2 text-center p-3">
        <div class="text-xl flex flex-col"><img class="h-full w-full object-cover rounded-md" src="../public/img/iphone-toss.jpg" alt="electronics">
          <p>Electronics</p>
        </div>
        <div class="text-xl flex flex-col"><img class="h-full w-full object-cover rounded-md" src="../public/img/fashion2.jpg" alt="fashion model">
          <p>Fashion</p>
        </div>
        <div class="text-xl flex flex-col"><img class="h-full w-full object-cover rounded-md" src="../public/img/beauty-face.jpg" alt="beauty products">
          <p>Beauty</p>
        </div>
        <div class="text-xl flex flex-col"><img class="h-full w-full object-cover rounded-md" src="../public/img/kitchen2.jpg" alt="home goods">
          <p>Home Goods</p>
        </div>
      </div>
    </section>

    <section class="text-center my-4 relative">
      <h2 class="text-4xl mb-10  m-1">Become a member for extra savings and benefits!</h2>
      <a href="/signup" class="cta-btn bg-primary text-secondary-light rounded-full px-10 py-4 mt-4 mx-auto text-center shadow-black border-secondary-dark tracking-wider">Sign
        up now!</a>
      <div class="h-full flex flex-col tablet:flex-row justify-center items-center">
        <div class="card flex flex-col tablet:mx-10 justify-center items-center">
          <i data-feather="truck" class="size-14"></i>
          <h3 class="text-center text-3xl text-sans pt-4">FREE Shipping!</h3>
          <p class="text-xl m-5">Members take advantage of free shipping on all orders guaranteed to be
            delivered within 3
            days.</p>
        </div>
        <div class="card flex flex-col tablet:mx-10 justify-center items-center">
          <i data-feather="dollar-sign" class="size-14"></i>
          <h3 class="text-center text-3xl text-sans pt-4">Member's Deals</h3>
          <p class="text-xl m-5">Members also receive deep price cuts on in-demand products and first
            looks at new product selections.</p>
        </div>
        <div class="card flex flex-col tablet:mx-10 justify-center items-center">
          <i data-feather="star" class="size-14"></i>
          <h3 class="text-3xl text-sans pt-4">Rewards points</h3>
          <p class="text-xl text-center m-5">Members are automatically enrolled. Accumulate points toward discounts on
            every order!</p>
        </div>
      </div>
    </section>

    <section class="relative bg-primary-dark w-full pb-12">
      <h2 class="font-display text-secondary-dark text-6xl ps-4 py-6 my-12">Top Picks</h2>
      <div class="top-picks-grid m-1 grid grid-col-2 auto-rows-auto gap-2">
        <div class="*:max-w-none"><img class="h-full w-full" src="../public/img/galaxy21.jpg" alt="samsung galaxy 21"></div>
        <div class=""><img src="../public/img/sonybuds.jpg" alt="sony earbuds"></div>
        <div class="col-span-2">
          <img src="../public/img/airpods.jpg" alt="apple airpods">
        </div>
        <div class=""><img src="../public/img/fashion.jpg" alt="woman on the beach"></div>
        <div class=""><img src="../public/img/kitchen.jpg" alt="chopping vegetables in the kitchen">
        </div>
        <div class="col-span-2"><img src="../public/img/camera.jpg" alt="two cameras"></div>
      </div>
    </section>

    <section class="relative mt-12 bg-secondary-dark w-full">
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