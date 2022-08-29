<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        $positions = ['developer', 'manager', 'designer', 'qa'];
        DB::table('employees')->insert([
            'name' => Str::random(7),
            'email' => Str::random(5).'@gmail.com',
            'password' => Hash::make('password'),
            'position' => Arr::random($positions),
            'avatars' => json_encode([]),
            'contacts' => json_encode([
                    'phone' => random_int(10000000, 999999999),
                    'skype' => '@'.Str::random(10)
            ]),
            'skills' => json_encode([]),
        ]);
    }
}
