<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Channel;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $channel = Channel::create([
            'name' => 'Laravel',

        ]);
        $channel = Channel::create([
            'name' => 'PHP',

        ]);
        $channel = Channel::create([
            'name' => 'Microsoft',

        ]);
    }
}
