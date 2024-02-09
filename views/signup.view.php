<?php require 'partials/head.php' ?>

  <body id="signup-body" class="bg-primary font-san flex flex-col max-h-screen justify-between">
    <header id="header" class="bg-primary-dark border-b-2 border-secondary-dark text-primary-dark flex h-min">
      <div class="py-6">
        <a class="ms-2" href="/">
          <i class="inline size-8 text-secondary-dark align-middle" data-feather="arrow-left"></i>
        </a>
        <a href="/">
          <h1 class="inline font-bold text-secondary-dark text-xl my-4 me-4 ms-2">BitBuggy</h1>
        </a>
      </div>
    </header>

    <main class="bg-primary pt-4 pb-16 ">
      <section id="section-signup" class="border-secondary-dark border-2 w-10/12 m-auto p-2">
        <small class="text-secondary-dark">New to BitBuggy?</small>
        <p id="signup-dropdown-title" class="shrink-text font-bold text-primary-dark m-0">Create an Account.</>
        <form id="signup-form" class="my-1 text-secondary-dark" action="/signup" method="POST">
          <div id="input-container" class="flex flex-col">
            <label class="ms-4" for="first_name">First Name</label>
            <input id="first-name" name="first_name" type="text"
              class="input-field self-center m-2 rounded-md text-gray-700 border-black border-2 w-11/12 p-1">
            <span id="fname-error" class="text-sm mx-4 input-error"></span>
            <label class="ms-4" for="last_name">Last Name</label>
            <input id="last-name" name="last_name" type="text"
              class="input-field self-center m-2 rounded-md text-gray-700 border-black border-2 w-11/12 p-1">
            <span id="lname-error" class="text-sm mx-4 input-error"></span>
            <label class="ms-4" for="email">Email Address</label>
            <input id="email" name="email" type="email"
              class="input-field self-center m-2 rounded-md text-gray-700 border-black border-2 w-11/12 p-1">
            <span id="email-error" class="text-sm mx-4 input-error"></span>
            <label class="ms-4" for="username">Username</label>
            <input id="username" name="username" type="text"
              class="input-field self-center m-2 rounded-md text-gray-700 border-black border-2 w-11/12 p-1">
            <span id="username-error" class="text-sm mx-4 input-error"></span>
            <label class="ms-4" for="password">Password</label>
            <input id="password" name="password" type="password"
              class="input-field self-center m-2 rounded-md text-gray-700 border-black border-2 w-11/12 p-1">
            <span id="password-error" class="text-sm mx-4 input-error"></span>
            <label class="ms-4" for="confirmed_password">Confirm Password</label>
            <input id="confirmed-password" name="confirmed-password" type="password"
              class="input-field self-center m-2 rounded-md text-gray-700 border-b-ack border-2 w-11/12 p-1">
            <span id="confirmed-password-error" class="text-sm mx-4 input-error"></span>
            <button id="signup-form-submit" type="submit" name="submit-btn"
              class="bg-secondary-dark text-primary-dark self-center p-2 m-4 border-none w-11/12 mt-2 rounded-md">Submit</button>
          </div>
        </form>
      </section>
    </main>
    <?php require 'partials/footer.php' ?>


      <script src="../public/js/signup.js"></script>
      <script>feather.replace();</script>
  </body>

  </html>