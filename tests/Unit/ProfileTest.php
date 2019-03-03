<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Http\Response;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProfileTest extends TestCase
{
    public function testUpdate()
    {
        $newEmail = 'new@new.com';
        $newUserName = 'AAAAAAAAAAA';
        $newUniqueId = 'DDDDDDDD';
        $newPassword = 'secret2';

        $oldUser = User::find(8);
        $response = $this->apiAs($oldUser, 'PUT', route('profile.update', [
            'email' => $newEmail,
            'username' => $newUserName,
            'unique_id' => $newUniqueId,
            'password' => $newPassword,
            'unique_id_search_flag' => true,
            'username_search_flag' => true,
        ]), [], []);
        $response->assertStatus(Response::HTTP_OK);

        $udpatedUser = User::find(8);
        $this->assertEquals($newUserName, $udpatedUser->username);
        $this->assertEquals($newUniqueId, $udpatedUser->unique_id);

        $response = $this->withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ])->json('POST', route('auth.login'),
            [
                'email' => $newEmail,
                'password' => $newPassword
            ]);

        $response->assertStatus(Response::HTTP_OK);
    }
}
