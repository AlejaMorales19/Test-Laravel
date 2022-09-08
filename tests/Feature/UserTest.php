<?php

namespace Tests\Feature;

use App\Models\User;

use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_login_form()
    {
        $response = $this->get('/login');

        $response->assertStatus(500);
    }

    public function test_user_duplication()
    {
        $user1 = User::make([
            'name' => 'Santiago',
            'email' => 'santiago@gmail.com'
        ]);

        $user2 = User::make([
            'name' => 'Jonh',
            'email' => 'jonh@gmail.com'
        ]);

        $this->assertTrue($user1->name != $user2->name);
    }

}
    // public function test_delete_user()
    // {

    //     $user = User::factory()->count(1)->make();

    //     $user = User::first();

    //     if($user) {
    //         $user->delete();

    //     }

    //     $this->assertTrue(true);

    // }



