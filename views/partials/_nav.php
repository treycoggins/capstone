<?php
$logged_in = $_SESSION['logged_in'] ?? false;    // Check if user is logged in
?>
<nav id="nav" aria-hidden="true" aria-expanded="false" class="nav-close absolute top-0 h-screen bg-secondary-dark text-primary flex flex-col">
  <i tabindex="-1" id="navMenu-close-X" class="nav-item absolute stroke-primary-dark top-4 right-4 size-8 tablet:size-14 cursor-pointer" data-feather="x"></i>
  <div class="h-1/5 py-4 bg-secondary-light">
    <div class="flex p-4">
      <div tabindex="-1" class="nav-item flex justify-end me-3">
        <a href="/login"><i data-feather="user"></i></a>
        <?= $logged_in ?
          '<a tab-index="-1" href="/logout"><p class="self-center text-sm pe-2">Sign out</p></a>'
          :
          '<a tab-index="-1" href="/login"><p class="self-center text-sm pe-2">Sign in</p></a>'
        ?>
      </div>
    </div>
    <div class="ms-4">
      <p class="text-xl">Browse</p>
      <p class="font-bold text-2xl">BitBuggy</p>
    </div>
  </div>
  <ul class="mx-4">
    <li class="nav-item flex ms-4 my-8">
      <a href="/home" tabindex="-1"><i class="size-5 mx-2" data-feather="home"></i></a>
      <a href="/home" tabindex="-1">Home</a>
    </li>
    <li class="nav-item flex ms-4 my-8">
      <a href="/about" tabindex="-1"><i class="size-5 mx-2" data-feather="book-open"></i></a>
      <a href="/about" tabindex="-1">About Us</a>
    </li>
    <li class="nav-item flex ms-4 my-8">
      <a href="/product" tabindex="-1"><i class="size-5 mx-2" data-feather="package"></i></a>
      <a href="/product" tabindex="-1">Products</a>
    </li>
    <li class="nav-item flex ms-4 my-8">
      <a href="/contact" tabindex="-1"><i class="size-5 mx-2" data-feather="at-sign"></i></a>
      <a href="/contact" tabindex="-1">Contact</a>
    </li>
    <li class="nav-item flex ms-4 my-8">
      <a href="/register" tabindex="-1"><i class="size-5 mx-2" data-feather="user-check"></i></a>
      <a href="/register" tabindex="-1">Become a Member</a>
    </li>
    <li class="nav-item flex ms-4 my-8">
      <a href="/account" tabindex="-1"><i class="size-5 mx-2" data-feather="bookmark"></i></a>
      <a href="/account" tabindex="-1">Your Account</a>
    </li>
    <li class="nav-item flex ms-4 my-8">
      <a href="/cart" tabindex="-1"><i class="size-5 mx-2" data-feather="shopping-cart"></i></a>
      <a href="/cart" tabindex="-1">Your Cart</a>
    </li>
    <li class="nav-item flex ms-4 my-8">
      <a href="/orders" tabindex="-1"><i class="size-5 mx-2" data-feather="shopping-bag"></i></a>
      <a href="/orders" tabindex="-1">Your Orders</a>
    </li>


  </ul>
</nav>