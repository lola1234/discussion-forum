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
		$channel1 = ['title' => 'Java', 'slug' => str_slug('JAVA')];
		$channel2 = ['title' => 'PHP', 'slug' => str_slug('PHP')];
		$channel3 = ['title' => 'SQL', 'slug' => str_slug('SQL')];
		$channel4 = ['title' => 'SPARK', 'slug' => str_slug('SPARK')];
		$channel5 = ['title' => 'Javascript', 'slug' => str_slug('Javascript')];
		$channel6 = ['title' => 'Forge', 'slug' => str_slug('Forge')];
		$channel7 = ['title' => 'CSS3', 'slug' => str_slug('CSS3')];
		$channel8 = ['title' => 'HTML', 'slug' => str_slug('HTML')];
		
		Channel::create($channel1);
		Channel::create($channel2);
		Channel::create($channel3);
		Channel::create($channel4);
		Channel::create($channel5);
		Channel::create($channel6);
		Channel::create($channel7);
		Channel::create($channel8);
	
	}
}
