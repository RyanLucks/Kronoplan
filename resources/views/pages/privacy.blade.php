@extends('layouts.app')

@section('title', 'Privacidade — Kronoplan')
@section('content')
    <article class="document-page">
        <a class="back-link" href="{{ route('home') }}">← Voltar ao início</a>
        <span class="document-status">Rascunho — revisar antes da publicação</span>
        <h1>Privacidade</h1>
        <p class="document-lede">Esta página é um ponto de partida para explicar como o Kronoplan pretende tratar dados. Ela não é uma política final nem substitui revisão jurídica conforme a LGPD.</p>

        <h2>Estado atual do projeto</h2>
        <p>Esta versão é uma apresentação do projeto. Ainda não há cadastro, formulários de rotina, integrações de calendário, notificações ou ferramentas de análise de audiência configuradas.</p>

        <h2>Dados técnicos e cookies</h2>
        <p>O servidor e a configuração do Laravel podem processar dados técnicos necessários para entregar e proteger o site, além de usar cookies estritamente necessários para recursos como sessões. A hospedagem escolhida poderá manter registros técnicos próprios. Nenhuma ferramenta de publicidade ou análise foi configurada nesta base.</p>

        <h2>Antes de lançar recursos com dados pessoais</h2>
        <p>Esta página deverá ser atualizada para identificar o controlador, os dados coletados, finalidades e bases legais, prazos de retenção, operadores e serviços externos, medidas de segurança e canais para exercício dos direitos dos titulares. Também será necessário rever cookies e integrações quando forem adicionados.</p>

        <h2>Contato</h2>
        <p>Defina e publique um canal de contato responsável por privacidade antes de abrir o serviço ao público.</p>
    </article>
@endsection
