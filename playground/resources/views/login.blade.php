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
    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Sign in to your account</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="#" method="POST">
      <div>
        <x-field type="email" name="email" label="Email"/>
      </div>

      <div>
        <x-field type="password" name="password" label="Password"/>
      </div>

      <div>
        <x-button label="Login"/>
      </div>
    </form>

    <p class="mt-10 text-center text-sm/6 text-gray-500">
      Not a member?
      <a href="{{ route('register') }}" class="font-semibold text-indigo-600 hover:text-indigo-500">Register here</a>
    </p>
  </div>
</div>
</body>
</html>
