<?php $logged_in = $_SESSION["logged_in"] ?? false ?>

<div id="overlay" class="overlay-hidden absolute top-0 left-0 h-screen w-screen"></div>
<header class="bg-primary border-b-4 border-secondary-dark h-min w-full flex flex-wrap pt-4 justify-between">
  <div class="m-4 text-secondary-dark order-1 grow">
    <a aria-hidden="true" tabindex="-1" href="/">
      <img class="h-auto shrink-0 w-20 mb-4" src="img/logo.png" alt="BitBuggy Logo" />
    </a>
  </div>
  
  <div tabindex="1" id="hamburger" class="flex flex-col justify-center items-center mx-6 cursor-pointer order-2 tablet:order-3">
    <div class="bar h-1 w-9 bg-primary-dark m-1 rounded-md"></div>
    <div class="bar h-1 w-9 bg-primary-dark m-1 rounded-md"></div>
    <div class="bar h-1 w-9 bg-primary-dark m-1 rounded-md"></div>
  </div>
  <form class="flex w-10/12 py-4 justify-end items-center grow mx-4 order-3 tablet:order-2 tablet:w-1/3 tablet:grow-0" action="/products" method="GET">
    <input tabindex="2" class="rounded-md p-2 w-full" type="text" name="header-search-field" placeholder="Search products">
    <button aria-hidden="true" tabindex="-1" type="submit" class="relative">
      <i class="size-6 text-slate-800 absolute top-[-14px] right-[10px]" data-feather="search"></i>
    </button>
  </form>

  <div class="text-secondary-dark hidden tablet:flex tablet:items-center tablet:order-2">

    <?= $logged_in  ?
      '<a tabindex="-1" href="/logout"><i class="inline size-8 me-2" data-feather="user"></i><p class="nav-link inline self-center text-lg">Sign out</p></a>' :
      '<a tabindex="-1" href="/login"><i class="inline size-8 me-2" data-feather="user"></i><p class="nav-link inline self-center text-lg">Sign in</p></a>'
    ?>
  </div>

</header>