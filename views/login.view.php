<?php require "partials/_head.php"; ?>

<body class="bg-bg-light text-secondary-dark font-sans h-screen w-screen flex flex-col">
  <?php require "partials/_header.php" ?>
  <?php require "partials/_nav.php" ?>
  <main class="w-full py-6 grow flex flex-col items-center justify-center">

    <?= $session->get_property("fname") ? '<h1 class="text-4xl my-2 text-primary-light text-center tablet:text-7xl">Welcome, ' . ucfirst($session->get_property("fname")) . '.</h1><br><p>Please sign in to continue.</p>' : '<h1 class="text-4xl my-2 text-center tablet:text-7xl">Welcome</h1>' ?>

    <div class="flex flex-col m-4 tablet:order-3 tablet:items-center">
      <p class="text-lg">New to BitBuggy?</p>
      <a tabindex="13" href="/register" class="p-1.5 rounded-md bg-secondary-dark text-primary text-xs text-center">Create an Account</a>
    </div>
    <section class="w-10/12 tablet:w-1/2 laptop:max-w-xl flex flex-col justify-center border-secondary-dark border-2 mx-auto my-4 p-4">
      <small class="text-secondary-dark tablet:text-lg">Already a customer?</small>
      <p class="font-bold text-primary m-0">Sign in.</p>
      <form class="flex flex-col self-center mt-10 w-11/12 text-secondary-dark" action="/login" method="POST">
        <label for="username" class="ms-2">Username</label>
        <input tabindex="10" id="username" name="username" type="text" class="my-2 rounded-md text-gray-700 border-secondary-dark border-2 p-1.5">
        <label for="password" class="ms-2">Password</label>
        <input tabindex="11" type="password" id="password" name="password" class="my-2 rounded-md text-gray-700 border-secondary-dark border-2 p-1.5">

        <?= $session->get_property("validation_error") ?
          '<p class="text-red-700 text-center">Invalid username or password</p>' : "";
        $session->set_property("validation_error", null); ?>

        <button tabindex="12" type="submit" name="submit-btn" class="bg-secondary-dark text-primary p-5 border-none my-4 rounded-md">Continue</button>
      </form>
    </section>
  </main>


  <?php require "partials/_footer.php"; ?>