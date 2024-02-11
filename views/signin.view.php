<?php require 'partials/head.php' ?>

<body id="signup-body" class="bg-primary font-san flex flex-col max-h-screen justify-between">
  <header class="bg-primary-dark border-b-2 border-secondary-dark">
    <div class="py-6">
      <a class="ms-2" href="/">
        <i class="inline size-8 text-secondary-dark align-middle" data-feather="arrow-left"></i>
      </a>
      <a href="/">
        <h1 class="inline font-bold text-secondary-dark text-xl my-4 me-4 ms-2">BitBuggy</h1>
      </a>
    </div>
  </header>

  <main class="bg-primary pt-4 pb-16">
    <h2 class="text-2xl py-4 ps-3">Welcome</h2>
    <p class="text-lg text-secondary-dark mb-4">New to BitBuggy?</p>
    <button class="w-7/12 p-1 mb-8 rounded-md bg-secondary-dark text-sm">Create an Account</button>
    <section class="border-secondary-dark border-2 w-10/12 m-auto py-2">
      <small class="text-secondary-dark">Already a customer?</small>
      <p class="shrink-text font-bold text-primary-dark m-0">Sign in.</p>
      <form class="flex flex-col w-10/12 text-secondary-dark" action="/signin" method="POST">
        <label for="user-verify" class="ms-4">Username</label>
        <input name="user" type="text" class="m-2 rounded-md text-gray-700 border-black border-2 p-1">
        <label for="password-verify" class="ms-2">Password</label>
        <input type="password" id="password-verify" name="password" class="m-2 rounded-md text-gray-700 border-black border-2 p-1">
        <button type="submit" name="submit-btn" class="bg-secondary-dark text-primary-dark p-3 border-none m-4 rounded-md">Continue</button>
      </form>
    </section>
  </main>


  <?php require 'partials/footer.php' ?>
  <script src="../public/js/signup.js"></script>
  <script>
    feather.replace();
  </script>
</body>

</html>