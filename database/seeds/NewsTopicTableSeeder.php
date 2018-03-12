<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class NewsTopicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 10) as $i) {
            DB::table('news_topic')->insert([
                'news_id' => random_int(DB::table('news')->min('id'), DB::table('news')->max('id')),
                'topic_id' => random_int(DB::table('topics')->min('id'), DB::table('topics')->max('id')),
            ]);
        }
    }
}
