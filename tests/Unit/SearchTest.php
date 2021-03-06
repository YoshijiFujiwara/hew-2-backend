<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Http\Response;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SearchTest extends TestCase
{
    /**
     * search.byusername ユーザーネームで検索し、複数を返す
     */
    public function testSearchByUsername()
    {
        $testUser = User::find(7);

        $response = $this->apiAs($testUser, 'POST', route('search.forward_by_username'), [
            'username' => 'テスト'
        ], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    /**
     * search.byUniqueId ユニークidで検索し、あれば一件返す
     */
    public function testSearchByUniqueId()
    {
        $testUser = User::find(7);

        $response = $this->apiAs($testUser, 'POST', route('search.perfect_by_unique_id'), [
            'unique_id' => 'TESTTEST'
        ], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    /**
     * search.byUniqueId ユニークidで検索し、あれば複数件返す
     */
    public function testForwardSearchByUniqueId()
    {
        $testUser = User::find(7);

        $response = $this->apiAs($testUser, 'POST', route('search.forward_by_unique_id'), [
            'unique_id' => 'T'
        ], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testCanAddFriendUsers()
    {
        $testUser = User::find(7);

        $response = $this->apiAs($testUser, 'GET', route('search.can_add_friend_users'), []);

        $response->assertStatus(Response::HTTP_OK);
    }
}
