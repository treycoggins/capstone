<div id="overlay" class="overlay-hidden absolute top-0 left-0 h-screen w-screen"></div>
<header class="bg-primary border-b-4 border-secondary-dark h-min w-full flex flex-wrap pt-4 justify-between">
  <div class="mt-4 mx-4 text-secondary-dark tablet:grow">
    <a tabindex="0" href="/">
      <img class="h-auto shrink-0 w-20 ms-4 mb-4" src="../public/img/logo.png" alt="BitBuggy Logo" />
    </a>
  </div>
  <form class="py-3 flex w-10/12 justify-end items-center grow mx-4 order-3 tablet:order-2 tablet:w-1/3 tablet:grow-0" action="/products" method="GET">
    <input tabindex="2" class="rounded-md p-2 w-full" type="text" name="header-search-field" placeholder="Search products">
    <button aria-hidden="true" tabindex="-1" type="submit" class="relative">
      <i class="size-6 text-slate-800 absolute top-[-14px] right-[10px]" data-feather="search"></i>
    </button>
  </form>
  <div tabindex="1" id="hamburger" class="flex flex-col p-6 cursor-pointer tablet:order-2">
    <div class="bar h-1 w-9 bg-primary-dark m-1 rounded-md"></div>
    <div class="bar h-1 w-9 bg-primary-dark m-1 rounded-md"></div>
    <div class="bar h-1 w-9 bg-primary-dark m-1 rounded-md"></div>
  </div>
</header>