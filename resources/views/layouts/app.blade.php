<!DOCTYPE html>
<html lang="NL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
</head>

<body class=bg-white">
<header class="bg-Apple h-16 flex justify-end items-center">
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-Forestgreen text-white">
        <i class="bi bi-house-door-fill"></i>
        <i class='bx bx-phone' ></i>
        <a href="/" class="text-[15px] ml-2 text-gray-200 font-bold">Contact</a>
    </div>
</header>

<main class="ml-[300px] p-4">
    {{ $slot }}
</main>

<div class="sidebar fixed top-0 bottom-0 lg:left-0 p-2 w-[300px] overflow-y-auto text-center bg-Apple">

    <div class="text-gray-100 text-xl">
        <div class="p-2.5 mt-1 bg-Apple flex items-center">
            <h1 class="font-bold text-gray-200 text-[35px] ml-3">
                <img src="/images/Test.png" alt="Test Image" class="max-h-full" />
            </h1>

            <i
                class="bi bi-x cursor-pointer ml-28 lg:hidden"
            ></i>
        </div>
        <div class="my-2 bg-gray-600 h-[1px]"></div>
    </div>

    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-Forestgreen text-white">
        <i class="bi bi-house-door-fill"></i>
        <i class='bx bxs-home'></i>
        <a href="/" class="text-[15px] ml-4 text-gray-200 font-bold">Home</a>
    </div>
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-Forestgreen text-white">
        <i class="bi bi-house-door-fill"></i>
        <i class='bx bx-question-mark' ></i>
        <a href="/questionnaire" class="text-[15px] ml-4 text-gray-200 font-bold">Questionnaire</a>
    </div>
    <div
        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-Forestgreen text-white"
    >
        <i class="bi bi-bookmark-fill"></i>
        <i class='bx bx-calendar' ></i>
        <a href="/gesprek-inplannen" class="text-[15px] ml-4 text-gray-200 font-bold">Gesprek inplannen</a>
    </div>
    <div class="my-4 bg-gray-600 h-[1px]"></div>
    <div
        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-Forestgreen text-white"
    >
        <i class="bi bi-box-arrow-in-right"></i>
        <i class='bx bx-user' ></i>
        <a href="/" class="text-[15px] ml-4 hover:bg-Forestgreen font-bold" >Account</a>
    </div>

</div>
</body>
</html>
