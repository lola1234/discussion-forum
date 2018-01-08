<?php

use Illuminate\Database\Seeder;
use App\Discussion;

class DiscussionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $t1 = 'my very first discussion';
		$t2 = 'my second discussion';
		$t3 = 'my thirdly third discussion';
		$t4 = 'my fourthly fourth discussion';
		
		$d1 = [
			'title' => $t1,
			'content' => 'First, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
			'channel_id' => 1,
			'user_id' => 2,
			'slug' => str_slug($t1)
		];
		
		$d2 = [
			'title' => $t2,
			'content' => 'Second, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
			'channel_id' => 2,
			'user_id' => 1,
			'slug' => str_slug($t2)
		];
		
		$d3 = [
			'title' => $t3,
			'content' => 'Third, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
			'channel_id' => 3,
			'user_id' => 2,
			'slug' => str_slug($t3)
		];
		
		$d4 = [
			'title' => $t4,
			'content' => 'Fourth, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
			'channel_id' => 5,
			'user_id' => 1,
			'slug' => str_slug($t4)
		];
		
		Discussion::create($d1);
		Discussion::create($d2);
		Discussion::create($d3);
		Discussion::create($d4);
    }
}
