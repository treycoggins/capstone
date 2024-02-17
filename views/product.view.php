<?php
require('db/localdb.connection.php');
require('db/functions.php');

$sql = "SELECT * FROM products;";

$statement = $pdo->query($sql);
$products = $statement->fetchAll();

?>

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
    <section class="m-6">
      <?php foreach ($products as $product) { ?>
        <div class="pb-8 border-2 border-bg-dark p-4 my-10">
          <img src="<?= html_escape($product['file_path']) . html_escape($product['file_name']); ?>" alt="product image" class="w-60 h-auto mb-4">
          <h3 class=""><?= html_escape($product['product_name']) ?></h3>
          <p class="text-xs m-2"><?= html_escape($product['description']) ?></p>
          <p class="">$<?= html_escape($product['price']) ?></p>
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


  <script>
    feather.replace();
  </script>
  <script src="../public/js/index.js"></script>
  <script src="../public/js/buttons.js"></script>
</body>

</html>