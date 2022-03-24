<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'roles_id' => 1,
            'branch_id' => 3,
            'name' => 'John Doe',
            'email' => 'staff@staff.com',
            'username' => 'staff',
            'password' => bcrypt('password'),

        ]);

        DB::table('users')->insert([
            'roles_id' => 2,
            'branch_id' => 1,
            'name' => 'Debjit Roy',
            'email' => 'admin@admin.com',
            'username' => 'admin',
            'password' => bcrypt('password'),

        ]);
    }
}
