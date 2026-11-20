<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_the_homepage_displays_the_kronoplan_introduction(): void
    {
        $response = $this->get('/');

        $response
            ->assertOk()
            ->assertSee('A vida muda.')
            ->assertSee('Kronoplan')
            ->assertHeader('X-Content-Type-Options', 'nosniff')
            ->assertHeader('X-Frame-Options', 'DENY');
    }

    public function test_the_draft_information_pages_are_available(): void
    {
        $this->get('/privacidade')
            ->assertOk()
            ->assertSee('Rascunho — revisar antes da publicação')
            ->assertSee('LGPD');

        $this->get('/termos')
            ->assertOk()
            ->assertSee('Não publique este rascunho como contrato');
    }

    public function test_unknown_pages_use_the_custom_not_found_page(): void
    {
        $this->get('/pagina-inexistente')
            ->assertNotFound()
            ->assertSee('Este caminho mudou.');
    }
}
