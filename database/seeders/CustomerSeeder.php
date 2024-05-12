<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $faker = Faker::create();
       for ($i=1;$i<=100;$i++){
            $customer = new Customer;
            $customer-> name = $faker->name;
            $customer->email = $faker->email;
            $customer->gender = "M";
            $customer->address = $faker->address;
            $customer->district = $faker->city;
            $customer->country = $faker->country;
            $customer->dob = $faker->date;
            $customer->password = $faker->password;
            $customer->save();
       }
       
    }
}
