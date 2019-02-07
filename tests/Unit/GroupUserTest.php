<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Http\Response;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GroupUserTest extends TestCase
{
    public function testIndex()
    {
        $testUser = User::find(1);
        $alreadyGroup = $testUser->managedGroups->random();
        $response = $this->apiAs($testUser, 'GET', route('groups.users.index', [$alreadyGroup]), [], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testStore()
    {
        $testUser = User::find(1);
        $newGroupName = 'newGroup' . str_random(5);

        $testUser->managedGroups()->create([
            'name' => $newGroupName
        ]);
        $newGroup = $testUser->managedGroups->where('name', $newGroupName)->first();

        $response = $this->apiAs($testUser, 'POST', route('groups.users.store', [$newGroup]), [
            'user_id' => $testUser->friends->random()->id
        ], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testShow()
    {
        $testUser = User::find(1);
        $newGroupName = 'newGroup' . str_random(5);

        $testUser->managedGroups()->create([
            'name' => $newGroupName
        ]);
        $newGroup = $testUser->managedGroups->where('name', $newGroupName)->first();

        $testGroupUser = $testUser->friends->random();
        $response = $this->apiAs($testUser, 'POST', route('groups.users.store', [$newGroup]), [
            'user_id' => $testGroupUser->id
        ], []);

        $response->assertStatus(Response::HTTP_OK);

        $response = $this->apiAs($testUser, 'GET', route('groups.users.show', [$newGroup, $testGroupUser]), [], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testDestroy()
    {
        $testUser = User::find(1);
        $newGroupName = 'newGroup' . str_random(5);

        $testUser->managedGroups()->create([
            'name' => $newGroupName
        ]);
        $newGroup = $testUser->managedGroups->where('name', $newGroupName)->first();

        $testGroupUser = $testUser->friends->random();
        $response = $this->apiAs($testUser, 'POST', route('groups.users.store', [$newGroup]), [
            'user_id' => $testGroupUser->id
        ], []);

        $response->assertStatus(Response::HTTP_OK);

        $response = $this->apiAs($testUser, 'GET', route('groups.users.show', [$newGroup, $testGroupUser]), [], []);

        $response->assertStatus(Response::HTTP_OK);

        $response = $this->apiAs($testUser, 'DELETE', route('groups.users.destroy', [$newGroup, $testGroupUser]), [], []);

        $response->assertStatus(Response::HTTP_NO_CONTENT);
    }
}
