@extends('layouts.app')

@section('content')
    <section class="error-page" aria-labelledby="error-title">
        <span class="error-code">@yield('code')</span>
        <h1 id="error-title">@yield('heading')</h1>
        <p>@yield('message')</p>
        <a class="button button-dark" href="{{ route('home') }}">Voltar ao início <span aria-hidden="true">↗</span></a>
    </section>
@endsection
