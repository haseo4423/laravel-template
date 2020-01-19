<?php

namespace Tests\Feature\Http\Controllers\Web;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * Api UserController のテスト
 */
class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function 正常系_ユーザ一覧画面に遷移できる()
    {
        // setup
        $route = 'user';

        $user = factory(User::class)->create([
            'name' => 'test_user_1',
            'email' => 'test_user_1@example.com',
            'email_verified_at' => '2020-01-07 09:08:09',
            'created_at' => '2020-01-07 09:08:09',
            'updated_at' => '2020-01-07 09:08:09'
        ]);

        // execute
        $response = $this
            ->actingAs($user)
            ->get($route);

        // verify
        $response->assertViewIs('user.home');
    }
}
