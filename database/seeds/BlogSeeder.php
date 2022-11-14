<?php

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('blogs')->truncate();
		DB::table('blogs_description')->truncate();
		DB::table('blog_categories')->truncate();
		DB::table('blog_categories_description')->truncate();
		DB::table('blog_to_categories')->truncate();
		
        DB::table('blogs')->insert([
            'id'             => '1',
			'slug'           => 'how-to-plan-a-road-trip-with-kids-and-keep-your-sanity',
			'order'          => '1',
            'is_feature'     => '1',
			'created_by'     => '1',
        ]);

        DB::table('blogs_description')->insert([
            'id'               => '1',
			'blog_id'          => '1',
            'language_id'      => '1',
            'title'     	   => 'How to Plan a Road Trip with Kids (and keep your sanity)',
			'short_title'      => 'How to Plan a Road Trip with Kids (and keep your sanity)',
            'content'          => '<p>How to Plan a Road Trip with Kids (and keep your sanity)</p>',
            'short_content'    => '<p>How to Plan a Road Trip with Kids (and keep your sanity)</p>',
			'meta_title'       => 'How to Plan a Road Trip with Kids (and keep your sanity)',
            'meta_keywords'    => 'How to Plan a Road Trip with Kids (and keep your sanity)',
            'meta_description' => 'How to Plan a Road Trip with Kids (and keep your sanity)',
			'image'            => '/storage/photos/019.jpg',
            'status'           => 'Active',
        ]);
		DB::table('blogs_description')->insert([
			'id'               => '2',
            'blog_id'          => '1',
            'language_id'      => '2',
            'title'     	   => 'How to Plan a Road Trip with Kids (and keep your sanity)',
			'short_title'      => 'How to Plan a Road Trip with Kids (and keep your sanity)',
            'content'          => '<p>How to Plan a Road Trip with Kids (and keep your sanity)</p>',
            'short_content'    => '<p>How to Plan a Road Trip with Kids (and keep your sanity)</p>',
			'meta_title'       => 'How to Plan a Road Trip with Kids (and keep your sanity)',
            'meta_keywords'    => 'How to Plan a Road Trip with Kids (and keep your sanity)',
            'meta_description' => 'How to Plan a Road Trip with Kids (and keep your sanity)',
			'image'            => '/storage/photos/019.jpg',
            'status'           => 'Active',
        ]);
		DB::table('blogs_description')->insert([
            'id'          	   => '3',
			'blog_id'          => '1',
            'language_id'      => '3',
            'title'     	   => 'How to Plan a Road Trip with Kids (and keep your sanity)',
			'short_title'      => 'How to Plan a Road Trip with Kids (and keep your sanity)',
            'content'          => '<p>How to Plan a Road Trip with Kids (and keep your sanity)</p>',
            'short_content'    => '<p>How to Plan a Road Trip with Kids (and keep your sanity)</p>',
			'meta_title'       => 'How to Plan a Road Trip with Kids (and keep your sanity)',
            'meta_keywords'    => 'How to Plan a Road Trip with Kids (and keep your sanity)',
            'meta_description' => 'How to Plan a Road Trip with Kids (and keep your sanity)',
			'image'            => '/storage/photos/019.jpg',
            'status'           => 'Active',
        ]);
		DB::table('blog_categories')->insert([
            'id'            => '1',
			'slug'          => 'travelling',
        ]);
		DB::table('blog_categories')->insert([
            'id'            => '2',
			'slug'          => 'adventure',
        ]);
        DB::table('blog_categories_description')->insert([
            'id'            	   => '1',
			'blog_category_id'     => '1',
            'language_id'          => '1',
            'title'                => 'Travelling',
			'description'          => '<p>Travelling</p>',
            'parent_id'            => '0',
            'status'               => 'Active',
        ]);
		DB::table('blog_categories_description')->insert([
            'id'            	   => '2',
			'blog_category_id'     => '1',
            'language_id'          => '2',
            'title'                => 'De viaje',
			'description'          => '<p>De viaje</p>',
            'parent_id'            => '0',
            'status'               => 'Active',
        ]);
		DB::table('blog_categories_description')->insert([
            'id'            	   => '3',
			'blog_category_id'     => '1',
            'language_id'          => '3',
            'title'                => 'Viajando',
			'description'          => '<p>Viajando</p>',
            'parent_id'            => '0',
            'status'               => 'Active',
        ]);
		DB::table('blog_categories_description')->insert([
            'id'            	   => '4',
			'blog_category_id'     => '2',
            'language_id'          => '1',
            'title'                => 'Adventure',
			'description'          => '<p>Adventure</p>',
            'parent_id'            => '0',
            'status'               => 'Active',
        ]);
		DB::table('blog_categories_description')->insert([
            'id'            	   => '5',
			'blog_category_id'     => '2',
            'language_id'          => '2',
            'title'                => 'Aventuras',
			'description'          => '<p>Aventuras</p>',
            'parent_id'            => '0',
            'status'               => 'Active',
        ]);
		DB::table('blog_categories_description')->insert([
            'id'                   => '6',
			'blog_category_id'     => '2',
            'language_id'          => '3',
            'title'                => 'Aventura',
			'description'          => '<p>Aventura</p>',
            'parent_id'            => '0',
            'status'               => 'Active',
        ]);

        DB::table('blog_to_categories')->insert([
            'id'            			   => '1',
			'blog_description_id'          => '1',
            'category_id'                  => '1',
        ]);
		DB::table('blog_to_categories')->insert([
            'id'            			   => '2',
			'blog_description_id'          => '2',
            'category_id'                  => '1',
        ]);
		DB::table('blog_to_categories')->insert([
            'id'            			   => '3',
			'blog_description_id'          => '3',
            'category_id'                  => '1',
        ]);
    }
}
