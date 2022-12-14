<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::factory()->create();
        $admin->roles()->attach(Role::where('name', 'Administrator')->value('id'));

        $editor = User::factory()->create();
        $editor->roles()->attach(Role::where('name', 'Editor')->value('id'));
    }
}
