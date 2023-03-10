<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script type="text/javascript">
            @if (Session::has('defaultTopic'))
            var defaultTopic='{{Session::get('defaultTopic')}}';
            @endif
            var userDefinedTopic='{{Session::get('userDefinedTopic')}}';
            @if(isset($homePage))
            var homePage=true;
            @endif
        </script>        
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>LFLB History Museum</title>
    </head>
    <body class="bg-gray-50 select-none">
    {{-- VIEW OUTPUT --}}
    <main class="h-[1744px]">
        @yield('content')
        @include('partials._bottom_nav')
    </main>
</body>
</html>