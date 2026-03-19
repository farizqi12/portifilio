<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>

<body>
    <nav class="shadow-2xl">
        <div class="max-w-7xl mx-auto flex justify-between items-center py-4 px-6 border mb-48">

            <h1 class="text-xl font-extrabold ">FarizqiDev</h1>

            <div class="flex gap-x-5 font-bold">
                <a href="">Home</a>
                <a href="">About</a>
                <a href="">Portofolio</a>
                <a href="">Contact</a>
            </div>
        </div>
    </nav>

    <main class="border max-w-7xl mx-auto">


        <div class="flex flex-row items-center justify-between gap-10">
            <div class="max-w-xl">

                <div class="flex item center gap-2 bg-blue-200 w-fit px-4 py-2 rounded-full text-blue-700">
                    <img src="{{ asset('icon/star-rings-svgrepo-com.svg') }}" alt="" width="20">
                    <p class="text-sm font-semibold">Ready To Innovate</p>
                </div>

                <h1 class="text-7xl font-extrabold">
                    Software<br>Enginner
                </h1>

                <p class="mt-4 text-gray-600 text-lg">
                    Saya adalah seorang developer yang fokus pada pembuatan web modern,
                    cepat, dan scalable menggunakan teknologi terbaru.
                </p>

                <div class="mt-4 flex flex-wrap items-center gap-3">
                    <!-- Badge 1 -->
                    <div class="bg-red-400 rounded-full px-5 py-1 inline-flex items-center gap-2 shadow-sm">
                        <img src="{{ asset('icon/Laravel-Logo.wine.svg') }}" alt="Laravel" class="h-5 w-auto">
                        <span class="text-white text-sm font-medium">Laravel</span>
                    </div>

                    <!-- Badge 2 (Contoh tambahan) -->
                    <div class="bg-blue-400 rounded-full px-5 py-1 inline-flex items-center gap-2 shadow-sm">
                        <img src="{{ asset('icon/PHP-logo.svg') }}" alt="PHP" class="h-5 w-auto">
                        <span class="text-white text-sm font-medium">PHP</span>
                    </div>

                    <!-- Badge 3 -->
                    <div class="bg-green-400 rounded-full px-5 py-1 inline-flex items-center gap-2 shadow-sm">
                        <img src="{{ asset('icon/MySQL.svg') }}" alt="MySQL" class="h-5 w-auto">
                        <span class="text-white text-sm font-medium">MySQL</span>
                    </div>
                    <div class="bg-green-400 rounded-full px-5 py-1 inline-flex items-center gap-2 shadow-sm">
                        <img src="{{ asset('icon/MySQL.svg') }}" alt="MySQL" class="h-5 w-auto">
                        <span class="text-white text-sm font-medium">MySQL</span>
                    </div>
                    <div class="bg-green-400 rounded-full px-5 py-1 inline-flex items-center gap-2 shadow-sm">
                        <img src="{{ asset('icon/MySQL.svg') }}" alt="MySQL" class="h-5 w-auto">
                        <span class="text-white text-sm font-medium">MySQL</span>
                    </div>
                    <div class="bg-green-400 rounded-full px-5 py-1 inline-flex items-center gap-2 shadow-sm">
                        <img src="{{ asset('icon/MySQL.svg') }}" alt="MySQL" class="h-5 w-auto">
                        <span class="text-white text-sm font-medium">MySQL</span>
                    </div>
                    <div class="bg-green-400 rounded-full px-5 py-1 inline-flex items-center gap-2 shadow-sm">
                        <img src="{{ asset('icon/MySQL.svg') }}" alt="MySQL" class="h-5 w-auto">
                        <span class="text-white text-sm font-medium">MySQL</span>
                    </div>
                </div>

                <div class="mt-6 flex gap-4">
                    <a href="#"
                        class="bg-blue-500 text-white rounded-lg shadow hover:bg-blue-600 inline-flex items-center justify-center px-6 py-2">
                        <div class="flex gap-3">
                            <p>Project</p>
                            <i class="bi bi-box-arrow-up-right"></i>
                        </div>

                    </a>
                    <a href="#"
                        class="border rounded-lg hover:bg-gray-100 inline-flex items-center justify-center px-6">
                        <div class="flex gap-3">
                            <p>Contact</p>
                            <i class="bi bi-envelope-at-fill"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="w-1/2">
                <img src="{{ asset('img/vecteezy_man-is-securing-application-program-data_5005484.svg') }}"
                    alt="">
            </div>
        </div>
    </main>

</body>

</html>
