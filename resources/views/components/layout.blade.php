<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
    content="width=device-width, 
    user-scalable=no, 
    initial-scale=1.0,
    maximum-scale=1.0,
    minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Doctor Jobs</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css', 'resources/js/app.js')

</head>
<body class="bg-black text-white font-hanken-grotesk" style="font-family: 'Hanken Grotesk', sans-serif;"> <!-- Added inline style to override the default font because it wasn't working with the @theme -->
    <div class="container mx-auto px-4 sm:px-6 lg:px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10 ">
            <div>
                <a href="/">
                    <img class="w-40" src="{{ Vite::asset('resources/images/djlogo.png') }}" alt="">
                    <!-- <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt=""> -->
                </a>
            </div>

            <div class="space-x-6 font-bold">
                <a href="#">Jobs</a>
                <a href="#">Carrers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>

            <div>
                <a href="#">Post a Job</a>
            </div>
        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>

</body>

</html>