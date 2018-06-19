<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => "サンプル投稿1",
                'user_id' => 1,
                'body' => "今日は暑かった."
            ],
            [
                'title' => "サンプル投稿2",
                'user_id' => 1,
                'body' => "今日は寒かった."
            ],
            [
                'title' => "サンプル投稿3",
                'user_id' => 1,
                'body' => "今日はとても暑かった."
            ],
        ]);
    }
}
