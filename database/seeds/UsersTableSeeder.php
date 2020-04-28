<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            'fname' => 'Hùng Bùi',
            'username' => 'hungbv5',
            'email' => 'hungbv6@yamifood.vn',
            'password' => bcrypt('matkhau@2020')
        ];
        DB::table('users')->insert($data);
    }
}
