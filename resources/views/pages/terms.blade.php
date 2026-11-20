@extends('layouts.app')

@section('title', 'Termos de uso — Kronoplan')
@section('content')
    <article class="document-page">
        <a class="back-link" href="{{ route('home') }}">← Voltar ao início</a>
        <span class="document-status">Rascunho — revisar antes da publicação</span>
        <h1>Termos de uso</h1>
        <p class="document-lede">Este texto é apenas um lembrete para a etapa de lançamento. Não estabelece termos completos nem substitui revisão jurídica.</p>

        <h2>Versão de demonstração</h2>
        <p>O Kronoplan está em desenvolvimento. Esta base apresenta o projeto e ainda não oferece contas, armazenamento de planos, colaboração ou lembretes.</p>

        <h2>O que definir antes do lançamento</h2>
        <p>Os termos finais deverão explicar elegibilidade e responsabilidades, funcionamento e disponibilidade do serviço, conteúdo e propriedade intelectual, regras de uso, cancelamento e encerramento de contas, suporte, limitações de responsabilidade e formas de contato.</p>

        <h2>Não publique este rascunho como contrato</h2>
        <p>Revise os termos de acordo com os recursos efetivamente oferecidos, o modelo comercial e a legislação aplicável antes de disponibilizar o serviço ao público.</p>
    </article>
@endsection
