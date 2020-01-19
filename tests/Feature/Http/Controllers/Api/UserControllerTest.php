<?php

namespace Tests\Feature\Http\Controllers\Api;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * Api UserController のテスト
 */
class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->setUpTableData();
    }

    private function setUpTableData(): void
    {
        factory(User::class)->create([
            'name' => 'test_user_1',
            'email' => 'test_user_1@example.com',
            'email_verified_at' => '2020-01-07 09:08:09',
            'api_token' => 'sample_token',
            'created_at' => '2020-01-07 09:08:09',
            'updated_at' => '2020-01-07 09:08:09'
        ]);
    }

    /**
     * @test
     */
    public function 正常系_ユーザ情報が取得できる()
    {
        // setup
        $route = 'api/users';
        $method = 'GET';
        $requestHeader = [
            'Content-type' => 'application/json; charset=UTF-8',
            'Authorization' => 'Bearer sample_token',
        ];

        // execute
        $response = $this
            ->withHeaders($requestHeader)
            ->json($method, $route);

        // verify
        $this->assertDatabaseHas('users', [
            'id' => 1,
            'name' => 'test_user_1',
        ]);
        $expectedResponse = [
            ['id' => 1,
            'name' => 'test_user_1',
            'email' => 'test_user_1@example.com',
            'email_verified_at' => '2020-01-07 09:08:09',
            'api_token' => 'sample_token',
            'created_at' => '2020-01-07 09:08:09',
            'updated_at' => '2020-01-07 09:08:09']
        ];
        $response
            ->assertOk()
            ->assertExactJson($expectedResponse);
    }
}
