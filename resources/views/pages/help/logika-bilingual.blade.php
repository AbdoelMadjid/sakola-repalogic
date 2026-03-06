@extends('layouts.index')

@section('title', 'Logika Bilingual')

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
                    <h3 class="card-label">Dokumentasi Bilingual (EN/ID)</h3>
                </div>
            </div>
            <div class="card-body">
                <p class="mb-5">
                    Halaman ini menjelaskan alur bilingual di aplikasi: pemilihan locale, penyimpanan locale aktif,
                    dan bagaimana label menu/komponen diterjemahkan.
                </p>

                <h5 class="font-weight-bolder mb-3">1) Sumber locale</h5>
                <p class="mb-3">
                    Locale aktif ditentukan dari route <code>/locale/{locale}</code> dengan pilihan
                    <code>en</code> dan <code>id</code>.
                </p>
                <pre class="bg-light p-4 rounded mb-4"><code>Route::get('/locale/{locale}', function (string $locale) {
    $supportedLocales = ['en', 'id'];
    abort_unless(in_array($locale, $supportedLocales, true), 404);
    session(['locale' => $locale]);
    return redirect()->back();
})->name('locale.switch');</code></pre>

                <h5 class="font-weight-bolder mb-3">2) File terjemahan</h5>
                <p class="mb-4">
                    Translasi disimpan di folder <code>lang/en</code> dan <code>lang/id</code>.
                    Untuk menu utama dipakai key seperti <code>header_menu.php</code> dan <code>menus.php</code>.
                </p>

                <h5 class="font-weight-bolder mb-3">3) Cara render teks bilingual</h5>
                <p class="mb-3">
                    Partial header/menu membaca file translasi lalu fallback ke teks asli jika key belum tersedia.
                </p>
                <pre class="bg-light p-4 rounded mb-4"><code>$headerMenuTranslations = trans('header_menu');
$translateHeaderMenu = static function (string $text) use ($headerMenuTranslations): string {
    return $headerMenuTranslations[$text] ?? $text;
};</code></pre>

                <h5 class="font-weight-bolder mb-3">4) Contoh key menu Help</h5>
                <div class="bg-light rounded p-4 mb-4">
                    <div><code>'Logika Route' => 'Logika Route'</code> (ID)</div>
                    <div><code>'Logika Route' => 'Route Logic'</code> (EN, bisa disesuaikan)</div>
                    <div><code>'Logika Bilingual' => 'Logika Bilingual'</code> (ID)</div>
                    <div><code>'Logika Bilingual' => 'Bilingual Logic'</code> (EN)</div>
                </div>

                <h5 class="font-weight-bolder mb-3">5) Ringkasan</h5>
                <div class="alert alert-custom alert-light-primary fade show mb-0" role="alert">
                    <div class="alert-text">
                        Alur bilingual: pilih locale -> simpan di session -> render label via file translasi locale aktif.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
