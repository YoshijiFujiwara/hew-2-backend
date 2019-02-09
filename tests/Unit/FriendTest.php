<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FriendTest extends TestCase
{

    public function testNoFriendIndex()
    {
        $newEmail = 'nofriend@nofriend.com';
        if (User::where('email', $newEmail)->exists()) {
            User::where('email', $newEmail)->delete();
        }

        User::create([
            'email' => $newEmail,
            'username' => 'testuser3',
            'password' => 'secret'
        ]);

        $testUser = User::where('email', $newEmail)->first();
        $response = $this->apiAs($testUser, 'GET', route('friends.index'), [], []);

        $response->assertStatus(Response::HTTP_NO_CONTENT);
    }

    public function testIndex()
    {
        $testUser = User::find(1);
        $response = $this->apiAs($testUser, 'GET', route('friends.index'), [], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testStore()
    {
        $newEmail = 'newfriend@newfriend.com';
        if (User::where('email', $newEmail)->exists()) {
            User::where('email', $newEmail)->delete();
        }

        User::create([
            'email' => $newEmail,
            'username' => 'testuser3',
            'password' => 'secret'
        ]);


        $testUser = User::find(1);
        $response = $this->apiAs($testUser, 'POST', route('friends.store'), [
            'email' => $newEmail
        ], []);

        $response->assertStatus(Response::HTTP_CREATED);
    }

    public function testStoreMe()
    {
        $testUser = User::find(1);
        $response = $this->apiAs($testUser, 'POST', route('friends.store'), [
            'email' => $testUser->email
        ], []);

        $response
            ->assertStatus(Response::HTTP_CONFLICT)
            ->assertJson(['error' => '自分です']);
    }

    public function testStoreAlreadyFriend()
    {
        $testUser = User::find(1);
        $response = $this->apiAs($testUser, 'POST', route('friends.store'), [
            'email' => $testUser->friends->random()->email
        ], []);

        $response
            ->assertStatus(Response::HTTP_CONFLICT)
            ->assertJson(['error' => 'すでにフレンドか、申請中です']);
    }

    public function testShow()
    {
        $testUser = User::find(1);
//        Log::debug('QQQQQQQQQQQQQQQQ');
//        Log::debug(print_r(route('friends.show', ['friend' => $testUser->friends->random()]), true));
        $response = $this->apiAs($testUser, 'GET', route('friends.show', ['friend' => $testUser->friends->random()]), [], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testDestory()
    {
        $testUser = User::find(1);
        $friend = $testUser->friends->random();
        $response = $this->apiAs($testUser, 'DELETE', route('friends.destroy', ['friend' => $friend]), [], []);
        $response->assertStatus(Response::HTTP_NO_CONTENT);

        $response = $this->apiAs($testUser, 'GET', route('friends.show', ['friend' => $friend]), [], []);

        $response->assertStatus(Response::HTTP_FORBIDDEN);
    }

    public function testBlockedUsers()
    {
        $testUser = User::find(1);
        $response = $this->apiAs($testUser, 'GET', route('friends.blocked_users'), [], []);
        $response->assertStatus(Response::HTTP_OK);
    }

    public function testWaitingFriends()
    {
        $testUser = User::find(1);
        $response = $this->apiAs($testUser, 'GET', route('friends.waiting_friends'), [], []);
        $response->assertStatus(Response::HTTP_OK);
    }

    public function testPermit()
    {
        $testUser = User::find(1);

        $newInvitingUser = new User;
        $newInvitingUser->email = str_random(5) . '@new.com';
        $newInvitingUser->username = 'aaaa';
        $newInvitingUser->password = 'secret';
        $newInvitingUser->save();

        $response = $this->apiAs($newInvitingUser, 'POST', route('friends.store'), [
            'email' => $testUser->email
        ], []);
        $response->assertStatus(Response::HTTP_CREATED);

        $response = $this->apiAs($testUser, 'POST', route('friends.permit'), [
            'user_id' => $newInvitingUser->id
        ], []);
        $response->assertStatus(Response::HTTP_OK);
    }

    public function testCantPermit()
    {
        $testUser = User::find(1);

        $newInvitingUser = new User;
        $newInvitingUser->email = str_random(6) . '@new.com';
        $newInvitingUser->username = 'aaaa';
        $newInvitingUser->password = 'secret';
        $newInvitingUser->save();

        $response = $this->apiAs($testUser, 'POST', route('friends.permit'), [
            'user_id' => $newInvitingUser->id
        ], []);
        $response->assertStatus(Response::HTTP_CONFLICT);
    }

    public function testReject()
    {
        $testUser = User::find(1);

        $newInvitingUser = new User;
        $newInvitingUser->email = str_random(7) . '@new.com';
        $newInvitingUser->username = 'aaaa';
        $newInvitingUser->password = 'secret';
        $newInvitingUser->save();

        $response = $this->apiAs($newInvitingUser, 'POST', route('friends.store'), [
            'email' => $testUser->email
        ], []);
        $response->assertStatus(Response::HTTP_CREATED);

        $response = $this->apiAs($testUser, 'POST', route('friends.reject'), [
            'user_id' => $newInvitingUser->id
        ], []);
        $response->assertStatus(Response::HTTP_OK);
    }

    public function testCantReject()
    {
        $testUser = User::find(1);

        $newInvitingUser = new User;
        $newInvitingUser->email = str_random(8) . '@new.com';
        $newInvitingUser->username = 'aaaa';
        $newInvitingUser->password = 'secret';
        $newInvitingUser->save();

        $response = $this->apiAs($testUser, 'POST', route('friends.reject'), [
            'user_id' => $newInvitingUser->id
        ], []);
        $response->assertStatus(Response::HTTP_CONFLICT);
    }

    public function testRequestUsers()
    {
        $testUser = User::find(1);
        $response = $this->apiAs($testUser, 'GET', route('friends.friend_request_users'), [], []);
        $response->assertStatus(Response::HTTP_OK);
    }
}
