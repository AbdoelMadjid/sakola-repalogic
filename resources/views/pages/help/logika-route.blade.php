@extends('layouts.index')

@section('title', 'Logika Route')

@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            {{ trim($__env->yieldContent('title')) ?: getPageTitle() }}
        @endslot
    @endcomponent
@endsection

@section('content')
    <div class="container">
        <div class="card card-custom gutter-b">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Dokumentasi Dynamic Route: /help/logika-route</h3>
                </div>
            </div>
            <div class="card-body">
                <p class="mb-6">
                    Halaman ini mendokumentasikan logika route dinamis pada proyek ini secara end-to-end, mulai dari
                    sumber data menu, proses registrasi route, mapping ke view Blade, sampai perilaku fallback jika view
                    belum tersedia.
                </p>

                <h5 class="font-weight-bolder mb-3">1) Entry point route dinamis</h5>
                <p class="mb-3">
                    File <code>routes/web.php</code> memuat file <code>routes/dynamic-menus.php</code>.
                    Artinya, setiap request bootstrap route akan selalu melewati proses pendaftaran route dinamis.
                </p>
                <pre class="bg-light p-4 rounded mb-4"><code>require __DIR__ . '/dynamic-menus.php';</code></pre>

                <h5 class="font-weight-bolder mb-3">2) Sumber data menu</h5>
                <p class="mb-3">
                    Route dinamis membaca beberapa konfigurasi menu:
                    <code>menus.custom</code>, <code>menus.layouts</code>, <code>menus.crud</code>,
                    <code>menus.features</code>.
                    Semua berasal dari file <code>config/menus/*.php</code>.
                </p>
                <pre class="bg-light p-4 rounded mb-4"><code>$configs = [
    'menus.custom',
    'menus.layouts',
    'menus.crud',
    'menus.features',
];</code></pre>

                <h5 class="font-weight-bolder mb-3">3) Scope akses route</h5>
                <p class="mb-4">
                    Semua route yang didaftarkan dari menu ini dibungkus middleware
                    <code>auth</code>, jadi hanya user yang sudah login yang bisa mengakses.
                </p>

                <h5 class="font-weight-bolder mb-3">4) Traversal rekursif submenu</h5>
                <p class="mb-3">
                    Pendaftaran route dilakukan dari node <code>submenu</code> menggunakan fungsi rekursif.
                    Ini memungkinkan struktur menu bertingkat (parent -> child -> grandchild) tetap terbaca.
                </p>
                <pre class="bg-light p-4 rounded mb-4"><code>$register = function ($items) use (&$register) {
    foreach ($items as $item) {
        if (!empty($item['submenu'])) {
            $register($item['submenu']);
        }
        // route didaftarkan jika ada key 'route'
    }
};</code></pre>

                <h5 class="font-weight-bolder mb-3">5) Transformasi route menjadi URI, name, dan view</h5>
                <p class="mb-3">
                    Saat item menu punya key <code>route</code>, nilainya ditransform menjadi:
                    URI endpoint, nama route, dan nama view.
                </p>
                <pre class="bg-light p-4 rounded mb-4"><code>$uri  = ltrim($item['route'], '/');
$name = str_replace('/', '.', $uri);
$view = 'pages.' . str_replace('/', '.', $uri);</code></pre>

                <h5 class="font-weight-bolder mb-3">6) Contoh transformasi nyata</h5>
                <p class="mb-3">
                    Untuk route menu <code>/help/logika-route</code>, hasil transformasinya:
                </p>
                <div class="bg-light rounded p-4 mb-4">
                    <div><strong>URI:</strong> <code>help/logika-route</code></div>
                    <div><strong>Route name:</strong> <code>help.logika-route</code></div>
                    <div><strong>View target:</strong> <code>pages.help.logika-route</code></div>
                    <div><strong>File Blade:</strong> <code>resources/views/pages/help/logika-route.blade.php</code></div>
                </div>

                <h5 class="font-weight-bolder mb-3">7) Mekanisme fallback view</h5>
                <p class="mb-3">
                    Jika view sesuai path ditemukan, route akan diarahkan ke view tersebut. Jika tidak ada, route tetap
                    dibuat tetapi diarahkan ke <code>coming-soon</code>.
                </p>
                <pre class="bg-light p-4 rounded mb-4"><code>if (view()->exists($view)) {
    Route::view($uri, $view)->name($name);
} else {
    Route::view($uri, 'coming-soon')->name($name);
}</code></pre>

                <h5 class="font-weight-bolder mb-3">8) Implikasi penting dari fallback</h5>
                <p class="mb-4">
                    Menu baru bisa langsung tampil dan bisa diklik walaupun file Blade belum dibuat.
                    Ini berguna untuk workflow bertahap: tim bisa daftarkan navigasi dulu, lalu isi halaman menyusul.
                </p>

                <h5 class="font-weight-bolder mb-3">9) Catatan struktur menu</h5>
                <p class="mb-4">
                    Pada implementasi saat ini, route diproses dari <code>submenu</code>.
                    Jadi item level root yang hanya punya <code>route</code> tanpa <code>submenu</code> tidak ikut
                    diregistrasi oleh file <code>dynamic-menus.php</code>.
                </p>

                <h5 class="font-weight-bolder mb-3">10) Checklist saat menambah halaman dinamis baru</h5>
                <div class="mb-5">
                    <div>1. Tambah item menu dengan key <code>route</code> di <code>config/menus/*.php</code>.</div>
                    <div>2. Buat file Blade di path <code>resources/views/pages/...</code> sesuai pola route.</div>
                    <div>3. Pastikan user sudah login (karena middleware <code>auth</code>).</div>
                    <div>4. Jika halaman tampil <code>coming-soon</code>, cek kembali nama file view.</div>
                    <div>5. Jika menu tidak active, cek path URL dan class active di partial menu/header.</div>
                </div>

                <h5 class="font-weight-bolder mb-3">11) Ringkasan alur</h5>
                <p class="mb-3">
                    Rangkaian prosesnya konsisten:
                    <code>config menu</code> -> <code>dynamic-menus.php</code> -> <code>transform route</code> ->
                    <code>cek view</code> -> <code>register Route::view</code>.
                </p>

                <div class="alert alert-custom alert-light-primary fade show mb-0" role="alert">
                    <div class="alert-text">
                        Dengan pola ini, pengembangan menu dan halaman jadi cepat, konsisten, dan minim deklarasi route
                        manual satu per satu.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
