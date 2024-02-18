<?php require("partials/_head.php"); ?>
</head>

<body class="bg-bg-light text-secondary-dark font-sans min-h-screen flex flex-col">
<?php require("partials/_header.php") ?>
<?php require("partials/_nav.php") ?>
  <main class="mx-4 pt-4 pb-16 grow">
    <h1 class="text-2xl py-4 ps-3">Welcome</h1>
    <p class="text-lg mb-2">New to BitBuggy?</p>
    <div class="mb-8">
      <a href="/signup" class="w-7/12 p-1.5 rounded-md bg-secondary-dark text-primary text-xs">Create an Account</a>
    </div>
    <section class="border-secondary-dark border-2 w-10/12 m-auto p-2">
      <small class="text-secondary-dark">Already a customer?</small>
      <p class="shrink-text font-bold text-primary-dark m-0">Sign in.</p>
      <form class="flex flex-col w-10/12 text-secondary-dark" action="/signin" method="POST">
        <label for="user-verify" class="ms-4">Username</label>
        <input name="user" type="text" class="m-2 rounded-md text-gray-700 border-secondary-dark border-2 p-1">
        <label for="password-verify" class="ms-2">Password</label>
        <input type="password" id="password-verify" name="password" class="m-2 rounded-md text-gray-700 border-secondary-dark border-2 p-1">
        <button type="submit" name="submit-btn" class="bg-secondary-dark text-primary p-3 border-none m-4 rounded-md">Continue</button>
      </form>
    </section>
  </main>


  <?php require("partials/_footer.php"); ?>