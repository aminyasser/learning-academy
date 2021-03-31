<?php

use App\Trainer;
use Illuminate\Database\Seeder;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trainer::create([
            'name' => 'tariq',
            'spec' => 'backend development',
            'img' => '1.png'
        ]);
        Trainer::create([
            'name' => 'bahnsy',
            'spec' => 'frontend development',
            'img' => '2.png'
        ]);
        Trainer::create([
            'name' => 'karim',
            'spec' => 'fullstack web development',
            'img' => '3.png'
        ]);
        Trainer::create([
            'name' => 'ragheb',
            'spec' => 'marketer',
            'img' => '4.png'
        ]);
        Trainer::create([
            'name' => 'mahmoud',
            'spec' => 'english',
            'img' => '5.png'
        ]);
    }
}
