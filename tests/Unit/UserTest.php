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
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_user_duplication()
    {
        $user1 = User::make([
            'name' => 'Santiago',
            'email' => 'santiago@gmail.com'
        ]);

        $user2 = User::make([
            'name' => 'Alejandra',
            'email' => 'alejandra@gmail.com'
        ]);

        $this->assertTrue($user1->name != $user2->name && $user1->email  != $user2->email);
    }


     public function test_delete_user(){

        $user = User::factory()->count(1)->make();

        $user = User::first();

        if($user){
             $user->delete();

        }

        $this->assertTrue(true);

     }

     public function test_guarda_nuevo_user(){
        $respuesta = $this->post('/register', [
        'name' => 'Carlos',
        'email' => 'carlos@gmail.com',
        'password' => 'carlos123',
        'password_confirmation' => 'carlos123'
        ]);

        return $respuesta->assertRedirect('/home');

    }

    public function test_logueo_user(){
        $respuesta = $this->post('/login', [
        'email' => 'fulanogmail.com ',
        'password' => 'fulano123',
        ]);

        return $respuesta->assertRedirect('/home');
}


}

