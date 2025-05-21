<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Page</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto h-10 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Register your account</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="{{ route('register.store') }}" method="POST">
        @csrf

        <div>
            <x-field type="text" name="name" label="Name"/>
        </div>

      <div>
        <x-field type="email" name="email" label="Email"/>
      </div>

      <div>
          <x-field type="text" name="password" label="Password"/>
      </div>

      <div>
          <x-field type="text" name="password_confirmation" label="Password Confirmation"/>
      </div>

      <div>
        <x-button label="Register"/>
      </div>
    </form>

    <p class="mt-10 text-center text-sm/6 text-gray-500">
      Already have an account?
      <a href="{{ route('login') }}" class="font-semibold text-indigo-600 hover:text-indigo-500">Login</a>
    </p>
  </div>
</div>














    <?php
    // $variable = "john"; // "<script> alert('HACKED!'); </script>";

    // if (true) {
    //     echo "<h1> hello world </h1>";

    //     echo htmlspecialchars($variable);
    // }
    ?>

    {{-- @if (true)
        <h1> hello world </h1>

        {!! $variable !!}
    @endif --}}
</body>
</html>
