<?php

use Illuminate\Database\Seeder;

class SiteSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('site_settings')->truncate();

        DB::table('site_settings')->insert([
            'id'           		  => '1',
			'site_title'       	  => serialize( array('site_title_en' => 'Link Meetings','site_title_es' => 'Link Meetings','site_title_pt' => 'Link Meetings')),
			'site_email'          => 'linkmeeting@gmail.com',
            'site_phone'       	  => '',
            'logo_image'    	            => '/images/logo-f.png',
            'logo_image_inner_pages'    	=> '/images/logo.png',
			'socialmedia_status'  => 'Active',
			'facebook'     		  => '',
			'twitter'             => '',
			'linkedin'       	  => '',
			'youtube'      		  => '',
            'instagram'   		  => '',
            'googleplus'          => '',
			'pinterest'  		  => '',
			'contact_from_email'  => 'contact_from@gmail.com',
			'contact_to_email'    => 'contact_to@gmail.com',
            'company_address'     => '',
            'google_analytics'    => "",
			'designed_by'  		  => '',
			'copyright'     	  => '© '.date('Y').' Link Meetings. All rights reserved.',
            'quick_link'          => serialize( array('quick_link_en' => 'Quick Link','quick_link_es' => 'enlaces rápidos','quick_link_pt' => 'Links Rápidos')),
            'help'                => serialize( array('help_en' => 'Help','help_es' => 'Ayuda','help_pt' => 'Socorro')),
            'partner'             => serialize( array('partner_en' => 'Partner with us','partner_es' => 'Asociarse con nosotras','partner_pt' => 'Seja nosso parceiro')),
            'subcribe_text'       => serialize( array('subcribe_text_en' => 'Subscribe To Our Newsletter','subcribe_text_es' => 'Suscríbete a nuestro boletín','subcribe_text_pt' => '
Assine a nossa newsletter')),
		]);
    }
}
