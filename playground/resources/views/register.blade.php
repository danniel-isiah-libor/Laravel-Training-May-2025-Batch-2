<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1> Register </h1>

    <label>Name:</label>
    <input type="text">

    <br>

    <label>Email:</label>
    <input type="email">

    <br>

    <label>Password:</label>
    <input type="password">

    <br>

    <label>Password Confirmation:</label>
    <input type="password">

    <br>

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
