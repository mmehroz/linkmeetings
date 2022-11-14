<?php

use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('pages')->truncate(); // Using truncate function so all info will be cleared when re-seeding.
        DB::table('pages_description')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        //Home Page
        DB::table('pages')->insert([
            'slug'          => 'home',
            'order'         => '0',
            'created_by'    => 1,
            'created_at'    =>  date('Y-m-d H:i:s'),
        ]);

        $template_content =  serialize(
            array(
                'home_top_banner_title'             => 'Integer quis consectetur risus',
                'home_top_banner_description'       =>
'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
posuere cubilia Curae; Praesent rhoncus mollis nibh.',
                'home_top_button_title'             => 'Learn More',
                'home_top_button_url'               => '#',
                'home_top_advertisement_space'      => '<img src="http://localhost/balouch/horse_auction/public/images/adds-space.jpg" alt="Ad">',
                'home_featured_auction_title'       => 'Featured Auctions',
                'home_featured_auction_status'      => 'Show',
                'home_submit_horse_title'           => 'Submit Your Horse',
                'home_submit_horse_description'     =>
'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
posuere cubilia Curae; Praesent rhoncus mollis nibh.',
                'home_submit_horse_button_title'    => 'Learn More',
                'home_submit_horse_button_url'      => '#',
                'home_submit_horse_background'      => 'storage/photos/banner-img.png',
                'home_mid_advertisement_space1'     => '<figure><img src="http://localhost/balouch/horse_auction/public/images/adds-space-alt.jpg" alt="Ad"></figure>',
                'home_mid_advertisement_space2'     => '<figure><img src="http://localhost/balouch/horse_auction/public/images/adds-space-alt.jpg" alt="Ad"></figure>',
                'home_first_box_title'              => 'Finance',
                'home_first_box_description'        => 'Vestibulum ante ipsum primis in faucibus orci luctus.',
                'home_first_box_link_title'         => 'Learn More:',
                'home_first_box_link_url'           => '#',
                'home_first_box_icon'               => 'storage/photos/finance-ico.png',
                'home_second_box_title'             => 'Insurance',
                'home_second_box_description'       => 'Vestibulum ante ipsum primis in faucibus orci luctus.',
                'home_second_box_link_title'        => 'Learn More:',
                'home_second_box_link_url'          => '#',
                'home_second_box_icon'              => 'storage/photos/insurance-ico.png',
                'home_third_box_title'              => 'Shipping',
                'home_third_box_description'        => 'Vestibulum ante ipsum primis in faucibus orci luctus.',
                'home_third_box_link_title'         => 'Learn More:',
                'home_third_box_link_url'           => '#',
                'home_third_box_icon'               => 'storage/photos/shipping-ico.png',
                'home_latest_news_title'            => 'Latest News',
                'home_latest_news_status'           => 'Show',
            )
        );

        DB::table('pages_description')->insert([
            'page_id'           => '1',
            'language_id'       => '1',
            'template'          => 'home',
            'title'             => 'Home Page',
            'short_title'       => 'Home',
            'image'             => 'storage/photos/banner-img.png',
            'status'            => 'Active',
            'template_content'  => $template_content,
            'created_at'        =>  date('Y-m-d H:i:s'),
        ]);
    }
}
