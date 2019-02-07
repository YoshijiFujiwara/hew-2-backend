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
        $testUser = User::find(1);
        $response = $this->apiAs($testUser, 'GET', route('groups.index'), [], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testStore()
    {
        $newGroupName = 'newGroup' . str_random(5);

        $testUser = User::find(1);
        $response = $this->apiAs($testUser, 'POST', route('groups.store'), [
            'name' => $newGroupName
        ], []);

        $response->assertStatus(Response::HTTP_CREATED);
    }

    public function testCantStore()
    {
//        $newGroupName = 'newGroup' . str_random(5);

        $testUser = User::find(1);
        $alreadyGroup = $testUser->managedGroups->random();

        $response = $this->apiAs($testUser, 'POST', route('groups.store'), [
            'name' => $alreadyGroup->name
        ], []);

        $response->assertStatus(Response::HTTP_CONFLICT);
    }

    public function testShow()
    {
        $testUser = User::find(1);
        $alreadyGroup = $testUser->managedGroups->random();

        $response = $this->apiAs($testUser, 'GET', route('groups.show', $alreadyGroup), [], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testUpate()
    {
        $newGroupName = 'newGroup' . str_random(8);

        $testUser = User::find(1);
        $alreadyGroup = $testUser->managedGroups->random();
        $response = $this->apiAs($testUser, 'PUT', route('groups.update', $alreadyGroup), [
            'name' => $newGroupName
        ], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testDestory()
    {
        $newGroupName = 'newGroup' . str_random(8);

        $testUser = User::find(1);
        $alreadyGroup = $testUser->managedGroups->random();
        $response = $this->apiAs($testUser, 'DELETE', route('groups.destroy', $alreadyGroup), [], []);

        $response->assertStatus(Response::HTTP_NO_CONTENT);
    }
}
