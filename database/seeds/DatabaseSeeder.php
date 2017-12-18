<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'JC';
        $user->password = bcrypt('111111');
        $user->email = 'jc@greenroom.com.my';
        $user->save();

        $this->call(RoleSeeder::class);

    }
}
