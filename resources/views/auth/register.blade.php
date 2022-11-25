<x-guest-layout>


   
   
    <x-auth-card>
        <x-slot name="logo">
            {{-- <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a> --}}
        </x-slot>
    <div class="flex flex-col">
         <div class="text-md bg-gray-200 p-2 mb-3">Form Langganan LOOPS ID {{$langganan->judul}}</div>

        <form method="POST" action="{{ route('register.store') }}">
            @csrf

            <!-- Name -->
            <input type="hidden" value="{{$langganan->id}}" name="id_langganan">
            <div>
                <x-input-label for="Nama Lengkap" :value="__('Nama Lengkap')" />
                <x-text-input id="Nama Lengkap" class="block mt-1 w-full" type="text" name="nama_lengkap" :value="old('nama_lengkap')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Username -->
            <div class="mt-4">
                <x-input-label for="Username" :value="__('Username')" />
                <x-text-input id="Username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />
                <x-input-error :messages="$errors->get('username')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

             <!-- No HP -->
            <div class="mt-4">
                <x-input-label for="no_hp" :value="__('no_hp')" />
                <x-text-input id="no_hp" class="block mt-1 w-full" type="text" name="no_hp" :value="old('no_hp')" required autofocus />
                <x-input-error :messages="$errors->get('no_hp')" class="mt-2" />
            </div>
        


            <div class="border p-5 mt-3 rounded bg-white shadow-lg shadow-gray-100/50">
                <table class="w-full text-sm h-full">
                    <tr class="border-b-2">
                        <td>{{$langganan->judul}}</td>
                        <td class="text-right">RP. {{number_format($langganan->harga,0,',','.')}} </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-right">Total : {{number_format($langganan->harga,0,',','.')}}</td>
                    </tr>
                </table>
            </div>
        </div>

            <div class="mt-4">
                <div class="text-md bg-gray-200 p-2">Akad Jual Beli</div>
                <p class="text-xs text-justify p-3 overflow-y-scroll h-60">
                Bismillah...

                Akad jual beli berikut berlaku antara Anda yang selanjutnya disebut "pembeli" dengan pihak penjual yang selanjutnya disebut "Loops.id".

                Loops.id adalah produk digital berupa aplikasi berbasis web, bukan WordPress Plugin. Untuk menjalankannya anda dapat mengaksesnya di dashboard loops.id

                Pembelian Loops.id ini tidak termasuk domain dan hosting. Perihal domain dan hosting menjadi urusan pembeli sepenuhnya, bukan tanggung jawab Loops.id.

                Pembeli wajib menyelesaikan pembayaran dalam waktu maksimal 5 hari sejak diterbitkannya invoice untuk mendapatkan akses ke dashboard Loops.id.

                Loops.id wajib memberikan akses ke dashboard yang telah dibeli dalam waktu maksimal 24 jam di hari kerja (Senin-Jumat) setelah pembeli menyelesaikan pembayaran.

                Loops.id memiliki kebijakan "no refund", tidak ada refund untuk uang yang telah dibayarkan pembeli ke Loops.id.

                Pembeli bersedia untuk dihapus akses / izin penggunaan produk yang sudah dibeli tanpa pengembalian uang yang dibayarkan jika melakukan pelanggaran sebagai berikut.

                - Membagikan akses produk Loops.id kepada orang lain tanpa ijin Loops.id.

                - Menjual kembali akses produk Loops.id kepada orang lain tanpa ijin Loops.id

                - Menggunakan produk Loops.id untuk aktifitas yang dilarang dalam perundang-undangan yang berlaku di Indonesia.

                Loops.id berkomitmen untuk menyediakan update produk supaya selalu bisa digunakan.

                Loops.id berkomitmen untuk menyediakan support teknis yang berkaitan dengan produk yang dibeli selama pembeli masih memiliki akses produk Loops.id.

                Pembeli memahami bahwa Loops.id menyediakan support melalui Email dan Facebook Messenger dengan waktu respon maksimal 1x24 jam di hari kerja (Senin-Jumat) dan jam kerja. Pembeli dipersilahkan menghubungi kembali jika tidak ada balasan dalam 1x24 jam di hari dan jam kerja tersebut.

                Adapun facebook group diperuntukkan sebagai sarana komunikasi antar pembeli Loops.id

                Pembeli hendaknya dapat berlaku sopan dan berbahasa santun, baik pada saat mengajukan pertanyaan kepada support maupun berinteraksi dengan sesama member

                Jika pembeli melakukan pembelian melalui affiliate yang menyediakan bonus khusus, maka perihal akses bonus tersebut adalah menjadi tanggung jawab pihak affiliate sepenuhnya.

                Demikian syarat & ketentuan pembelian / akad jual dan beli yang dibuat dan disepakati bersama secara sadar dan tanpa paksaan oleh pembeli dan Loops.id demi kebaikan bersama.
                </p>
            
            </div>
            <div class="mt-4">
                <div class="text-md bg-gray-200 p-2">Pembayaran</div>
                <div class="p-3">
                    <table class="w-full text-sm h-full">
                        <tr class="border-b-2">
                            <td>Metode Pembayaran</td>
                            <td class="text-right">
                             <p class="text-xs font-bold">Transfer Bank (Otomatis by Moota.co)</p>
                             <p class="italic text-xs">Transfer ke Bank BCA atau Mandiri</p>
                            </td>
                        </tr>
                    </table>
                </div>
            
            </div>
             <div class="flex items-center justify-end mt-4">
                {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a> --}}

                <x-primary-button class="ml-4">
                    {{ __('Next') }}
                </x-primary-button>
            </div>
            </form>
    </x-auth-card>

</x-guest-layout>