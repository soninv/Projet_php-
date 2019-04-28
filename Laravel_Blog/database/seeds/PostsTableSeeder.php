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
        for($i=0;$i<=5;$i++){
            DB::table('posts')->insert([
              'title' => 'Sport Article №'.rand(6,300),
              'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
              'image'=>'https://ec.europa.eu/sport/sites/sport/files/erasmus-plus-sport.jpg',
              'category'=>'sport',
              'user_id'=>rand(1,4),
              'created_at'=>'2018-0'.rand(1,9).'-0'.rand(1,9),
              'updated_at'=>'2018-0'.rand(1,9).'-0'.rand(1,9),
          ]);
        }

        for($i=0;$i<=5;$i++){
            DB::table('posts')->insert([
              'title' => 'Sport Article №'.rand(6,300),
              'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
              'image'=>'https://www.thegreatcourses.com/media/catalog/product/cache/1/plus_image/800x451/0f396e8a55728e79b48334e699243c07/5/5/550.1551362487.jpg',
              'category'=>'economics',
              'user_id'=>rand(1,4),
              'created_at'=>'2018-0'.rand(1,9).'-0'.rand(1,9),
              'updated_at'=>'2018-0'.rand(1,9).'-0'.rand(1,9),
          ]);
        }

        for($i=0;$i<=5;$i++){
            DB::table('posts')->insert([
              'title' => 'Sport Article №'.rand(6,300),
              'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
              'image'=>'https://thenationonlineng.net/wp-content/uploads/2019/01/Politics.jpg',
              'category'=>'politics',
              'user_id'=>rand(1,4),
              'created_at'=>'2018-0'.rand(1,9).'-0'.rand(1,9),
              'updated_at'=>'2018-0'.rand(1,9).'-0'.rand(1,9),
          ]);
        }


    }
}
