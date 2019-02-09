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
        $testUser = User::find(1);

        $response = $this->apiAs($testUser, 'POST', route('search.by_username'), [
            'username' => 'te'
        ], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    /**
     * search.byUniqueId ユニークidで検索し、あれば一件返す
     */
    public function testSearchByUniqueId()
    {
        $testUser = User::find(1);

        $response = $this->apiAs($testUser, 'POST', route('search.by_unique_id'), [
            'unique_id' => 'TESTTEST'
        ], []);

        $response->assertStatus(Response::HTTP_OK);
    }
}
