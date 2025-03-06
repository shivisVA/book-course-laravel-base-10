<?php

namespace Database\Seeders;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Post::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');


        for($i=0; $i<20; $i++)
        {
            //$title=Str::random(20);
            $title=str()->random(20);

            $c=Category::inRandomOrder()->first();
            Post::create(
                [
                    'title'=>$title,
                    //'slug'=>Str::slug($title),
                    'slug'=>str($title)->slug(),
                    'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
                    'category_id'=>$c->id,
                    'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing ',
                    'posted'=>'yes',
                    
                ]
            );
        }
        //
    
    }
}
