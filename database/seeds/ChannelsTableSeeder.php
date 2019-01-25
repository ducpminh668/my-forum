<?php

use Illuminate\Database\Seeder;
use App\Channel;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $channel1 = ['title' => 'VueJS'];
        $channel2 = ['title' => 'CSS3'];
        $channel3 = ['title' => 'Javascript'];
        $channel4 = ['title' => 'PHP Testing'];
        $channel5 = ['title' => 'Spark'];
        $channel6 = ['title' => 'Lumen'];
        $channel7 = ['title' => 'Forge'];

        Channel::create($channel1);
        Channel::create($channel2);
        Channel::create($channel3);
        Channel::create($channel4);
        Channel::create($channel5);
        Channel::create($channel6);
        Channel::create($channel7);
    }
}
