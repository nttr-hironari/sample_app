<?php

use Illuminate\Database\Seeder;

class ResponsesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('responses')->insert([
            [
                'post_id' => 1,
                'body' => "そうですね."
            ],
            [
                'post_id' => 1,
                'body' => "いいや、今日は寒かったです."
            ],
            [
                'post_id' => 2,
                'body' => "本当にそうですね."
            ],
        ]);
    }
}
