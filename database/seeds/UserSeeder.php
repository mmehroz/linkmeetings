<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modules_list = array(
            //pages
            'admin_pages'                       => true,
            'admin_pages_data'                  => true,
            'admin_page_add'                    => true,
            'admin_page_add_post'               => true,
            'admin_page_update'                 => true,
            'admin_page_update_post'            => true,
            'admin_page_delete'                 => true,

            //menu
            'admin_menus'                       => true,
            'admin_menus_data'                  => true,
            'admin_menu_add'                    => true,
            'admin_menu_add_post'               => true,
            'admin_menu_update'                 => true,
            'admin_menu_update_post'            => true,
            'admin_menu_delete'                 => true,

            //blogs
            'admin_blogs'                       => true,
            'admin_blogs_data'                  => true,
            'admin_blog_add'                    => true,
            'admin_blog_add_post'               => true,
            'admin_blog_update'                 => true,
            'admin_blog_update_post'            => true,
            'admin_blog_delete'                 => true,

            //faq
            'admin_faqcategory'                	=> true,
            'admin_faqcategory_add'            	=> true,
            'admin_faqscategory_data'          	=> true,
            'admin_faqcategory_add_post'       	=> true,
            'admin_faqcategory_update'         	=> true,
            'admin_faqcategory_update_post'    	=> true,
            'admin_faqcategory_delete'         	=> true,
            'admin_faq'                        	=> true,
            'admin_faq_add'                    	=> true,
            'admin_faq_data'                   	=> true,
            'admin_faq_add_post'               	=> true,
            'admin_faq_update'                 	=> true,
            'admin_faq_update_post'            	=> true,
            'admin_faq_delete'                 	=> true,

			//emailtemplate
			'admin_email_list'      	       	=> true,
            'admin_email_data'                 	=> true,
            'admin_email_update'               	=> true,
            'admin_email_update_post'          	=> true,

            //packages
            'admin_packages'                 => true,
            'admin_packages_data'            => true,
            'admin_package_add'              => true,
            'admin_package_add_post'         => true,
            'admin_package_update'           => true,
            'admin_package_update_post'      => true,
            'admin_package_delete'           => true,

            //blogscategory
            'admin_manage_users'               => true,
            'admin_manage_users_list'          => true,
            'admin_add_user'            => true,
            'admin_edit_user'       => true,
            'admin_post_edit_user'         => true,
            'admin_delete_user'    => true,


            //Contacts
            'admin_contacts'               => true,
            'admin_contacts_data'          => true,

            //Subscribers
            'admin_subscribers'               => true,
            'admin_subscribers_data'          => true,

            //Payments
            'admin_payments'               => true,
            'admin_payments_data'          => true,
            'admin_payment_update'          => true,

            //User Managment list
            'admin_blogscategory'               => true,
            'admin_blogscategory_data'          => true,
            'admin_blogcategory_add'            => true,
            'admin_blogcategory_add_post'       => true,
            'admin_blogcategory_update'         => true,
            'admin_blogcategory_update_post'    => true,
            'admin_blogcategory_delete'         => true,

            'admin_ban_user'         => true,


            'admin_dashboard'                   => true,
            'dashboard'                         => true,
            'admin_members'                     => true,
            'admin_disputes'                    => true,
            'admin_form_requests'               => true,
            'admin_listed_items'                => true,
            'admin_orders'                      => true,
            'admin_won_auctions'                => true,
            'admin_shipping_requests'           => true,
            'admin_my_account'                  => true,
            'admin_create_deal'                 => true,
            'admin_buyer_profile'               => true,
            'admin_disputes2'                   => true,
            'admin_disputes_finished2'          => true,
            'admin_listed_items2'               => true,
            'admin_listed_items_auction2'       => true,
            'admin_orders2'                     => true,
            'admin_won_auctions2'               => true,
            'site_settings'                     => true,
            'site_settings_update'              => true,
            'unisharp.lfm.*'                    => true, //set permission for filemanager

            //hotels
            'manage_hotels'                     => true,
            'add_hotel'                         => true,
            'manage_hotels_detail'              => true,
            'add_hotel_view'                    => true,
            'add_hotel_process'                 => true,
            'edit_hotel_view'                   => true,
            'edit_hotel_process'                => true,
            'delete_hotel'                      => true,
            'hotel-gallery'                     => true,
            'delete-hotel-gallery'              => true,
        );

        $hotel_modules_list = array(
            'manage_hotels'                     => true,
            'add_hotel'                         => true,
            'manage_hotels_detail'              => true,
            'add_hotel_view'                    => true,
            'add_hotel_process'                 => true,
            'edit_hotel_view'                   => true,
            'edit_hotel_process'                => true,
            'hotel_dashboard'                   => true,
            'hotel_booking_inquiries'           => true,
            'hotel_booking_proposal_sent'       => true,
            'hotel_pending'                     => true,
            'hotel_confirmed'                   => true,
            'hotel_cancelled'                   => true,
            'hotel_hotel'                       => true,
            'hotel-gallery'                     => true,
            'delete-hotel-gallery'              => true,
        );

        $dmc_modules_list = array(
            'dmc_dashboard'                     => true,
            'add_dmc'                     => true,
            'post_dmc'                     => true,
            'edit_dmc'                     => true,
            'post_edit_dmc'                     => true,
            'account_dmc'                     => true,
            'dmc_dmc'                     => true,
            'get_edit'                     => true,
            'post_edit'                     => true,
            'dmc_delete'                     => true,
        );

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate(); // Using truncate function so all info will be cleared when re-seeding.
        DB::table('roles')->truncate();
        DB::table('role_users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $admin = Sentinel::registerAndActivate(array(
            'email'         => 'admin@admin.com',
            'password'      => "admin0101",
            'first_name'    => 'Super',
            'last_name'     => 'Admin',
            'account_type'  => 'admin',
        ));
        $adminRole = Sentinel::getRoleRepository()->createModel()->create([
            'name' => 'Admin',
            'slug' => 'admin',
            'permissions' => $modules_list,
        ]);
        $admin->roles()->attach($adminRole);


        // hotel users
        $hotel = Sentinel::registerAndActivate(array(
            'email'             => 'hotel@gmail.com',
            'password'          => "admin0101",
            'first_name'        => 'Hotel',
            'last_name'         => 'User',
            'account_type'      => 'hotel',
            //'number_hotels'     => '100',
        ));
        $hotelRole = Sentinel::getRoleRepository()->createModel()->create([
            'name'  => 'Hotel',
            'slug'  => 'hotel',
            'permissions' => $hotel_modules_list,
        ]);
        $hotel->roles()->attach($hotelRole);


        //dmc user
        $dmcRole = Sentinel::getRoleRepository()->createModel()->create([
            'name'  => 'DMC',
            'slug'  => 'dmc',
            'permissions' => $dmc_modules_list,
        ]);
        $dmc = Sentinel::registerAndActivate(array(
            'email'         => 'dmc@gmail.com',
            'password'      => "admin0101",
            'first_name'    => 'DMC',
            'last_name'     => 'User',
            'account_type'  => 'dmc',
            //'number_dmc'    => '100',
        ));
        $dmc->roles()->attach($dmcRole);


        //customer users
        $customerRole = Sentinel::getRoleRepository()->createModel()->create([
            'name'  => 'Customer',
            'slug'  => 'customer',
            'permissions' => '',
        ]);
        $customer = Sentinel::registerAndActivate(array(
            'email'         => 'customer@gmail.com',
            'password'      => "admin0101",
            'first_name'    => 'Customer',
            'last_name'     => 'User',
            'account_type'  => 'customer'
        ));
        $customer->roles()->attach($customerRole);

    }
}
