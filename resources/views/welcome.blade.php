@extends('layouts.app')

@section('title', 'Kronoplan — planos para a vida real')
@section('meta_description', 'Organize rotinas e projetos com espaço para pausas, mudanças e novos começos.')

@section('content')
    <section class="hero" id="visao-geral" aria-labelledby="hero-title">
        <div class="hero-copy">
            <span class="eyebrow"><span class="eyebrow-dot"></span> Planejamento com mais leveza</span>
            <h1 id="hero-title">A vida muda.<br><span>Seu plano também pode.</span></h1>
            <p class="hero-lede">Uma rotina boa não é a que nunca sai do caminho. É a que ajuda você a encontrar o caminho de volta.</p>
            <a class="button button-dark" href="#como-funciona">Conheça a ideia <span aria-hidden="true">↓</span></a>
            <p class="hero-note">Um projeto em construção, no seu ritmo.</p>
        </div>

        <div class="hero-art" aria-label="Prévia ilustrativa de uma rotina semanal">
            <div class="orbit orbit-one"></div>
            <div class="orbit orbit-two"></div>
            <div class="sun-shape" aria-hidden="true"></div>
            <div class="planner-card">
                <div class="planner-top">
                    <div>
                        <span class="planner-kicker">SEU ESPAÇO, SEU TEMPO</span>
                        <h2>Um dia de cada vez</h2>
                    </div>
                    <span class="planner-icon" aria-hidden="true">✳</span>
                </div>
                <div class="week-strip" aria-label="Semana ilustrativa">
                    <span><small>SEG</small><b>12</b></span>
                    <span class="day-current"><small>TER</small><b>13</b></span>
                    <span><small>QUA</small><b>14</b></span>
                    <span><small>QUI</small><b>15</b></span>
                    <span><small>SEX</small><b>16</b></span>
                </div>
                <div class="plan-row">
                    <time datetime="08:30">08:30</time>
                    <span class="plan-mark mark-green"></span>
                    <div><b>Começar com calma</b><small>Rotina da manhã</small></div>
                </div>
                <div class="plan-row">
                    <time datetime="10:00">10:00</time>
                    <span class="plan-mark mark-yellow"></span>
                    <div><b>Projeto pessoal</b><small>Um passo já conta</small></div>
                </div>
                <div class="pause-card"><span aria-hidden="true">☼</span><p><b>Pausa também é plano.</b><small>Deixe espaço para respirar.</small></p></div>
                <div class="planner-foot"><span>Uma semana possível</span><span class="foot-dots" aria-hidden="true">● ● ●</span></div>
            </div>
            <div class="floating-note"><span aria-hidden="true">↗</span> Recomeçar faz parte</div>
        </div>
    </section>

    <section class="intro-section" id="como-funciona" aria-labelledby="intro-title">
        <div class="section-heading">
            <span class="eyebrow">Menos cobrança, mais continuidade</span>
            <h2 id="intro-title">Planejar não é prever tudo.<br><span>É poder se adaptar.</span></h2>
            <p>Férias, imprevistos e dias de descanso não deveriam desmontar tudo o que você construiu. O Kronoplan nasce para acompanhar a rotina como ela é: em movimento.</p>
        </div>
        <div class="feature-grid">
            <article class="feature-card">
                <span class="feature-number">01</span>
                <span class="feature-icon icon-calendar" aria-hidden="true">▦</span>
                <h3>Rotinas flexíveis</h3>
                <p>Organize seus planos sem transformar cada mudança em um recomeço do zero.</p>
            </article>
            <article class="feature-card feature-card-highlight">
                <span class="feature-number">02</span>
                <span class="feature-icon icon-pause" aria-hidden="true">Ⅱ</span>
                <h3>Pausas que contam</h3>
                <p>Preveja intervalos, férias e respiros como parte do plano — não como falhas.</p>
            </article>
            <article class="feature-card">
                <span class="feature-number">03</span>
                <span class="feature-icon icon-bell" aria-hidden="true">◷</span>
                <h3>Lembretes no momento certo</h3>
                <p>Uma base para, no futuro, ajudar você a lembrar do que importa sem aumentar o ruído.</p>
            </article>
        </div>
    </section>

    <section class="principles-section" id="principios" aria-labelledby="principles-title">
        <div class="principles-copy">
            <span class="eyebrow eyebrow-light">Um jeito diferente de olhar</span>
            <h2 id="principles-title">Constância não é<br>fazer tudo. É <em>continuar.</em></h2>
            <p>O Kronoplan ainda está no começo. Esta primeira base apresenta a ideia; as ferramentas para criar e acompanhar planos virão nas próximas etapas.</p>
            <a class="text-link" href="{{ route('privacy') }}">Como cuidamos da privacidade <span aria-hidden="true">↗</span></a>
        </div>
        <div class="principles-visual" aria-hidden="true">
            <div class="path-line"></div>
            <span class="path-point point-one"></span>
            <span class="path-point point-two"></span>
            <span class="path-point point-three"></span>
            <span class="path-point point-four"></span>
            <div class="path-label label-one">planejar</div>
            <div class="path-label label-two">pausar</div>
            <div class="path-label label-three">ajustar</div>
            <div class="path-label label-four">seguir</div>
        </div>
    </section>

    <section class="closing-section" aria-labelledby="closing-title">
        <span class="closing-spark" aria-hidden="true">✳</span>
        <p>Sem pressa. Sem perfeição.</p>
        <h2 id="closing-title">Um passo de cada vez<br>já é um caminho.</h2>
        <a class="button button-light" href="#visao-geral">Voltar ao início <span aria-hidden="true">↑</span></a>
    </section>
@endsection
