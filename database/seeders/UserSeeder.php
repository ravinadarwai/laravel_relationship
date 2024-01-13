<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\{
    User,Contacts
};

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'test',
            'email'=>'a@gmail.com','password'=>bcrypt('password'),
        ]);

        Contacts::create([
            'user_id'=>1,
            'phone_no'=>'9999999999',
            'address'=>'idjcijdkj',
        ]);
    }
}
