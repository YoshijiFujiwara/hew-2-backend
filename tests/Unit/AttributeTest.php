<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AttributeTest extends TestCase
{
    public function testIndex()
    {
        $testUser = User::find(7);
        $response = $this->apiAs($testUser, 'GET', route('attributes.index'), [], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testShow()
    {
        $testUser = User::find(7);
        $attribute = $testUser->managedAttributes->random();

//        Log::debug(print_r($attribute, true));
        $response = $this->apiAs($testUser, 'GET', route('attributes.show', ['attribute' => $attribute->id]), [], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testStore()
    {
        $testUser = User::find(7);
        $response = $this->apiAs($testUser, 'POST', route('attributes.store'), [
            'name' => 'attributename' . str_random(5)
        ], []);

        $response->assertStatus(Response::HTTP_CREATED);
    }

    public function testCantStore()
    {
        $testUser = User::find(7);
        $sameName =  'attributename' . str_random(5);
        $response = $this->apiAs($testUser, 'POST', route('attributes.store'), [
            'name' => $sameName,
        ], []);

        $response->assertStatus(Response::HTTP_CREATED);

        $response = $this->apiAs($testUser, 'POST', route('attributes.store'), [
            'name' => $sameName,
        ], []);

        $response->assertStatus(Response::HTTP_CONFLICT);
    }

    public function testUpdate()
    {
        $testUser = User::find(7);
        $attribute = $testUser->managedAttributes->random();
        $response = $this->apiAs($testUser, 'PUT', route('attributes.update', $attribute->id), [
            'name' => 'update' . str_random(5),
            'plus_minus' => null,
        ], []);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testDestory()
    {
        $testUser = User::find(7);
        $attribute = $testUser->managedAttributes->random();
        $response = $this->apiAs($testUser, 'DELETE', route('attributes.destroy', $attribute), [], []);

        $response->assertStatus(Response::HTTP_NO_CONTENT);
    }
}
