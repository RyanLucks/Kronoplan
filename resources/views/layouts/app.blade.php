<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f8f8f2">
    <meta name="description" content="@yield('meta_description', 'Kronoplan: planos com espaço para a vida real.')">
    <title>@yield('title', config('app.name', 'Kronoplan'))</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <a class="skip-link" href="#conteudo">Pular para o conteúdo</a>
    <header class="site-header">
        <div class="header-inner">
            <a class="brand" href="{{ route('home') }}" aria-label="Kronoplan — início">
                <span class="brand-mark" aria-hidden="true">
                    <svg viewBox="0 0 32 32" fill="none">
                        <path d="M16 3.5a12.5 12.5 0 1 0 12.5 12.5" />
                        <path d="M16 8v8l5 3" />
                        <path d="M21.5 3.5h7v7" />
                        <path d="m28.5 3.5-8 8" />
                    </svg>
                </span>
                <span>Kronoplan</span>
            </a>
            <nav class="site-nav" aria-label="Navegação principal">
                <a href="{{ route('home') }}#visao-geral">Visão geral</a>
                <a href="{{ route('home') }}#principios">Nossa ideia</a>
                <a class="nav-cta" href="{{ route('home') }}#visao-geral">Conheça o projeto <span aria-hidden="true">↗</span></a>
            </nav>
        </div>
    </header>

    <main id="conteudo">
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="footer-inner">
            <a class="brand footer-brand" href="{{ route('home') }}">
                <span class="brand-mark" aria-hidden="true">
                    <svg viewBox="0 0 32 32" fill="none">
                        <path d="M16 3.5a12.5 12.5 0 1 0 12.5 12.5" />
                        <path d="M16 8v8l5 3" />
                        <path d="M21.5 3.5h7v7" />
                        <path d="m28.5 3.5-8 8" />
                    </svg>
                </span>
                <span>Kronoplan</span>
            </a>
            <p>Um plano mais gentil para a vida que acontece.</p>
            <nav class="footer-links" aria-label="Informações legais">
                <a href="{{ route('privacy') }}">Privacidade</a>
                <a href="{{ route('terms') }}">Termos</a>
            </nav>
            <small>© {{ now()->year }} Kronoplan. Feito para recomeçar quantas vezes for preciso.</small>
        </div>
    </footer>
</body>
</html>
