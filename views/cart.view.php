<?php require "partials/_head.php" ?>

<body class="flex flex-col bg-slate-200 font-sans w-full h-screen text-primary">
    <?php require "partials/_header.php" ?>
    <?php require "partials/_nav.php" ?>
    <h1 class="text-2xl mt-6 text-center">Your Cart</h1>

    <main class="w-screen flex flex-col grow">
        <?php foreach($items as $item) { ?> 
        <section class="m-6">
            <div class="flex border-2 border-bg-dark items-center p-4 w-full h-auto">
                <div class="w-1/3 h-auto">
                    <img class="w-full h-auto" src="img/<?= $item["file_name"] ?>" alt="product image">
                </div>
                <div class="w-2/3 text-sm px-4">
                    <h3 class=""><?= $item["product_name"] ?></h3>
                    <p>P<?= $item["price"] ?></p>
                    <label for="quantity">Quantity:</label>
                    <select id="quantity" name="quantity" class="mx-2">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                </div>
                <div>
                    <i data-feather="trash-2" class="size-6 text-secondary-dark"></i>
                </div>
            </div>
        </section>
        <?php } ?>
        <section class="self-center">
            <button class="bg-primary text-secondary-dark rounded-lg px-4 py-3">Checkout</button>
        </section>
    </main>


    <?php require "partials/_footer.php" ?>