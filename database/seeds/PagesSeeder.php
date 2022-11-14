<?php

use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('pages')->truncate();
    	DB::table('pages_description')->truncate();

        DB::table('pages')->insert([
            'id'             => '1',
			'slug'        	 => 'home',
			'order'        	 => '1',
            'created_by'     => '1',
        ]);
        DB::table('pages')->insert([
            'id'             => '2',
			'slug'        	 => 'destinations',
			'order'        	 => '2',
            'created_by'     => '1',
        ]);
        DB::table('pages')->insert([
            'id'             => '3',
			'slug'        	 => 'promotions',
			'order'        	 => '3',
            'created_by'     => '1',
        ]);
        DB::table('pages')->insert([
            'id'             => '4',
			'slug'        	 => 'blog',
			'order'        	 => '4',
            'created_by'     => '1',
        ]);
        DB::table('pages')->insert([
            'id'             => '5',
			'slug'        	 => 'contact',
			'order'        	 => '5',
            'created_by'     => '1',
        ]);

        DB::table('pages')->insert([
            'id'             => '6',
			'slug'        	 => 'list-your-hotel',
			'order'        	 => '6',
            'created_by'     => '1',
        ]);
        DB::table('pages')->insert([
            'id'             => '7',
			'slug'        	 => 'list-your-dmc',
			'order'        	 => '7',
            'created_by'     => '1',
        ]);
        DB::table('pages')->insert([
            'id'             => '8',
			'slug'        	 => 'sign-up-as-meeting-planner',
			'order'        	 => '8',
            'created_by'     => '1',
        ]);
        DB::table('pages')->insert([
            'id'             => '9',
			'slug'        	 => 'login',
			'order'        	 => '9',
            'created_by'     => '1',
        ]);
        DB::table('pages')->insert([
            'id'             => '10',
			'slug'        	 => 'sign-up',
			'order'        	 => '10',
            'created_by'     => '1',
        ]);
        DB::table('pages')->insert([
            'id'             => '11',
			'slug'        	 => 'faqs',
			'order'        	 => '11',
            'created_by'     => '1',
        ]);
        DB::table('pages')->insert([
            'id'             => '12',
			'slug'        	 => 'privacy-policy',
			'order'        	 => '12',
            'created_by'     => '1',
        ]);
        DB::table('pages')->insert([
            'id'             => '13',
			'slug'        	 => 'cookie-policy',
			'order'        	 => '13',
            'created_by'     => '1',
        ]);
        DB::table('pages')->insert([
            'id'             => '14',
			'slug'        	 => 'terms-conditions',
			'order'        	 => '14',
            'created_by'     => '1',
        ]);

        DB::table('pages_description')->insert([
            'id'             	=> '1',
			'page_id'        	=> '1',
			'language_id'    	=> '1',
            'template'    	 	=> 'home',
            'title'          	=> 'Home',
			'short_title'    	=> 'Home',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '/',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:7:{s:14:"search_title-1";s:60:"Find incredible Destinations, Request proposals, book events";s:11:"section_1-1";s:9:"Hot Deals";s:11:"section_2-1";s:15:"Featured Places";s:11:"section_3-1";s:19:"Recommended For You";s:11:"section_4-1";s:16:"Top Destinations";s:11:"section_5-1";s:29:"Book Inspiring Meeting Spaces";s:11:"section_6-1";s:26:"Book Inspiring Experiences";}',
        ]);
        DB::table('pages_description')->insert([
            'id'             	=> '2',
			'page_id'        	=> '1',
			'language_id'    	=> '2',
            'template'    	 	=> 'home',
            'title'          	=> 'Home',
			'short_title'    	=> 'Home',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '/',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:7:{s:14:"search_title-1";s:60:"Find incredible Destinations, Request proposals, book events";s:11:"section_1-1";s:9:"Hot Deals";s:11:"section_2-1";s:15:"Featured Places";s:11:"section_3-1";s:19:"Recommended For You";s:11:"section_4-1";s:16:"Top Destinations";s:11:"section_5-1";s:29:"Book Inspiring Meeting Spaces";s:11:"section_6-1";s:26:"Book Inspiring Experiences";}',
        ]);
          DB::table('pages_description')->insert([
            'id'             	=> '3',
			'page_id'        	=> '1',
			'language_id'    	=> '3',
            'template'    	 	=> 'home',
            'title'          	=> 'Home',
			'short_title'    	=> 'Home',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '/',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:7:{s:14:"search_title-1";s:60:"Find incredible Destinations, Request proposals, book events";s:11:"section_1-1";s:9:"Hot Deals";s:11:"section_2-1";s:15:"Featured Places";s:11:"section_3-1";s:19:"Recommended For You";s:11:"section_4-1";s:16:"Top Destinations";s:11:"section_5-1";s:29:"Book Inspiring Meeting Spaces";s:11:"section_6-1";s:26:"Book Inspiring Experiences";}',
        ]);
        DB::table('pages_description')->insert([
            'id'             	=> '4',
			'page_id'        	=> '2',
			'language_id'    	=> '1',
            'template'    	 	=> 'search-results',
            'title'          	=> 'Destinations',
			'short_title'    	=> 'Destinations',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
          DB::table('pages_description')->insert([
            'id'             	=> '5',
			'page_id'        	=> '2',
			'language_id'    	=> '2',
            'template'    	 	=> 'search-results',
            'title'          	=> 'Destinations',
			'short_title'    	=> 'Destinations',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
        DB::table('pages_description')->insert([
            'id'             	=> '6',
			'page_id'        	=> '2',
			'language_id'    	=> '3',
            'template'    	 	=> 'search-results',
            'title'          	=> 'Destinations',
			'short_title'    	=> 'Destinations',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
          DB::table('pages_description')->insert([
            'id'             	=> '7',
			'page_id'        	=> '3',
			'language_id'    	=> '1',
            'template'    	 	=> 'promotions',
            'title'          	=> 'Promotions',
			'short_title'    	=> 'Promotions',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
        DB::table('pages_description')->insert([
            'id'             	=> '8',
			'page_id'        	=> '3',
			'language_id'    	=> '2',
            'template'    	 	=> 'promotions',
            'title'          	=> 'Promotions',
			'short_title'    	=> 'Promotions',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
          DB::table('pages_description')->insert([
            'id'             	=> '9',
			'page_id'        	=> '3',
			'language_id'    	=> '3',
            'template'    	 	=> 'promotions',
            'title'          	=> 'Promotions',
			'short_title'    	=> 'Promotions',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
        DB::table('pages_description')->insert([
            'id'             	=> '10',
			'page_id'        	=> '4',
			'language_id'    	=> '1',
            'template'    	 	=> 'blog',
            'title'          	=> 'Blog',
			'short_title'    	=> 'Blog',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
          DB::table('pages_description')->insert([
            'id'             	=> '11',
			'page_id'        	=> '4',
			'language_id'    	=> '2',
            'template'    	 	=> 'blog',
            'title'          	=> 'Blog',
			'short_title'    	=> 'Blog',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
        DB::table('pages_description')->insert([
            'id'             	=> '12',
			'page_id'        	=> '4',
			'language_id'    	=> '3',
            'template'    	 	=> 'blog',
            'title'          	=> 'Blog',
			'short_title'    	=> 'Blog',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
          DB::table('pages_description')->insert([
            'id'             	=> '13',
			'page_id'        	=> '5',
			'language_id'    	=> '1',
            'template'    	 	=> 'contact',
            'title'          	=> 'Contact',
			'short_title'    	=> 'Get In Touch',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '/',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
        DB::table('pages_description')->insert([
            'id'             	=> '14',
			'page_id'        	=> '5',
			'language_id'    	=> '2',
            'template'    	 	=> 'contact',
            'title'          	=> 'Contact',
			'short_title'    	=> 'Contact',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '/',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
          DB::table('pages_description')->insert([
            'id'             	=> '15',
			'page_id'        	=> '5',
			'language_id'    	=> '3',
            'template'    	 	=> 'contact',
            'title'          	=> 'Contact',
			'short_title'    	=> 'Contact',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '/',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
        DB::table('pages_description')->insert([
            'id'             	=> '16',
			'page_id'        	=> '6',
			'language_id'    	=> '1',
            'template'    	 	=> 'list-your-hotel',
            'title'          	=> 'List Your hotel',
			'short_title'    	=> 'OUR PACKAGES',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '/',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:18:{s:15:"package_title-1";s:4:"PERL";s:11:"sub_title-1";s:14:"Paquete Basico";s:8:"pprice-1";s:4:"5000";s:11:"package_1-1";s:139:"<ul>
<li>Landing Page</li>
<li>1 Postings of deal of the week in destination landing page</li>
<li>1 time email blast a year</li>
</ul>";s:14:"package_link-1";N;s:20:"package_link_title-1";s:11:"Get Started";s:16:"package_title2-1";s:7:"SAPHIRE";s:12:"sub_title2-1";s:18:"Paquete Intermedio";s:9:"pprice2-1";s:4:"8000";s:11:"package_2-1";s:231:"<ul>
<li>Landing Page</li>
<li>1 Postings of deal of the week in destination landing page</li>
<li>1 promo article in the blog</li>
<li>1 time email blast a year</li>
<li>1 postings on main landing page in one year</li>
</ul>";s:15:"package_link2-1";N;s:21:"package_link_title2-1";s:11:"Get Started";s:16:"package_title3-1";s:7:"DIAMOND";s:12:"sub_title3-1";s:15:"Paquete Primium";s:9:"pprice3-1";s:5:"12000";s:11:"package_3-1";s:231:"<ul>
<li>Landing Page</li>
<li>1 Postings of deal of the week in destination landing page</li>
<li>1 promo article in the blog</li>
<li>1 time email blast a year</li>
<li>1 postings on main landing page in one year</li>
</ul>";s:15:"package_link3-1";N;s:21:"package_link_title3-1";s:11:"Get Started";}',
        ]);
          DB::table('pages_description')->insert([
            'id'             	=> '17',
			'page_id'        	=> '6',
			'language_id'    	=> '2',
            'template'    	 	=> 'list-your-hotel',
            'title'          	=> 'List Your hotel',
			'short_title'    	=> 'OUR PACKAGES',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '/',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:18:{s:15:"package_title-1";s:4:"PERL";s:11:"sub_title-1";s:14:"Paquete Basico";s:8:"pprice-1";s:4:"5000";s:11:"package_1-1";s:139:"<ul>
<li>Landing Page</li>
<li>1 Postings of deal of the week in destination landing page</li>
<li>1 time email blast a year</li>
</ul>";s:14:"package_link-1";N;s:20:"package_link_title-1";s:11:"Get Started";s:16:"package_title2-1";s:7:"SAPHIRE";s:12:"sub_title2-1";s:18:"Paquete Intermedio";s:9:"pprice2-1";s:4:"8000";s:11:"package_2-1";s:231:"<ul>
<li>Landing Page</li>
<li>1 Postings of deal of the week in destination landing page</li>
<li>1 promo article in the blog</li>
<li>1 time email blast a year</li>
<li>1 postings on main landing page in one year</li>
</ul>";s:15:"package_link2-1";N;s:21:"package_link_title2-1";s:11:"Get Started";s:16:"package_title3-1";s:7:"DIAMOND";s:12:"sub_title3-1";s:15:"Paquete Primium";s:9:"pprice3-1";s:5:"12000";s:11:"package_3-1";s:231:"<ul>
<li>Landing Page</li>
<li>1 Postings of deal of the week in destination landing page</li>
<li>1 promo article in the blog</li>
<li>1 time email blast a year</li>
<li>1 postings on main landing page in one year</li>
</ul>";s:15:"package_link3-1";N;s:21:"package_link_title3-1";s:11:"Get Started";}',
        ]);
        DB::table('pages_description')->insert([
            'id'             	=> '18',
			'page_id'        	=> '6',
			'language_id'    	=> '3',
            'template'    	 	=> 'list-your-hotel',
            'title'          	=> 'List Your hotel',
			'short_title'    	=> 'OUR PACKAGES',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '/',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:18:{s:15:"package_title-1";s:4:"PERL";s:11:"sub_title-1";s:14:"Paquete Basico";s:8:"pprice-1";s:4:"5000";s:11:"package_1-1";s:139:"<ul>
<li>Landing Page</li>
<li>1 Postings of deal of the week in destination landing page</li>
<li>1 time email blast a year</li>
</ul>";s:14:"package_link-1";N;s:20:"package_link_title-1";s:11:"Get Started";s:16:"package_title2-1";s:7:"SAPHIRE";s:12:"sub_title2-1";s:18:"Paquete Intermedio";s:9:"pprice2-1";s:4:"8000";s:11:"package_2-1";s:231:"<ul>
<li>Landing Page</li>
<li>1 Postings of deal of the week in destination landing page</li>
<li>1 promo article in the blog</li>
<li>1 time email blast a year</li>
<li>1 postings on main landing page in one year</li>
</ul>";s:15:"package_link2-1";N;s:21:"package_link_title2-1";s:11:"Get Started";s:16:"package_title3-1";s:7:"DIAMOND";s:12:"sub_title3-1";s:15:"Paquete Primium";s:9:"pprice3-1";s:5:"12000";s:11:"package_3-1";s:231:"<ul>
<li>Landing Page</li>
<li>1 Postings of deal of the week in destination landing page</li>
<li>1 promo article in the blog</li>
<li>1 time email blast a year</li>
<li>1 postings on main landing page in one year</li>
</ul>";s:15:"package_link3-1";N;s:21:"package_link_title3-1";s:11:"Get Started";}',
        ]);
          DB::table('pages_description')->insert([
            'id'             	=> '19',
			'page_id'        	=> '7',
			'language_id'    	=> '1',
            'template'    	 	=> 'list-your-dmc',
            'title'          	=> 'List Your DMC',
			'short_title'    	=> 'OUR PACKAGES',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '/',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:18:{s:15:"package_title-1";s:4:"PERL";s:11:"sub_title-1";s:14:"Paquete Basico";s:8:"pprice-1";s:4:"5000";s:11:"package_1-1";s:139:"<ul>
<li>Landing Page</li>
<li>1 Postings of deal of the week in destination landing page</li>
<li>1 time email blast a year</li>
</ul>";s:14:"package_link-1";N;s:20:"package_link_title-1";s:11:"Get Started";s:16:"package_title2-1";s:7:"SAPHIRE";s:12:"sub_title2-1";s:18:"Paquete Intermedio";s:9:"pprice2-1";s:4:"8000";s:11:"package_2-1";s:231:"<ul>
<li>Landing Page</li>
<li>1 Postings of deal of the week in destination landing page</li>
<li>1 promo article in the blog</li>
<li>1 time email blast a year</li>
<li>1 postings on main landing page in one year</li>
</ul>";s:15:"package_link2-1";N;s:21:"package_link_title2-1";s:11:"Get Started";s:16:"package_title3-1";s:7:"DIAMOND";s:12:"sub_title3-1";s:15:"Paquete Primium";s:9:"pprice3-1";s:5:"12000";s:11:"package_3-1";s:231:"<ul>
<li>Landing Page</li>
<li>1 Postings of deal of the week in destination landing page</li>
<li>1 promo article in the blog</li>
<li>1 time email blast a year</li>
<li>1 postings on main landing page in one year</li>
</ul>";s:15:"package_link3-1";N;s:21:"package_link_title3-1";s:11:"Get Started";}',
        ]);
        DB::table('pages_description')->insert([
            'id'             	=> '20',
			'page_id'        	=> '7',
			'language_id'    	=> '2',
            'template'    	 	=> 'list-your-dmc',
            'title'          	=> 'List Your DMC',
			'short_title'    	=> 'OUR PACKAGES',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '/',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:18:{s:15:"package_title-1";s:4:"PERL";s:11:"sub_title-1";s:14:"Paquete Basico";s:8:"pprice-1";s:4:"5000";s:11:"package_1-1";s:139:"<ul>
<li>Landing Page</li>
<li>1 Postings of deal of the week in destination landing page</li>
<li>1 time email blast a year</li>
</ul>";s:14:"package_link-1";N;s:20:"package_link_title-1";s:11:"Get Started";s:16:"package_title2-1";s:7:"SAPHIRE";s:12:"sub_title2-1";s:18:"Paquete Intermedio";s:9:"pprice2-1";s:4:"8000";s:11:"package_2-1";s:231:"<ul>
<li>Landing Page</li>
<li>1 Postings of deal of the week in destination landing page</li>
<li>1 promo article in the blog</li>
<li>1 time email blast a year</li>
<li>1 postings on main landing page in one year</li>
</ul>";s:15:"package_link2-1";N;s:21:"package_link_title2-1";s:11:"Get Started";s:16:"package_title3-1";s:7:"DIAMOND";s:12:"sub_title3-1";s:15:"Paquete Primium";s:9:"pprice3-1";s:5:"12000";s:11:"package_3-1";s:231:"<ul>
<li>Landing Page</li>
<li>1 Postings of deal of the week in destination landing page</li>
<li>1 promo article in the blog</li>
<li>1 time email blast a year</li>
<li>1 postings on main landing page in one year</li>
</ul>";s:15:"package_link3-1";N;s:21:"package_link_title3-1";s:11:"Get Started";}',
        ]);
          DB::table('pages_description')->insert([
            'id'             	=> '21',
			'page_id'        	=> '7',
			'language_id'    	=> '3',
            'template'    	 	=> 'list-your-dmc',
            'title'          	=> 'List Your DMC',
			'short_title'    	=> 'OUR PACKAGES',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '/',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:18:{s:15:"package_title-1";s:4:"PERL";s:11:"sub_title-1";s:14:"Paquete Basico";s:8:"pprice-1";s:4:"5000";s:11:"package_1-1";s:139:"<ul>
<li>Landing Page</li>
<li>1 Postings of deal of the week in destination landing page</li>
<li>1 time email blast a year</li>
</ul>";s:14:"package_link-1";N;s:20:"package_link_title-1";s:11:"Get Started";s:16:"package_title2-1";s:7:"SAPHIRE";s:12:"sub_title2-1";s:18:"Paquete Intermedio";s:9:"pprice2-1";s:4:"8000";s:11:"package_2-1";s:231:"<ul>
<li>Landing Page</li>
<li>1 Postings of deal of the week in destination landing page</li>
<li>1 promo article in the blog</li>
<li>1 time email blast a year</li>
<li>1 postings on main landing page in one year</li>
</ul>";s:15:"package_link2-1";N;s:21:"package_link_title2-1";s:11:"Get Started";s:16:"package_title3-1";s:7:"DIAMOND";s:12:"sub_title3-1";s:15:"Paquete Primium";s:9:"pprice3-1";s:5:"12000";s:11:"package_3-1";s:231:"<ul>
<li>Landing Page</li>
<li>1 Postings of deal of the week in destination landing page</li>
<li>1 promo article in the blog</li>
<li>1 time email blast a year</li>
<li>1 postings on main landing page in one year</li>
</ul>";s:15:"package_link3-1";N;s:21:"package_link_title3-1";s:11:"Get Started";}',
        ]);
        DB::table('pages_description')->insert([
            'id'             	=> '22',
			'page_id'        	=> '8',
			'language_id'    	=> '1',
            'template'    	 	=> 'signup-meeting-planner',
            'title'          	=> 'Sign Up as Meeting Planner',
			'short_title'    	=> 'Sign Up as Meeting Planner',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
          DB::table('pages_description')->insert([
            'id'             	=> '23',
			'page_id'        	=> '8',
			'language_id'    	=> '2',
            'template'    	 	=> 'signup-meeting-planner',
            'title'          	=> 'Sign Up as Meeting Planner',
			'short_title'    	=> 'Sign Up as Meeting Planner',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
        DB::table('pages_description')->insert([
            'id'             	=> '24',
			'page_id'        	=> '8',
			'language_id'    	=> '3',
            'template'    	 	=> 'signup-meeting-planner',
            'title'          	=> 'Sign Up as Meeting Planner',
			'short_title'    	=> 'Sign Up as Meeting Planner',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
          DB::table('pages_description')->insert([
            'id'             	=> '25',
			'page_id'        	=> '9',
			'language_id'    	=> '1',
            'template'    	 	=> 'login',
            'title'          	=> 'Login',
			'short_title'    	=> 'Login',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '/',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
        DB::table('pages_description')->insert([
            'id'             	=> '26',
			'page_id'        	=> '9',
			'language_id'    	=> '2',
            'template'    	 	=> 'login',
            'title'          	=> 'Login',
			'short_title'    	=> 'Login',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '/',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
          DB::table('pages_description')->insert([
            'id'             	=> '27',
			'page_id'        	=> '9',
			'language_id'    	=> '3',
            'template'    	 	=> 'login',
            'title'          	=> 'Login',
			'short_title'    	=> 'Login',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '/',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
        DB::table('pages_description')->insert([
            'id'             	=> '28',
			'page_id'        	=> '10',
			'language_id'    	=> '1',
            'template'    	 	=> 'sign-up',
            'title'          	=> 'Sign-up',
			'short_title'    	=> 'Sign-up',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '/',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
          DB::table('pages_description')->insert([
            'id'             	=> '29',
			'page_id'        	=> '10',
			'language_id'    	=> '2',
            'template'    	 	=> 'sign-up',
            'title'          	=> 'Sign-up',
			'short_title'    	=> 'Sign-up',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '/',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
        DB::table('pages_description')->insert([
            'id'             	=> '30',
			'page_id'        	=> '10',
			'language_id'    	=> '3',
            'template'    	 	=> 'sign-up',
            'title'          	=> 'Sign-up',
			'short_title'    	=> 'Sign-up',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '/',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
          DB::table('pages_description')->insert([
            'id'             	=> '31',
			'page_id'        	=> '11',
			'language_id'    	=> '1',
            'template'    	 	=> 'faqs',
            'title'          	=> 'FAQs',
			'short_title'    	=> 'Frequently Asked Questions',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '/',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
        DB::table('pages_description')->insert([
            'id'             	=> '32',
			'page_id'        	=> '11',
			'language_id'    	=> '2',
            'template'    	 	=> 'faqs',
            'title'          	=> 'FAQs',
			'short_title'    	=> 'Frequently Asked Questions',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '/',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
          DB::table('pages_description')->insert([
            'id'             	=> '33',
			'page_id'        	=> '11',
			'language_id'    	=> '3',
            'template'    	 	=> 'faqs',
            'title'          	=> 'FAQs',
			'short_title'    	=> 'Frequently Asked Questions',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '/',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
        DB::table('pages_description')->insert([
            'id'             	=> '34',
			'page_id'        	=> '12',
			'language_id'    	=> '1',
            'template'    	 	=> 'privacy-policy',
            'title'          	=> 'Privacy Policy',
			'short_title'    	=> 'Privacy Policy',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
          DB::table('pages_description')->insert([
            'id'             	=> '35',
			'page_id'        	=> '12',
			'language_id'    	=> '2',
            'template'    	 	=> 'privacy-policy',
            'title'          	=> 'Privacy Policy',
			'short_title'    	=> 'Privacy Policy',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
        DB::table('pages_description')->insert([
            'id'             	=> '36',
			'page_id'        	=> '12',
			'language_id'    	=> '3',
            'template'    	 	=> 'privacy-policy',
            'title'          	=> 'Privacy Policy',
			'short_title'    	=> 'Privacy Policy',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
          DB::table('pages_description')->insert([
            'id'             	=> '37',
			'page_id'        	=> '13',
			'language_id'    	=> '1',
            'template'    	 	=> 'cookie-policy',
            'title'          	=> 'Cookie Policy',
			'short_title'    	=> 'Cookie Policy',
			'content'        	=> '<p>This Cookies Policy explains what Cookies are and how We use them. You should read this policy so You can understand what type of cookies We use, or the information We collect using Cookies and how that information is used.</p>
<p>Cookies do not typically contain any information that personally identifies a user, but personal information that we store about You may be linked to the information stored in and obtained from Cookies. For further information on how We use, store and keep your personal data secure, see our Privacy Policy.</p>
<p>We do not store sensitive personal information, such as mailing addresses, account passwords, etc. in the Cookies We use.</p>
<h1>Interpretation and Definitions</h1>
<h2>Interpretation</h2>
<p>The words of which the initial letter is capitalized have meanings defined under the following conditions.</p>
<p>The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p>
<h2>Definitions</h2>
<p>For the purposes of this Cookies Policy:</p>
<ul>
<li><strong>Company</strong>&nbsp;(referred to as either "the Company", "We", "Us" or "Our" in this Cookies Policy) refers to Link Meetings INC, 100 SE 2nd Street Suite 2000 Miami, FL. 33131.</li>
<li><strong>You</strong>&nbsp;means the individual accessing or using the Website, or a company, or any legal entity on behalf of which such individual is accessing or using the Website, as applicable.</li>
<li><strong>Cookies</strong>&nbsp;means small files that are placed on Your computer, mobile device or any other device by a website, containing details of your browsing history on that website among its many uses.</li>
<li><strong>Website</strong>&nbsp;refers to Link Meetings, accessible from&nbsp;<a href="/link_meetings/public/www.linkmeetings.global" target="_blank" rel="external nofollow noopener">www.linkmeetings.global</a>.</li>
</ul>
<h1>The use of the Cookies</h1>
<h2>Type of Cookies We Use</h2>
<p>Cookies can be "Persistent" or "Session" Cookies. Persistent Cookies remain on your personal computer or mobile device when You go offline, while Session Cookies are deleted as soon as You close your web browser.</p>
<p>We use both session and persistent Cookies for the purposes set out below:</p>
<ul>
<li>
<p><strong>Necessary / Essential Cookies</strong></p>
<p>Type: Session Cookies</p>
<p>Administered by: Us</p>
<p>Purpose: These Cookies are essential to provide You with services available through the Website and to enable You to use some of its features. They help to authenticate users and prevent fraudulent use of user accounts. Without these Cookies, the services that You have asked for cannot be provided, and We only use these Cookies to provide You with those services.</p>
</li>
<li>
<p><strong>Cookies Policy / Notice Acceptance Cookies</strong></p>
<p>Type: Persistent Cookies</p>
<p>Administered by: Us</p>
<p>Purpose: These Cookies identify if users have accepted the use of cookies on the Website.</p>
</li>
<li>
<p><strong>Functionality Cookies</strong></p>
<p>Type: Persistent Cookies</p>
<p>Administered by: Us</p>
<p>Purpose: These Cookies allow us to remember choices You make when You use the Website, such as remembering your login details or language preference. The purpose of these Cookies is to provide You with a more personal experience and to avoid You having to re-enter your preferences every time You use the Website.</p>
</li>
<li>
<p><strong>Tracking and Performance Cookies</strong></p>
<p>Type: Persistent Cookies</p>
<p>Administered by: Third-Parties</p>
<p>Purpose: These Cookies are used to track information about traffic to the Website and how users use the Website. The information gathered via these Cookies may directly or indirectly identify you as an individual visitor. This is because the information collected is typically linked to a pseudonymous identifier associated with the device you use to access the Website. We may also use these Cookies to test new advertisements, pages, features or new functionality of the Website to see how our users react to them.</p>
</li>
<li>
<p><strong>Targeting and Advertising Cookies</strong></p>
<p>Type: Persistent Cookies</p>
<p>Administered by: Third-Parties</p>
<p>Purpose: These Cookies track your browsing habits to enable Us to show advertising which is more likely to be of interest to You. These Cookies use information about your browsing history to group You with other users who have similar interests. Based on that information, and with Our permission, third party advertisers can place Cookies to enable them to show adverts which We think will be relevant to your interests while You are on third party websites.</p>
</li>
<li>
<p><strong>Social Media Cookies</strong></p>
<p>Type: Persistent Cookies</p>
<p>Administered by: Third-Parties</p>
<p>Purpose: In addition to Our own Cookies, We may also use various third parties Cookies to report usage statistics of the Website, deliver advertisements on and through the Website, and so on. These Cookies may be used when You share information using a social media networking websites such as Facebook, Instagram, Twitter or Google+.</p>
</li>
</ul>
<h2>Your Choices Regarding Cookies</h2>
<p>If You prefer to avoid the use of Cookies on the Website, first You must disable the use of Cookies in your browser and then delete the Cookies saved in your browser associated with this website. You may use this option for preventing the use of Cookies at any time.</p>
<p>If You do not accept Our Cookies, You may experience some inconvenience in your use of the Website and some features may not function properly.</p>
<p>If You`d like to delete Cookies or instruct your web browser to delete or refuse Cookies, please visit the help pages of your web browser.</p>
<ul>
<li>
<p>For the Chrome web browser, please visit this page from Google:&nbsp;<a href="https://support.google.com/accounts/answer/32050" target="_blank" rel="external nofollow noopener">https://support.google.com/accounts/answer/32050</a></p>
</li>
<li>
<p>For the Internet Explorer web browser, please visit this page from Microsoft:&nbsp;<a href="http://support.microsoft.com/kb/278835" target="_blank" rel="external nofollow noopener">http://support.microsoft.com/kb/278835</a></p>
</li>
<li>
<p>For the Firefox web browser, please visit this page from Mozilla:&nbsp;<a href="https://support.mozilla.org/en-US/kb/delete-cookies-remove-info-websites-stored" target="_blank" rel="external nofollow noopener">https://support.mozilla.org/en-US/kb/delete-cookies-remove-info-websites-stored</a></p>
</li>
<li>
<p>For the Safari web browser, please visit this page from Apple:&nbsp;<a href="https://support.apple.com/guide/safari/manage-cookies-and-website-data-sfri11471/mac" target="_blank" rel="external nofollow noopener">https://support.apple.com/guide/safari/manage-cookies-and-website-data-sfri11471/mac</a></p>
</li>
</ul>
<p>For any other web browser, please visit your web browser`s official web pages.</p>
<h2>More Information about Cookies</h2>
<p>You can learn more about cookies:&nbsp;<a href="https://www.termsfeed.com/blog/cookies/" target="_blank">All About Cookies</a>.</p>
<h2>Contact Us</h2>
<p>If you have any questions about this Cookies Policy, You can contact us:</p>
<ul>
<li>By email: info@linkmeetings.global</li>
</ul>',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '/',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
        DB::table('pages_description')->insert([
            'id'             	=> '38',
			'page_id'        	=> '13',
			'language_id'    	=> '2',
            'template'    	 	=> 'cookie-policy',
            'title'          	=> 'Cookie Policy PORTUGUESE',
			'short_title'    	=> 'Cookie Policy',
			'content'        	=> '<p>This Cookies Policy explains what Cookies are and how We use them. You should read this policy so You can understand what type of cookies We use, or the information We collect using Cookies and how that information is used.</p>
<p>Cookies do not typically contain any information that personally identifies a user, but personal information that we store about You may be linked to the information stored in and obtained from Cookies. For further information on how We use, store and keep your personal data secure, see our Privacy Policy.</p>
<p>We do not store sensitive personal information, such as mailing addresses, account passwords, etc. in the Cookies We use.</p>
<h1>Interpretation and Definitions</h1>
<h2>Interpretation</h2>
<p>The words of which the initial letter is capitalized have meanings defined under the following conditions.</p>
<p>The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p>
<h2>Definitions</h2>
<p>For the purposes of this Cookies Policy:</p>
<ul>
<li><strong>Company</strong>&nbsp;(referred to as either "the Company", "We", "Us" or "Our" in this Cookies Policy) refers to Link Meetings INC, 100 SE 2nd Street Suite 2000 Miami, FL. 33131.</li>
<li><strong>You</strong>&nbsp;means the individual accessing or using the Website, or a company, or any legal entity on behalf of which such individual is accessing or using the Website, as applicable.</li>
<li><strong>Cookies</strong>&nbsp;means small files that are placed on Your computer, mobile device or any other device by a website, containing details of your browsing history on that website among its many uses.</li>
<li><strong>Website</strong>&nbsp;refers to Link Meetings, accessible from&nbsp;<a href="/link_meetings/public/www.linkmeetings.global" target="_blank" rel="external nofollow noopener">www.linkmeetings.global</a>.</li>
</ul>
<h1>The use of the Cookies</h1>
<h2>Type of Cookies We Use</h2>
<p>Cookies can be "Persistent" or "Session" Cookies. Persistent Cookies remain on your personal computer or mobile device when You go offline, while Session Cookies are deleted as soon as You close your web browser.</p>
<p>We use both session and persistent Cookies for the purposes set out below:</p>
<ul>
<li>
<p><strong>Necessary / Essential Cookies</strong></p>
<p>Type: Session Cookies</p>
<p>Administered by: Us</p>
<p>Purpose: These Cookies are essential to provide You with services available through the Website and to enable You to use some of its features. They help to authenticate users and prevent fraudulent use of user accounts. Without these Cookies, the services that You have asked for cannot be provided, and We only use these Cookies to provide You with those services.</p>
</li>
<li>
<p><strong>Cookies Policy / Notice Acceptance Cookies</strong></p>
<p>Type: Persistent Cookies</p>
<p>Administered by: Us</p>
<p>Purpose: These Cookies identify if users have accepted the use of cookies on the Website.</p>
</li>
<li>
<p><strong>Functionality Cookies</strong></p>
<p>Type: Persistent Cookies</p>
<p>Administered by: Us</p>
<p>Purpose: These Cookies allow us to remember choices You make when You use the Website, such as remembering your login details or language preference. The purpose of these Cookies is to provide You with a more personal experience and to avoid You having to re-enter your preferences every time You use the Website.</p>
</li>
<li>
<p><strong>Tracking and Performance Cookies</strong></p>
<p>Type: Persistent Cookies</p>
<p>Administered by: Third-Parties</p>
<p>Purpose: These Cookies are used to track information about traffic to the Website and how users use the Website. The information gathered via these Cookies may directly or indirectly identify you as an individual visitor. This is because the information collected is typically linked to a pseudonymous identifier associated with the device you use to access the Website. We may also use these Cookies to test new advertisements, pages, features or new functionality of the Website to see how our users react to them.</p>
</li>
<li>
<p><strong>Targeting and Advertising Cookies</strong></p>
<p>Type: Persistent Cookies</p>
<p>Administered by: Third-Parties</p>
<p>Purpose: These Cookies track your browsing habits to enable Us to show advertising which is more likely to be of interest to You. These Cookies use information about your browsing history to group You with other users who have similar interests. Based on that information, and with Our permission, third party advertisers can place Cookies to enable them to show adverts which We think will be relevant to your interests while You are on third party websites.</p>
</li>
<li>
<p><strong>Social Media Cookies</strong></p>
<p>Type: Persistent Cookies</p>
<p>Administered by: Third-Parties</p>
<p>Purpose: In addition to Our own Cookies, We may also use various third parties Cookies to report usage statistics of the Website, deliver advertisements on and through the Website, and so on. These Cookies may be used when You share information using a social media networking websites such as Facebook, Instagram, Twitter or Google+.</p>
</li>
</ul>
<h2>Your Choices Regarding Cookies</h2>
<p>If You prefer to avoid the use of Cookies on the Website, first You must disable the use of Cookies in your browser and then delete the Cookies saved in your browser associated with this website. You may use this option for preventing the use of Cookies at any time.</p>
<p>If You do not accept Our Cookies, You may experience some inconvenience in your use of the Website and some features may not function properly.</p>
<p>If You`d like to delete Cookies or instruct your web browser to delete or refuse Cookies, please visit the help pages of your web browser.</p>
<ul>
<li>
<p>For the Chrome web browser, please visit this page from Google:&nbsp;<a href="https://support.google.com/accounts/answer/32050" target="_blank" rel="external nofollow noopener">https://support.google.com/accounts/answer/32050</a></p>
</li>
<li>
<p>For the Internet Explorer web browser, please visit this page from Microsoft:&nbsp;<a href="http://support.microsoft.com/kb/278835" target="_blank" rel="external nofollow noopener">http://support.microsoft.com/kb/278835</a></p>
</li>
<li>
<p>For the Firefox web browser, please visit this page from Mozilla:&nbsp;<a href="https://support.mozilla.org/en-US/kb/delete-cookies-remove-info-websites-stored" target="_blank" rel="external nofollow noopener">https://support.mozilla.org/en-US/kb/delete-cookies-remove-info-websites-stored</a></p>
</li>
<li>
<p>For the Safari web browser, please visit this page from Apple:&nbsp;<a href="https://support.apple.com/guide/safari/manage-cookies-and-website-data-sfri11471/mac" target="_blank" rel="external nofollow noopener">https://support.apple.com/guide/safari/manage-cookies-and-website-data-sfri11471/mac</a></p>
</li>
</ul>
<p>For any other web browser, please visit your web browser`s official web pages.</p>
<h2>More Information about Cookies</h2>
<p>You can learn more about cookies:&nbsp;<a href="https://www.termsfeed.com/blog/cookies/" target="_blank">All About Cookies</a>.</p>
<h2>Contact Us</h2>
<p>If you have any questions about this Cookies Policy, You can contact us:</p>
<ul>
<li>By email: info@linkmeetings.global</li>
</ul>',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '/',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
          DB::table('pages_description')->insert([
            'id'             	=> '39',
			'page_id'        	=> '13',
			'language_id'    	=> '3',
            'template'    	 	=> 'cookie-policy',
            'title'          	=> 'Cookie Policy PORTUGUESE',
			'short_title'    	=> 'Cookie Policy',
			'content'        	=> '<p>This Cookies Policy explains what Cookies are and how We use them. You should read this policy so You can understand what type of cookies We use, or the information We collect using Cookies and how that information is used.</p>
<p>Cookies do not typically contain any information that personally identifies a user, but personal information that we store about You may be linked to the information stored in and obtained from Cookies. For further information on how We use, store and keep your personal data secure, see our Privacy Policy.</p>
<p>We do not store sensitive personal information, such as mailing addresses, account passwords, etc. in the Cookies We use.</p>
<h1>Interpretation and Definitions</h1>
<h2>Interpretation</h2>
<p>The words of which the initial letter is capitalized have meanings defined under the following conditions.</p>
<p>The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p>
<h2>Definitions</h2>
<p>For the purposes of this Cookies Policy:</p>
<ul>
<li><strong>Company</strong>&nbsp;(referred to as either "the Company", "We", "Us" or "Our" in this Cookies Policy) refers to Link Meetings INC, 100 SE 2nd Street Suite 2000 Miami, FL. 33131.</li>
<li><strong>You</strong>&nbsp;means the individual accessing or using the Website, or a company, or any legal entity on behalf of which such individual is accessing or using the Website, as applicable.</li>
<li><strong>Cookies</strong>&nbsp;means small files that are placed on Your computer, mobile device or any other device by a website, containing details of your browsing history on that website among its many uses.</li>
<li><strong>Website</strong>&nbsp;refers to Link Meetings, accessible from&nbsp;<a href="/link_meetings/public/www.linkmeetings.global" target="_blank" rel="external nofollow noopener">www.linkmeetings.global</a>.</li>
</ul>
<h1>The use of the Cookies</h1>
<h2>Type of Cookies We Use</h2>
<p>Cookies can be "Persistent" or "Session" Cookies. Persistent Cookies remain on your personal computer or mobile device when You go offline, while Session Cookies are deleted as soon as You close your web browser.</p>
<p>We use both session and persistent Cookies for the purposes set out below:</p>
<ul>
<li>
<p><strong>Necessary / Essential Cookies</strong></p>
<p>Type: Session Cookies</p>
<p>Administered by: Us</p>
<p>Purpose: These Cookies are essential to provide You with services available through the Website and to enable You to use some of its features. They help to authenticate users and prevent fraudulent use of user accounts. Without these Cookies, the services that You have asked for cannot be provided, and We only use these Cookies to provide You with those services.</p>
</li>
<li>
<p><strong>Cookies Policy / Notice Acceptance Cookies</strong></p>
<p>Type: Persistent Cookies</p>
<p>Administered by: Us</p>
<p>Purpose: These Cookies identify if users have accepted the use of cookies on the Website.</p>
</li>
<li>
<p><strong>Functionality Cookies</strong></p>
<p>Type: Persistent Cookies</p>
<p>Administered by: Us</p>
<p>Purpose: These Cookies allow us to remember choices You make when You use the Website, such as remembering your login details or language preference. The purpose of these Cookies is to provide You with a more personal experience and to avoid You having to re-enter your preferences every time You use the Website.</p>
</li>
<li>
<p><strong>Tracking and Performance Cookies</strong></p>
<p>Type: Persistent Cookies</p>
<p>Administered by: Third-Parties</p>
<p>Purpose: These Cookies are used to track information about traffic to the Website and how users use the Website. The information gathered via these Cookies may directly or indirectly identify you as an individual visitor. This is because the information collected is typically linked to a pseudonymous identifier associated with the device you use to access the Website. We may also use these Cookies to test new advertisements, pages, features or new functionality of the Website to see how our users react to them.</p>
</li>
<li>
<p><strong>Targeting and Advertising Cookies</strong></p>
<p>Type: Persistent Cookies</p>
<p>Administered by: Third-Parties</p>
<p>Purpose: These Cookies track your browsing habits to enable Us to show advertising which is more likely to be of interest to You. These Cookies use information about your browsing history to group You with other users who have similar interests. Based on that information, and with Our permission, third party advertisers can place Cookies to enable them to show adverts which We think will be relevant to your interests while You are on third party websites.</p>
</li>
<li>
<p><strong>Social Media Cookies</strong></p>
<p>Type: Persistent Cookies</p>
<p>Administered by: Third-Parties</p>
<p>Purpose: In addition to Our own Cookies, We may also use various third parties Cookies to report usage statistics of the Website, deliver advertisements on and through the Website, and so on. These Cookies may be used when You share information using a social media networking websites such as Facebook, Instagram, Twitter or Google+.</p>
</li>
</ul>
<h2>Your Choices Regarding Cookies</h2>
<p>If You prefer to avoid the use of Cookies on the Website, first You must disable the use of Cookies in your browser and then delete the Cookies saved in your browser associated with this website. You may use this option for preventing the use of Cookies at any time.</p>
<p>If You do not accept Our Cookies, You may experience some inconvenience in your use of the Website and some features may not function properly.</p>
<p>If You`d like to delete Cookies or instruct your web browser to delete or refuse Cookies, please visit the help pages of your web browser.</p>
<ul>
<li>
<p>For the Chrome web browser, please visit this page from Google:&nbsp;<a href="https://support.google.com/accounts/answer/32050" target="_blank" rel="external nofollow noopener">https://support.google.com/accounts/answer/32050</a></p>
</li>
<li>
<p>For the Internet Explorer web browser, please visit this page from Microsoft:&nbsp;<a href="http://support.microsoft.com/kb/278835" target="_blank" rel="external nofollow noopener">http://support.microsoft.com/kb/278835</a></p>
</li>
<li>
<p>For the Firefox web browser, please visit this page from Mozilla:&nbsp;<a href="https://support.mozilla.org/en-US/kb/delete-cookies-remove-info-websites-stored" target="_blank" rel="external nofollow noopener">https://support.mozilla.org/en-US/kb/delete-cookies-remove-info-websites-stored</a></p>
</li>
<li>
<p>For the Safari web browser, please visit this page from Apple:&nbsp;<a href="https://support.apple.com/guide/safari/manage-cookies-and-website-data-sfri11471/mac" target="_blank" rel="external nofollow noopener">https://support.apple.com/guide/safari/manage-cookies-and-website-data-sfri11471/mac</a></p>
</li>
</ul>
<p>For any other web browser, please visit your web browser`s official web pages.</p>
<h2>More Information about Cookies</h2>
<p>You can learn more about cookies:&nbsp;<a href="https://www.termsfeed.com/blog/cookies/" target="_blank">All About Cookies</a>.</p>
<h2>Contact Us</h2>
<p>If you have any questions about this Cookies Policy, You can contact us:</p>
<ul>
<li>By email: info@linkmeetings.global</li>
</ul>',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '/',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
        DB::table('pages_description')->insert([
            'id'             	=> '40',
			'page_id'        	=> '14',
			'language_id'    	=> '1',
            'template'    	 	=> 'terms-conditions',
            'title'          	=> 'Terms & Conditions',
			'short_title'    	=> 'Terms & Conditions',
			'content'        	=> '<p>These terms and conditions ("Terms", "Agreement") are an agreement between Link Meetings INC ("Link Meetings INC", "us", "we" or "our") and you ("User", "you" or "your"). This Agreement sets forth the general terms and conditions of your use of the&nbsp;<a href="http://www.linkmeetings.global/" target="_blank" rel="nofollow">linkmeetings.global</a>&nbsp;website and any of its products or services (collectively, "Website" or "Services").</p>
<h2>Accounts and membership</h2>
<p>You must be at least 18 years of age to use this Website. By using this Website and by agreeing to this Agreement you warrant and represent that you are at least 18 years of age. If you create an account on the Website, you are responsible for maintaining the security of your account and you are fully responsible for all activities that occur under the account and any other actions taken in connection with it. We may monitor and review new accounts before you may sign in and use our Services. Providing false contact information of any kind may result in the termination of your account. You must immediately notify us of any unauthorized uses of your account or any other breaches of security. We will not be liable for any acts or omissions by you, including any damages of any kind incurred as a result of such acts or omissions. We may suspend, disable, or delete your account (or any part thereof) if we determine that you have violated any provision of this Agreement or that your conduct or content would tend to damage our reputation and goodwill. If we delete your account for the foregoing reasons, you may not re-register for our Services. We may block your email address and Internet protocol address to prevent further registration.</p>
<h2>User content</h2>
<p>We do not own any data, information or material ("Content") that you submit on the Website in the course of using the Service. You shall have sole responsibility for the accuracy, quality, integrity, legality, reliability, appropriateness, and intellectual property ownership or right to use of all submitted Content. We may monitor and review Content on the Website submitted or created using our Services by you. You grant us permission to access, copy, distribute, store, transmit, reformat, display and perform the Content of your user account solely as required for the purpose of providing the Services to you. Without limiting any of those representations or warranties, we have the right, though not the obligation, to, in our own sole discretion, refuse or remove any Content that, in our reasonable opinion, violates any of our policies or is in any way harmful or objectionable. You also grant us the license to use, reproduce, adapt, modify, publish or distribute the Content created by you or stored in your user account for commercial, marketing or any similar purpose.</p>
<h2>Billing and payments</h2>
<p>You shall pay all fees or charges to your account in accordance with the fees, charges, and billing terms in effect at the time a fee or charge is due and payable. If auto-renewal is enabled for the Services you have subscribed for, you will be charged automatically in accordance with the term you selected. If, in our judgment, your purchase constitutes a high-risk transaction, we will require you to provide us with a copy of your valid government-issued photo identification, and possibly a copy of a recent bank statement for the credit or debit card used for the purchase. We reserve the right to change products at any time.</p>
<h2>Accuracy of information</h2>
<p>Occasionally there may be information on the Website that contains typographical errors, inaccuracies or omissions that may relate to pricing, availability, promotions and offers. We reserve the right to correct any errors, inaccuracies or omissions, and to change or update information or cancel orders if any information on the Website or on any related Service is inaccurate at any time without prior notice (including after you have submitted your order). We undertake no obligation to update, amend or clarify information on the Website including, without limitation, pricing information, except as required by law. No specified update or refresh date applied on the Website should be taken to indicate that all information on the Website or on any related Service has been modified or updated.</p>
<h2>Third party services</h2>
<p>If you decide to enable, access or use third party services, be advised that your access and use of such other services are governed solely by the terms and conditions of such other services, and we do not endorse, are not responsible or liable for, and make no representations as to any aspect of such other services, including, without limitation, their content or the manner in which they handle data (including your data) or any interaction between you and the provider of such other services. You irrevocably waive any claim against Link Meetings INC with respect to such other services. Link Meetings INC is not liable for any damage or loss caused or alleged to be caused by or in connection with your enablement, access or use of any such other services, or your reliance on the privacy practices, data security processes or other policies of such other services. You may be required to register for or log into such other services on their respective websites. By enabling any other services, you are expressly permitting Link Meetings INC to disclose your data as necessary to facilitate the use or enablement of such other service.</p>
<h2>Uptime guarantee</h2>
<p>We offer a Service uptime guarantee of 99% of available time per month. The service uptime guarantee does not apply to service interruptions caused by: (1) periodic scheduled maintenance or repairs we may undertake from time to time; (2) interruptions caused by you or your activities; (3) outages that do not affect core Service functionality; (4) causes beyond our control or that are not reasonably foreseeable; and (5) outages related to the reliability of certain programming environments.</p>
<h2>Backups</h2>
<p>We perform regular backups of the Website and Content and will do our best to ensure completeness and accuracy of these backups. In the event of the hardware failure or data loss we will restore backups automatically to minimize the impact and downtime.</p>
<h2>Advertisements</h2>
<p>During use of the Website, you may enter into correspondence with or participate in promotions of advertisers or sponsors showing their goods or services through the Website. Any such activity, and any terms, conditions, warranties or representations associated with such activity, is solely between you and the applicable third party. We shall have no liability, obligation or responsibility for any such correspondence, purchase or promotion between you and any such third party.</p>
<h2>Links to other websites</h2>
<p>Although this Website may link to other websites, we are not, directly or indirectly, implying any approval, association, sponsorship, endorsement, or affiliation with any linked website, unless specifically stated herein. Some of the links on the Website may be "affiliate links". This means if you click on the link and purchase an item, Link Meetings INC will receive an affiliate commission. We are not responsible for examining or evaluating, and we do not warrant the offerings of, any businesses or individuals or the content of their websites. We do not assume any responsibility or liability for the actions, products, services, and content of any other third parties. You should carefully review the legal statements and other conditions of use of any website which you access through a link from this Website. Your linking to any other off-site websites is at your own risk.</p>
<h2>Prohibited uses</h2>
<p>In addition to other terms as set forth in the Agreement, you are prohibited from using the Website or its Content: (a) for any unlawful purpose; (b) to solicit others to perform or participate in any unlawful acts; (c) to violate any international, federal, provincial or state regulations, rules, laws, or local ordinances; (d) to infringe upon or violate our intellectual property rights or the intellectual property rights of others; (e) to harass, abuse, insult, harm, defame, slander, disparage, intimidate, or discriminate based on gender, sexual orientation, religion, ethnicity, race, age, national origin, or disability; (f) to submit false or misleading information; (g) to upload or transmit viruses or any other type of malicious code that will or may be used in any way that will affect the functionality or operation of the Service or of any related website, other websites, or the Internet; (h) to spam, phish, pharm, pretext, spider, crawl, or scrape; (i) for any obscene or immoral purpose; or (j) to interfere with or circumvent the security features of the Service or any related website, other websites, or the Internet. We reserve the right to terminate your use of the Service or any related website for violating any of the prohibited uses.</p>
<h2>Intellectual property rights</h2>
<p>"Intellectual Property Rights" means all present and future rights conferred by statute, common law or equity in or in relation to any copyright and related rights, trademarks, designs, patents, inventions, goodwill and the right to sue for passing off, rights to inventions, rights to use, and all other intellectual property rights, in each case whether registered or unregistered and including all applications and rights to apply for and be granted, rights to claim priority from, such rights and all similar or equivalent rights or forms of protection and any other results of intellectual activity which subsist or will subsist now or in the future in any part of the world. This Agreement does not transfer to you any intellectual property owned by Link Meetings INC or third parties, and all rights, titles, and interests in and to such property will remain (as between the parties) solely with Link Meetings INC. All trademarks, service marks, graphics and logos used in connection with the Website or Services, are trademarks or registered trademarks of Link Meetings INC or Link Meetings INC licensors. Other trademarks, service marks, graphics and logos used in connection with the Website or Services may be the trademarks of other third parties. Your use of the Website and Services grants you no right or license to reproduce or otherwise use any Link Meetings INC or third party trademarks.</p>
<h2>Disclaimer of warranty</h2>
<p>You agree that such Service is provided on an "as is" and "as available" basis and that your use of our Website or Services is solely at your own risk. We expressly disclaim all warranties of any kind, whether express or implied, including but not limited to the implied warranties of merchantability, fitness for a particular purpose and non-infringement. We make no warranty that the Services will meet your requirements, or that the Service will be uninterrupted, timely, secure, or error-free; nor do we make any warranty as to the results that may be obtained from the use of the Service or as to the accuracy or reliability of any information obtained through the Service or that defects in the Service will be corrected. You understand and agree that any material and/or data downloaded or otherwise obtained through the use of Service is done at your own discretion and risk and that you will be solely responsible for any damage or loss of data that results from the download of such material and/or data. We make no warranty regarding any goods or services purchased or obtained through the Service or any transactions entered into through the Service. No advice or information, whether oral or written, obtained by you from us or through the Service shall create any warranty not expressly made herein.</p>
<h2>Limitation of liability</h2>
<p>To the fullest extent permitted by applicable law, in no event will Link Meetings INC, its affiliates, directors, officers, employees, agents, suppliers or licensors be liable to any person for any indirect, incidental, special, punitive, cover or consequential damages (including, without limitation, damages for lost profits, revenue, sales, goodwill, use of content, impact on business, business interruption, loss of anticipated savings, loss of business opportunity) however caused, under any theory of liability, including, without limitation, contract, tort, warranty, breach of statutory duty, negligence or otherwise, even if the liable party has been advised as to the possibility of such damages or could have foreseen such damages. To the maximum extent permitted by applicable law, the aggregate liability of Link Meetings INC and its affiliates, officers, employees, agents, suppliers and licensors relating to the services will be limited to an amount greater of one dollar or any amounts actually paid in cash by you to Link Meetings INC for the prior one month period prior to the first event or occurrence giving rise to such liability. The limitations and exclusions also apply if this remedy does not fully compensate you for any losses or fails of its essential purpose.</p>
<h2>Severability</h2>
<p>All rights and restrictions contained in this Agreement may be exercised and shall be applicable and binding only to the extent that they do not violate any applicable laws and are intended to be limited to the extent necessary so that they will not render this Agreement illegal, invalid or unenforceable. If any provision or portion of any provision of this Agreement shall be held to be illegal, invalid or unenforceable by a court of competent jurisdiction, it is the intention of the parties that the remaining provisions or portions thereof shall constitute their agreement with respect to the subject matter hereof, and all such remaining provisions or portions thereof shall remain in full force and effect.</p>
<h2>Changes and amendments</h2>
<p>We reserve the right to modify this Agreement or its policies relating to the Website or Services at any time, effective upon posting of an updated version of this Agreement on the Website. When we do, we will post a notification on the main page of our Website. Continued use of the Website after any such changes shall constitute your consent to such changes.</p>
<h2>Acceptance of these terms</h2>
<p>You acknowledge that you have read this Agreement and agree to all its terms and conditions. By using the Website or its Services you agree to be bound by this Agreement. If you do not agree to abide by the terms of this Agreement, you are not authorized to use or access the Website and its Services.</p>
<h2>Contacting us</h2>
<p>If you would like to contact us to understand more about this Agreement or wish to contact us concerning any matter relating to it, you may send an email to contact@linkmeetings.global</p>',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '/',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
        DB::table('pages_description')->insert([
            'id'             	=> '41',
			'page_id'        	=> '14',
			'language_id'    	=> '2',
            'template'    	 	=> 'terms-conditions',
            'title'          	=> 'Terms & Conditions',
			'short_title'    	=> 'Terms & Conditions',
			'content'        	=> '<p>These terms and conditions ("Terms", "Agreement") are an agreement between Link Meetings INC ("Link Meetings INC", "us", "we" or "our") and you ("User", "you" or "your"). This Agreement sets forth the general terms and conditions of your use of the&nbsp;<a href="http://www.linkmeetings.global/" target="_blank" rel="nofollow">linkmeetings.global</a>&nbsp;website and any of its products or services (collectively, "Website" or "Services").</p>
<h2>Accounts and membership</h2>
<p>You must be at least 18 years of age to use this Website. By using this Website and by agreeing to this Agreement you warrant and represent that you are at least 18 years of age. If you create an account on the Website, you are responsible for maintaining the security of your account and you are fully responsible for all activities that occur under the account and any other actions taken in connection with it. We may monitor and review new accounts before you may sign in and use our Services. Providing false contact information of any kind may result in the termination of your account. You must immediately notify us of any unauthorized uses of your account or any other breaches of security. We will not be liable for any acts or omissions by you, including any damages of any kind incurred as a result of such acts or omissions. We may suspend, disable, or delete your account (or any part thereof) if we determine that you have violated any provision of this Agreement or that your conduct or content would tend to damage our reputation and goodwill. If we delete your account for the foregoing reasons, you may not re-register for our Services. We may block your email address and Internet protocol address to prevent further registration.</p>
<h2>User content</h2>
<p>We do not own any data, information or material ("Content") that you submit on the Website in the course of using the Service. You shall have sole responsibility for the accuracy, quality, integrity, legality, reliability, appropriateness, and intellectual property ownership or right to use of all submitted Content. We may monitor and review Content on the Website submitted or created using our Services by you. You grant us permission to access, copy, distribute, store, transmit, reformat, display and perform the Content of your user account solely as required for the purpose of providing the Services to you. Without limiting any of those representations or warranties, we have the right, though not the obligation, to, in our own sole discretion, refuse or remove any Content that, in our reasonable opinion, violates any of our policies or is in any way harmful or objectionable. You also grant us the license to use, reproduce, adapt, modify, publish or distribute the Content created by you or stored in your user account for commercial, marketing or any similar purpose.</p>
<h2>Billing and payments</h2>
<p>You shall pay all fees or charges to your account in accordance with the fees, charges, and billing terms in effect at the time a fee or charge is due and payable. If auto-renewal is enabled for the Services you have subscribed for, you will be charged automatically in accordance with the term you selected. If, in our judgment, your purchase constitutes a high-risk transaction, we will require you to provide us with a copy of your valid government-issued photo identification, and possibly a copy of a recent bank statement for the credit or debit card used for the purchase. We reserve the right to change products at any time.</p>
<h2>Accuracy of information</h2>
<p>Occasionally there may be information on the Website that contains typographical errors, inaccuracies or omissions that may relate to pricing, availability, promotions and offers. We reserve the right to correct any errors, inaccuracies or omissions, and to change or update information or cancel orders if any information on the Website or on any related Service is inaccurate at any time without prior notice (including after you have submitted your order). We undertake no obligation to update, amend or clarify information on the Website including, without limitation, pricing information, except as required by law. No specified update or refresh date applied on the Website should be taken to indicate that all information on the Website or on any related Service has been modified or updated.</p>
<h2>Third party services</h2>
<p>If you decide to enable, access or use third party services, be advised that your access and use of such other services are governed solely by the terms and conditions of such other services, and we do not endorse, are not responsible or liable for, and make no representations as to any aspect of such other services, including, without limitation, their content or the manner in which they handle data (including your data) or any interaction between you and the provider of such other services. You irrevocably waive any claim against Link Meetings INC with respect to such other services. Link Meetings INC is not liable for any damage or loss caused or alleged to be caused by or in connection with your enablement, access or use of any such other services, or your reliance on the privacy practices, data security processes or other policies of such other services. You may be required to register for or log into such other services on their respective websites. By enabling any other services, you are expressly permitting Link Meetings INC to disclose your data as necessary to facilitate the use or enablement of such other service.</p>
<h2>Uptime guarantee</h2>
<p>We offer a Service uptime guarantee of 99% of available time per month. The service uptime guarantee does not apply to service interruptions caused by: (1) periodic scheduled maintenance or repairs we may undertake from time to time; (2) interruptions caused by you or your activities; (3) outages that do not affect core Service functionality; (4) causes beyond our control or that are not reasonably foreseeable; and (5) outages related to the reliability of certain programming environments.</p>
<h2>Backups</h2>
<p>We perform regular backups of the Website and Content and will do our best to ensure completeness and accuracy of these backups. In the event of the hardware failure or data loss we will restore backups automatically to minimize the impact and downtime.</p>
<h2>Advertisements</h2>
<p>During use of the Website, you may enter into correspondence with or participate in promotions of advertisers or sponsors showing their goods or services through the Website. Any such activity, and any terms, conditions, warranties or representations associated with such activity, is solely between you and the applicable third party. We shall have no liability, obligation or responsibility for any such correspondence, purchase or promotion between you and any such third party.</p>
<h2>Links to other websites</h2>
<p>Although this Website may link to other websites, we are not, directly or indirectly, implying any approval, association, sponsorship, endorsement, or affiliation with any linked website, unless specifically stated herein. Some of the links on the Website may be "affiliate links". This means if you click on the link and purchase an item, Link Meetings INC will receive an affiliate commission. We are not responsible for examining or evaluating, and we do not warrant the offerings of, any businesses or individuals or the content of their websites. We do not assume any responsibility or liability for the actions, products, services, and content of any other third parties. You should carefully review the legal statements and other conditions of use of any website which you access through a link from this Website. Your linking to any other off-site websites is at your own risk.</p>
<h2>Prohibited uses</h2>
<p>In addition to other terms as set forth in the Agreement, you are prohibited from using the Website or its Content: (a) for any unlawful purpose; (b) to solicit others to perform or participate in any unlawful acts; (c) to violate any international, federal, provincial or state regulations, rules, laws, or local ordinances; (d) to infringe upon or violate our intellectual property rights or the intellectual property rights of others; (e) to harass, abuse, insult, harm, defame, slander, disparage, intimidate, or discriminate based on gender, sexual orientation, religion, ethnicity, race, age, national origin, or disability; (f) to submit false or misleading information; (g) to upload or transmit viruses or any other type of malicious code that will or may be used in any way that will affect the functionality or operation of the Service or of any related website, other websites, or the Internet; (h) to spam, phish, pharm, pretext, spider, crawl, or scrape; (i) for any obscene or immoral purpose; or (j) to interfere with or circumvent the security features of the Service or any related website, other websites, or the Internet. We reserve the right to terminate your use of the Service or any related website for violating any of the prohibited uses.</p>
<h2>Intellectual property rights</h2>
<p>"Intellectual Property Rights" means all present and future rights conferred by statute, common law or equity in or in relation to any copyright and related rights, trademarks, designs, patents, inventions, goodwill and the right to sue for passing off, rights to inventions, rights to use, and all other intellectual property rights, in each case whether registered or unregistered and including all applications and rights to apply for and be granted, rights to claim priority from, such rights and all similar or equivalent rights or forms of protection and any other results of intellectual activity which subsist or will subsist now or in the future in any part of the world. This Agreement does not transfer to you any intellectual property owned by Link Meetings INC or third parties, and all rights, titles, and interests in and to such property will remain (as between the parties) solely with Link Meetings INC. All trademarks, service marks, graphics and logos used in connection with the Website or Services, are trademarks or registered trademarks of Link Meetings INC or Link Meetings INC licensors. Other trademarks, service marks, graphics and logos used in connection with the Website or Services may be the trademarks of other third parties. Your use of the Website and Services grants you no right or license to reproduce or otherwise use any Link Meetings INC or third party trademarks.</p>
<h2>Disclaimer of warranty</h2>
<p>You agree that such Service is provided on an "as is" and "as available" basis and that your use of our Website or Services is solely at your own risk. We expressly disclaim all warranties of any kind, whether express or implied, including but not limited to the implied warranties of merchantability, fitness for a particular purpose and non-infringement. We make no warranty that the Services will meet your requirements, or that the Service will be uninterrupted, timely, secure, or error-free; nor do we make any warranty as to the results that may be obtained from the use of the Service or as to the accuracy or reliability of any information obtained through the Service or that defects in the Service will be corrected. You understand and agree that any material and/or data downloaded or otherwise obtained through the use of Service is done at your own discretion and risk and that you will be solely responsible for any damage or loss of data that results from the download of such material and/or data. We make no warranty regarding any goods or services purchased or obtained through the Service or any transactions entered into through the Service. No advice or information, whether oral or written, obtained by you from us or through the Service shall create any warranty not expressly made herein.</p>
<h2>Limitation of liability</h2>
<p>To the fullest extent permitted by applicable law, in no event will Link Meetings INC, its affiliates, directors, officers, employees, agents, suppliers or licensors be liable to any person for any indirect, incidental, special, punitive, cover or consequential damages (including, without limitation, damages for lost profits, revenue, sales, goodwill, use of content, impact on business, business interruption, loss of anticipated savings, loss of business opportunity) however caused, under any theory of liability, including, without limitation, contract, tort, warranty, breach of statutory duty, negligence or otherwise, even if the liable party has been advised as to the possibility of such damages or could have foreseen such damages. To the maximum extent permitted by applicable law, the aggregate liability of Link Meetings INC and its affiliates, officers, employees, agents, suppliers and licensors relating to the services will be limited to an amount greater of one dollar or any amounts actually paid in cash by you to Link Meetings INC for the prior one month period prior to the first event or occurrence giving rise to such liability. The limitations and exclusions also apply if this remedy does not fully compensate you for any losses or fails of its essential purpose.</p>
<h2>Severability</h2>
<p>All rights and restrictions contained in this Agreement may be exercised and shall be applicable and binding only to the extent that they do not violate any applicable laws and are intended to be limited to the extent necessary so that they will not render this Agreement illegal, invalid or unenforceable. If any provision or portion of any provision of this Agreement shall be held to be illegal, invalid or unenforceable by a court of competent jurisdiction, it is the intention of the parties that the remaining provisions or portions thereof shall constitute their agreement with respect to the subject matter hereof, and all such remaining provisions or portions thereof shall remain in full force and effect.</p>
<h2>Changes and amendments</h2>
<p>We reserve the right to modify this Agreement or its policies relating to the Website or Services at any time, effective upon posting of an updated version of this Agreement on the Website. When we do, we will post a notification on the main page of our Website. Continued use of the Website after any such changes shall constitute your consent to such changes.</p>
<h2>Acceptance of these terms</h2>
<p>You acknowledge that you have read this Agreement and agree to all its terms and conditions. By using the Website or its Services you agree to be bound by this Agreement. If you do not agree to abide by the terms of this Agreement, you are not authorized to use or access the Website and its Services.</p>
<h2>Contacting us</h2>
<p>If you would like to contact us to understand more about this Agreement or wish to contact us concerning any matter relating to it, you may send an email to contact@linkmeetings.global</p>',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '/',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
        DB::table('pages_description')->insert([
            'id'             	=> '42',
			'page_id'        	=> '14',
			'language_id'    	=> '3',
            'template'    	 	=> 'terms-conditions',
            'title'          	=> 'Terms & Conditions',
			'short_title'    	=> 'Terms & Conditions',
			'content'        	=> '<p><strong></strong></p>
<p>These terms and conditions ("Terms", "Agreement") are an agreement between Link Meetings INC ("Link Meetings INC", "us", "we" or "our") and you ("User", "you" or "your"). This Agreement sets forth the general terms and conditions of your use of the&nbsp;<a href="http://www.linkmeetings.global/" target="_blank" rel="nofollow">linkmeetings.global</a>&nbsp;website and any of its products or services (collectively, "Website" or "Services").</p>
<h2>Accounts and membership</h2>
<p>You must be at least 18 years of age to use this Website. By using this Website and by agreeing to this Agreement you warrant and represent that you are at least 18 years of age. If you create an account on the Website, you are responsible for maintaining the security of your account and you are fully responsible for all activities that occur under the account and any other actions taken in connection with it. We may monitor and review new accounts before you may sign in and use our Services. Providing false contact information of any kind may result in the termination of your account. You must immediately notify us of any unauthorized uses of your account or any other breaches of security. We will not be liable for any acts or omissions by you, including any damages of any kind incurred as a result of such acts or omissions. We may suspend, disable, or delete your account (or any part thereof) if we determine that you have violated any provision of this Agreement or that your conduct or content would tend to damage our reputation and goodwill. If we delete your account for the foregoing reasons, you may not re-register for our Services. We may block your email address and Internet protocol address to prevent further registration.</p>
<h2>User content</h2>
<p>We do not own any data, information or material ("Content") that you submit on the Website in the course of using the Service. You shall have sole responsibility for the accuracy, quality, integrity, legality, reliability, appropriateness, and intellectual property ownership or right to use of all submitted Content. We may monitor and review Content on the Website submitted or created using our Services by you. You grant us permission to access, copy, distribute, store, transmit, reformat, display and perform the Content of your user account solely as required for the purpose of providing the Services to you. Without limiting any of those representations or warranties, we have the right, though not the obligation, to, in our own sole discretion, refuse or remove any Content that, in our reasonable opinion, violates any of our policies or is in any way harmful or objectionable. You also grant us the license to use, reproduce, adapt, modify, publish or distribute the Content created by you or stored in your user account for commercial, marketing or any similar purpose.</p>
<h2>Billing and payments</h2>
<p>You shall pay all fees or charges to your account in accordance with the fees, charges, and billing terms in effect at the time a fee or charge is due and payable. If auto-renewal is enabled for the Services you have subscribed for, you will be charged automatically in accordance with the term you selected. If, in our judgment, your purchase constitutes a high-risk transaction, we will require you to provide us with a copy of your valid government-issued photo identification, and possibly a copy of a recent bank statement for the credit or debit card used for the purchase. We reserve the right to change products at any time.</p>
<h2>Accuracy of information</h2>
<p>Occasionally there may be information on the Website that contains typographical errors, inaccuracies or omissions that may relate to pricing, availability, promotions and offers. We reserve the right to correct any errors, inaccuracies or omissions, and to change or update information or cancel orders if any information on the Website or on any related Service is inaccurate at any time without prior notice (including after you have submitted your order). We undertake no obligation to update, amend or clarify information on the Website including, without limitation, pricing information, except as required by law. No specified update or refresh date applied on the Website should be taken to indicate that all information on the Website or on any related Service has been modified or updated.</p>
<h2>Third party services</h2>
<p>If you decide to enable, access or use third party services, be advised that your access and use of such other services are governed solely by the terms and conditions of such other services, and we do not endorse, are not responsible or liable for, and make no representations as to any aspect of such other services, including, without limitation, their content or the manner in which they handle data (including your data) or any interaction between you and the provider of such other services. You irrevocably waive any claim against Link Meetings INC with respect to such other services. Link Meetings INC is not liable for any damage or loss caused or alleged to be caused by or in connection with your enablement, access or use of any such other services, or your reliance on the privacy practices, data security processes or other policies of such other services. You may be required to register for or log into such other services on their respective websites. By enabling any other services, you are expressly permitting Link Meetings INC to disclose your data as necessary to facilitate the use or enablement of such other service.</p>
<h2>Uptime guarantee</h2>
<p>We offer a Service uptime guarantee of 99% of available time per month. The service uptime guarantee does not apply to service interruptions caused by: (1) periodic scheduled maintenance or repairs we may undertake from time to time; (2) interruptions caused by you or your activities; (3) outages that do not affect core Service functionality; (4) causes beyond our control or that are not reasonably foreseeable; and (5) outages related to the reliability of certain programming environments.</p>
<h2>Backups</h2>
<p>We perform regular backups of the Website and Content and will do our best to ensure completeness and accuracy of these backups. In the event of the hardware failure or data loss we will restore backups automatically to minimize the impact and downtime.</p>
<h2>Advertisements</h2>
<p>During use of the Website, you may enter into correspondence with or participate in promotions of advertisers or sponsors showing their goods or services through the Website. Any such activity, and any terms, conditions, warranties or representations associated with such activity, is solely between you and the applicable third party. We shall have no liability, obligation or responsibility for any such correspondence, purchase or promotion between you and any such third party.</p>
<h2>Links to other websites</h2>
<p>Although this Website may link to other websites, we are not, directly or indirectly, implying any approval, association, sponsorship, endorsement, or affiliation with any linked website, unless specifically stated herein. Some of the links on the Website may be "affiliate links". This means if you click on the link and purchase an item, Link Meetings INC will receive an affiliate commission. We are not responsible for examining or evaluating, and we do not warrant the offerings of, any businesses or individuals or the content of their websites. We do not assume any responsibility or liability for the actions, products, services, and content of any other third parties. You should carefully review the legal statements and other conditions of use of any website which you access through a link from this Website. Your linking to any other off-site websites is at your own risk.</p>
<h2>Prohibited uses</h2>
<p>In addition to other terms as set forth in the Agreement, you are prohibited from using the Website or its Content: (a) for any unlawful purpose; (b) to solicit others to perform or participate in any unlawful acts; (c) to violate any international, federal, provincial or state regulations, rules, laws, or local ordinances; (d) to infringe upon or violate our intellectual property rights or the intellectual property rights of others; (e) to harass, abuse, insult, harm, defame, slander, disparage, intimidate, or discriminate based on gender, sexual orientation, religion, ethnicity, race, age, national origin, or disability; (f) to submit false or misleading information; (g) to upload or transmit viruses or any other type of malicious code that will or may be used in any way that will affect the functionality or operation of the Service or of any related website, other websites, or the Internet; (h) to spam, phish, pharm, pretext, spider, crawl, or scrape; (i) for any obscene or immoral purpose; or (j) to interfere with or circumvent the security features of the Service or any related website, other websites, or the Internet. We reserve the right to terminate your use of the Service or any related website for violating any of the prohibited uses.</p>
<h2>Intellectual property rights</h2>
<p>"Intellectual Property Rights" means all present and future rights conferred by statute, common law or equity in or in relation to any copyright and related rights, trademarks, designs, patents, inventions, goodwill and the right to sue for passing off, rights to inventions, rights to use, and all other intellectual property rights, in each case whether registered or unregistered and including all applications and rights to apply for and be granted, rights to claim priority from, such rights and all similar or equivalent rights or forms of protection and any other results of intellectual activity which subsist or will subsist now or in the future in any part of the world. This Agreement does not transfer to you any intellectual property owned by Link Meetings INC or third parties, and all rights, titles, and interests in and to such property will remain (as between the parties) solely with Link Meetings INC. All trademarks, service marks, graphics and logos used in connection with the Website or Services, are trademarks or registered trademarks of Link Meetings INC or Link Meetings INC licensors. Other trademarks, service marks, graphics and logos used in connection with the Website or Services may be the trademarks of other third parties. Your use of the Website and Services grants you no right or license to reproduce or otherwise use any Link Meetings INC or third party trademarks.</p>
<h2>Disclaimer of warranty</h2>
<p>You agree that such Service is provided on an "as is" and "as available" basis and that your use of our Website or Services is solely at your own risk. We expressly disclaim all warranties of any kind, whether express or implied, including but not limited to the implied warranties of merchantability, fitness for a particular purpose and non-infringement. We make no warranty that the Services will meet your requirements, or that the Service will be uninterrupted, timely, secure, or error-free; nor do we make any warranty as to the results that may be obtained from the use of the Service or as to the accuracy or reliability of any information obtained through the Service or that defects in the Service will be corrected. You understand and agree that any material and/or data downloaded or otherwise obtained through the use of Service is done at your own discretion and risk and that you will be solely responsible for any damage or loss of data that results from the download of such material and/or data. We make no warranty regarding any goods or services purchased or obtained through the Service or any transactions entered into through the Service. No advice or information, whether oral or written, obtained by you from us or through the Service shall create any warranty not expressly made herein.</p>
<h2>Limitation of liability</h2>
<p>To the fullest extent permitted by applicable law, in no event will Link Meetings INC, its affiliates, directors, officers, employees, agents, suppliers or licensors be liable to any person for any indirect, incidental, special, punitive, cover or consequential damages (including, without limitation, damages for lost profits, revenue, sales, goodwill, use of content, impact on business, business interruption, loss of anticipated savings, loss of business opportunity) however caused, under any theory of liability, including, without limitation, contract, tort, warranty, breach of statutory duty, negligence or otherwise, even if the liable party has been advised as to the possibility of such damages or could have foreseen such damages. To the maximum extent permitted by applicable law, the aggregate liability of Link Meetings INC and its affiliates, officers, employees, agents, suppliers and licensors relating to the services will be limited to an amount greater of one dollar or any amounts actually paid in cash by you to Link Meetings INC for the prior one month period prior to the first event or occurrence giving rise to such liability. The limitations and exclusions also apply if this remedy does not fully compensate you for any losses or fails of its essential purpose.</p>
<h2>Severability</h2>
<p>All rights and restrictions contained in this Agreement may be exercised and shall be applicable and binding only to the extent that they do not violate any applicable laws and are intended to be limited to the extent necessary so that they will not render this Agreement illegal, invalid or unenforceable. If any provision or portion of any provision of this Agreement shall be held to be illegal, invalid or unenforceable by a court of competent jurisdiction, it is the intention of the parties that the remaining provisions or portions thereof shall constitute their agreement with respect to the subject matter hereof, and all such remaining provisions or portions thereof shall remain in full force and effect.</p>
<h2>Changes and amendments</h2>
<p>We reserve the right to modify this Agreement or its policies relating to the Website or Services at any time, effective upon posting of an updated version of this Agreement on the Website. When we do, we will post a notification on the main page of our Website. Continued use of the Website after any such changes shall constitute your consent to such changes.</p>
<h2>Acceptance of these terms</h2>
<p>You acknowledge that you have read this Agreement and agree to all its terms and conditions. By using the Website or its Services you agree to be bound by this Agreement. If you do not agree to abide by the terms of this Agreement, you are not authorized to use or access the Website and its Services.</p>
<h2>Contacting us</h2>
<p>If you would like to contact us to understand more about this Agreement or wish to contact us concerning any matter relating to it, you may send an email to contact@linkmeetings.global</p>',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
            'image'    			=> '/',
            'status'            => 'Active',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
    }
}
