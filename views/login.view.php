<?php include "partials/_head.php"; ?>
</head>

<body class="bg-bg-light text-secondary-dark font-sans min-h-screen flex flex-col">
  <?php include "partials/_header.php" ?>
  <?php include "partials/_nav.php" ?>
  <main class="flex flex-col w-full mx-4 my-16 tablet:mx-auto tablet:max grow">
    <h1 class="text-4xl tablet:mx-auto tablet:text-7xl desktop:text-9xl tablet:my-8">Welcome</h1>
    <div class="flex flex-col tablet:order-3 tablet:items-center">
      <p class="text-lg mb-2">New to BitBuggy?</p>
      <div class="mb-8">
        <a tabindex="4" href="/signup" class="p-1.5 rounded-md bg-secondary-dark text-primary text-xs">Create an Account</a>
      </div>
    </div>
    <section class="flex flex-col justify-center border-secondary-dark border-2 w-10/12 mx-auto my-8 p-4 laptop:w-7/12 desktop:max-w-2xl laptop:p-10">
      <small class="text-secondary-dark tablet:text-lg">Already a customer?</small>
      <p class="font-bold text-primary m-0">Sign in.</p>
      <form class="flex flex-col self-center my-10 w-11/12 text-secondary-dark" action="/login" method="POST">
        <label for="username" class="ms-4">Username</label>
        <input tabindex="1" id="username" name="username" type="text" class="m-2 rounded-md text-gray-700 border-secondary-dark border-2 p-1.5">
        <label for="password" class="ms-4">Password</label>
        <input tabindex="2" type="password" id="password" name="password" class="m-2 rounded-md text-gray-700 border-secondary-dark border-2 p-1.5">
        <button tabindex="3" type="submit" name="submit-btn" class="bg-secondary-dark text-primary p-5 border-none m-4 rounded-md">Continue</button>
      </form>
    </section>
  </main>


  <?php include "partials/_footer.php"; ?>