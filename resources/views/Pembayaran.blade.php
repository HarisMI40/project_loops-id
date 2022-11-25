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
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center">
                   <h2 class="text-lg">Silahkan Lakukan Pembayaran Ke Bank BSI</h1>
                   <div>
                        <label class="text-sm">No Rek :</label>
                        <p class="text-md">423485830</p>
                   </div>

                   <div class="text-md">Sejumlah : {{number_format($pembayaran->langganan->harga,0,',','.')}}</div>

                   <a href="{{route('dashboard')}}" class="bg-blue-700 py-3 px-10"> GO TO Dashboard </a>

                   <div class="bg-red-500 p-5"><h1 class="text-md">Untuk Keperluan demo website<h1>
                    User Langsung Bisa Masuk Ke dashboard tanpa harus melakukan pembayaran terlebih dahulu</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>