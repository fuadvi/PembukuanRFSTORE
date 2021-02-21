<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Admin Starter Template : Tailwind Toolbox</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">

    @include('includes.style')

</head>


<body class="bg-gray-800 font-sans leading-normal tracking-normal mt-12">

    <!--Nav-->
    @include('includes.navbar')

    <div class="flex flex-col md:flex-row">

        @include('includes.sidebar')


        {{-- content --}}
        @yield('content')
    </div>




    @include('includes.script')


</body>

</html>
