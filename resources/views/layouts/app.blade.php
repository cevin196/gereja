<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    @livewireStyles
    @livewireScripts
</head>
<body class="bg-gray-100">
    @include('layouts.header')
    <nav class=" bg-white h-screen pt-20 text-gray-500 w-2/12 fixed">
        <div class=" flex flex-col text-left">
            @include('layouts.navbar')
        </div>
    </nav>
    <div class="w-full flex justify-end">        
        <div class="pt-16 px-3 w-10/12 float-right">
            @section('content')        
            @show
        </div>
    </div>
</body>
</html>

