<?php
$logged_in = $_SESSION['logged_in'] ?? false;    // Check if user is logged in
?>

<nav id="nav" aria-hidden="true" aria-expanded="false" class="absolute top-0 h-screen bg-secondary-dark text-primary flex flex-col">
  <i tabindex="-1" id="navMenu-close" class="nav-links absolute stroke-primary-dark top-4 right-4 size-8 tablet:size-14 cursor-pointer" data-feather="x"></i>
  <div class=" h-1/5 py-4 bg-secondary-light">
    <div class="flex p-4">
      <div id="user-login" class="flex justify-end me-3">
        <i data-feather="user"></i>
        <?= $logged_in ?
          '<a tab-index="3" href="/logout"><p class="self-center text-sm pe-2">Sign out</p></a>'
          :
          '<a tab-index="3" href="/login"><p class="self-center text-sm pe-2">Sign in</p></a>'
        ?>
      </div>
    </div>
    <div class="ms-4">
      <p class="text-xl">Browse</p>
      <p class="font-bold text-2xl">BitBuggy</p>
    </div>
  </div>
  <ul class="mx-4">
    <li class="nav-links flex ms-4 my-8">
      <a href="/home" tabindex="-1"><i class="size-5 mx-2" data-feather="home"></i></a>
      <a href="/home" tabindex="-1">Home</a>
    </li>
    <li class="nav-links flex ms-4 my-8">
      <a href="/about" tabindex="-1"><i class="size-5 mx-2" data-feather="book-open"></i></a>
      <a href="/about" tabindex="-1">About Us</a>
    </li>
    <li class="nav-links flex ms-4 my-8">
      <a href="/product" tabindex="-1"><i class="size-5 mx-2" data-feather="package"></i></a>
      <a href="/product" tabindex="-1">Products</a>
    </li>
    <li class="nav-links flex ms-4 my-8">
      <a href="/contact" tabindex="-1"><i class="size-5 mx-2" data-feather="at-sign"></i></a>
      <a href="/contact" tabindex="-1">Contact</a>
    </li>
    <li class="nav-links flex ms-4 my-8">
      <a href="/signup" tabindex="-1"><i class="size-5 mx-2" data-feather="user-check"></i></a>
      <a href="/signup" tabindex="-1">Become a Member</a>
    </li>
    <li class="nav-links flex ms-4 my-8">
      <a href="/account" tabindex="-1"><i class="size-5 mx-2" data-feather="bookmark"></i></a>
      <a href="/account" tabindex="-1">Your Account</a>
    </li>
    <li class="nav-links flex ms-4 my-8">
      <a href="/list" tabindex="-1"><i class="size-5 mx-2" data-feather="gift"></i></a>
      <a href="/list" tabindex="-1">Your Lists</a>
    </li>
    <li class="nav-links flex ms-4 my-8">
      <a href="/orders" tabindex="-1"><i class="size-5 mx-2" data-feather="shopping-cart"></i></a>
      <a href="/orders" tabindex="-1">Your Orders</a>
    </li>


  </ul>
</nav>