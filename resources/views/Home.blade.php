<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container bg-gray-200 h-screen p-10">
        <h1 class="text-center text-5xl font-extrabold">Berlangganan Loops ID</h1>

        <div class="flex justify-center mt-10">
            @foreach ($langganan as $langganan)
            <a href="/register/{{$langganan->id}}">
                <div class="card_langganan mr-5 text-center hover:opacity-80 hover:pointer-events-auto text-white px-10 py-3 rounded shadow-lg shadow-{{$warna[$counter]}}-500/20 border border-{{$warna[$counter]}}-200 hover:scale-125 transition duration-300 hover:ease-in" style="background:{{$langganan->warna}}">
                    <h1 class="text-lg">{{$langganan->judul}}</h1>
                    <h3 class="text-md">RP. {{number_format($langganan->harga,0,',','.')}}</h3>
                </div>
            </a>
            <?php $counter++ ?>
            @endforeach
        </div>
    

    </div>
</body>
</html>