<?php require view('partials/_head.php'); ?>
</head>

<body class="bg-bg-light font-sans h-screen w-screen flex flex-col">
  <?php require view("partials/_header.php"); ?>
  <?php require view("partials/_nav.php") ?>
  <main class="w-full py-12 grow flex flex-col items-center justify-center">
    <section class="w-10/12 tablet:w-1/2 laptop:max-w-xl border-secondary-dark text-primary-light border p-2">
      <small class="text-secondary-dark">New to BitBuggy?</small>
      <p class="font-bold  m-0">Create an Account.</>
        <?php
        if (isset($errors) && !empty($errors)) {
          echo '<p class="text-sm">There were errors in the form submission. Please correct the form and try again.</p>';
        }
        ?>
      <form id="registration-form" class="flex flex-col text-sm w-full" action="/register" method="POST">
        <input id="fname" name="fname" type="text" class="m-2 rounded-md text-gray-700 border-bg-dark border p-1" placeholder="First Name" value="<?= isset($newUser) ? $newUser->fname : "" ?>">
        <span class="text-sm text-red-700 mx-2"><?= isset($errors['fname']) ? $errors['fname'] : ''; ?></span>

        <input id="lname" name="lname" type="text" class="m-2 rounded-md text-gray-700 border-bg-dark border p-1" placeholder="Last Name" value="<?= isset($newUser) ? $newUser->lname : "" ?>">
        <span class="text-sm text-red-700 mx-2"><?= isset($errors['lname']) ? $errors['lname'] : ''; ?></span>

        <input id="email" name="email" type="email" class="m-2 rounded-md text-gray-700 border-bg-dark border p-1" placeholder="Email Address" value="<?= isset($newUser) ? $newUser->email : "" ?>">
        <span class="text-sm text-red-700 mx-2"><?= isset($errors['email']) ? $errors['email'] : ''; ?></span>

        <input id="username" name="username" type="text" class="m-2 rounded-md text-gray-700 border-bg-dark border p-1" placeholder="Username" value="<?= isset($newUser) ? $newUser->username : "" ?>">
        <span class="text-sm text-red-700 mx-2"><?= isset($errors['username']) ? $errors['username'] : ''; ?></span>

        <input id="password" name="password" type="password" class="m-2 rounded-md text-gray-700 border-bg-dark border p-1" placeholder="Password">
        <span class="text-sm text-red-700 mx-2"><?= isset($errors['password']) ? $errors['password'] : ''; ?></span>

        <input id="confirmed" name="confirmed" type="password" class="m-2 rounded-md text-gray-700 border-bg-dark border p-1" placeholder="Confirm Password">
        <span class="text-sm text-red-700 mx-2"><?= isset($errors['confirmed_password']) ? $errors['confirmed_password'] : ''; ?></span>

        <button id="submit-btn" type="submit" name="submit-btn" class="btn self-center bg-secondary-dark text-bg-dark p-2 m-4 border-none mt-2 rounded-md hover:bg-primary-light ">Submit</button>
      </form>

    </section>
  </main>
  <?php require view("partials/_footer.php") ?>