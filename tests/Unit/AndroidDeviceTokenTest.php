<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Http\Response;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AndroidDeviceTokenTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testStoreDeviceToken()
    {
        $testUser = User::find(7);
        $response = $this->apiAs($testUser, 'POST', route('push_notification.store_device_token'), [
            'device_token' => 'newToken' . str_random(20)
        ], []);

        $response->assertStatus(Response::HTTP_CREATED);
    }

    public function testStoreTokenAlready()
    {
        $testUser = User::find(7);
        $newToken = 'newToken' . str_random(20);
        $response = $this->apiAs($testUser, 'POST', route('push_notification.store_device_token'), [
            'device_token' => $newToken
        ], []);

        $response->assertStatus(Response::HTTP_CREATED);

        $response = $this->apiAs($testUser, 'POST', route('push_notification.store_device_token'), [
            'device_token' => $newToken
        ], []);

        $response->assertStatus(Response::HTTP_ALREADY_REPORTED);
    }
}
