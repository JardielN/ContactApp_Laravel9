<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB as DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Company;
use Carbon\Factory;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('companies')->delete();

        /*
        $companies = [];
        $faker = Faker::create();

        foreach(range(1, 10) as $index){
            $companies[] = [
                'name' => $faker->company,
                'address' => $faker->address,
                'website' => $faker->domainName,
                'email' => $faker->email,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('companies')->insert($companies);
        */

        Company::factory()->count(10)->create();
    }
}
