<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>

</head>

<body>
    <nav class="shadow-2xl">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <h1 class="text-xl font-bold">FarizqiDev</h1>
            <ul class="md:flex space-x-6">
                <li class="hover:text-cyan-600 transition"><a href="#">haloo</a></li>
                <li><a href="#">makanana</a></li>
                <li><a href="#">about</a></li>
            </ul>
        </div>
    </nav>

    <section class="container mx-auto flex flex-col-reverse md:flex-row items-center justify-center px-6 py-16 rounded-3xl shadow-xl">
        <div class="text-center md:text-left md:w-1/2">
            <h2 class="text-5xl font-bold mb-4"> Halo saya <span class="text-indigo-500">Farizqi</span></h2>
            <p class="text-gray-500">Saya adalah Mahasiswa yang aktif di dunia coding</p>
        </div>
        <div class="md:text-right md:w-1/2">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea beatae rem accusantium minima magni excepturi obcaecati eveniet, deserunt facilis impedit consectetur itaque unde asperiores pariatur, aut quas eos eum aperiam?</p>
        </div>
    </section>
</body>

</html>
