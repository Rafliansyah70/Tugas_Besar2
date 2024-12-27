<x-guest-layout>
    @section('title', 'Welcome')
    <div
        style="min-height: 100vh; background: linear-gradient(to right, #6B21A8, #D946EF, #F43F5E);
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0;
                padding-right: 250px;
                padding-left: 250px;
                overflow: hidden;">

        <div class="row justify-content-center" style="margin-top: 0;">

            <div
                style="text-align: center; color: black; padding: 3rem; background-color: rgba(255, 255, 255, 0.8); border-radius: 1rem; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); transform: transition-all 0.5s; cursor: pointer; transition: transform 0.5s ease;">
                <h1 style="font-size: 2.5rem; font-weight: 700; margin-bottom: 1.5rem;">Selamat Datang di Sistem Dipsy!
                </h1>
                <p style="font-size: 1.25rem; margin-bottom: 2rem;">Kami senang Anda berada di sini. Silakan login untuk
                    melanjutkan ke halaman utama dan mulai menjelajahi fitur kami.</p>

                <a href="{{ route('login') }}"
                    style="display: block; width: max-content; margin: 0 auto; padding: 12px 24px; background-color: #1D4ED8; color: white; font-size: 18px; font-weight: 500; border-radius: 8px; text-align: center; text-decoration: none; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: background-color 0.3s, transform 0.3s;">
                    Masuk ke Akun
                </a>
            </div>
        </div>

    </div>
</x-guest-layout>
