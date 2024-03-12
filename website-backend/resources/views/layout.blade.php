<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
    @yield('custom_header')
</head>
<body>

    <!-- This is the header -->
    @include('header')

    
    <main class="font-roboto">
        @yield('content')
    </main>

    <!-- This is the footer -->
    @include('footer')

    <script>
        var mobile_menu = document.getElementById("mobile_menu");
        var close = document.getElementById("close");
        var menu = document.getElementById("mobile_menu");


        function open_mobile_menu()
        {
          menu.classList.remove("hidden")

        }
        
        function close_mobile_menu()
        {
          menu.classList.add("hidden")

        }
    </script>
</body>
</html>