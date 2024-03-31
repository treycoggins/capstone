<nav id="nav" aria-hidden="true" aria-expanded="false" class="nav-close absolute top-0 h-screen bg-secondary-dark text-primary flex flex-col">
  <i tabindex="-1" id="navMenu-close-X" class="nav-link absolute stroke-primary-dark top-4 right-4 size-8 tablet:size-14 cursor-pointer" data-feather="x"></i>
  <div class="flex flex-col h-1/5 p-4 bg-secondary-light">
    <p class="text-xl">Browse</p>
    <p class="font-bold text-2xl">BitBuggy</p>
    <div class="self-end flex tablet:hidden items-center">
      <?= $logged_in  ?
        '<a tabindex="-1" href="/logout"><p class="nav-link inline self-center text-lg">Sign out</p><i class="inline size-6 me-2" data-feather="user"></i></a>' :
        '<a tabindex="-1" href="/login"></i><p class="nav-link inline self-center text-lg">Sign in</p><i class="inline size-6 me-2" data-feather="user"></i></a>'
      ?>
    </div>
  </div>

  <ul class="mx-4">
    <li class="flex ms-4 my-8">
      <a href="/home" class="nav-link inline" tabindex="-1"><i class="inline size-5 mx-2" data-feather="home"></i>Home</a>
    </li>
    <li class="flex ms-4 my-8">
      <a href="/about" class="nav-link inline" tabindex="-1"><i class="inline size-5 mx-2" data-feather="book-open"></i>About Us</a>
    </li>
    <li class="flex ms-4 my-8">
      <a href="/product" class="nav-link inline" tabindex="-1"><i class="inline size-5 mx-2" data-feather="package"></i>Products</a>
    </li>
    <li class="flex ms-4 my-8">
      <a href="/contact" class="nav-link inline" tabindex="-1"><i class="inline size-5 mx-2" data-feather="at-sign"></i>Contact</a>
    </li>
    <li class="flex ms-4 my-8">
      <a href="/register" class="nav-link inline" tabindex="-1"><i class="inline size-5 mx-2" data-feather="user-check"></i>Become a Member</a>
    </li>
    <li class="flex ms-4 my-8">
      <a href="/account" class="nav-link inline" tabindex="-1"><i class="inline size-5 mx-2" data-feather="bookmark"></i>Your Account</a>
    </li>
    <li class="flex ms-4 my-8">
      <a href="/cart" class="nav-link inline" tabindex="-1"><i class="inline size-5 mx-2" data-feather="shopping-cart"></i>Your Cart</a>
    </li>
    <li class="flex ms-4 my-8">
      <a href="/orders" class="nav-link inline" tabindex="-1"><i class="inline size-5 mx-2" data-feather="shopping-bag"></i>Your Orders</a>
    </li>


  </ul>
</nav>