<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Horse;

class HorseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Horse::create([
            'content1' => 'Bobby',
            'content2' => 'Jan',
    
        ]);
    }
}
