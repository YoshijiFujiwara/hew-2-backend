<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Http\Response;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DefaultSettingTest extends TestCase
{
    public function testIndex()
    {
        $testUser = User::find(7);
        $response = $this->apiAs($testUser, 'GET', route('default_settings.index'), [], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testStore()
    {
        $newDefaultSettingName = str_random(6);

        $testUser = User::find(7);
        $response = $this->apiAs($testUser, 'POST', route('default_settings.store'), [
            'name' => $newDefaultSettingName,
            'timer' => '01:00:00',
            'group_id' => $testUser->managedGroups()->get()->random()->id
        ], []);

        $response->assertStatus(Response::HTTP_CREATED);
    }

//    public function testCantStore()
//    {
//        $testUser = User::find(7);
//        $alreadyDefaultSetting = $testUser->managedDefaultSettings->random();
//
//        $response = $this->apiAs($testUser, 'POST', route('default_settings.store'), [
//            'name' => $alreadyDefaultSetting->name,
//            'timer' => '01:00:00',
//            'group_id' => $testUser->managedGroups()->get()->random()->id
//        ], []);
//
//        $response->assertStatus(Response::HTTP_CONFLICT);
//    }

    public function testShow()
    {
        $testUser = User::find(7);
        $alreadyDefaultSetting = $testUser->managedDefaultSettings->random();

        $response = $this->apiAs($testUser, 'GET', route('default_settings.show', $alreadyDefaultSetting), [], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testUpate()
    {
        $newDefaultSettingName = 'newSettings' . str_random(8);

        $testUser = User::find(7);
        $alreadyDefaultSetting = $testUser->managedDefaultSettings->random();
        $response = $this->apiAs($testUser, 'PUT', route('default_settings.update', $alreadyDefaultSetting), [
            'name' => $newDefaultSettingName,
            'timer' => '01:00:00',
            'group_id' => $testUser->managedGroups()->get()->random()->id
        ], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testDestory()
    {
        $testUser = User::find(7);
        $alreadyDefaultSetting = $testUser->managedDefaultSettings->random();
        $response = $this->apiAs($testUser, 'DELETE', route('default_settings.destroy', $alreadyDefaultSetting), [], []);

        $response->assertStatus(Response::HTTP_NO_CONTENT);
    }
}
