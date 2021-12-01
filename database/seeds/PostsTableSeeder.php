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
        \DB::table('posts')->insert([
            [
                'title' => 'パズドラ',
                'link' => 'https://pd.appbank.net',
                'category_id' => 2,
            ],
            [
                'title' => 'マリオ',
                'link' => 'https://game8.jp/mario-3dworld',
                'category_id' => 1,
            ],
        ]);
    }
}
