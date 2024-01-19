<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function test_set_database_config()
    {
        Artisan::call('migrate:reset');
        Artisan::call('migrate');
        Artisan::call('db:seed');

        $response = $this->get('/');
        $response->assertStatus(200);

    }


    public function test_get_users_list()
    {
        $response = $this->get('/users');
        $response->assertStatus(200);
        $response->assertJsonStructure(['id', 'name', 'email','email_verified_at', 'created_at', 'updated_at'  ]);
        $response->asssertJsonFragment(['name', 'Pablo']);
        $response->asssertJsonCount(4);

    }

    public function test_get_user_detail()
    {
        $response = $this->get('/users/22');
        $response->assertStatus(404);
    }
}
