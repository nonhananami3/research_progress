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
            'title'=>'test',
            'user_id'=>1,
            'theme_id'=>1,
            'body'=>1,
            'start_date'=>now(),
            'end_date'=>now(),
            ]);
    }
}
