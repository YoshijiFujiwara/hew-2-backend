<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SessionUserTest extends TestCase
{
    public function testIndex()
    {
        $testUser = User::find(1);
        $alreadySession = $testUser->managedSessions->random();
        $response = $this->apiAs($testUser, 'GET', route('sessions.users.index', [$alreadySession]), [], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testStore()
    {
        $testUser = User::find(1);
        $newSessionName = 'newSession' . str_random(5);
        $testUser->managedSessions()->create([
            'name' => $newSessionName,
            'shop_id' => 34,
            'budget' => 3000,
            'actual' => 3000,
            'start_time' => null,
            'end_time' => null
        ]);
        $newSession = $testUser->managedSessions->where('name', $newSessionName)->first();

        $response = $this->apiAs($testUser, 'POST', route('sessions.users.store', [$newSession]), [
            'user_id' => $testUser->friends->random()->id,
            'join_status' => 'allow',
            'paid' => false,
            'plus_minus' => 0,
        ], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testStoreGroup()
    {

        $testUser = User::find(1);
        $newSessionName = 'newSession' . str_random(5);
        $testUser->managedSessions()->create([
            'name' => $newSessionName,
            'shop_id' => 34,
            'budget' => 3000,
            'actual' => 3000,
            'start_time' => null,
            'end_time' => null
        ]);
        $newSession = $testUser->managedSessions->where('name', $newSessionName)->first();

        $group = $testUser->managedGroups->random();
        $response = $this->apiAs($testUser, 'POST', route('sessions.users.store_group', [$newSession, $group]), [], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testShow()
    {
        $testUser = User::find(1);
        $newSessionName = 'newSession' . str_random(5);
        $testUser->managedSessions()->create([
            'name' => $newSessionName,
            'shop_id' => 34,
            'budget' => 3000,
            'actual' => 3000,
            'start_time' => null,
            'end_time' => null
        ]);
        $newSession = $testUser->managedSessions->where('name', $newSessionName)->first();

        $newMember = $testUser->friends->random();
        $response = $this->apiAs($testUser, 'POST', route('sessions.users.store', [$newSession]), [
            'user_id' => $newMember->id,
            'join_status' => 'allow',
            'paid' => false,
            'plus_minus' => 0,
        ], []);

        $response->assertStatus(Response::HTTP_OK);

        $response = $this->apiAs($testUser, 'GET', route('sessions.users.show', [$newSession, $newMember]), [], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testUpdate()
    {
        $testUser = User::find(1);
        $newSessionName = 'newSession' . str_random(5);
        $testUser->managedSessions()->create([
            'name' => $newSessionName,
            'shop_id' => 34,
            'budget' => 3000,
            'actual' => 3000,
            'start_time' => null,
            'end_time' => null
        ]);
        $newSession = $testUser->managedSessions->where('name', $newSessionName)->first();

        $newMember = $testUser->friends->random();
        $response = $this->apiAs($testUser, 'POST', route('sessions.users.store', [$newSession]), [
            'user_id' => $newMember->id,
            'join_status' => 'allow',
            'paid' => false,
            'plus_minus' => 0,
        ], []);

        $response->assertStatus(Response::HTTP_OK);

        $response = $this->apiAs($testUser, 'GET', route('sessions.users.show', [$newSession, $newMember]), [], []);

        $response->assertStatus(Response::HTTP_OK);

        $response = $this->apiAs($testUser, 'PUT', route('sessions.users.update', [$newSession, $newMember]), [
            'join_status' => 'allow',
            'paid' => false,
            'plus_minus' => 10000,
        ], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testUpdatePaid()
    {
        $testUser = User::find(1);
        $session = $testUser->managedSessions->random();
        $sessionUser = $session->users->random();
//        Log::debug('sessionUserId');
//        Log::debug($sessionUser->id);
//        Log::debug($sessionUser->pivot->paid);

        $response = $this->apiAs($testUser, 'PUT', route('sessions.users.switch_paid', [$session, $sessionUser]), [], []);

        $response->assertStatus(Response::HTTP_OK);
//        Log::debug($session->users()->where('id', $sessionUser->id)->first()->pivot->paid);
        $this->assertEquals(! $sessionUser->pivot->paid, !! $session->users()->where('id', $sessionUser->id)->first()->pivot->paid);

        $response = $this->apiAs($testUser, 'PUT', route('sessions.users.switch_paid', [$session, $sessionUser]), [], []);
        $response->assertStatus(Response::HTTP_OK);
        $this->assertEquals(!! $sessionUser->pivot->paid, !! $session->users()->where('id', $sessionUser->id)->first()->pivot->paid);

    }

    public function testDestroy()
    {
        $testUser = User::find(1);
        $newSessionName = 'newSession' . str_random(5);
        $testUser->managedSessions()->create([
            'name' => $newSessionName,
            'shop_id' => 34,
            'budget' => 3000,
            'actual' => 3000,
            'start_time' => null,
            'end_time' => null
        ]);
        $newSession = $testUser->managedSessions->where('name', $newSessionName)->first();

        $newMember = $testUser->friends->random();

        $response = $this->apiAs($testUser, 'POST', route('sessions.users.store', [$newSession]), [
            'user_id' => $newMember->id,
            'join_status' => 'allow',
            'paid' => false,
            'plus_minus' => 0,
        ], []);

        $response = $this->apiAs($testUser, 'GET', route('sessions.users.show', [$newSession, $newMember]), [], []);

        $response = $this->apiAs($testUser, 'DELETE', route('sessions.users.destroy', [$newSession, $newMember]), [], []);
        $response->assertStatus(Response::HTTP_NO_CONTENT);
    }
}
