<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Http\Response;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GuestSessionTest extends TestCase
{
    public function testIndex()
    {
        $testUser = User::find(1);
        $response = $this->apiAs($testUser, 'GET', route('guests.sessions.index'), [], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testShow()
    {
        $testUser = User::find(1);
        $participatedSession = $testUser->participatedSessions->random();
        $response = $this->apiAs($testUser, 'GET', route('guests.sessions.show', [$participatedSession]), [], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testUpdate()
    {
        $testUser = User::find(1);
        $participatedSession = $testUser->participatedSessions->random();
        $response = $this->apiAs($testUser, 'PUT', route('guests.sessions.update', [$participatedSession]), [
            'join_status' => 'allow'
        ], []);

        $response->assertStatus(Response::HTTP_OK);

        $response = $this->apiAs($testUser, 'PUT', route('guests.sessions.update', [$participatedSession]), [
            'join_status' => 'deny'
        ], []);

        $response->assertStatus(Response::HTTP_OK);

        $response = $this->apiAs($testUser, 'PUT', route('guests.sessions.update', [$participatedSession]), [
            'join_status' => 'wait'
        ], []);

        $response->assertStatus(Response::HTTP_OK);
    }
}
