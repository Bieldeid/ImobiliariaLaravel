<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class rota_casas_acessa_com_sucesso extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function a_rota_casas_responde_com_sucesso()
    {
        $response = $this->get('/casas');

        $response->assertStatus(200);
    }
}
