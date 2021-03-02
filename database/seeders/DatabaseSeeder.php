<?php

namespace Database\Seeders;

use App\Models\Store;
use App\Models\StoreType;
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
        // $user = new User();
        // $user->first_name = "honsha";
        // $user->last_name = "official";
        // $user->name = "honsha";
        // $user->email = "honsha@kei-ichiman.com";
        // $user->password = bcrypt("honsha2242");
        // $user->role = "superadmin";
        // $user->email_verified_at = now();
        // $user->save();
        
        // StoreType::insert([
        //     ['store_type' => 'Ashikaga', 'store_type_en' => 'ashikaga'],
        //     ['store_type' => 'FLat 7', 'store_type_en' => 'flat-7'],
        //     ['store_type' => 'Joycal', 'store_type_en' => 'joycal']
        // ]);

        foreach (range(1, 40) as $store) {
            Store::create(['store_name' => 'Store '.$store, 'store_type_id' => rand(1, 3)]);
        }

    }
}
