<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.js" defer></script>

</head>
<body>
    
<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <x-jet-nav-link href="/dashboard" :active="request()->routeIs('dashboard')">
            Dashboard
        </x-jet-nav-link>
        <!-- :active="request()->routeIs('dashboard') -->
        <x-jet-nav-link href="/employees" >
            Employees
        </x-jet-nav-link>
        <x-jet-nav-link href="/employees/create" >
            Add Employee
        </x-jet-nav-link>
    </div>

    <div class="contianer">
        <!-- <p> This is the section </p> -->
        @yield('content1')
    </div>
    <div class="bg-dark text-danger">
        @yield('content2')
    </div>
    <div class='bg-light'>
        @yield('content3')
    </div>
</body>
</html>


@livewireScripts