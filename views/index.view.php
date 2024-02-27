<?php require 'partials/_head.php'; ?>

<body class="bg-bg-light text-primary font-sans relative overflow-x-hidden">
  <?php require "partials/_header.php" ?>
  <?php require "partials/_nav.php" ?>

  <main class="relative">
    <section id="section-browse" class="">
      <h1 class="text-4xl font-display text-secondary-dark text-center my-10">Welcome to BitBuggy</h1>
    </section>

    <section id="section-categories">
      <div class="grid gap-x-4 gap-y-10 grid-cols-2 laptop:grid-cols-4 text-center p-3">
        <div class="text-2xl"><img class="h-full w-full object-cover rounded-md" src="img/iphone_toss.jpg" alt="electronics">
          <p>Electronics</p>
        </div>
        <div class="text-2xl"><img class="h-full w-full object-cover rounded-md" src="img/fashion.jpg" alt="fashion model">
          <p>Fashion</p>
        </div>
        <div class="text-2xl"><img class="h-full w-full object-cover rounded-md" src="img/beauty_face.jpg" alt="beauty products">
          <p>Beauty</p>
        </div>
        <div class="text-2xl"><img class="h-full w-full object-cover rounded-md" src="img/kitchen_table.jpg" alt="home goods">
          <p>Home Goods</p>
        </div>
      </div>
    </section>

    <section id="section-members" class="text-center my-4 relative">
      <h2 class="text-4xl mb-10">Become a user for extra savings and benefits!</h2>
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
          <h3 class="text-center text-3xl text-sans pt-4">User's Deals</h3>
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

    <section id="section-buy-again" class="relative mt-12 bg-secondary-dark">
      <h2 class="text-5xl font-display ps-4 py-6 my-12">Buy Again</h2>
      <div class="flex flex-col mb-10">
        <div class="border-primary-dark border-2 p-20 mx-20 my-4 h-full w-auto rounded-md">
          <p>Insert Item Here</p>
        </div>
      </div>
    </section>
  </main>


  <?php require 'partials/_footer.php'; ?>