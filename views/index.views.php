<?php require 'partials/head.php' ?>

<body id="body-home" class="bg-slate-200 font-sans min-h-screen">
  <div id="overlay" class="overlay relative">
    <i id="navMenu-close" class="size-8 tablet:size-14 cursor-pointer" data-feather="x"></i>
  </div>
  <header id="header" class="bg-primary-dark border-b-2 border-secondary-dark  m-8 text-primary-dark h-min w-screen flex-0">
    <div id="hamburger" class="flex flex-col w-2/12 px-4 cursor-pointer">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </div>
    <div class="m-0 tablet:m-auto text-secondary-dark">
      <a href="/">
        <img id="logo" src="../public/img/logo.png" alt="BitBuggy Logo" />
      </a>
    </div>
    <div id="header-nav-menu-items" class="flex text-secondary-dark items-center">
      <div id="user-icon" class="flex items-center hover:text-secondary-light">
        <a href="/signup" class="">
          <i data-feather="user" class="size-8 tablet:size-14"></i>
        </a>
      </div>
      <div class="hover:text-secondary-light">
        <i id="shopping-cart" data-feather="shopping-cart" class="size-8 tablet:size-14 cursor-pointer"></i>
        <p id="shopping-count" class="text-lg tablet:text-2xl">0</p>
      </div>
    </div>
    </div>
    <form id="header-search-container" class="py-3 flex justify-center items-center" action="/products" method="GET">
      <input class="rounded-md p-2 w-10/12 tablet:w-8/12" type="text" id="header-search-field" name="header-search-field" placeholder="Search products">
      <button type="submit" onclick="findItems()"><i id="search-tool" data-feather="search"></i></button>
    </form>
  </header>

  <nav id="nav" class="bg-secondary-dark flex tablet:text-2xl">
    <div class="flex flex-col py-4 bg-secondary-light text-primary">
      <div id="user-login" class="flex justify-end me-3">
        <a href="/signin">
          <p class="self-center text-sm pe-2 cursor-pointer">Sign in</p>
        </a>
        <i data-feather="user"></i>
      </div>
      <div class="p-4">
        <p>Browse</p>
        <p><strong>BitBuggy</strong></p>
      </div>
    </div>
    <ul class="nav-links mx-4 text-primary">
      <li class="nav-link-item flex m-4 cursor-pointer">
        <a href="/"></a><i class="size-5 mx-2" data-feather="home"></i>Home</a>
      </li>
      <li class="nav-link-item flex m-4 cursor-pointer">
        <a href="/products"></a><i class="size-5 mx-2" data-feather="package"></i>Products</a>
      </li>
      <li class="nav-link-item flex m-4 cursor-pointer">
        <a href="/signup"><i class="size-5 mx-2" data-feather="user-check"></i></a><a href="/signup">Become a
          Member</a>
      </li>
    </ul>
  </nav>

  <main id="main" class="">
    <section id="section-top-deals" class="">
      <div class="secondary-box-shadow">
        <div class="clip-background-primary"></div>
      </div>
      <div id="top-deals-content" class="relative top-0 left-0 w-full">
        <h2 id="top-deals-title" class="text-secondary-dark font-display text-6xl">Top Deals</h2>
        <div id="top-deals-items" class="grid grid-cols-2 h-full">
          <ul class="text-secondary-dark self-center m-4">
            <li class="text-xl underline">Apple Products</li>
            <li class="m-3 text-sm">iPhone:<br /><small class="line-through">$999</small>&#9;💥<small>$799</small>
            </li>
            <li class="m-3 text-sm">Smart Watches:<br /><small class="line-through">$499</small>&#9;💥<small>$349</small></li>
            <li class="text-sm m-3">Macbooks:<br /><small class="line-through">$1499</small>&#9;💥<small>$1299</small>
            </li>
          </ul>
          <img class="self-center rounded-md w-11/12 h-2/3" src="../public/img/apple-products.jpg" alt="apple products">
        </div>
      </div>
    </section>

    <section id="section-membership" class="text-center">
      <h2 id="section-membership-title" class="text-4xl m-1">Become a member for extra savings and benefits!</h2>
      <button class="cta-btn bg-primary text-secondary-light rounded-full px-10 py-4 mt-4 mx-auto text-center shadow-black border-secondary-dark tracking-wider">Sign
        up now!</button>
      <div class=" cards-container flex flex-col tablet:flex-row justify-center items-center">
        <div class="card text-primary flex flex-col tablet:mx-10 justify-center items-center">
          <i data-feather="truck" class="size-14"></i>
          <h3 class="text-center text-3xl text-sans pt-4">FREE Shipping!</h3>
          <p class="text-xl m-5">Members take advantage of free shipping on all orders guaranteed to be
            delivered within 3
            days.</p>
        </div>
        <div class="card text-primary flex flex-col tablet:mx-10 justify-center items-center">
          <i data-feather="dollar-sign" class="size-14"></i>
          <h3 class="text-center text-3xl text-sans pt-4">Member's Deals</h3>
          <p class="text-xl m-5">Members also receive deep price cuts on in-demand products and first
            looks at new product selections.</p>
        </div>
        <div class="card text-primary flex flex-col tablet:mx-10 justify-center items-center">
          <i data-feather="star" class="size-14"></i>
          <h3 class="text-3xl text-sans pt-4">Rewards points</h3>
          <p class="text-xl text-center m-5">Members are automatically enrolled. Accumulate points toward discounts on
            every order!</p>
        </div>
      </div>
      <div class="flex flex-col justify-center items-center">
        <h2 class="heading-secondary">Become a member today!</h2>
        <button class="cta-btn bg-primary text-secondary-light rounded-full px-10 py-4 mt-4 mx-auto shadow-black border-secondary-dark tracking-wider">Sign
          up now!</button>
      </div>
    </section>

    <section id="section-categories" class="text-primary">
      <div class="primary-box-shadow"">
          <div class=" clip-background-secondary"></div>
      </div>
      <h2 id="section-categories-title" class="font-display text-5xl ps-4 py-6 my-12">Categories</h2>
      <div id="category-img-grid" class="grid gap-x-4 gap-y-10 grid-cols-2 grid-rows-2 text-center p-3">
        <div class="text-xl flex flex-col"><img class="category-img" src="../public/img/iphone-toss.jpg" alt="electronics">
          <p>Electronics</p>
        </div>
        <div class="text-xl flex flex-col"><img class="category-img" src="../public/img/fashion2.jpg" alt="fashion model">
          <p>Fashion</p>
        </div>
        <div class="text-xl flex flex-col"><img class="category-img" src="../public/img/beauty-face.jpg" alt="beauty products">
          <p>Beauty</p>
        </div>
        <div class="text-xl flex flex-col"><img class="category-img" src="../public/img/kitchen2.jpg" alt="home goods">
          <p>Home Goods</p>
        </div>
      </div>
    </section>

    <section id="section-top-picks" class="bg-primary-dark w-full pb-12">
      <h2 class="font-display text-secondary-dark text-6xl ps-4 py-6 my-12">Top Picks</h2>
      <div class="top-picks-grid m-1 grid grid-col-2 auto-rows-auto gap-2">
        <div class="top-picks-item *:max-w-none"><img class="h-full w-full" src="../public/img/galaxy21.jpg" alt="samsung galaxy 21"></div>
        <div class="top-picks-item"><img src="../public/img/sonybuds.jpg" alt="sony earbuds"></div>
        <div class="top-picks-item col-span-2">
          <img src="../public/img/airpods.jpg" alt="apple airpods">
        </div>
        <div class="top-picks-item"><img src="../public/img/fashion.jpg" alt="woman on the beach"></div>
        <div class="top-picks-item"><img src="../public/img/kitchen.jpg" alt="chopping vegetables in the kitchen">
        </div>
        <div class="top-picks-item col-span-2"><img src="../public/img/camera.jpg" alt="two cameras"></div>
      </div>
    </section>

    <section id="section-buy-again" class="mt-12 bg-secondary-dark w-full">
      <h2 id="section-buy-again-title" class="text-5xl font-display text-primary-dark ps-4 py-6 my-12">Buy Again</h2>
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


  <?php require 'partials/footer.php' ?>


  <script>
    feather.replace();
  </script>
  <script src="../public/js/home.js"></script>
</body>

</html>