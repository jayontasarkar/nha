<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = factory(App\Role::class, 5)->create();

        $roles->each(function ($role) {
            factory(App\User::class, 4)->create(['role_id' => $role->id]);
        });
    }
}
