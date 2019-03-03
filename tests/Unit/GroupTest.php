<?php

namespace Tests\Unit;

use App\Model\Group;
use App\User;
use Illuminate\Http\Response;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GroupTest extends TestCase
{
    public function testIndex()
    {
        $testUser = User::find(7);
        $response = $this->apiAs($testUser, 'GET', route('groups.index'), [], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testStore()
    {
        $newGroupName = 'newGroup' . str_random(5);

        $testUser = User::find(7);
        $response = $this->apiAs($testUser, 'POST', route('groups.store'), [
            'name' => $newGroupName
        ], []);

        $response->assertStatus(Response::HTTP_CREATED);
    }

    public function testSameNameStore()
    {
//        $newGroupName = 'newGroup' . str_random(5);

        $testUser = User::find(7);
        $alreadyGroup = $testUser->managedGroups->random();

        $response = $this->apiAs($testUser, 'POST', route('groups.store'), [
            'name' => $alreadyGroup->name
        ], []);

        $response->assertStatus(Response::HTTP_CREATED);
    }

    public function testShow()
    {
        $testUser = User::find(7);
        $alreadyGroup = $testUser->managedGroups->random();

        $response = $this->apiAs($testUser, 'GET', route('groups.show', $alreadyGroup), [], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testUpate()
    {
        $newGroupName = 'newGroup' . str_random(8);

        $testUser = User::find(7);
        $alreadyGroup = $testUser->managedGroups->random();
        $response = $this->apiAs($testUser, 'PUT', route('groups.update', $alreadyGroup), [
            'name' => $newGroupName
        ], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testDestory()
    {
        $newGroupName = 'newGroup' . str_random(5);
        $testUser = User::find(7);
        $testUser->managedGroups()->create([
            'name' => $newGroupName
        ]);
        $newGroup = $testUser->managedGroups->where('name', $newGroupName)->first();
        $response = $this->apiAs($testUser, 'DELETE', route('groups.destroy', $newGroup), [], []);

        $response->assertStatus(Response::HTTP_NO_CONTENT);
    }

    public function testCantDestory()
    {
        $newGroupName = 'newGroup' . str_random(5);
        $newDefaultSettingName = 'newSetting' . str_random(5);
        $testUser = User::find(7);
        $testUser->managedGroups()->create([
            'name' => $newGroupName
        ]);
        $newGroup = $testUser->managedGroups->where('name', $newGroupName)->first();
        $testUser->managedDefaultSettings()->create([
            'name' => $newDefaultSettingName,
            'timer' => '01:00:00',
            'group_id' => $newGroup->id
        ]);

        $response = $this->apiAs($testUser, 'DELETE', route('groups.destroy', $newGroup), [], []);

        $response->assertStatus(Response::HTTP_CONFLICT);
    }
}
