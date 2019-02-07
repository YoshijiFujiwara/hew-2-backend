<?php

namespace Tests\Unit;

use App\Model\Group;
use App\User;
use Illuminate\Http\Response;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SessionTest extends TestCase
{
    public function testIndex()
    {
        $testUser = User::find(1);
        $response = $this->apiAs($testUser, 'GET', route('sessions.index'), [], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testStore()
    {
        $testUser = User::find(1);
        $response = $this->apiAs($testUser, 'POST', route('sessions.store'), [
            'name' => 'newSession' . str_random(5),
            'shop_id' => 34,
            'budget' => 3000,
            'actual' => 3000,
            'start_time' => null,
            'end_time' => null
        ], []);

        $response->assertStatus(Response::HTTP_CREATED);
    }

    public function testShow()
    {
        $testUser = User::find(1);
        $alreadySession = $testUser->managedSessions->random();
        $response = $this->apiAs($testUser, 'GET', route('sessions.show', $alreadySession), [], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testUpdate()
    {
        $testUser = User::find(1);
        $alreadySession = $testUser->managedSessions->random();
        $response = $this->apiAs($testUser, 'PUT', route('sessions.update', $alreadySession), [
            'name' => 'newUpdateSession' . str_random(5),
            'shop_id' => 34,
            'budget' => 5000,
            'actual' => 3000,
            'start_time' => null,
            'end_time' => null
        ], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testDestroy()
    {
        $testUser = User::find(1);
        $alreadySession = $testUser->managedSessions->random();
        $response = $this->apiAs($testUser, 'DELETE', route('sessions.destroy', $alreadySession), [], []);

        $response->assertStatus(Response::HTTP_NO_CONTENT);
    }
}
