<?php

namespace Database\Seeders;
use App\Models\Membership;
use App\Models\Trainer;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Trainer::create([
            'name' => 'Jason Statham',
            'email' => 'stathamjason@gmail.com',
            'specialization' => 'Bardagulan',
            'phone' => '555-5555-5555'
        ]);

        Trainer::create([
            'name' => 'Jackie Chan',
            'email' => 'chanjack@gmail.com',
            'specialization' => 'Kung Fumulotan',
            'phone' => '666-6666-66666'
        ]);

        Trainer::create([
            'name' => 'John Cena',
            'email' => 'johncena@gmail.com',
            'specialization' => 'Pro Wrestler',
            'phone' => '777-7777-77777'
        ]);

        Membership::create([
            'membership_type' => 'Beginner',
            'membership_price' => 2000
        ]);

        Membership::create([
            'membership_type' => 'Senior',
            'membership_price' => 1500
        ]);
    }
}
