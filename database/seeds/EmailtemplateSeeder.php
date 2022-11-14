<?php

use Illuminate\Database\Seeder;

class EmailtemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('email_template')->truncate();
        DB::table('email_template')->insert([
            'id'             				=> '1',
			'slug'        					=> 'account-password-recovery',
			'email_template_title'         	=> "Account Password Recovery From Lang::get('general.site_name')",
            'email_template_content'     	=> "<p>Hello,</p>
												<p>Please click on the button to reset your password:</p>
												<p>Best regards,</p>
												<p>@lang('general.site_name') Team</p>",
            'email_template_order'      	=> '1',
        ]);
        DB::table('email_template')->insert([
            'id'             				=> '2',
			'slug'        					=> 'sign-up-to',
			'email_template_title'         	=> "$"."request->first_name Sign Up To  Lang::get('general.site_name')",
            'email_template_content'     	=> "<p>Hello Admin,</p>
												<p>First Name: {!! $"."request->first_name !!}</p>
												<p>Last Name: {!! $"."request->last_name !!}</p>
												<p>Subject: {!! $"."request->subject !!}</p>
												<p>Best regards,</p>
												<p>@lang('general.site_name') Team</p>",
            'email_template_order'      	=> '2',
        ]);
        DB::table('email_template')->insert([
            'id'             				=> '3',
			'slug'        					=> 'successfully-register-as-meeting-planner',
			'email_template_title'         	=> "$"."request->first_name Successfully Register as Meeting Planner At Lang::get('general.site_name')",
            'email_template_content'     	=> "<p>Hello {!! $"."request->first_name !!},</p>
											<p>Thanks For Sign Up as Meeting Planner in @lang('general.site_name'):</p>
											<p>Best regards,</p>
											<p>@lang('general.site_name') Team</p>",
            'email_template_order'      	=> '3',
        ]);
        DB::table('email_template')->insert([
            'id'             				=> '4',
			'slug'        					=> 'successfully-list-a-hotel',
			'email_template_title'         	=> "$"."request->company_name Successfully List A Hotel At Lang::get('general.site_name')",
            'email_template_content'     	=> "<p>Hello Admin,</p>
											<p>Below Are The Invoice Details</p>
											<p> Invoice No. {!! $"."getinvoiceandpackage->invoice !!}</p>
											<p> Company Name {!! $"."request->company_name !!}</p>
											<p> Package Name {!! $"."getpackagename->title !!}</p>
											<p> Total Payment {!! $"."getinvoiceandpackage->paid !!}</p>
											<p> From  @lang('general.site_name'):</p>
											<p>Best regards,</p>
											<p>@lang('general.site_name') Team</p>",
            'email_template_order'      	=> '4',
        ]);
        DB::table('email_template')->insert([
            'id'             				=> '5',
			'slug'        					=> 'successfully-list-a-hotel-as-bankdraft',
			'email_template_title'         	=> "$"."request->company_name Successfully List A Hotel At Lang::get('general.site_name')",
            'email_template_content'     	=> "<p>Hello Admin,</p>
											<p>{!! $"."request->company_name !!}  Sign Up As {!! $"."request->payment_type !!}</p>
											<p> Company Name {!! $"."request->company_name !!}</p>
											<p> Package Name {!! $"."getpackagename->title !!}</p>
											<p> Bank Draft Description {!! $"."request->bank_draft_description !!}</p>
											<p> From  @lang('general.site_name'):</p>
											<p>Best regards,</p>
											<p>@lang('general.site_name') Team</p>",
            'email_template_order'      	=> '5',
        ]);
        DB::table('email_template')->insert([
            'id'             				=> '6',
			'slug'        					=> 'company-thanks-to-sign-up',
			'email_template_title'         	=> "$"."request->company_name Thanks To Signup In Lang::get('general.site_name')",
            'email_template_content'     	=> "<p>Hello,</p>
											<p>{!! $"."request->company_name !!} Thanks To Sign Up</p>
											<p> Company Name {!! $"."request->company_name !!}</p>
											<p> From  @lang('general.site_name'):</p>
											<p>Best regards,</p>
											<p>@lang('general.site_name') Team</p>",
            'email_template_order'      	=> '6',
        ]);
        DB::table('email_template')->insert([
            'id'             				=> '7',
			'slug'        					=> 'company-successfully-list-hotel',
			'email_template_title'         	=> "$"."request->company_name Successfully List A Hotel At Lang::get('general.site_name')",
            'email_template_content'     	=> "<p>Hello,</p>
											<p>Below Are The Invoice Details</p>
											<p> Invoice No. {!! $"."getinvoiceandpackage->invoice !!}</p>
											<p> Company Name {!! $"."request->company_name !!}</p>
											<p> Package Name {!! $"."getpackagename->title !!}</p>
											<p> Total Payment {!! $"."getinvoiceandpackage->paid !!}</p>
											<p> From  @lang('general.site_name'):</p>
											<p>Best regards,</p>
											<p>@lang('general.site_name') Team</p>",
            'email_template_order'      	=> '7',
        ]);
        DB::table('email_template')->insert([
            'id'             				=> '8',
			'slug'        					=> 'thanks-to-sign-up',
			'email_template_title'         	=> "$"."request->first_name Thanks To Sign Up At  Lang::get('general.site_name')",
            'email_template_content'     	=> "<p>Hello {!! $"."request->first_name !!},</p>
											<p>Thanks To Sign Up At @lang('general.site_name')</p>
											<p>Best regards,</p>
											<p>@lang('general.site_name') Team</p>",
            'email_template_order'      	=> '8',
        ]);
        DB::table('email_template')->insert([
            'id'             				=> '9',
			'slug'        					=> 'user-account-created',
			'email_template_title'         	=> "Congratulations $"."request->username Your Account Has Been Created Successfully At  Lang::get('general.site_name')",
            'email_template_content'     	=> "<p>Hello {!! $"."request->username !!},</p>
											<p>Below Is Your Account Details For @lang('general.site_name')</p>
											<p>User Email: {!! $"."request->email !!}</p>
											<p>User Password: {!! $"."request->password !!}</p>
											<p>Best regards,</p>
											<p>@lang('general.site_name') Team</p>",
            'email_template_order'      	=> '9',
        ]);
        DB::table('email_template')->insert([
            'id'             				=> '10',
			'slug'        					=> 'user-account-deactivated',
			'email_template_title'         	=> "$"."userdetails->username Account Deactivated | Lang::get('general.site_name')",
            'email_template_content'     	=> "<p>Hello {!! $"."userdetails->username !!},</p>
											<p>Account Has Been Deactivated In @lang('general.site_name')</p>
											<p>Best regards,</p>
											<p>@lang('general.site_name') Team</p>",
            'email_template_order'      	=> '10',
        ]);
        DB::table('email_template')->insert([
            'id'             				=> '11',
			'slug'        					=> 'user-account-activated',
			'email_template_title'         	=> "Congratulations $"."userdetails->username Your Account Has Been Activated Successfully At  Lang::get('general.site_name')",
            'email_template_content'     	=> "<p>Hello {!! $"."userdetails->username !!},</p>
											<p>Below Is Your Account Details For @lang('general.site_name')</p>
											<p>User Email: {!! $"."userdetails->email !!}</p>
											<p>Best regards,</p>
											<p>@lang('general.site_name') Team</p>",
            'email_template_order'      	=> '11',
        ]);

    }
}
