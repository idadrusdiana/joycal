<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->first_name = "honsha";
        $user->last_name = "official";
        $user->name = "honsha";
        $user->email = "honsha@kei-ichiman.com";
        $user->password = bcrypt("honsha2242");
        $user->role = "superadmin";
        $user->email_verified_at = now();
        $user->save();
        

    }
}
