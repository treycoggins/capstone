
<?php require('partials/_head.php'); ?>

<body class="bg-bg-light font-sans h-screen flex flex-col">
  <header class="bg-primary text-secondary-dark border-b-4 border-secondary-dark">
    <div class="py-6">
      <a class="ms-2" href="/">
        <i class="inline size-8 align-middle" data-feather="arrow-left"></i>
      </a>
      <a href="/">
        <p class="inline font-bold text-xl ms-2 align-middle">BitBuggy</p>
      </a>
    </div>
  </header>

  <main class="pt-12 pb-12 grow">
    <section class="border-secondary-dark border w-10/12 tablet:w-3/12 m-auto p-2">
      <small class="text-secondary-dark">New to BitBuggy?</small>
      <p class="font-bold text-primary-light m-0">Create an Account.</>
      <form id="signup-form" class="flex flex-col text-sm my-1" action="/signup" method="POST">
        <input id="fname" name="first_name" type="text" class="input-field m-2 rounded-md text-gray-300  text-sm border-bg-dark border w-11/12 p-1" placeholder="First Name">
        <span id="fname-error" class="text-sm mx-4 input-error"></span>
        <input id="lname" name="last_name" type="text" class="input-field  m-2 rounded-md text-gray-700 border-bg-dark border w-11/12 p-1" placeholder="Last Name">
        <span id="lname-error" class="text-sm mx-4 input-error"></span>
        <input id="email" name="email" type="email" class="input-field  m-2 rounded-md text-gray-700 border-bg-dark border w-11/12 p-1" placeholder="Email Address">
        <span id="email-error" class="text-sm mx-4 input-error"></span>
        <input id="username" name="username" type="text" class="input-field  m-2 rounded-md text-gray-700 border-bg-dark border w-11/12 p-1" placeholder="Username">
        <span id="username-error" class="text-sm mx-4 input-error"></span>
        <input id="password" name="password" type="password" class="input-field  m-2 rounded-md text-gray-700 border-bg-dark border w-11/12 p-1" placeholder="Password">
        <span id="password-error" class="text-sm mx-4 input-error"></span>
        <input id="confirmed-password" name="confirmed-password" type="password" class="input-field  m-2 rounded-md text-gray-700 border-bg-dark border w-11/12 p-1" placeholder="Confirm Password">
        <span id="confirmed-password-error" class="text-sm mx-4 input-error"></span>
        <button id="submit-btn" type="submit" name="submit-btn" class="btn self-center bg-secondary-dark text-bg-dark p-2 m-4 border-none w-11/12 mt-2 rounded-md hover:bg-primary-light ">Submit</button>
      </form>
    </section>
  </main>
  <?php require 'partials/_footer.php' ?>


  <script src="../public/js/signup.js"></script>
  <script src="../public/js/buttons.js"></script>
  <script>
    feather.replace();
  </script>
</body>

</html>