<?php require "partials/_head.php" ?>

<body class="bg-slate-200 text-primary font-sans w-full h-screen flex flex-col justify-center items-center">
  <?php require "partials/_header.php" ?>
  <?php require "partials/_nav.php" ?>
  <h1 class="text-2xl mt-6">Your Orders</h1>

  <main class="w-screen flex flex-col grow">
    <section class="flex flex-col  border-2 border-bg-dark items-center m-6">
      <div class="flex p-4 w-full h-auto">
        <div class="w-1/3 h-auto">
          <img class="w-full h-auto" src="img/summer_dress.jpg" alt="product image">
        </div>
        <div class="flex flex-col w-2/3 text-sm px-4">
          <h3 class="mb-2">Product Name</h3>
          <p>Price:</p>
        </div>
      </div>
      <div>
        <button class="bg-primary text-sm text-secondary-dark rounded-md m-1 max-w-40 py-2 px-4">Buy Again</button>
        <button class="bg-primary text-sm text-secondary-dark rounded-md m-1 max-w-40 py-2 px-4">View Item</button>
      </div>
    </section>
  </main>

  <?php require "partials/_footer.php" ?>