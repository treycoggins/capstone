<?php require('partials/_head.php'); ?>
</head>

<body class="bg-bg-light text-primary font-sans relative">
  <?php require("partials/_header.php") ?>
  <?php require("partials/_nav.php") ?>

  <main class="relative">
    <section class="m-6">
      <?php foreach ($products as $product) { ?>
        <div class="pb-8 border-2 border-bg-dark p-4 my-10">
          <img src="<?= $product['file_path'] . $product['file_name']; ?>" alt="product image" class="w-60 h-auto mb-4">
          <h3 class=""><?= $product['product_name']; ?></h3>
          <p class="text-xs m-2"><?= $product['description']; ?></p>
          <p class="">$<?= $product['price']; ?></p>
          <div class="flex justify-end">
            <a href="/cart" class="bg-primary-light text-secondary-dark rounded-md mt-6 max-w-40 py-3 px-6 cursor-pointer">Add to Cart</a>
          </div>
        </div>
      <?php }; ?>
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