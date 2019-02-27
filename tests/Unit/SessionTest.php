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

    public function testIndexWithAllowUsers()
    {
        $testUser = User::find(1);
        $response = $this->apiAs($testUser, 'GET', route('sessions.index_with_only_allow_users'), [], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testNotStart()
    {
        $testUser = User::find(1);
        $response = $this->apiAs($testUser, 'GET', route('sessions.not_start'), [], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testOnGoing()
    {
        $testUser = User::find(1);
        $response = $this->apiAs($testUser, 'GET', route('sessions.on_going'), [], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testNotPaymentComplete()
    {
        $testUser = User::find(1);
        $response = $this->apiAs($testUser, 'GET', route('sessions.not_payment_complete'), [], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testHistory()
    {
        $testUser = User::find(1);
        $response = $this->apiAs($testUser, 'GET', route('sessions.history'), [], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testComplete()
    {
        $testUser = User::find(1);
        $response = $this->apiAs($testUser, 'GET', route('sessions.complete'), [], []);

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

    public function testCanAddUsers()
    {
        $testUser = User::find(1);
        $alreadySession = $testUser->managedSessions->random();
        $response = $this->apiAs($testUser, 'GET', route('sessions.can_add_users', ['session' => $alreadySession->id]), [], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testCanAddGroups()
    {
        $testUser = User::find(1);
        $alreadySession = $testUser->managedSessions->random();
        $response = $this->apiAs($testUser, 'GET', route('sessions.can_add_groups', ['session' => $alreadySession->id]), [], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testShow()
    {
        $testUser = User::find(1);
        $alreadySession = $testUser->managedSessions->random();
        $response = $this->apiAs($testUser, 'GET', route('sessions.show', $alreadySession), [], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testShowWithAllowUsers()
    {
        $testUser = User::find(1);
        $alreadySession = $testUser->managedSessions->random();
        $response = $this->apiAs($testUser, 'GET', route('sessions.show_with_only_allow_users', $alreadySession), [], []);

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
