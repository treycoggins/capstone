<?php require('partials/_head.php'); ?>

<body class="overflow-x-hidden bg-slate-200 text-primary-dark font-sans">
  <header class="bg-primary-dark border-b-2 border-secondary-dark h-min">
    <div class="flex pt-4 justify-between">
      <div class="mt-4 mx-4 text-secondary-dark">
        <a href="/">
          <img class="h-auto w-20" src="../public/img/logo.png" alt="BitBuggy Logo" />
        </a>
      </div>
      <div id="hamburger" class="flex flex-col p-6 cursor-pointer">
        <div class="bar h-1 w-9 bg-primary m-1 rounded-md"></div>
        <div class="bar h-1 w-9 bg-primary m-1 rounded-md"></div>
        <div class="bar h-1 w-9 bg-primary m-1 rounded-md"></div>
      </div>
    </div>
    <i id="navMenu-close" class="hidden stroke-secondary-light absolute top-10 right-10 size-8 tablet:size-14 cursor-pointer" data-feather="x"></i>
    <form class="py-3 flex justify-center items-center" action="/products" method="GET">
      <input class="rounded-md p-2 w-10/12 tablet:w-8/12" type="text" id="header-search-field" name="header-search-field" placeholder="Search products">
    </form>
  </header>

  <nav id="nav" class="absolute top-0 left-0 h-screen bg-secondary-dark flex nav-close">
    <div class="flex flex-col h-1/6 py-4 bg-secondary-light">
      <div id="user-login" class="flex justify-end me-3">
        <a href="/signin">
          <p class="self-center text-sm pe-2">Sign in</p>
        </a>
        <i data-feather="user"></i>
      </div>
      <div class="p-4">
        <p>Browse</p>
        <p><strong>BitBuggy</strong></p>
      </div>
    </div>
    <ul class="mx-4">
      <li class="flex m-4">
        <a href="/"><i class="size-5 mx-2" data-feather="home"></i>Home</a>
      </li>
      <li class="flex m-4">
        <a href="/products"><i class="size-5 mx-2" data-feather="package"></i>Products</a>
      </li>
      <li class="flex m-4">
        <a href="/signup"><i class="size-5 mx-2" data-feather="user-check"></i></a><a href="/signup">Become a
          Member</a>
      </li>
    </ul>
  </nav>

  <main class="relative">
    <section class="">
      <h2 class="text-secondary-dark font-display text-6xl ms-4">Top Deals</h2>
      <div class="flex justify-center h-full">
        <img class="rounded-md w-11/12 h-2/3" src="../public/img/apple-products.jpg" alt="apple products">
      </div>
    </section>

    <section class="text-center my-4 relative">
      <h2 class="text-4xl m-1">Become a member for extra savings and benefits!</h2>
      <button class="cta-btn bg-primary text-secondary-light rounded-full px-10 py-4 mt-4 mx-auto text-center shadow-black border-secondary-dark tracking-wider">Sign
        up now!</button>
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

    <section class="relative">
      <h2 class="font-display text-5xl ps-4 py-6 my-12">Categories</h2>
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

    <section class="mt-12 bg-secondary-dark w-full">
      <h2 class="text-5xl font-display ps-4 py-6 my-12">Buy Again</h2>
      <div class="flex flex-col mb-10">
        <div class="border-primary-dark border-2 p-20 mx-20 my-4 h-full w-auto rounded-md">
          <p>Insert Item Here</p>
        </div>
        <div class="border-primary-dark border-2 p-20 mx-20 my-4 h-full w-auto rounded-md">
          <p>Insert Item Here</p>
        </div>
        <div class="border-primary-dark border-2 p-20 mx-20 my-4 h-full w-auto rounded-md">
          <p>Insert Item Here</p>
        </div>
        <div class="border-primary-dark border-2 p-20 mx-20 my-4 h-full w-auto rounded-md">
          <p>Insert Item Here</p>
        </div>
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
</body>

</html>