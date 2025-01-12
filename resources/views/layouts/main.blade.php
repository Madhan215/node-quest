{{-- Untuk tampilan home --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Node Quest</title>
    {{-- Font PT Sans --}}
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    {{-- Bootstrap Lokal --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    {{-- Bootstrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    {{-- Highlight JS CSS --}}
    <link rel="stylesheet" href="{{ asset('css\node_modules\highlight.js\styles\github.css') }}">
    {{-- fav icon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('img/icon-node-quest.ico') }}">
</head>

<body>
    <div class="min-vh-100 d-flex flex-column" style="position: relative; z-index: 1">
        <nav class="navbar navbar-expand-md sticky-top bg-white">
            <div class="py-2 mx-2 mx-sm-auto container">
                <a class="navbar-brand" href="/"><span class="fw-bold text-primary">Node Quest</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="mx-auto navbar-nav">
                        <a class="nav-link {{ Route::is('beranda') ? 'active fw-semibold' : '' }}" aria-current="page"
                            href="/">Beranda</a>
                        <a class="nav-link {{ Route::is('materi') ? 'active fw-semibold' : '' }}"
                            href="materi">Materi</a>
                        <a class="nav-link {{ Route::is('livenode') ? 'active fw-semibold' : '' }}"
                            href="livenode">LiveNode</a>
                        <a class="nav-link {{ Route::is('perihal') ? 'active fw-semibold' : '' }}"
                            href="perihal">Perihal</a>
                    </div>
                    <div class="gap-2 navbar-nav">
                        <a role="button" tabindex="0" class="btn btn-outline-primary" href="/daftar">DAFTAR</a>
                        <a role="button" tabindex="0" class="btn btn-primary" href="/masuk">MASUK</a>
                    </div>
                </div>
            </div>
        </nav>
        <section>
            <div class="sticky-top" style="position: relative; z-index: 0">
                @yield('container-base')
            </div>
        </section>
        <section class="bg-white text-dark p-3 p-sm-5 mb-5 mb-sm-0 flex-grow-1">
            <div class="container">
                @yield('container')
            </div>
        </section>
    </div>
    <footer class="d-flex justify-content-center align-items-center py-3">
        <div class="d-flex align-items-center">
            <span class="fw-bold text-primary me-2">Node Quest</span>
            <span class="text-muted">© 2024 PilkomMedia</span>
        </div>
    </footer>

    {{-- Bootstrap JS --}}
    <script src="{{ asset('css\node_modules\bootstrap\dist\js\bootstrap.bundle.js') }}"></script>
    {{-- Highlight JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/highlight.min.js"></script>
    {{-- Inisiasi Highlight JS --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            hljs.highlightAll();
        });
    </script>

</body>

</html>
