<nav id="nav" class="absolute top-0 h-screen bg-secondary-dark flex flex-col">
    <i id="navMenu-close" class="absolute stroke-primary-dark top-4 right-4 size-8 tablet:size-14 cursor-pointer" data-feather="x"></i>
    <div class="flex h-1/5 py-4 bg-secondary-light">
      <div class="p-4">
        <div id="user-login" class="flex justify-end me-3">
          <i data-feather="user"></i>
          <a href="/signin">
            <p class="self-center text-sm pe-2">Sign in</p>
          </a>
        </div>
      </div>
    </div>
    <ul class="mx-4">
      <li class="nav-links flex m-4">
        <a href="/"><i class="size-5 mx-2" data-feather="home"></i></a>
        <a href="/">Home</a>
      </li>
      <li class="nav-links flex m-4">
        <a href="/product"><i class="size-5 mx-2" data-feather="package"></i></a>
        <a href="/product">Products</a>
      </li>
      <li class="nav-links flex m-4">
        <a href="/signup"><i class="size-5 mx-2" data-feather="user-check"></i></a>
        <a href="/signup">Become a Member</a>
      </li>
    </ul>
  </nav>