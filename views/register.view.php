<?php require 'partials/_head.php'; ?>
</head>

<body class="bg-bg-light font-sans h-screen flex flex-col">
  <?php require "partials/_header.php" ?>
  <?php require "partials/_nav.php" ?>
  <main class="pt-12 pb-12 grow">
    <section class="border-secondary-dark text-primary-light border w-10/12 tablet:w-3/12 m-auto p-2">
      <small class="text-secondary-dark">New to BitBuggy?</small>
      <p class="font-bold  m-0">Create an Account.</>
        <?php

        if (isset($_SESSION["errors"]) && !empty($_SESSION["errors"])) {
          $errors = $_SESSION["errors"];
          echo '<p class="text-sm">There were errors in the form submission. Please correct the form and try again.</p>';
        }
        ?>
      <form id="registration-form" class="flex flex-col text-sm my-1" action="/register" method="POST">
        <input id="fname" name="fname" type="text" class="m-2 rounded-md text-gray-700 border-bg-dark border w-11/12 p-1" placeholder="First Name" value="<?= isset($_POST['fname']) ? html_escape($_POST['fname']) : ''; ?>">
        <span class="text-sm text-red-700 mx-2"><?= isset($errors['fname']) ? $errors['fname'] : ''; ?></span>
        
        <input id="lname" name="lname" type="text" class="m-2 rounded-md text-gray-700 border-bg-dark border w-11/12 p-1" placeholder="Last Name">
        <span class="text-sm text-red-700 mx-2"><?= isset($errors['lname']) ? $errors['lname'] : ''; ?></span>
        
        <input id="email" name="email" type="email" class="m-2 rounded-md text-gray-700 border-bg-dark border w-11/12 p-1" placeholder="Email Address">
        <span class="text-sm text-red-700 mx-2"><?= isset($errors['email']) ? $errors['email'] : ''; ?></span>
        
        <input id="username" name="username" type="text" class="m-2 rounded-md text-gray-700 border-bg-dark border w-11/12 p-1" placeholder="Username">
        <span class="text-sm text-red-700 mx-2"><?= isset($errors['username']) ? $errors['username'] : ''; ?></span>
        
        <input id="password" name="password" type="password" class="m-2 rounded-md text-gray-700 border-bg-dark border w-11/12 p-1" placeholder="Password">
        <span class="text-sm text-red-700 mx-2"><?= isset($errors['password']) ? $errors['password'] : ''; ?></span>
        
        <input id="confirmed" name="confirmed" type="password" class="m-2 rounded-md text-gray-700 border-bg-dark border w-11/12 p-1" placeholder="Confirm Password">
        <span class="text-sm text-red-700 mx-2"><?= isset($errors['confirmed_password']) ? $errors['confirmed_password'] : ''; ?></span>
        
        <button id="submit-btn" type="submit" name="submit-btn" class="btn self-center bg-secondary-dark text-bg-dark p-2 m-4 border-none w-11/12 mt-2 rounded-md hover:bg-primary-light ">Submit</button>
      </form>

    </section>
  </main>
  <?php require 'partials/_footer.php' ?>