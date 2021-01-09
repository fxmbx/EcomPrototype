<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('products')->insert([    
            [
                'name'=>'Skyrun Single Door Anti-rust Fridge BCD-90J',
                'price'=>'$550',
                'category'=>'Electronics',
                'description'=>'SKYRUN BCD-90J  Anti-rust Single Door Fridge
                Anti-rust cabinet: Anti-rust design, suitable for changing climate.
                Safety lock: Availability of lock with key to keep your food safe-stored even when placing outdoor.

                Fast cooling: Refrigerated, ingredients keep fresh；Freezing, ingredients remain good.',
                'gallery'=>'https://ng.jumia.is/cms/external/pet/SK821HA1K0D8ONAFAMZ/7854e9927e2b0a74b19029d6ff3ab958.jpg'
                   ],
            
        ]);
    }
}
