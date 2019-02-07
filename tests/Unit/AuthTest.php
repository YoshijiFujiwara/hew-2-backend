<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthTest extends TestCase
{
    /**
     * ログインテスト
     */
    public function testLogin()
    {
        $response = $this->withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ])->json('POST', route('auth.login'),
            [
                'email' => 'testuser@example.com',
                'password' => 'secret'
            ]);

        $response->assertStatus(200);
    }

    public function testCantLogin()
    {
        $response = $this->withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ])->json('POST', route('auth.login'),
            [
                'email' => 'testuser@example.com',
                'password' => 'hogehoge'
            ]);

        $response->assertStatus(401);
    }

    public function testRegister()
    {
        $newEmail = 'testuser2@example.com';
        if (User::where('email', $newEmail)->exists()) {
            User::where('email', $newEmail)->delete();
        }

        $response = $this->withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ])->json('POST', route('auth.register'),
            [
                'email' => $newEmail,
                'password' => 'secret',
                'name' => 'super',
                'username' => 'memo'
            ]);

        $response->assertStatus(200);

        User::where('email', $newEmail)->first()->delete();
    }

    public function testSameEmailRegister()
    {
        $newEmail = 'testuser3@example.com';
        if (User::where('email', $newEmail)->exists()) {
            User::where('email', $newEmail)->delete();
        }

        User::create([
            'email' => $newEmail,
            'name' => 'testuser3',
            'username' => 'testuser3',
            'password' => 'secret'
        ]);

        $response = $this->withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ])->json('POST', route('auth.register'),
            [
                'email' => $newEmail,
                'password' => 'secret',
                'name' => 'super',
                'username' => 'memo'
            ]);

        $response->assertStatus(422);

        User::where('email', $newEmail)->first()->delete();
    }

    public function testWrongEmailRegister()
    {
        $wrongEmail = 'testuser3@example';

        $response = $this->withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ])->json('POST', route('auth.register'),
            [
                'email' => $wrongEmail,
                'password' => 'secret',
                'name' => 'super',
                'username' => 'memo'
            ]);

        $response->assertStatus(422);
    }

    public function testMe()
    {
        $testUser = User::find(1);
        $response = $this->apiAs($testUser, 'POST', route('auth.me'), [], []);

//        Log::debug(print_r($response, true));

        $response->assertStatus(200);
    }

    public function testLogout()
    {
        $testUser = User::find(1);
        $response = $this->apiAs($testUser, 'POST', route('auth.logout'), [], []);

        $response
            ->assertStatus(200)
            ->assertJson(['message' => 'Successfully logged out']);
    }

    public function testRefresh()
    {
        $testUser = User::find(1);
        $response = $this->apiAs($testUser, 'POST', route('auth.refresh'), [], []);

        $response
            ->assertStatus(200);
    }
}
