<?php

namespace Tests\Unit;

use App\Model\Group;
use App\User;
use Illuminate\Http\Response;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminGroupTest extends TestCase
{
    public function testIndex()
    {
        $testUser = User::find(1);
        $response = $this->apiAs($testUser, 'GET', route('admin.groups.index'), [], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testShow()
    {
        $testUser = User::find(1);
        $alreadyGroup = $testUser->managedGroups->random();

        $response = $this->apiAs($testUser, 'GET', route('admin.groups.show', $alreadyGroup), [], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testUpate()
    {
        $newGroupName = 'newGroup' . str_random(8);

        $testUser = User::find(1);
        $alreadyGroup = $testUser->managedGroups->random();
        $response = $this->apiAs($testUser, 'PUT', route('admin.groups.update', $alreadyGroup), [
            'name' => $newGroupName
        ], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testDestory()
    {
        $newGroupName = 'newGroup' . str_random(5);
        $testUser = User::find(1);
        $testUser->managedGroups()->create([
            'name' => $newGroupName
        ]);
        $newGroup = $testUser->managedGroups->where('name', $newGroupName)->first();
        $response = $this->apiAs($testUser, 'DELETE', route('admin.groups.destroy', $newGroup), [], []);

        $response->assertStatus(Response::HTTP_NO_CONTENT);
    }

    public function testCantDestory()
    {
        $newGroupName = 'newGroup' . str_random(5);
        $newDefaultSettingName = 'newSetting' . str_random(5);
        $testUser = User::find(1);
        $testUser->managedGroups()->create([
            'name' => $newGroupName
        ]);
        $newGroup = $testUser->managedGroups->where('name', $newGroupName)->first();
        $testUser->managedDefaultSettings()->create([
            'name' => $newDefaultSettingName,
            'timer' => '01:00:00',
            'group_id' => $newGroup->id
        ]);

        $response = $this->apiAs($testUser, 'DELETE', route('admin.groups.destroy', $newGroup), [], []);

        $response->assertStatus(Response::HTTP_CONFLICT);
    }
}
